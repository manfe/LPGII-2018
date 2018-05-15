create database lpg2;
-- drop database lpg2;
use lpg2;

CREATE TABLE `users` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `username` varchar(255) NOT NULL,

  `password` varchar(255) DEFAULT NULL,
  
  `frase` varchar(255) DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `produto`(
  `id` int(11) NOT NULL AUTO_INCREMENT,

  `nome` varchar(255) DEFAULT NULL,

  `quantidade` double DEFAULT NULL,
  
  `valor` double DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- select * from produto;
-- select * from users;
-- drop table users;
-- drop table produto;