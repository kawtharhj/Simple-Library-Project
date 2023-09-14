
/* Create Cursor For displaying Borrowing Operation with Member name */
use LibraryFinal
go
declare @Mid int, @BID int , @FDate varchar(25) , @TDate varchar(25), @Mname varchar(25), @bname varchar(25)

declare borrowing cursor
for  select  MEMBERID,BOOKDID,FROMDATE,TODATE 
From Borrow 

open borrowing
Fetch next From borrowing  INTO @Mid,@BID,@Fdate,@Tdate;
while @@FETCH_STATUS =0

Begin 	
	declare Mborrow cursor 
		for select MEMBERNAME
		from MEMBERS
		where MEMBERID = @Mid

	open Mborrow ;
	Fetch next From Mborrow  INTO @Mname;
	while @@FETCH_STATUS =0
	Begin
	 Print '-Member: '+@Mname;
	 Fetch next From Mborrow  INTO @Mname;
	 end;
	close Mborrow;
	deallocate Mborrow;
	 
	declare Bborrow cursor 
		for select BOOKNAME from BOOK
		where BOOKDID = @BID

	open Bborrow 
	Fetch next From Bborrow  INTO @bname;
	while @@FETCH_STATUS =0
	Begin
	 Print 'Take a Book Named :'+@bname ;
	 Fetch next From Bborrow  INTO @bname;
	 end;
	close Bborrow;
	deallocate Bborrow;
	 
print concat('with ID: ',@BID, ' From Date :',@Fdate,' To Date: ',@Tdate);
Fetch next From borrowing  INTO @Mid,@BID,@Fdate,@Tdate;

end;
close borrowing;
deallocate Borrowing;






/*-/////////////////////////////////////////////-*/


use LibraryFinal
go

declare  @id bigint , @name varchar(25), @auth varchar(25), @pub varchar(25);

declare Choosing cursor 
for

select BOOKDID,BOOKNAME,PUBLISHER,AUTHORName
from BOOK B
Inner join Author A on B.AUTHORID = A.AUTHORID
where
B.Language = 'Italian'


open choosing
Fetch next From choosing  INTO @id,@name,@pub,@auth;

while @@FETCH_STATUS =0
begin
	print concat('BookID: ',@id, ' Name: "',@name,'" is written by: -',@auth, '- and Published by: ',@pub,' publisher');

	Fetch next From choosing  INTO @id,@name,@pub,@auth;
	end;
	close choosing;
	deallocate choosing;




	use LibraryFinal
go
declare @Bid int, @AID int,@CID int,@name varchar(25) , @amount int, @ISBN bigint, @lan varchar(25), @pub varchar(25)

declare Booking cursor
for  select  BOOKDID,AUTHORID,CATEGORYID,BOOKNAME,AMOUNT,ISBN,LANGUAGE,PUBLISHER
From BOOK

open Booking
Fetch next From Booking  INTO @Bid,@AID,@CID,@name,@amount,@ISBN,@lan,@pub;
while @@FETCH_STATUS =0

Begin 	
	 
	 
print concat('BookID: ',@BiD, 'AUTHORID :',@AID,' CATEGORYID: ',@CID,' Amount:',@amount, ' ISBN:',@ISBN,' Lang:',@lan,' Publisher:',@pub);
Fetch next From Booking  INTO @Bid,@AID,@CID,@name,@amount,@ISBN,@lan,@pub;


end;
close Booking;
deallocate Booking;


