
 <?php

require ('connection.php');

#catches data submitted by html form
$name = $_POST['name'];
$MID =$_POST['memberID'];
$BID = $_POST['BookDID'];
$FDate = $_POST['FromDate'];
$TDate = $_POST['ToDate'];
$conn = connect();

#Insert Borrow data in the database

$query = "Insert into [LibraryFinal].[dbo].[Borrow] (BookDID,MemberID,FromDate,ToDate) values ('{$BID}','{$MID}','{$FDate}','{$TDate}')";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
	

#checks if the borrow succeed
if($result === false){
	echo "<h1> Borrowing Operation Failed!</h1>";
	#die( print_r( sqlsrv_errors(), true));
else {
	header('location:Borrow.html');
}

#checks if the search brought some row and if it is one only row
/*if(sqlsrv_has_rows($result) != 1){
	echo "ID entered is wrong , Enter Your ID";
	header('Location: Borrow.html');
}
else {
	
	header('Location: Home.php');
}*/
?>
 