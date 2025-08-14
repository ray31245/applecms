<?php
  $url = $_GET["url"];
  $url = str_replace("https:/","https://",$url);
$dir = pathinfo($url); //获取图片信息
  $host = $dir['dirname']; //图片dirname
  $refer = $host.'/';
  $ch = curl_init($url);
  curl_setopt ($ch, CURLOPT_REFERER, $refer);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  $ext = strtolower(substr(strrchr($img,'.'),1,10));
  $types = array(
        'gif'=>'image/gif',
        'jpeg'=>'image/jpeg',
        'jpg'=>'image/jpeg',
        'jpe'=>'image/jpeg',
        'png'=>'image/png',
  );
  $type = $types[$ext] ? $types[$ext] : 'image/jpeg';
  header("Content-type: ".$type);
  echo $data;
?>