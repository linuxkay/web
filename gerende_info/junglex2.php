<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://jxj.co.jp/today/#link02';
$crawler = $cli->request('GET', $url);


//XPath
//West Express
$title    = $crawler->filterXPath('//*[@id="condition2"]/table[1]/tbody/tr[3]/td[3]')->text();
//var_dump($title);
echo($title);
