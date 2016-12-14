<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://www.eboshi.co.jp/';
$crawler = $cli->request('GET', $url);


//XPath
$title    = $crawler->filterXPath('//*[@id="top"]/div[2]/div/div[2]/div/div[2]/p[3]/span')->text();
var_dump($title);

