<?php

require ('connection.php');
#catches data submitted by html form
$CID = $_POST['CategoryID'];
$name = $_POST['Category'];
$conn = connect();

#Insert Borrow data in the database

$query = "Insert into [LibraryFinal].[dbo].[CATEGORY](CATEGORYID,CATEGORYNAME)
values ('{$CID}','{$name}')";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
	

#checks if the borrow succeed
if($result === false){
	die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
	echo 'alert("Adding Book Failed!")';
	header('Location: Category.php');
}
else {
	
	header('Location: AddCategory.php');
}
?>
 