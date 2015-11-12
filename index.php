<?php

include_once 'dbconnect.php';

echo "Hello Snow World! <br /><br />";

$conn = pg_connect(pg_connection_string_from_database_url());

if (!$conn) {
  echo "Conn:" . $conn . "<br />";
  echo "An error occurred while connecting to DB.\n";
  exit;
}

$result = pg_query($conn, "SELECT area__c.name, area__c.ticker__c, area__c.acres__c, area__c.type__c  FROM salesforce.area__c");
if (!$result) {
  echo "An error occurred while making query.\n";
  echo pg_get_result($conn);
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "name: $row[0]  ticker__c: $row[1]";
  echo "<br />\n";
}

?> 