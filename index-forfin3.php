<!DOCTYPE html>
<html lang=”ja”>
<head>
<meta charset=”UTF-8″>
<title>Test Script</title>
</head>
<body>
<h1>Testing</h1>
<!-- snip -->
<script>
    function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        alert(this.responseText); //Will alert: 42
    };
    oReq.open("get", "fin3.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
</script>
<!-- snip -->
<p>テスト中</p>
</body>
</html>

