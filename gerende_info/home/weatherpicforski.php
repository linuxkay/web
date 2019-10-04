<?php

require_once __DIR__ . '/vendor/autoload.php';

const LATLONS = array('eboshi'=>'38.13/140.53','stmary'=>'38.21/140.52','yamagatazao'=>'38.17/140.40','springvalley'=>'38.41/140.72','jungle'=>'38.43/140.54','onikobe'=>'38.79/140.64');

function passingurl($url){
  $cli = new Goutte\Client();
  //crawl weather info 4 eboshi
  $lang = "/&lang=jp";
  $crawlerweboshi = $cli->request('GET','http://weathernews.jp/onebox/'. $url .$lang);
  $weboshi = $crawlerweboshi->filterXPath('//*[@id="content_main"]/div[3]/div[1]/div[1]/div/span')->text();
  $weboshi = preg_replace("/[0-9:,]+/","", $weboshi);   
  
  return parseweather($weboshi);
}

function parseweather($weboshi) {
  $weboshi1 = trim($weboshi);
  $sunny_words = array("はれ",'晴れ', '快晴','Fair');
  $cloudy_words = array("くもり","曇り", "所により曇り",'くもり','Cloudy');
  $rainy_words = array('あめ','雨', '所により雨','小雨');
  $snowy_words = array('ゆき','雪','大雪', '所により雪');
  $sleet_words = array('みぞれ','霙','雹');
  $partlycloudy_words = array('うすぐもり');

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
  if (in_array($weboshi1, $sleet_words)) {
//    return 'sleet'. PHP_EOL;
    return '<img src="/image/tenki1/sleet.gif" alt=""/>';
  }
  if (in_array($weboshi1, $partlycloudy_words)) {
//    return 'partlycloudy'. PHP_EOL;
    return '<img src="/image/tenki1/partly-cloudy.gif" alt=""/>';
  }
  return  $weboshi1. PHP_EOL;
}
/*
// This prints the html image tags to the browser
function parse() {
  foreach (LATLONS as $key => $latlon) {
    print passingurl($latlon);
  }
}
*/
//TODO: Comment this out to print JSON out remember to comment the parse function
// above

function parse() {
$filePath = 'cache/tenkipic.json';
  foreach (LATLONS as $key => $latlon){
    $parsedlatlon = passingurl($latlon);
	$values[] = array(
	'name' => $key,
	'pic' => $parsedlatlon
        );
}
 $json['result'] = $values;
  print json_encode($json,JSON_UNESCAPED_SLASHES);
 // file_put_contents($filePath, json_encode($json), FILE_APPEND | LOCK_EX);
  file_put_contents($filePath, json_encode($json));
}
//}
parse();
?>
