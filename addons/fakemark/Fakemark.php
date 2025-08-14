<?php

namespace addons\fakemark;

use think\Addons;
use think\Controller;
use think\Request;
use think\View;

class Fakemark extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }
    
    public function ismobile()
    {
        return true;
    }
    
    /**
     * 检测是否为移动端百度蜘蛛或从百度搜索引擎跳转而来
     * @return bool
     */
    private function isAllowedBaiduTraffic()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
        
        // 检查是否从百度搜索引擎跳转而来，是则直接放行
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = strtolower($_SERVER['HTTP_REFERER']);
            if (strpos($referer, 'baidu.com') !== false) {
                // 从百度搜索引擎来的流量，允许访问
                return true;
            }
        }
        
        // 如果不是从百度来的流量，则继续检查是否为移动端百度蜘蛛
        if (strpos($agent, 'baiduspider') !== false) {
            if (strpos($agent, 'mobile') !== false) {
                // 是移动端百度蜘蛛，允许访问
                return true;
            }
        }
        
        // 既不是移动端百度蜘蛛也不是从百度跳转来的流量
        return false;
    }
    
    /**
     * 检测是否为移动端百度蜘蛛
     * @return bool
     */
    private function isMobileBaiduSpider()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
        
        if (strpos($agent, 'baiduspider') !== false && strpos($agent, 'mobile') !== false) {
            // 是移动端百度蜘蛛
            return true;
        }
        
        return false;
    }
    
    /**
     * 检测是否从百度搜索引擎跳转而来
     * @return bool
     */
    private function isFromBaiduSearch()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = strtolower($_SERVER['HTTP_REFERER']);
            if (strpos($referer, 'baidu.com') !== false) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * 检测是否来自搜索引擎
     * @return bool
     */
    private function isFromSearchEngine()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = strtolower($_SERVER['HTTP_REFERER']);
            $searchEngines = [
                'baidu.com',   // 百度搜索
                'so.com',      // 360搜索
                'm.sm.cn',     // 神马搜索
                'sogou.com',   // 搜狗搜索
                'shenma.com'   // 神马搜索别名
            ];
            
            foreach ($searchEngines as $engine) {
                if (strpos($referer, $engine) !== false) {
                    return true;
                }
            }
        }
        
        return false;
    }
    
    /**
     * 检测是否是手机端访问且来自搜索引擎
     * @return bool
     */
    private function isMobileSearchVisitor()
    {
        return $this->isMobileDevice() && $this->isFromSearchEngine();
    }
    
    /**
     * 检测UA是否符合允许的特征
     * @param string $allowedUaList 允许的UA特征，一行一个
     * @return bool
     */
    private function isAllowedUA($allowedUaList)
    {
        $allowedUAs = trim($allowedUaList);
        $allowedUAs = preg_split("/((?<!\\\\|\\r)\\n)|((?<!\\\\)\\r\\n)/", $allowedUAs);
        $allowedUAs = array_unique(array_map("trim", $allowedUAs));
        $userUA = $_SERVER["HTTP_USER_AGENT"] ?? '';
        
        foreach($allowedUAs as $ua){
            if (!empty($ua) && strpos($userUA, $ua) !== false) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * 检测IP前两段是否在允许列表中
     * @param string $allowedIpList 允许的IP前两段，一行一个
     * @return bool
     */
    private function isAllowedIP($allowedIpList)
    {
        $allowedIPs = trim($allowedIpList);
        $allowedIPs = preg_split("/((?<!\\\\|\\r)\\n)|((?<!\\\\)\\r\\n)/", $allowedIPs);
        $allowedIPs = array_unique(array_map("trim", $allowedIPs));
        $ipArr = explode(".", $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1');
        $ipPrefix = $ipArr[0] . "." . $ipArr[1];
        
        return in_array($ipPrefix, $allowedIPs);
    }
    
    /**
     * 检测是否为移动设备
     * @return bool
     */
    private function isMobileDevice()
    {
        return Request::isMobile();
    }
    
    /**
     * 执行跳转到广告链接
     * @param string $url 跳转URL
     */
    private function redirectToAd($url)
    {
        // 确保URL不为空
        if (empty($url)) {
            $url = 'https://baidu.com/';
        }
        
        // 确保URL有协议
        if (strpos($url, 'http') !== 0) {
            $url = 'https://' . $url;
        }
        
        // 执行跳转
        echo '<script>window.location.href="' . $url . '";</script>';
        exit;
    }
    
    /**
     * 显示404页面
     * @param string $content 要显示的内容
     */
    private function show404Page($content)
    {
        header("HTTP/1.1 404 Not Found");
        echo $content;
        exit;
    }

    public function viewFilter(&$request){
        $config = get_addon_config('fakemark');
        if(ENTRANCE == "index"){
            // 控制模式1
            if($config['strict_mode'] == 1) {
                if(!$this->isAllowedBaiduTraffic()) {
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
                return; // 通过检查，继续显示正常页面
            }
            
            // 控制模式2
            if($config['strict_mode2'] == 1) {
                if($this->isMobileBaiduSpider()) {
                    // 移动端百度蜘蛛可访问真实页面
                    return;
                } else if($this->isFromBaiduSearch()) {
                    // 百度搜索来路客户跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式3
            if($config['strict_mode3'] == 1) {
                if($this->isMobileBaiduSpider()) {
                    // 移动端百度蜘蛛可访问真实页面
                    return;
                } else if($this->isFromBaiduSearch()) {
                    if($this->isMobileDevice()) {
                        // 百度来路的手机端访问跳转广告链接
                        $this->redirectToAd($config['redirect_url']);
                    } else {
                        // 百度来路的PC端返回503
                        header('HTTP/1.1 503 Service Unavailable');
                        exit;
                    }
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式4
            if($config['strict_mode4'] == 1) {
                if($this->isAllowedUA($config['allowed_ua'])) {
                    // 指定UA可访问真实页面
                    return;
                } else if($this->isFromSearchEngine()) {
                    // 搜索引擎来路访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式5
            if($config['strict_mode5'] == 1) {
                if($this->isAllowedIP($config['allowed_ips'])) {
                    // 指定IP前两段可访问真实页面
                    return;
                } else if($this->isFromSearchEngine()) {
                    // 搜索引擎来路访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式6
            if($config['strict_mode6'] == 1) {
                if($this->isAllowedUA($config['allowed_ua'])) {
                    // 指定UA可访问真实页面
                    return;
                } else if($this->isMobileSearchVisitor()) {
                    // 搜索引擎来路的手机端访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式7
            if($config['strict_mode7'] == 1) {
                if($this->isAllowedIP($config['allowed_ips'])) {
                    // 指定IP前两段可访问真实页面
                    return;
                } else if($this->isMobileSearchVisitor()) {
                    // 搜索引擎来路的手机端访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回503
                    header('HTTP/1.1 503 Service Unavailable');
                    exit;
                }
            }
            
            // 控制模式8
            if($config['strict_mode8'] == 1) {
                if($this->isAllowedUA($config['allowed_ua'])) {
                    // 指定UA可访问真实页面
                    return;
                } else if($this->isMobileSearchVisitor()) {
                    // 搜索引擎来路的手机端访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回404并显示自定义提示页面
                    $this->show404Page($config['js']);
                }
            }
            
            // 控制模式9
            if($config['strict_mode9'] == 1) {
                if($this->isAllowedIP($config['allowed_ips'])) {
                    // 指定IP前两段可访问真实页面
                    return;
                } else if($this->isMobileSearchVisitor()) {
                    // 搜索引擎来路的手机端访问跳转广告链接
                    $this->redirectToAd($config['redirect_url']);
                } else {
                    // 其他访问者返回404并显示自定义提示页面
                    $this->show404Page($config['js']);
                }
            }
        }
    }
}
