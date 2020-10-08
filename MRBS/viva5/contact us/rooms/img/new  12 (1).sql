---Labsheet 5---
--1--
create table department_it198(
dno integer,
dname varchar(50),
constraint department_pk9 primary key(dno)

)
create table employee_IT198(
 eno integer,
 NIC CHAR(10),
 ename VARCHAR(50),
 address varchar(50),
 dnumber integer,
 
 constraint emp123_pk primary key(eno),
 constraint emp123_fk foreign key(dnumber) references department_it198(dno)

 )

 create table project_IT56(
 pno integer,
 pname varchar(20),
 constraint project_pk32 primary key(pno)

 )

 create table work_on123(
 eno integer,
 pno integer,
 hired_date date,
 hours integer,
 constraint work_on12367 primary key(eno,pno),
 constraint work_on1233 foreign key(eno) references  employee_IT198(eno),
 constraint work_on12336 foreign key(pno) references  project_IT56(pno)
 )



