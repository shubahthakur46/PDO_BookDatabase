<?php
$id = $_GET['id'];

require 'connect.php';
require 'operation.php';

$pddb = Connect();

Delete($pddb, $id);

header('Location: index.php');
?>
Deleted!