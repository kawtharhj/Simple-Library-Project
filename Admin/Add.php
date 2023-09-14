<?php

require ('connection.php');


#catches data submitted by html form
$Bk= $_POST['BookID'];
$AID =$_POST['AuthorID'];
$CID = $_POST['category'];
$name = $_POST['BookName'];
$amount = $_POST['Amount'];
$ISBN=$_POST['ISBN'];
$lan=$_POST['Language'];
$publisher=$_POST['Publisher'];
$conn = connect();

#Insert Borrow data in the database

$query = "Insert into [LibraryFinal].[dbo].[Book](AUTHORID ,CATEGORYID ,BOOKNAME ,AMOUNT,ISBN,LANGUAGE,PUBLISHER)
values ('{$AID}','{$CID}','{$name}','{$amount}','{$ISBN}','{$lan}','{$publisher}')";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
	

#checks if the borrow succeed
if($result === false){
	die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
	echo 'alert("Adding Book Failed!")';
	header('Location: AddBook.php');
}
else {
	
	header('Location: AddBook.php');
}
?>
 