<?php
require "config/database.php";
$active_query = "SELECT * FROM tasks WHERE active = TRUE";
$statement = $pdo->prepare($active_query);
$statement->execute([":table_name"=>$table]);
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>