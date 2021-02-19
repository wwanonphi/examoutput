--create table departments(
--id int identity(1,1) primary key,
--department varchar(100)
--)
--create table salary(
--id int identity(1,1) primary key,
--salary int
--)

--create table employees(
--id int primary key identity(1,1),
--name varchar(50),
--date_hired datetime,
--department_id int,
--salary_id int
--)
 

 --insert into employees(name,date_hired,department_id,salary_id)
 --values
 --('Employee1',CONVERT(datetime,'2017-10-07'),3,1),
 --('Employee2',CONVERT(datetime,'2012-10-08'),2,3),
 --('Employee3',CONVERT(datetime,'2016-08-10'),1,2),
 --('Employee4',CONVERT(datetime,'2018-08-10'),3,2)

select a.*,b.department,c.salary from employees a
left join departments b on a.department_id = b.id
left join salary c on a.salary_id = c.id
 order by a.salary_id desc
 
 select * from employees where year(date_hired) > '2016'

 select * from employees a
 left join departments b on a.department_id = b.id
 where b.department ='IT' and year(a.date_hired) >'2017'