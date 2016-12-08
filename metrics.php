<html>
<head><title>Shibboleth test</title></head>
<body><pre>
<?php 
$localusername=$_SERVER['ADUSERNAME']; 

	echo "hello $localusername!";



   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('my-metrics.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from users;
EOF;

   $ret = $db->query($sql);
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
