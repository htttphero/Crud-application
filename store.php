<?php
require 'database/QueryBuilder.php';

$db = new QueryBuilder;

//$db->addTask($data);
$db->store("tasks", $data);


header("Location: /"); exit;



