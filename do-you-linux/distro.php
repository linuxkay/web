<?php
    /**
     * Fetches distribution details from distrowatch.com
     *
     * @param $linux_distro_name The name of the Linux distribution to fetch it's details
     * */
    function fetch_linux_distro_latest_version($linux_distro_name) 
    {   
        // Fetch linux distribution details from  DistroWatch
        $url = "http://distrowatch.com/table.php?distribution=$linux_distro_name";
        
        $html_page = file_get_contents($url); 

        // Match anything in the form <a href="<a href="8394">Distribution Release: Fedora 21</a>
        $pattern = "/<a href=\"[\d]*\">(Distribution Release:|BSD Release:)(.+?)(\d+(.\d+)?(-\d+)?)<\/a>/";
	
        preg_match_all($pattern, $html_page, $matches);
        // Get key of the biggest version number
	//print_r($matches[3]);
        $max_version = array_search(max($matches[3]),$matches[3]);
        
        return $matches[3][$max_version];
    
    }

    function send_response($response)
    {
        // Avoid header caching by using a paste date
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Content-type: application/json; charset=utf-8");
        echo $response;
    }
    
    function run()
    {
        // Cached Json file
        $distro_file_name = 'cache/distro_file_name.json';
        
        $distros = get_content($distro_file_name);
        
        send_response($distros);
    }

    function fetch_distro_from_internet() 
    {
         // Add all supported distros here 
        $linux_distro_names = ["ubuntu","fedora","centos","mint","suse","freebsd"];
     
        foreach($linux_distro_names as $key => $name )
        {
            $distro[$key]['name'] = $name;            
            $version = fetch_linux_distro_latest_version($name);
            
            // Gets only version number without extra alphabets
            preg_match("/\d+([\.-]\d+)?/",$version,$matches);
            
            $distro[$key]['version'] = $matches[0]; 
        }

        $json['result'] = $distro;
        
        // Send Json response to the browser
        return json_encode($json);

    }

    /**
     * Retrieve distro info from distrowatch.com with a basic caching 
     * implementation
     *
     * Credits to 
     * http://davidwalsh.name/php-cache-function
     */
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
            $content = fetch_distro_from_internet();
            //Cache file
            file_put_contents($file,$content);
            
            return $content;
        }

    }
    
    // Execute code
    run();
?>
