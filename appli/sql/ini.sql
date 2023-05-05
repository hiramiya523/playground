-- user作成
create USER 'shirakawa'@'localhost' IDENTIFIED BY 'shirakawa';
create USER 'remote'@'%' IDENTIFIED BY 'remote';
SELECT Host, User FROM mysql.user;

GRANT ALL ON *.* TO 'shirakawa'@'localhost';

show grants for 'user'@'%';

CREATE DATABASE IF NOT EXISTS mydb
CHARAcTER SET utf8mb4 
COLLATE utf8mb4_bin;
