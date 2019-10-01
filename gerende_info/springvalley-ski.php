<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://www.springvalley.co.jp/winter/piste/';
$crawler = $cli->request('GET', $url);


//XPath
//Clipper Express
$title    = $crawler->filter('table')->eq(1)->filter('tr')->filter('td')->text();
//var_dump($title);
echo($title);
