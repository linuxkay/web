<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://www.zao-ski.or.jp/areainfo/area/?areaid=3';
$crawler = $cli->request('GET', $url);


//XPath
//Zao chuo rope way
$title    = $crawler->filterXPath('//*[@id="page"]/div[4]/div[1]/div/section/div[2]/article/div/div[1]/div[3]/div/div[2]/table/tbody/tr[1]/td[2]')->text();
//var_dump($title);
echo($title);

