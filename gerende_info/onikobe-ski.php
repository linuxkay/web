<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://new.onikoube.com/winter/lifts';
$crawler = $cli->request('GET', $url);


//XPath
//No1 Pair lift
$title    = $crawler->filterXPath('//*[@id="lift-01"]/td[2]')->text();
//var_dump($title);
echo($title);
