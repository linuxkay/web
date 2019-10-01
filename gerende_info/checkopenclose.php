<?php
//credits to Henry Addo who made this file to work 100%
  mb_regex_encoding("UTF-8");
  $string = 'ya';
  $open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能');
  $close_words = array('運休','時間外','運転見合わせ','close','CLOSE','Close','－
	      ','×','-','営業終了','ー');

      // Check if word is in the open_words array.
  if (in_array($string, $open_words)) {
    echo 'open';
  } else if (in_array($string, $close_words)) {
    echo 'close';
  } else {
    echo $string;
}
?>
                     
