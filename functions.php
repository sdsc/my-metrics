<?php

function insertMetricName($metric)

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
      INSERT INTO metrics ('graphitename') VALUES ( $metric );
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $permission=$row['permission'];
   }
   echo "Operation done successfully\n";
   $db->close();


?>
