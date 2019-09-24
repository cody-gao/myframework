create database IF NOT EXISTS g_students charset utf8 collate utf8_general_ci;

use g_students;
create table courses (num int AUTO_INCREMENT PRIMARY KEY, name varchar(100) NOT NULL, submission_date timestamp  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


insert into courses (name,submission_date) values("数学",'20190923000000');
insert into courses (name,submission_date) values("语文",'20190923000000');
insert into courses (name,submission_date) values("英语",'20190923000000');