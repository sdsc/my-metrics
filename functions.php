<?php

function getPermission($localusername) {

   $db = new SQLite3('database/my-metrics.db') or die('Unable to open database');
   $sql =<<<EOF
      SELECT permission from users where adusername = '$localusername';
EOF;

   $ret = $db->query($sql) or die('Query Failed');
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $permission=$row['permission'];
   }
   $db->close(); 
   return $permission;

}


function insertMetricName($metric) {
   $db = new SQLite3('database/my-metrics.db') or die('Unable to open database');
   $db->exec("INSERT INTO metrics ('graphitename') VALUES ('$metric')") or die('Query Failed');
   echo "Operation done successfully\n";
   $db->close();
   return 1;

}

?>
