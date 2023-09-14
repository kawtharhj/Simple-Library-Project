
/*Trigger for updating in borrow operation */

create trigger TU_BORROW on BORROW for update as
begin
   declare
      @numrows  int,
      @numnull  int,
      @errno    int,
      @errmsg   varchar(255)

      select  @numrows = @@rowcount
      if @numrows = 0
         return

      /*  Parent "BOOK" must exist when updating a child in "BORROW"  */
      if update(BOOKDID)
      begin
         if (select count(*)
             from   BOOK t1, inserted t2
             where  t1.BOOKDID = t2.BOOKDID) != @numrows
            begin
               select @errno  = 50003,
                      @errmsg = 'BOOK" does not exist. Cannot modify child in "BORROW".'
               goto error
            end
      end
      /*  Parent "MEMBERS" must exist when updating a child in "BORROW"  */
      if update(MEMBERID)
      begin
         if (select count(*)
             from   MEMBERS t1, inserted t2
             where  t1.MEMBERID = t2.MEMBERID) != @numrows
            begin
               select @errno  = 50003,
                      @errmsg = 'MEMBERS" does not exist. Cannot modify child in "BORROW".'
               goto error
            end
      end
      /*  Parent "EMPLOYEE" must exist when updating a child in "BORROW"  */
    

      return

/*  Errors handling  */
error:
    print @errmsg
    rollback  transaction
end
go



