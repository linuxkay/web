<?php
$weather = 'はれ';

$sunny_words = array('はれ','晴れ', '快晴');
$cloudy_words = array('くもり','曇り', '所により曇り');
$rainy_words = array('あめ','雨', '所により雨');
$snowy_words = array('ゆき','雪', '所により雪');

  if (in_array($weather, $sunny_words)) {
    echo 'sunny'. PHP_EOL;
    //$pweboshi1 = 'sunny';
    //echo $pweboshi1;
    // document.write("<img src='晴れ.gif'>");
    
    $pweboshi = '/image/tenki1/sunny.gif';  // <-- image file path
} elseif (in_array($weather, $cloudy_words)){
    //echo 'cloudy'. PHP_EOL;
    //$pweboshi1 = 'cloudy';
    //echo $pweboshi1;
    // document.write("<img src='曇り.gif'>");
    $pweboshi = '/image/tenki1/cloudy.gif'; //  <-- image file path
} elseif (in_array($weather, $rainy_words)) {
    //echo 'rainy'. PHP_EOL;
    //$pweboshi1 = 'rainy';
    //echo $pweboshi1;
    // document.write("<img src='雨.gif'>");
    $pweboshi = '/image/tenki1/rainy.gif';  // <-- image file path
} elseif (in_array($weather, $snowy_words)) {
    //echo 'snowy'. PHP_EOL;
    //$pweboshi1 = 'snowy';
    //echo $pweboshi1;
    // document.write("<img src='雪.gif'>");
    $pweboshi = '/image/tenki1/snowy.gif';  //  <-- image file path
//} elseif (in_array($weather == '快晴')) {
    //echo 'Hella Sunny'. PHP_EOL;
    // document.write("<img src='快晴.gif'>");
    // $pweboshi = '/path/to/快晴.gif';   <-- image file path
} else {
    echo $weather. PHP_EOL;
    // document.write("<img src='雨.gif'>");
    // $pweboshi = '/path/to/雨.gif';   <-- image file path
}
?>
