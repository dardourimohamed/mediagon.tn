<?php
    $dbcon;
    function connect(){
        $dbcon = mysql_connect( "172.18.0.1", "root", "Med82753649365") or die('Could not connect to mysql server.');
        mysql_select_db("mediagon", $dbcon) or die('Could not select database.');
    }
    function disconnect(){
        //mysql_close($dbcon);
    }
    function encode_image ($Image) {
        return $Image;
    }
    function encode_image2 ($Image) {
    	return 'data:image/png;base64,'.base64_encode($Image);
    }
    function newguid(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid =  ''.substr($charid, 0, 8).$hyphen.substr($charid, 8, 4).$hyphen.substr($charid,12, 4).$hyphen.substr($charid,16, 4).$hyphen.substr($charid,20,12).'';
            return $uuid;
        }
    }
?>
