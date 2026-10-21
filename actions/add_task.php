<?php
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $task_name = trim($_POST["task_name"]?? "");
    $task_details = trim($_POST["task_details"]?? "");
    if($task_name !== null && $task_name !== "" && $task_name !== false){

        require "config/database.php";

        $query = "INSERT INTO tasks (task_name,task_details) VALUES (:task_name,:task_details)";
        $statement = $pdo->prepare($query);
        
        $table_name; //to be defined later
        
        $statement->execute([":table_name"=>$table,":task_name"=>$task_name,"task_details"=>$task_details]);
    }
}


?>
