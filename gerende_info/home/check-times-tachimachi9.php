<?php
header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/wind.json';
$cli = new Goutte\Client();

//crawl weather info 4 eboshi
#$urltimestachimachi9 = 'https://times-info.net/P04-miyagi/C102/park-detail-BUK0035703/';
$urltimestachimachi9 = 'https://times-info.net/P04-miyagi/C101/park-detail-BUK0047823/';
#$urltimestachimachi9 = 'https://times-info.net/search/?freewords=%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%BA%E7%AB%8B%E7%94%BA%E7%AC%AC%EF%BC%99';
$crawlertimestachimachi9 = $cli->request('GET', $urlweboshi);
#$timestachimachi9 = $crawlerweboshi->filterXpath('//*[@id="buk"]/td[1]/p[1]/span')->text();
$timestachimachi9 = $crawlerweboshi->filterXpath('//*[@id="mankuuText"]')->text();
#$timestachimachi9 = mb_substr($weboshi, 14, 1);
echo "status ". ($timestachimachi9);

/*
$arr = array('result' => [array('name' => 'eboshi','weather' => $timestachimachi91),array('name' => 'stmary','weather' => $wstmary1),array('name' => 'yamagatazao','weather' => $wyamagatazao1),array('name' => 'springvalley','weather' => $wspringvalley1),array('name' => 'jungle','weather' => $wjungle1),array('name' => 'onikobe','weather' => $wonikobe1)]);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
file_put_contents($filePath,json_encode($arr,JSON_UNESCAPED_UNICODE));
*/
?>

