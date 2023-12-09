use lifebefore;
ALTER TABLE user_set CONVERT TO character SET utf8;

create table user_set(
	m_id	varchar(50) primary key,
    m_name	varchar(30) default '',
    us_set	text,
    us_isuse char(1) default 'y',
    us_server varchar(30),
    us_grade varchar(10),
	us_date datetime default now()
);
select * from user_set;
insert into user_set(m_id,m_name,us_set,us_server,us_grade)
values('lb_admin','관리자','26,7,15,15,36,39,22,203,21,26,21,44,27,46,60,203,34,11,39,85,108,203,34,24,36,17,22,51,4212,34,109,189,126,88,41,788,76,142,60,118,21,126,88','가을빛 산림','높음');
insert into user_set(m_id,m_name,us_set,us_server,us_grade)
values('lb_admin','테스터','26,7,15,15,36,39,22,203,21,26,21,44,27,46,60,203,34,11,39,85,108,203,34,24,36,17,22,51,4212,34,109,189,126,88,41,788,76,142,60,118,21,126,88','가을빛 산림','높음');


update user_set set us_isuse = '' where m_id='' ;

select * from user_set where us_isuse='y' and us_server ='가을 산림' and m_name like'%되나안되나%' order by us_date desc limit 10;

create table sale_list(
	sl_code int primary key auto_increment,
    sl_title varchar(50),
    sl_server varchar(50),
    sl_soc_1 int default 0,
    sl_soc_2 int default 0,
    sl_soc_3 int default 0,
    sl_soc_4 int default 0,
    sl_soc_5 int default 0,
    sl_soc_6 int default 0,
    sl_soc_7 int default 0,
    sl_soc_8 int default 0,
    sl_soc_9 int default 0,
    sl_soc_10 int default 0,
    sl_soc_11 int default 0,
    sl_soc_12 char(1) default 'n',
    sl_soc_13 char(1) default 'n',
    sl_soc_14 char(1) default 'n',
    sl_soc_15 char(1) default 'n',
    sl_gold int default 0
);