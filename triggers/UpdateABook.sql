
/*-------------------------------------*/
/*Trigger For Updating Book*/

create trigger Bk_Update on Book for Update as 
begin
   declare
      @numrows  int,
      @numnull  int,
      @errno    int,
      @errmsg   varchar(255)

      select  @numrows = @@rowcount
      if @numrows = 0
         return

      /*  Parent "AUTHOR" must exist when updating a child in "BOOK"  */
      if update(AUTHORID)
      begin
         if (select count(*)
             from   AUTHOR t1, inserted t2
             where  t1.AUTHORID = t2.AUTHORID) != @numrows
            begin
               select @errno  = 50003,
                      @errmsg = 'AUTHOR" does not exist. Cannot Modify child in "BOOK".'
               goto error
            end
      end
      /*  Parent "CATEGORY" must exist when updating a child in "BOOK"  */
      if update(CATEGORYID)
      begin
         if (select count(*)
             from   CATEGORY t1, inserted t2
             where  t1.CATEGORYID = t2.CATEGORYID) != @numrows
            begin
               select @errno  = 50003,
                      @errmsg = 'CATEGORY" does not exist. Cannot modify child in "BOOK".'
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