
	create trigger td_Category on Category for delete as
begin
try 
    declare
       @numrows  int
    select  @numrows = @@rowcount
    if @numrows = 0
       return
	   
    DECLARE  @bi int
	DECLARE DeltCat CURSOR FOR
    SELECT BookdID
    FROM BOOK 
	inner join CATEGORY  on BOOK.CATEGORYID = CATEGORY.CATEGORYID

	OPEN DeltCat

	FETCH NEXT FROM DeltCat INTO @bi;

	WHILE @@FETCH_STATUS=0
	BEGIN
	 delete from BOOK 
          where BOOK.BOOKDID = @bi
	FETCH NEXT FROM DeltCat INTO @bi;
	END;
	CLOSE DeltCat;
	DEALLOCATE DeltCat;
		  end try
       begin catch
      print 'Failed To delete'
       end catch
    return

