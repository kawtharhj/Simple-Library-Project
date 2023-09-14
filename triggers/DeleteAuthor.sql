/******-----------------------------*****/
/*Create a Trigger before Deleting Author to delete All his related books*/
create trigger td_Author on Author for delete as
begin
try 
    declare
       @numrows  int
    select  @numrows = @@rowcount
    if @numrows = 0
       return
	   
    DECLARE  @bi int
	DECLARE DeltAuth CURSOR FOR
    SELECT BookdID
    FROM BOOK 
	inner join AUTHOR  on BOOK.AUTHORID = AUTHOR.AUTHORID

	OPEN DeltAuth

	FETCH NEXT FROM DeltAuth INTO @bi;

	WHILE @@FETCH_STATUS=0
	BEGIN
	 delete from BOOK 
          where BOOK.BOOKDID = @bi
	FETCH NEXT FROM DeltAuth INTO @bi;
	END;
	CLOSE DeltAuth;
	DEALLOCATE DeltAuth;
		  end try
       begin catch
      print 'Failed To delete'
       end catch
    return
