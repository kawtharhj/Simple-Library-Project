/* Create Procedure to Make a Borrow */

create procedure Make_A_Borrow
@MID int,
@BID int,
@FrDate varchar(25),
@ToDate varchar(25)

as 
begin
insert into BORROW(BOOKDID,MEMBERID,FROMDATE,TODATE)
values (@BID,@MID,@FrDate,@ToDate);
end;


