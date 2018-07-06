<?php
include "db/FluentPDO.php";
$pdo = new PDO("mysql:dbname=pic_nic_db", "root","");
// $pdo = new PDO("mysql:dbname=strange1_budus", "strange1_budusu","7I0fzINTN.)r");

$conn = new FluentPDO($pdo);

?>