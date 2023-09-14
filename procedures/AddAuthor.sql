/* Create Procedure to add Author */

create procedure add_Author
@AID int,
@Aname varchar(25),
@nat varchar (25)
as 
begin
insert into AUTHOR (AUTHORID,AUTHORNAME,NATIONALITY) values (@AID,@Aname,@nat);
end;

/* Create Procedure to add Category */

create procedure add_Category
@Cname varchar(25)
as 
begin
insert into Category (CATEGORYNAME) values (@Cname);
end;
