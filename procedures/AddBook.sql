

/* Create Procedure to add Book */

create procedure add_Book

@AuthID int,
@catID int,
@Bname varchar(25),
@price float,
@amount bigint,
@ISBN bigint,
@lan varchar(25),
@pub varchar(25)
as 
begin
insert into Book (AUTHORID,CATEGORYID,BOOKNAME,PRICE,AMOUNT,ISBN,LANGUAGE,PUBLISHER)
values (@AuthID,@catID,@Bname,@price,@amount,@ISBN,@lan,@pub);
end;



