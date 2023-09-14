
/*-------------------------------------*/
/*Trigger For Insertin A new Book*/
create trigger Ins_Book on Book for insert 
as begin
declare
	   @numrows  int,
       @numnull  int,
       @errno    int,
       @errmsg   varchar(255)

select @numrows = @@ROWCOUNT
if @numrows = 0 return
 /*  Parent "AUTHOR" must exist when inserting a child in "BOOK"  */

 if Update(AUTHORID)
	 begin
	
		if (select COUNT(*)
			from AUTHOR t1, inserted t2
			where t1.AUTHORID =t2.AUTHORID)!= @numrows
		
		 begin
             select @errno  = 50002,
                   @errmsg = 'AuthorID doesnot exist.Cannot create A "BOOK" without having its author.'
             goto error
          end
	   end

if UPDATE(CategoryID)
	begin
		if( select COUNT(*)
		from CATEGORY c1, inserted c2
		where c1.CATEGORYID = c2.CATEGORYID)!=@numrows
	
	begin
		select @errno = 50003,
			   @errmsg = 'Category is Not fount,Cannot create a Book ! Failed Operation!'
		goto error

	end


 end
 return

/*  Errors handling  */
error:
    print @errmsg
    rollback  transaction
end
go
