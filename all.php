<?php

require_once __DIR__ . '/vendor/autoload.php';
$cli = new Goutte\Client();
$urleboshi = 'http://www.eboshi.co.jp/';
$urlstmary = 'http://stmary-338.com/';
$urlyamagatazao = 'http://www.zao-ski.or.jp/areainfo/area/?areaid=3';
$urlspringvalley = 'http://www.springvalley.co.jp/winter/piste/';
$urljungle = 'http://jxj.co.jp/today/#link02';
$urlonikobe = 'http://new.onikoube.com/winter/lifts';

$crawlereboshi = $cli->request('GET', $urleboshi);
$crawlerstmary = $cli->request('GET', $urlstmary);
$crawleryamagatazao = $cli->request('GET', $urlyamagatazao);
$crawlerspringvalley = $cli->request('GET', $urlspringvalley);
$crawlerjungle = $cli->request('GET', $urljungle);
$crawleronikobe = $cli->request('GET', $urlonikobe);


//Eboshi
$eboshi    = $crawlereboshi->filterXPath('//*[@id="top"]/div[2]/div/div[2]/div/div[2]/p[3]/span')->text();
echo($eboshi);
//stmary
$stmary    = $crawlerstmary->filterXPath('//*[@id="panel-w5840cbe2b571d-0-1-0"]/div/div/fieldset[1]')->text();
echo($stmary);
//yamagatazao
$yamagatazao    = $crawleryamagatazao->filterXPath('//*[@id="page"]/div[4]/div[1]/div/section/div[2]/article/div/div[1]/div[3]/div/div[2]/table/tbody/td[2]')->text();
echo($yamagatazao);
//springvalley
$springvalley    = $crawlerspringvalley->filter('table')->eq(1)->filter('tr')->filter('td')->text();
echo($springvalley);
//jungle
$jungle    = $crawlerjungle->filterXPath('//*[@id="condition2"]/table[1]/tbody/tr[3]/td[3]')->text();
echo($jungle);
//onikobe
$onikobe    = $crawleronikobe->filterXPath('//*[@id="lift-01"]/td[2]')->text();
echo($onikobe);
