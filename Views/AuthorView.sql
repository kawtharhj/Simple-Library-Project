
--Name and nationality of author --- and name of books and price From Book--
CREATE View de As
SELECT m.AUTHORNAME ,m.NATIONALITY , b.BOOKNAME ,b.AMOUNT
FROM AUTHOR m ,BOOK b 
WHERE m.AUTHORID = b.AUTHORID;

select *
from de

