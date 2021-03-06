<?php

require_once __DIR__ . '/vendor/autoload.php';
$filePath = 'cache/result.json';
$cli = new Goutte\Client();
$urleboshi = 'http://www.eboshi.co.jp/';
$urlstmary = 'http://stmary-338.com/';
$urlyamagatazao = 'http://www.zao-ski.or.jp/areainfo/area/?areaid=3';
$urlspringvalley = 'http://www.springvalley.co.jp/winter/piste/';
$urljungle = 'http://jxj.co.jp/gelande/#todays';
$urlonikobe = 'http://new.onikoube.com/winter/lifts';

$crawlereboshi = $cli->request('GET', $urleboshi);
$crawlerstmary = $cli->request('GET', $urlstmary);
$crawleryamagatazao = $cli->request('GET', $urlyamagatazao);
$crawlerspringvalley = $cli->request('GET', $urlspringvalley);
$crawlerjungle = $cli->request('GET', $urljungle);
$crawleronikobe = $cli->request('GET', $urlonikobe);


//Eboshi
$selectdateboshi = strtotime(date('Y-m-d H:i'));
 
#if ( $selectdateboshi > strtotime('2016-12-01 10:00') and $selectdateboshi < strtotime('2017-04-02 18:00'))
if ( $selectdateboshi > strtotime('2018-12-01 10:00') and $selectdateboshi < strtotime('2019-04-02 18:00'))
{
$eboshi    = $crawlereboshi->filterXPath('//*[@id="top"]/div[3]/div/div[2]/div/div[2]/p[3]/span')->text();
print" eboshi "; echo($eboshi);
}
#$eboshi1 = "シーズン終了";
#$eboshi1 = "<a href='http://www.eboshi.co.jp/'>要確認</a>";
$eboshi1 = $eboshi;
//file_put_contents($filePath,$eboshi);
//stmary
$selectdate = strtotime(date('Y-m-d H:i'));
 
#if ( $selectdate > strtotime('2016-12-01 10:00') and $selectdate < strtotime('2017-03-20 21:00'))
if ( $selectdate > strtotime('2018-12-22 10:00') and $selectdate < strtotime('2019-03-20 21:00'))
{
$stmary    = $crawlerstmary->filterXPath('//*[@id="panel-w5bff96341450f-0-0-1"]/div/div/text()[3]')->text();
$stmary = mb_substr($stmary, 14, 1);
print" stmary "; echo($stmary);
}
#$stmary1 = "シーズン終了";
$stmary1 = "<a href='http://stmary-338.com/'>要確認</a>";
//$stmary    = $crawlerstmary->filterXPath('//*[contains(@id, "panel")]/div/fieldset[3]/h6/text()')->text();
//$stmary = mb_substr($stmary, 15, 1);
//print" stmary ";echo($stmary);
//file_put_contents($filePath,$stmary,  FILE_APPEND | LOCK_EX);
//yamagatazao
$selectdatyamagatazao = strtotime(date('Y-m-d H:i'));

#if ( $selectdatyamagatazao > strtotime('2016-12-01 10:00') and $selectdatyamagatazao < strtotime('2017-05-07 18:00'))
if ( $selectdatyamagatazao > strtotime('2018-12-01 10:00') and $selectdatyamagatazao < strtotime('2019-05-07 18:00'))
{
$yamagatazao    = $crawleryamagatazao->filterXPath('//*[@id="areainfo-all"]/tbody[1]/tr[1]/td[2]')->text();
print" yamagata zao ";echo($yamagatazao);
}
$yamagatazao1 = "一部営業中";
//file_put_contents($filePath,$yamagatazao,  FILE_APPEND | LOCK_EX);
//springvalley
//$springvalley    = $crawlerspringvalley->filter('table')->eq(1)->filter('tr')->filter('td')->text();
$selectdatespringvalley = strtotime(date('Y-m-d H:i'));
 
#if ( $selectdatespringvalley > strtotime('2016-12-01 10:00') and $selectdatespringvalley < strtotime('2017-04-09 18:00'))
if ( $selectdatespringvalley > strtotime('2018-12-15 09:00') and $selectdatespringvalley < strtotime('2019-04-09 18:00'))
{
$springvalley    = $crawlerspringvalley->filterXPath('//*[@id="main"]/div/div[1]/div/div/section[3]/div/div/div/div/div/div[1]/div/div/div/table/tbody/tr[2]/td[2]')->text();
print" springvalley ";echo($springvalley);
}
$springvalley1 = $springvalley;
//file_put_contents($filePath,$springvalley,  FILE_APPEND | LOCK_EX);
//jungle
$selectdatejungle = strtotime(date('Y-m-d H:i'));
 
#if ( $selectdatejungle > strtotime('2016-12-01 10:00') and $selectdatejungle < strtotime('2017-04-09 18:00'))
if ( $selectdatejungle > strtotime('2018-12-09 09:00') and $selectdatejungle < strtotime('2019-04-09 18:00'))
{
#$jungle    = $crawlerjungle->filterXPath('//*[@id="condition2"]/table[1]/tbody/tr[4]/td[3]')->text();
$jungle    = $crawlerjungle->filterXPath('/html/body/main/section[2]/div/div[1]/div/section[2]/table[1]/tbody/tr[2]/td[3]')->text();
#$jungle = mb_substr($jungle, 11, 1);
print" jungle x2 ";echo($jungle);
}
$jungle1 = $jungle;
//file_put_contents($filePath,$jungle,  FILE_APPEND | LOCK_EX);
//onikobe
$selectdateonikobe = strtotime(date('Y-m-d H:i'));
 
#if ( $selectdateonikobe > strtotime('2016-12-01 10:00') and $selectdateonikobe < strtotime('2017-03-26 18:00'))
if ( $selectdateonikobe > strtotime('2018-12-15 9:59') and $selectdateonikobe < strtotime('2019-03-26 18:00'))
{
$onikobe    = $crawleronikobe->filterXPath('//*[@id="lift-01"]/td[2]/img/txt')->text();
print" onikobe ";echo($onikobe);
}
$onikobe1 = "12月15日10時オープン";
//file_put_contents($filePath,$onikobe,  FILE_APPEND | LOCK_EX);

  //$string = array($eboshi,$stmary,$yamagatazao,$springvalley,$jungle,$onikobe);
  $string = $eboshi;
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能',"\n\t\t\t\t●");
  $ready_words = array('準備中');
  $close_words = array('運休','時間外','見合せ','見合わせ','運転見合わせ','close','CLOSE','Close','－
	      ','×','-','－','営業終了','ー');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
	$eboshi1 = 'ゴンドラ運行中';
   	echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
	$eboshi1 = 'ゴンドラ運休';
        echo 'close'. PHP_EOL;
  } elseif (in_array($string, $ready_words)){
        $eboshi1 = '準備中';
        echo 'ready up'. PHP_EOL;
  } else {
    echo $string;
	}
//For St Mary
  $string = $stmary;
  $open_words = array('運行', '全面滑走可能', '平常運転',' ◯',' 〇','〇','○','● ','open','OPEN','Open','◎','◯','一部滑走可能',"\n\t\t\t\t●");
  $close_words = array('運休','時間外','運転見合わせ','強風運休','強','風','close','CLOSE',' ×','×','Close','－
              ','×','-','営業終了','ー','－');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
        $stmary1 = 'クワッド運行中';
        echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
        $stmary1 = 'クワッド運休';
        echo 'close'. PHP_EOL;
  } else {
    echo $string;
        }
//For Yamagata Zao
  $string = $yamagatazao;
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能',"\n\t\t\t\t●");
  $close_words = array('運休','時間外','運転見合わせ','close','CLOSE','Close','－','×','-','営業終了','ー');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
        $yamagatazao1 = 'ロープウェイ運行中';
        echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
        $yamagatazao1 = 'ロープウェイ運休';
        echo 'close'. PHP_EOL;
  } else {
    echo $string;
        }
//For Spring Valley
  $string = $springvalley;
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能',"\n\t\t\t\t●");
  $close_words = array('運休','時間外','運転見合わせ','close','－','CLOSE','Close','－
              ','×','-','営業終了','ー');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
        $springvalley1 = 'リフト運行中';
        echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
        $springvalley1 = '運休';
        echo 'close'. PHP_EOL;
  } else {
    echo $string;
        }
//For Jungle Jungle
  $string = $jungle;
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','●','open','OPEN','Open','◎','◯','〇','一部滑走可能',"\n\t\t\t\t●");
  $close_words = array('運休','時間外','運転見合わせ','close','CLOSE','△','Close','－
              ','×','-','営業終了','ー');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
        $jungle1 = 'リフト運行中';
        echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
        $jungle1 = '運休';
        echo 'close'. PHP_EOL;
  } else {
    echo $string;
        }
//For Onikobe
  $string = $onikobe;
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能',"\n\t\t\t\t●");
  $close_words = array('準備中','運休','時間外','運転見合わせ','close','CLOSE','Close','－
              ','×','-','営業終了','ー');
//  foreach($string as $value){
      // Check if word is in the open_words array.
  if (in_array($string, $open_words)){
        $onikobe1 = 'リフト運行中';
        echo  'open'. PHP_EOL;
  } elseif (in_array($string, $close_words)){
        $onikobe1 = '運休';
        echo 'close'. PHP_EOL;
  } else {
    echo $string;
        }
$arr = array('result' => [array('name' => 'eboshi','currently' => $eboshi1),array('name' => 'stmary','currently' => $stmary1),array('name' => 'yamagatazao','currently' => $yamagatazao1),array('name' => 'springvalley','currently' => $springvalley1),array('name' => 'jungle','currently' => $jungle1),array('name' => 'onikobe','currently' => $onikobe1)]);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
file_put_contents($filePath,json_encode($arr,JSON_UNESCAPED_UNICODE));
?>
