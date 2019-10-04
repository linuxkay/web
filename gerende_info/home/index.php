<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="3600" >
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css">
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=4.7'></script>
<script type='text/javascript' src='/js/ski.js'></script>
<script type='text/javascript' src='/js/tenki.js'></script>
<script type='text/javascript' src='/js/tenkipic.js'></script>
<script type='text/javascript' src='/js/snowcover.js'></script>
<title>宮城・山形 ゲレンデ リフト情報</title>
<meta name="keywords" content="宮城・山形 ゲレンデ リフト情報 せっかくスキー場に来たのに風が強くてリフト運休。他にどこのスキー場に行こうかって時に宮城県と山形県のスキー場リフト運行早見表。">
<meta name="description" content="宮城・山形 ゲレンデ リフト情報 せっかくスキー場に来たのに風が強くてリフト運休。他にどこのスキー場に行こうかって時に宮城県と山形県のスキー場リフト運行早見表。">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89553662-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3071368783936850",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<h1 class="head1">ゲレンデ リフト情報</h1>
<h2 class="head2">リフト・ゴンドラの運行状況を一時間毎更新</h2>

<!--<p><strong>強風でリフト止まってるよっ他どこ行くって時に</strong></p>--!>
<p align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 206SecNet-blog横 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-3071368783936850"
     data-ad-slot="6392004699"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="marquee">
<!--<Marquee Bgcolor="#FFFFFF">本日は全てのスキー場で通常営業してます。</Marquee>--!>
<Marquee>せっかくスキー場に来たのに「強風でリフトが運行してなかった！」なんてことが無いようにリアルタイムでリフト、ロープウェイ情報を確認できます。</Marquee>
<!--<Marquee>営業開始しました</Marquee>--!>
</div>
<p align="right">
<?php

    $t = filemtime('cache/result.json');

    print date("m/d H:i", $t)."更新";
?>
</p>
<table class="main-table"border="1" width="620" cellspacing="5" cellpadding="10" bordercolor="#333333">
  <tr>
    <th bgcolor="#0098ff"><font color="#FFFFFF">えぼしスキー場</font></th>
    <th bgcolor="#0098ff" width="300"><font color="#FFFFFF">セントメリースキー場</font></th>
    <th bgcolor="0098ff" width="350"><font color="#FFFFFF">山形蔵王温泉スキー場</font></th>
  </tr>
  <tr>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="eboshi-pic" class="weather-pic" target="_self"><span class="eboshi-pic"></span></a>
      <br>
      <a title="eboshi-snowcover" class="weather" target="_self"><span class="eboshi-snowcover"></span></a>
    </th>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="stmary-pic" class="weather-pic" target="_self"><span class="stmary-pic"></span></a>
      <br>
      <a title="stmary-snowcover" class="weather" target="_self"><span class="stmary-snowcover"></span></a>
    </th>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="yamagatazao-pic" class="weather-pic" target="_self"><span class="yamagatazao-pic"></span></a>
      <br>
      <a title="yamagatazao-snowcover" class="weather" target="_self"><span class="yamagatazao-snowcover"></span></a>
    </th>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" align="center" nowrap>
      <a title="eboshi-openinfo" class="post-title" target="_self"><span class="eboshi-currently"></span></a>
    </td>
    <td bgcolor="#FFFFFF" align="center" nowrap>
      <a title="stmary-openinfo" class="post-title" target="_self"> <span class="stmary-currently"> </span></a>
    </td>
    <td bgcolor="#FFFFFF" align="center" width="300">
      <a title="yamagatazao-openinfo" class="post-title" target="_self"><span class="yamagatazao-currently"></span></a>
    </td>
  </tr>
  <tr>
    <th bgcolor="0098ff"><font color="#FFFFFF">スプリングバレー</font></th>
    <th bgcolor="0098ff" width="300"><font color="#FFFFFF">ジャングルジャングル</font></th>
    <th bgcolor="0098ff" width="300"><font color="#FFFFFF">オニコウベスキー場</font></th>
  </tr>
  <tr>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="springvalley-pic" class="weather-pic" target="_self"><span class="springvalley-pic"></span></a>
      <br>
      <a title="springvalley-snowcover" class="weather" target="_self"><span class="springvalley-snowcover"></span></a>
    </th>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="jungl jungle" class="weather-pic" target="_self"><span class="jungle-pic"></span></a>
      <br>
      <a title="jungle-snowcover" class="weather" target="_self"><span class="jungle-snowcover"></span></a>
    </th>
    <th class="weather-table" bgcolor="#FFFFFF" width="300"><font color="#FFFFFF">
      <a title="onikobe" class="weather-pic" target="_self"><span class="onikobe-pic"></span></a>
      <br>
      <a title="onikobe-snowcover" class="weather" target="_self"><span class="onikobe-snowcover"></span></a>
    </th>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF" align="center" width="300">
      <a title="springvalley-openinfo" class="post-title" target="_self"><span class="springvalley-currently"></span></a>
    </td>
    <td bgcolor="#FFFFFF" align="center" width="300">
      <a title="jungle-openinfo" class="post-title" target="_self"><span class="jungle-currently"></span></a>
    </td>
    <td bgcolor="#FFFFFF" align="center" width="300">
      <a title="onikobe-openinfo" class="post-title" target="_self"><span class="onikobe-currently"></span></a>
    </td>
  </tr>
</table>
</body>
<br>
<p align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 記事直下専用プロトタイプrev1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-3071368783936850"
     data-ad-slot="2691826001"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</html>
