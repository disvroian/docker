CREATE DATABASE www_smarties_local;
GRANT ALL PRIVILEGES ON www_smarties_local.* TO 'myuser'@'%' IDENTIFIED BY 'myuser';
GRANT ALL PRIVILEGES ON www_smarties_local.* TO 'myuser'@'localhost' IDENTIFIED BY 'myuser';
FLUSH PRIVILEGES;
USE www_smarties_local