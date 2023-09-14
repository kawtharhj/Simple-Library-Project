
/* Create Procedure to Find Author by ID */

create procedure Find_Author
@AID int
as 
begin
select AuthorName
from AUTHOR
where AUTHORID = @AID

end;

/* Search for Book by language */

create procedure Find_Book
@lan varchar(25)
as 
begin
select BOOKNAME
from BOOK
where LANGUAGE = @lan

end;
