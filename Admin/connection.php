<?php

function connect() {
	$serverName = "DESKTOP-5H8VKF7\SQLEXPRESS"; //serverName\instanceName

	// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
	// La conexión se intentará utilizando la autenticación Windows.
	$connectionInfo = array( "Database"=>"LibraryFinal" ,"UID"=>"kawthar","PWD"=>"koko" );
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn ) {
		 return $conn;
	}else{
		die( print_r( sqlsrv_errors(), true));
		return 0; 
	}
}
?>
