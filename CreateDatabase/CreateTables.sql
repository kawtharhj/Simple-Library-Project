/*==============================================================*/
/* DBMS name:      Microsoft SQL Server 2016                    */
/* Created on:     3/9/2022 12:33:04 AM                         */
/*==============================================================*/


use LibraryFinal
/*==============================================================*/
/* Table: AUTHOR                                                */
/*==============================================================*/
create table AUTHOR (
   AUTHORID             bigint    not null,
   AUTHORNAME           varchar(50)          not null,
   NATIONALITY          varchar(25)          null,
   constraint PK_AUTHOR primary key (AUTHORID)
)
go

/*==============================================================*/
/* Table: BOOK                                                  */
/*==============================================================*/
create table BOOK (
   BOOKDID              bigint        IDENTITY(1,1)       not null  ,
   AUTHORID             bigint               not null,
   CATEGORYID           bigint               not null,
   BOOKNAME             varchar(50)          not null,
   AMOUNT               bigint               not null,
   ISBN                 bigint               null,
   LANGUAGE             varchar(15)          not null,
   PUBLISHER            varchar(50)          not null,
   constraint PK_BOOK primary key (BOOKDID),
   FOREIGN KEY (AUTHORID) REFERENCES AUTHOR(AUTHORID)
)
go

/*==============================================================*/
/* Table: BORROW                                                */
/*==============================================================*/
create table BORROW (
  
   BOOKDID              bigint          not null,
   MEMBERID             bigint               not null,
   FROMDATE             varchar(25)          not null,
   TODATE               varchar(25)          not null,
   constraint PK_BORROW primary key (BOOKDID, MEMBERID),
    FOREIGN KEY (BOOKDID) REFERENCES BOOK(BOOKDID),
	 FOREIGN KEY (MEMBERID) REFERENCES MEMBERS(MEMBERID),
	 
)
go

/*==============================================================*/
/* Table: CATEGORY                                              */
/*==============================================================*/
create table CATEGORY (
   CATEGORYID           bigint              not null,
   CATEGORYNAME         varchar(50)          not null,
   constraint PK_CATEGORY primary key (CATEGORYID)
)
go



/*==============================================================*/
/* Table: MEMBERS                                               */
/*==============================================================*/
create table MEMBERS (
   MEMBERID             bigint       IDENTITY(1,1)        not null,
   MEMBERNAME           varchar(50)          not null,
   PASSWORD             varchar(50)          not null,
   PHONE                varchar(25)          null,
   EMAIL                varchar(50)          not null,
   ADDRESS              varchar(100)         null,
  
   constraint PK_MEMBERS primary key (MEMBERID)
)
go

