<?php
require('connection.php');


$name=$_POST['Cname'];
$conn = connect();

$query = "Delete from [LibraryFinal].[dbo].[CATEGORY]
where CATEGORYNAME = '{$name}' ";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
	

#checks if the borrow succeed
if($result === false){
	die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
	echo 'alert("Deleting Book Failed!")';
	header('Location: Category.php');
}
else {
	
	header('Location: Category.php');
}
?>
