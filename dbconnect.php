<?php

function pg_connection_string_from_database_url() {
  extract(parse_url(getenv('DATABASE_URL'));
  return "user=$user password=$pass host=$host dbname= sslmode=require" . substr($path, 1); # <- you may want to add sslmode=require there too
}

?>