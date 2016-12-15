<?php
mb_regex_encoding("UTF-8");
$string = 'open';
$open_words = array('運行', '全面滑走可能', '平常運転','○','● ','open','OPEN','Open','◎','◯','一部滑走可能');
$close_words = array('運休','時間外','運転見合わせ','close','CLOSE','Close','－','×','-','営業終了','ー');
	if (preg_match($open_words,$string)){
    		echo 'open';
}
	elseif (preg_match($close_words,$string)){
//	elseif (in_array($close_words,(array)$string)){
    		echo 'close';
}
	else {
    		echo 'no infomation';
}
?>
