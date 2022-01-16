<?php
$id = $_GET['id'];

require 'db/connect.php';
require 'db/operation.php';

$pddb = Connect();

Delete($pddb, $id);

header('Location: index.php');
?>
Deleted!