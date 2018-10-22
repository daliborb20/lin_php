<?php
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";


echo crypt("Hlorovodonicni  ugljovodinici", "solanicic");
echo "<br>";
echo strlen("Hlorovodonicni  ugljovodinici, solanicic");
$rec = "Hlorovodonicna kiselina rastvor joda";
echo "<br>";

for($i = 0; $i < strlen($rec); $i++){
   echo $rec[$i]."<br>";
}
$misljenje = "Something Useful
  Let us do something more useful now. We are going to check what sort of browser the visitor is using. For that, we check the user agent string the browser sends as part of the HTTP Note: _SERVER is a special reserved PHP variable that contains all web server information. It is known as a superglobal. See the related manual page on superglobals for more information. These special variables were introduced in PHP » 4.1.0. Before this time, we used the older *_VARS arrays instead, such as HTTP_SERVER_VARS. As of PHP 5.4.0 these older variables have been removed. (See also the note on old code.)" ;
echo $misljenje;

echo "<br>";
echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++=";
echo str_shuffle($misljenje);










?>
