<?php

require_once __DIR__ . '/vendor/autoload.php';
function passingurl($url){
  $cli = new Goutte\Client();
  //crawl weather info 4 eboshi
  $crawlerweboshi = $cli->request('GET','http://weathernews.jp/onebox/'. $url);
  $weboshi = $crawlerweboshi->filterXPath('//*[@id="content_main"]/div[3]/div[1]/div[1]/div/span')->text();
  $weboshi = preg_replace("/[0-9:,]+/","", $weboshi);   
  
  return parseweather($weboshi);
}

$latlons = array('eboshi'=>'38.13/140.53','st. mary'=>'38.21/140.52','yamagata'=>'38.41/140.72','springvalley'=>'38.41/140.72');

foreach ($latlons as $key => $latlon) {
   print $key .' -> '. passingurl($latlon);
}

function parseweather($weboshi) {
  $weboshi1 = trim($weboshi);
  $sunny_words = array("はれ",'晴れ', '快晴');
  $cloudy_words = array("くもり","曇り", "所により曇り",'くもり');
  $rainy_words = array('あめ','雨', '所により雨');
  $snowy_words = array('ゆき','雪', '所により雪');

  if (in_array($weboshi1, $sunny_words)) {
//    return 'sunny'. PHP_EOL;
    return '<img src="/image/tenki1/sunny.gif" alt=""/>';
  }

  if (in_array($weboshi1, $cloudy_words)){
//  return 'cloudy'. PHP_EOL;
    return '<img src="/image/tenki1/cloudy.gif" alt=""/>';
  }
  
  if (in_array($weboshi1, $rainy_words)) {
//    return 'rainy'. PHP_EOL;
    return '<img src="/image/tenki1/rainy.gif" alt=""/>';
  }
  
  if (in_array($weboshi1, $snowy_words)) {
//    return 'snowy'. PHP_EOL;
    return '<img src="/image/tenki1/snowy.gif" alt=""/>';
  }
  return  $weboshi1. PHP_EOL;
}
//function parse() {
  //foreach ($latlons as $key => $latlon) {
 // print passingurl($latlon);
//}
//}
function parse() {
  $output = array();
  foreach ($latlons as $key => $latlon) {
    $output[$key] = passingurl($latlon);
  }

  print json_decode($output);
}
?>
