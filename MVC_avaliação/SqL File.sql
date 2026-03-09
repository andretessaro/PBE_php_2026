create database mvc_avaliação;
use mvc_avaliação;

create table livros(
id integer auto_increment primary key,
    titulo varchar(255),
    valor varchar(255),
    quantidade varchar(255)
);

SELECT * FROM livros; 