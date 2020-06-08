<?php
header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/windkawasaki.json';
$cli = new Goutte\Client();

//crawl wind info 4 Kawasaki 
$urlkawasaki = 'http://weathernews.jp/onebox/38.18/140.64/';
$crawlerkawasaki = $cli->request('GET', $urlkawasaki);
$kawasaki = $crawlerkawasaki->filterXPath('//*[@id="main"]/section[6]/div/div/div[2]/ul/li[5]')->text();
#$kawasaki = $crawlerkawasaki->filterXPath('//*[@id="content_main"]/div[3]/div[1]/div[1]/div/table[2]/tr[3]/td[2]')->text();
//$kawasaki = preg_replace('[\xFF01-\xFF5E]','', $kawasaki);
//$kawasaki = mb_ereg_replace("¡§ËÌ","", $kawasaki);
$kawasaki = mb_substr($kawasaki, -5, 5);

$place = 'kawasaki';
$output[] = array(
	'name' => $place,
        'wind' => $kawasaki
);
$json['result'] = $output;
print json_encode($json,JSON_UNESCAPED_UNICODE);
//print json_encode($json);
file_put_contents($filePath,json_encode($json,JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_UNICODE));
?>

