

/* Search for Book by publisher */

create procedure Find_Publisher_book
@pub varchar(25)
as 
begin
select BOOKNAME
from BOOK
where PUBLISHER = @pub
end;



