<?php

  global $config;
  $config = [];
  
  $sum = rand(3,6);
  // 程序安装路径
  $config['path'] = '/';
  // ID 长度
  $config['length'] = $sum;
  // 网站标题
  $config['title'] = '短链生成';
  // 网站简介
  $config['description'] = '免费在线网址缩短服务';
  
  $config['api'] = true;

?>
