<html>
<head><title>Shibboleth test</title></head>
<body><pre>
<?php 
$localusername=$_SERVER['ADUSERNAME']; 

   echo "hello $localusername!";

   $db = new SQLite3('database/my-metrics.db') or die('Unable to open database');
   $sql =<<<EOF
      SELECT * from users where adusername = '$localusername';
EOF;

   $ret = $db->query($sql) or die('Select Failed');
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['userid'] . "\n";
      echo "NAME = ". $row['adusername'] ."\n";
   }
   echo "Operation done successfully\n";
   $db->close();
	
?>
<a href="/Shibboleth.sso/Logout?return=https://a4.ucsd.edu/tritON/logout?target=http://www.ucsd.edu">Logout</a>
</pre></body>
</html>
