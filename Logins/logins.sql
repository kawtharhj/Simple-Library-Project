use master
go

Create LOGIN Employee
with password = 'passEm'

use LibraryFinal
go

create USER userEmployee FOR LOGIN Employee

GRANT SELECT ,INSERT ON LibraryFinal.dbo.Borrow TO userEmployee
GRANT SELECT, INSERT ON LibraryFinal.dbo.MEMBERS TO userEmployee
GRANT SELECT ON LibraryFinal.dbo.BOOK To userEmployee


Create Login Member with password = 'Member'

create user userMember for login Member
use LibraryFinal
go
GRANT Select ,INSERT ON LibraryFinal.db.BORROW To userMember