<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://stmary-338.com/';
$crawler = $cli->request('GET', $url);


//XPath
$title    = $crawler->filterXPath('//*[@id="panel-w5840cbe2b571d-0-1-0"]/div/div/fieldset[1]')->text();
//var_dump($title);
echo($title);
