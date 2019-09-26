
<?php

require 'db-connect.php';

$sql = 'DELETE FROM "group" WHERE id = 4';

$result = pg_query($dbconn, $sql);
if(!$result) {
    echo pg_last_error($dbconn);
} else {
    echo "Deleted successfully/n";
}

pg_close($dbconn);

?>