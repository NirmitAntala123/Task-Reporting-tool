<?php
include("connection.php");
$id=$_GET[0];
$pname=$_GET['pname'];
$sql =<<<EOF
UPDATE regdetails set pname = '$pname' where ID='$id';
EOF;
$ret = pg_query($db, $sql);
if(!$ret) {
echo pg_last_error($db);
exit;
} else {
echo "Record updated successfully\n";
}

header('Location:index.php');
?>