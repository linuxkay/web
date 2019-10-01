<?php
    /**
     * Fetches ski resorts open or close information from websites.
      * 
     * @param $ski_resorts_name The name of the Linux distribution to fetch it's details
     * */
    function fetch_ski_resorts_open_close($ski_resorts_name)
        {
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
print" eboshi "; echo($eboshi);
//stmary
$stmary    = $crawlerstmary->filterXPath('//*[@id="panel-w5840cbe2b571d-0-1-0"]/div/div/fieldset[1]')->text();
print" stmary ";echo($stmary);
//yamagatazao
$yamagatazao    = $crawleryamagatazao->filterXPath('//*[@id="page"]/div[4]/div[1]/div/section/div[2]/article/div/div[1]/div[3]/div/div[2]/table/tbody/tr[1]/td[2]')->text();
print" yamagata zao ";echo($yamagatazao);
//springvalley
$springvalley    = $crawlerspringvalley->filter('table')->eq(1)->filter('tr')->filter('td')->text();
print" springvalley ";echo($springvalley);
//jungle
$jungle    = $crawlerjungle->filterXPath('//*[@id="condition2"]/table[1]/tbody/tr[3]/td[3]')->text();
print" jungle x2 ";echo($jungle);
//onikobe
$onikobe    = $crawleronikobe->filterXPath('//*[@id="lift-01"]/td[2]')->text();
print" onikobe ";echo($onikobe);
        return ($onikobe);
}

//    {
        // Fetch ski resorts details from  websites
//    }
//    function send_response($response)
//    {
        // Avoid header caching by using a paste date
//        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
//        header("Content-type: application/json; charset=utf-8");
//        echo $response;
//    }

    function run()
    {
        // Cached Json file
        $skiresorts_file_name = 'cache/skiresorts_file_name.json';

        $skiresorts = get_content($skiresorts_file_name);

    }

    function fetch_skiresorts_from_internet()
    {
         // Add all ski resorts name here
        $ski_resorts_names = ["eboshi","stmary","yamagatazao","springvalley","junglex2","onikobe"];
        {
            $ski[$key]['name'] = $name;
            $openclose = fetch_ski_resorts_open_close($name);

            // Gets only openclose  without extra alphabets
           //preg_match("/\d+([\.-]\d+)?/",$openclose);

            $ski[$key]['openclose'] = ($onikobe);

        }

        $json['result'] = $ski;

        // Send Json response to the browser
        return json_encode($json);
    }
    function get_content($file,$hours = 24) {
        // Setup caching time
        $current_time = time();
        $expire_time = $hours * 60 * 60;
        $file_time = filemtime(utf8_decode($file));

        // Retrieve cached file
        if (file_exists($file) && ($current_time - $expire_time < $file_time)) {
            return file_get_contents($file);
        }
        else {
            // Fetch from the internet
            $content = fetch_skiresorts_from_internet();
            //Cache file
            file_put_contents($file,$content);

            return $content;
        }
    }
    run();
?>

