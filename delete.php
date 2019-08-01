
<?php
include ('function.php');
$field = $_POST['field'];
delete('data.json',$field);
header('Location:tableUser.php');