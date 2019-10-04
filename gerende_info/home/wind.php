<?php
header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/wind.json';
$cli = new Goutte\Client();

//crawl weather info 4 eboshi
$urlweboshi = 'http://weathernews.jp/onebox/38.13/140.53';
$crawlerweboshi = $cli->request('GET', $urlweboshi);
$weboshi = $crawlerweboshi->filterXPath('//*[@id="content_main"]/div[3]/div[1]/div[1]/div/table[2]/tr[3]/td[2]')->text();
//$weboshi1 = preg_replace("/[¡§,]+/","", $weboshi);
echo "É÷". ($weboshi);

/*
$arr = array('result' => [array('name' => 'eboshi','weather' => $weboshi1),array('name' => 'stmary','weather' => $wstmary1),array('name' => 'yamagatazao','weather' => $wyamagatazao1),array('name' => 'springvalley','weather' => $wspringvalley1),array('name' => 'jungle','weather' => $wjungle1),array('name' => 'onikobe','weather' => $wonikobe1)]);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
file_put_contents($filePath,json_encode($arr,JSON_UNESCAPED_UNICODE));
*/
?>

