use LibraryFinal

create index Bk_name on Book(BookName asc)
create index Categ_Name on Category ( CategoryName ASC)
create index Auth_Name on Author (AuthorName ASC)
create index  Mem_Name on Members ( MemberName ASC)
create index  ISBN_nb on Book ( ISBN ASC)
create index  Lang on Book (Language ASC)
create nonclustered index Categ_I on Book ( CategoryID ASC)
create index  pubName on Book (Publisher ASC)
create index  fk_BorrowBk on Borrow (BookDID ASC)
create index fk_borrowMem on Borrow (MemberID ASC)
create nonclustered index Auth_I on Book ( AuthorID ASC)