use mysql
CREATE USER geek IDENTIFIED BY 'geekg33k';
grant insert on syc10ver_xpy.user to geek@'localhost' identified by 'geekg33k' with grant option;
grant select on syc10ver_xpy.user to geek@'localhost' identified by 'geekg33k' with grant option;
grant select on syc10ver_xpy.fl4g to geek@'localhost' identified by 'geekg33k' with grant option;
flush privileges;