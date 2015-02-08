<?php
include_once("./snoopy.class.php");

$url = "";
$s = new snoopy();
$s->agent = "(compatible; MSIE 4.01; MSN 2.5; AOL 4.0; Windows 98)";

$pass = "1";
$f = array("name"=>"admin", "passowrd"=>$pass);

$s->submit($url, $f);

$res = $s->results;

if (preg_match('/id="login_name"/', $res) && preg_match('/<form action="\/index\/verify" method="post" name="gxcms"/', $res)){
  

} else {
  echo $pass.$res;
}

