
--Name and address From MEMBER --- and Fromdate->Todate from BORROW--
CREATE View dt As
SELECT m.MEMBERNAME ,m.ADDRESS , b.FROMDATE ,b.TODATE
FROM MEMBERS m ,BORROW b 
WHERE m.MEMBERID = b.MEMBERID;

select *
from dt 