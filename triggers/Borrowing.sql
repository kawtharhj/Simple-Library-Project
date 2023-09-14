
/*-------------------------------------*/
/*Trigger For Borrowing Operation*/

create trigger TI_BORROW on BORROW for insert as
begin
    declare
       @numrows  int,
       @numnull  int,
       @errno    int,
       @errmsg   varchar(255)

    select  @numrows = @@rowcount
    if @numrows = 0
       return

    /*  Parent "BOOK" must exist when inserting a child in "BORROW"  */
    if update(BOOKDID)
    begin
       if (select count(*)
           from   BOOK t1, inserted t2
           where  t1.BOOKDID = t2.BOOKDID) != @numrows
          begin
             select @errno  = 50002,
                    @errmsg = 'Book is not found in "BOOK table". Cannot create  "BORROW" operation.'
             goto error
          end
    end
    /*  Parent "MEMBERS" must exist when inserting a child in "BORROW"  */
    if update(MEMBERID)
    begin
       if (select count(*)
           from   MEMBERS t1, inserted t2
           where  t1.MEMBERID = t2.MEMBERID) != @numrows
          begin
             select @errno  = 50002,
                    @errmsg = 'Failed Operation, Member is not found Check Member ID.'
             goto error
          end
    end
    /*  Parent "EMPLOYEE" must exist when inserting a child in "BORROW"  */
   

    return

/*  Errors handling  */
error:
    print  @errmsg
    rollback  transaction
end
go
