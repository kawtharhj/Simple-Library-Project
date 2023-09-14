

/* Create Procedure to add new Member */

create procedure add_Member
@Mname varchar(25),
@email varchar(50),
@pass varchar(25),
@phone varchar(25),
@address varchar(50)

as 
begin
insert into MEMBERS(MEMBERNAME,EMAIL,PASSWORD,PHONE,ADDRESS)
values (@Mname,@email,@pass,@phone,@address);
end;


