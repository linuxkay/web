<?php
header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/tenkikawasaki.json';
$cli = new Goutte\Client();

//crawl tenki info 4 Kawasaki 
$urlkawasaki = 'https://weathernews.jp/onebox/38.18/140.64/q=Kawasaki-machi&v=9fd8073dd2627426e2f1a56703cb8486e7d5826e83d8c1bdce4ac95e53580bb0&lang=ja&type=day';
$crawlerkawasaki = $cli->request('GET', $urlkawasaki);
$kawasaki = $crawlerkawasaki->filterXPath('//*[@id="main"]/section[6]/div/div/div[2]/ul/li[1]')->text();
$kawasaki = mb_substr($kawasaki, -2, 6);

$place = 'kawasaki';
$output[] = array(
	'name' => $place,
        'tenki' => $kawasaki
);
$json['result'] = $output;
print json_encode($json,JSON_UNESCAPED_UNICODE);
//print json_encode($json);
file_put_contents($filePath,json_encode($json,JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_UNICODE));
?>

