<?php

return array (
  0 => 
  array (
    'name' => 'strict_mode',
    'title' => '控制模式1',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有移动端百度蜘蛛和百度搜索来路的客户可以访问真实页面，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  1 => 
  array (
    'name' => 'strict_mode2',
    'title' => '控制模式2',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有移动端百度蜘蛛可以显示真实页面，百度搜索来路的客户访问则跳转广告链接，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  2 => 
  array (
    'name' => 'strict_mode3',
    'title' => '控制模式3',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有移动端百度蜘蛛可以显示真实页面，百度来路的PC端返回503状态码，百度来路的手机端访问则跳转广告链接',
    'ok' => '',
    'extend' => '',
  ),
  3 => 
  array (
    'name' => 'strict_mode4',
    'title' => '控制模式4',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定UA可以显示真实页面，搜索引擎来路的客户访问跳转广告链接，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  4 => 
  array (
    'name' => 'strict_mode5',
    'title' => '控制模式5',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定IP前两段可以显示真实页面，搜索引擎来路的客户访问跳转广告链接，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  5 => 
  array (
    'name' => 'strict_mode6',
    'title' => '控制模式6',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定UA可以显示真实页面，搜索引擎来路的手机端访客跳转广告链接，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  6 => 
  array (
    'name' => 'strict_mode7',
    'title' => '控制模式7',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定IP前两段可以显示真实页面，搜索引擎来路的手机端访客跳转广告链接，其他访问者将返回503状态码',
    'ok' => '',
    'extend' => '',
  ),
  7 => 
  array (
    'name' => 'strict_mode8',
    'title' => '控制模式8',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '0',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定UA可以显示真实页面，搜索引擎来路的手机端访客跳转广告链接，其他访问者将返回404状态码并显示自定义提示页面',
    'ok' => '',
    'extend' => '',
  ),
  8 => 
  array (
    'name' => 'strict_mode9',
    'title' => '控制模式9',
    'type' => 'radio',
    'content' => 
    array (
      1 => '开启',
      0 => '关闭',
    ),
    'value' => '1',
    'rule' => '',
    'msg' => '',
    'tip' => '开启后只有指定IP前两段可以显示真实页面，搜索引擎来路的手机端访客跳转广告链接，其他访问者将返回404状态码并显示自定义提示页面',
    'ok' => '',
    'extend' => '',
  ),
  9 => 
  array (
    'name' => 'redirect_url',
    'title' => '广告跳转链接',
    'type' => 'string',
    'content' => 
    array (
    ),
    'value' => 'http://www.suprashoes.biz/static/seihdes.html',
    'rule' => 'required',
    'msg' => '',
    'tip' => '百度来路访问者将被跳转到此链接，用于控制模式2、3、4、5、6、7、8和9',
    'ok' => '',
    'extend' => 'style="width: 353px;"',
  ),
  10 => 
  array (
    'name' => 'allowed_ua',
    'title' => '允许访问UA',
    'type' => 'text',
    'content' => 
    array (
    ),
    'value' => 'baiduspider
Baiduspider
360
sogou
bing
soso',
    'rule' => '',
    'msg' => '',
    'tip' => '一行一个UA特征，含有该特征的UA才能访问，用于控制模式4、6、8',
    'ok' => '',
    'extend' => 'style="height: 173px; width: 353px;"',
  ),
  11 => 
  array (
    'name' => 'allowed_ips',
    'title' => '允许访问IP前两段',
    'type' => 'text',
    'content' => 
    array (
    ),
    'value' => '221.209
61.180
180.97
180.101
111.206
206.221
123.181
123.125
220.181
218.30
220.181
61.135
220.181
220.196
220.181
221.208
220.181
220.181
104.233
221.209
113.24
220.181
220.181
218.10
194.233
193.42
185.244
180.149
180.76
180.76
158.247
202.97
149.248
149.28
149.28
144.202
139.180
124.166
123.125
123.125
119.63
124.238
116.179
116.179
111.206
111.202
106.120
118.184
123.126
123.183
111.202
106.38
49.7
58.250
218.30
220.181
36.110
207.46
157.55
40.77
13.66
199.30
65.55
65.5
39.71
154.89
180.153
180.163
66.249
203.208
110.249
111.225
220.243
103.82',
    'rule' => '',
    'msg' => '',
    'tip' => '一行一个IP前两段，如"127.0"，用于控制模式5、7、9',
    'ok' => '',
    'extend' => 'style="height: 173px; width: 353px;"',
  ),
  12 => 
  array (
    'name' => 'js',
    'title' => '自定义提示页面',
    'type' => 'text',
    'content' => 
    array (
    ),
    'value' => '

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网页端维护公告 - 樱花动漫</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f7, #f8f4ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(232, 117, 168, 0.2);
            overflow: hidden;
            position: relative;
        }
        
        .header {
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }
        
        .header h1 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .content {
            padding: 40px;
        }
        
        .announcement {
            background: #fff9fb;
            border-left: 4px solid #ff7eb3;
            padding: 25px;
            border-radius: 0 10px 10px 0;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }
        
        .announcement h2 {
            color: #ff4d94;
            margin-bottom: 15px;
            font-size: 1.6rem;
        }
        
        .announcement p {
            margin-bottom: 15px;
            font-size: 1.1rem;
            color: #555;
        }
        
        .download-section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        
        .qr-container {
            flex: 1;
            min-width: 250px;
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(232, 117, 168, 0.15);
            text-align: center;
            border: 1px solid #ffe5ee;
        }
        
        .qr-container h3 {
            color: #ff4d94;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }
        
        .qr-code {
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
            background: #f8f4ff;
            border: 15px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
        }
        
        .qr-code::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(45deg, transparent 48%, #ff7eb3 50%, transparent 52%),
                linear-gradient(-45deg, transparent 48%, #ff7eb3 50%, transparent 52%);
            background-size: 20px 20px;
            opacity: 0.2;
        }
        
        .qr-code img {
            width: 100%;
            z-index: 1;
            animation: pulse 2s infinite;
        }
        
        .app-info {
            flex: 1;
            min-width: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .app-info h3 {
            color: #ff4d94;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        
        .app-info p {
            margin-bottom: 25px;
            font-size: 1.1rem;
            color: #555;
        }
        
        .download-btn {
            display: inline-block;
            background: linear-gradient(to right, #ff7eb3, #ff758c);
            color: white;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(255, 126, 179, 0.4);
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
            width: fit-content;
        }
        
        .download-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 126, 179, 0.5);
        }
        
        .download-btn i {
            margin-right: 10px;
        }
        
        .footer {
            text-align: center;
            padding: 25px;
            background: #f9f9f9;
            color: #888;
            font-size: 0.95rem;
            border-top: 1px solid #eee;
        }
        
        .sakura {
            position: absolute;
            width: 30px;
            height: 30px;
            background: url(\'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="white" d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z"/></svg>\');
            opacity: 0.7;
            animation: fall 15s linear infinite;
        }
        
        @keyframes fall {
            to {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @media (max-width: 600px) {
            .header {
                padding: 20px 15px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .content {
                padding: 25px 20px;
            }
            
            .download-section {
                flex-direction: column;
                gap: 20px;
            }
            
            .qr-code {
                width: 180px;
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-exclamation-circle"></i> 网页端维护公告</h1>
            <p>感谢您一直以来的支持，我们将提供更优质的服务</p>
            
            <!-- 樱花飘落效果 -->
            <div class="sakura" style="left: 10%; top: 20%; animation-delay: 0s;"></div>
            <div class="sakura" style="left: 20%; top: 5%; animation-delay: -2s;"></div>
            <div class="sakura" style="left: 30%; top: 15%; animation-delay: -5s;"></div>
            <div class="sakura" style="left: 85%; top: 25%; animation-delay: -7s;"></div>
            <div class="sakura" style="left: 75%; top: 10%; animation-delay: -10s;"></div>
        </div>
        
        <div class="content">
            <div class="announcement">
                <h2><i class="fas fa-bullhorn"></i> 亲爱的用户：</h2>
                <p>即日起，我们将维护网页端服务。为了给您提供更优质、更便捷的移动互联网体验，我们鼓励您下载樱花动漫APP。</p>
            </div>
            
            <div class="download-section">
                <div class="qr-container">
                    <h3><i class="fas fa-qrcode"></i> 扫码下载APP</h3>
                    <div class="qr-code">
                        <img src="https://www.pgyer.com/app/qrcode/f498vwWQ" alt="樱花动漫APP二维码">
                    </div>
                    <p>使用手机扫描二维码</p>
                </div>
                
                <div class="app-info">
                    <h3><i class="fas fa-mobile-alt"></i> 果果剧场APP</h3>
                    <p>专为动漫爱好者打造的移动应用，海量正版动漫资源，高清流畅播放，离线下载功能，个性化推荐，第一时间获取更新通知！</p>
                    <a href="https://download.huilinwang.com/e789993a14e30004632309205190c03d.apk?sign=73f3a8c1830fb61cae46670264c1c098&sign2=a0dae03b58db997192b46497a39caa84&t=1750822664&response-content-disposition=attachment%3Bfilename%3D%22%E6%9E%9C%E6%9E%9C%E5%89%A7%E5%9C%BA_1.2.0.apk%22" class="download-btn"><i class="fas fa-download"></i> 点击下载APP</a>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025 樱花动漫  | 感谢您一直以来的支持</p>
        </div>
    </div>

    <script>
        // 创建更多樱花
        document.addEventListener(\'DOMContentLoaded\', function() {
            const header = document.querySelector(\'.header\');
            for (let i = 0; i < 15; i++) {
                const sakura = document.createElement(\'div\');
                sakura.className = \'sakura\';
                sakura.style.left = Math.random() * 100 + \'%\';
                sakura.style.top = Math.random() * 50 + \'%\';
                sakura.style.animationDelay = -Math.random() * 15 + \'s\';
                sakura.style.opacity = 0.3 + Math.random() * 0.5;
                sakura.style.width = 20 + Math.random() * 20 + \'px\';
                sakura.style.height = sakura.style.width;
                header.appendChild(sakura);
            }
        });
    </script>
</body>
</html>',
    'rule' => 'required',
    'msg' => '',
    'tip' => '自定义提示页面内容，用于控制模式8和9返回404状态码时显示',
    'ok' => '',
    'extend' => 'style="height: 273px; width: 353px;"',
  ),
);
