<?php

$host = "ec2-54-204-26-8.compute-1.amazonaws.com";
$database = "dcqsnljoi2glni";
$port = "5432";
$username = "pkdnamiuddowgv";
$password = "vLHJx88HhmyO_RXlxHtqPKfXt_";

$conn_string = "host=".$host." port=".$host." dbname=".$database." user=".$username." password=".$password;

function get_db_conn() {
  $conn = pg_connect($conn_string);
  return $conn;
}


/*
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

*/

?>