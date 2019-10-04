<?php
header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/wind.json';
$cli = new Goutte\Client();

//crawl weather info 4 eboshi
#$urlweboshi = 'https://times-info.net/P04-miyagi/C102/park-detail-BUK0035703/';
$urlweboshi = 'https://stmary-338.com/';
$crawlerweboshi = $cli->request('GET', $urlweboshi);
$weboshi = $crawlerweboshi->filterXPath('//*[@id="panel-w5bff96341450f-0-0-1"]/div/div/a[4]')->text();
#$weboshi = mb_substr($weboshi, 14, 1);
echo "status ". ($weboshi);

/*
$arr = array('result' => [array('name' => 'eboshi','weather' => $weboshi1),array('name' => 'stmary','weather' => $wstmary1),array('name' => 'yamagatazao','weather' => $wyamagatazao1),array('name' => 'springvalley','weather' => $wspringvalley1),array('name' => 'jungle','weather' => $wjungle1),array('name' => 'onikobe','weather' => $wonikobe1)]);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
file_put_contents($filePath,json_encode($arr,JSON_UNESCAPED_UNICODE));
*/
?>

