USE master
GO

CREATE DATABASE LibraryFinal	
ON
 	( NAME = LibraryFinal_dat,   
		FILENAME = 'C:\xampp\htdocs\libweb\CreateDatabase\CreateDatabaseLibFinal.mdf')
LOG ON  	
	( NAME = 'LibraryFinal_log',   
		FILENAME = 'C:\xampp\htdocs\libweb\CreateDatabase\CreateDatabaseLibFinal.ldf')
go