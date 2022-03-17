<?php

if(isset($_POST['id'])){
    $id = $_POST['id'];
    require_once('../../data/connect.php');
    $sql ='delete from songs where id ='.$id;
    execute($sql);
    
}
?>