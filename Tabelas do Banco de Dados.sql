CREATE TABLE usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
senha varchar(30),
email varchar(30),
nome varchar(30)
Primary Key (ID)) ENGINE = MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE noticias (
id int(5) NOT NULL auto_increment,
nome char(30) NOT NULL,
sobrenome char(30) NOT NULL,
data date NOT NULL,
hora time NOT NULL,
titulo char(100) NOT NULL,
subtitulo char(200),
texto text NOT NULL,
ver char(3) DEFAULT 'off',
PRIMARY KEY (id),
UNIQUE id (id)) ENGINE=MyISAM DEFAULT CHARSET=latin1;