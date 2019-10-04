<?php

require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/snowcover.json';
$cli = new Goutte\Client();
$urleboshi = 'http://www.eboshi.co.jp/';
$urlstmary = 'http://stmary-338.com/';
$urlyamagatazao = 'http://www.zao-ski.or.jp/areainfo/area-information/';
$urlspringvalley = 'http://www.springvalley.co.jp';
$urljungle = 'http://jxj.co.jp/';
$urlonikobe = 'http://new.onikoube.com/';

$crawlereboshi = $cli->request('GET', $urleboshi);
$crawlerstmary = $cli->request('GET', $urlstmary);
$crawleryamagatazao = $cli->request('GET', $urlyamagatazao);
$crawlerspringvalley = $cli->request('GET', $urlspringvalley);
$crawlerjungle = $cli->request('GET', $urljungle);
$crawleronikobe = $cli->request('GET', $urlonikobe);

$remove_words = array("Àã¼Á","¡§","¡¼");

//Eboshi
$selectdateboshi = strtotime(date('Y-m-d H:i'));

if ( $selectdateboshi > strtotime('2016-12-01 10:00') and $selectdateboshi < strtotime('2017-04-02 18:00'))
{
$eboshi    = $crawlereboshi->filterXPath('//*[@id="top"]/div[2]/div/div[2]/div/ul/li[1]/div[1]/p[2]')->text();
$eboshi = preg_replace('{\s+}', '', $eboshi);
 $eboshi1 = '';
   for ($i = 0;$i <= mb_strlen($eboshi);$i++){
     if (strlen(mb_substr($eboshi,$i,1)) == mb_strlen(mb_substr($eboshi,$i,1))){
        $eboshi1 .= mb_substr($eboshi,$i,1);
}
}
}
$eboshi1 = "";
print" eboshi "; echo($eboshi1);
//file_put_contents($filePath,$eboshi);
////stmary
$selectdate = strtotime(date('Y-m-d H:i'));

if ( $selectdate > strtotime('2016-12-01 10:00') and $selectdate < strtotime('2017-03-20 21:00'))
{
$stmary    = $crawlerstmary->filterXPath('//*[contains(@id, "panel")]/div')->text();
$stmary = mb_substr($stmary, 20, 10);
$stmary = str_replace("\n", '', $stmary);
//$stmary = trim(mb_convert_kana($stmary, 'as', 'UTF-8'));
//$stmary1 = preg_replace('/[^0-9a-zA-Z]/', '', $stmary);
//$stmary = preg_replace('/\s+/', '', $stmary);
//$stmary = str_replace($remove_words, "", $stmary);
print" stmary ";echo($stmary);
}
$stmary1 = "";
//file_put_contents($filePath,$stmary,  FILE_APPEND | LOCK_EX);
//yamagatazao
$selectdatyamagatazao = strtotime(date('Y-m-d H:i'));

if ( $selectdatyamagatazao > strtotime('2016-12-01 10:00') and $selectdatyamagatazao < strtotime('2017-05-07 18:00'))
{
$yamagatazao    = $crawleryamagatazao->filterXPath('//*[@id="areainfo-all"]/tbody/tr[3]/td[4]')->text();
print" yamagata zao ";echo($yamagatazao);
}
$yamagatazao1 = "";
//file_put_contents($filePath,$yamagatazao,  FILE_APPEND | LOCK_EX);
//springvalley
//$springvalley    = $crawlerspringvalley->filter('table')->eq(1)->filter('tr')->filter('td')->text();
$selectdatspring = strtotime(date('Y-m-d H:i'));

if ( $selectdatspring > strtotime('2016-12-01 10:00') and $selectdatspring < strtotime('2017-04-09 18:00'))
{
$springvalley    = $crawlerspringvalley->filterXPath('//*[@id="updateLeft"]/div[1]/div/text()[2]')->text();
$springvalley = mb_substr($springvalley, 5, 5);
$springvalley = trim(mb_convert_kana($springvalley, 'as', 'UTF-8'));
//$springvalley =  preg_replace('/[^0-9a-zA-Z]/', '', $springvalley);
print" springvalley ";echo($springvalley);
}
$springvalley1 = "";
//file_put_contents($filePath,$springvalley,  FILE_APPEND | LOCK_EX);
//jungle
$selectdatjungle = strtotime(date('Y-m-d H:i'));

if ( $selectdatjungle > strtotime('2016-12-01 10:00') and $selectdatjungle < strtotime('2017-04-09 18:00'))
{
$jungle    = $crawlerjungle->filterXPath('//*[@id="contents"]/section[1]/div/ul[2]/li[2]')->text();
$jungle = preg_replace('/\s+/', '', $jungle);
print" jungle x2 ";echo($jungle);
}
$jungle1 = "";
//file_put_contents($filePath,$jungle,  FILE_APPEND | LOCK_EX);
//onikobe
$selectdateonikobe = strtotime(date('Y-m-d H:i'));

if ( $selectdateonikobe > strtotime('2016-12-01 10:00') and $selectdateonikobe < strtotime('2017-03-26 18:00'))
{
$onikobe    = $crawleronikobe->filterXPath('//*[@id="header-primary"]/div[1]/div/div[2]/div[1]/div/div[2]/dl[2]/dd')->text();
$onikobe = $onikobe. 'cm';
print" onikobe ";echo($onikobe). 'cm';
}
$onikobe1 = "";
//file_put_contents($filePath,$onikobe,  FILE_APPEND | LOCK_EX);

$arr = array('result' => [array('name' => 'eboshi','snowcover' => $eboshi1),array('name' => 'stmary','snowcover' => $stmary),array('name' => 'yamagatazao','snowcover' => $yamagatazao),array('name' => 'springvalley','snowcover' => $springvalley),array('name' => 'jungle','snowcover' => $jungle),array('name' => 'onikobe','snowcover' => $onikobe)]);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
file_put_contents($filePath,json_encode($arr,JSON_UNESCAPED_UNICODE));

?>
