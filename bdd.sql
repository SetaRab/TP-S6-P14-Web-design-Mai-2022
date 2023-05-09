drop table if exists Admin cascade;
drop table if exists Client cascade;
drop table if exists Article cascade;
drop table if exists Photo cascade;


create table Admin(
    id serial primary key not null,
    email varchar(50) not null,
    pass varchar(10) not null
);
insert into Admin(email,pass) values
    ('admin@gmail.com','admin');


create table Client(
    id serial primary key not null,
    email varchar(50) not null,
    pass varchar(10) not null
);
insert into client(email,pass) values
    ('seta@gmail.com','seta');


create table Article(
    id serial primary key not null,
    titre varchar not null,
    photo text,
    resume text,
    contenu text not null
);

create table Photo(
    id serial primary key not null,
    idArticle int references Article(id) not null,
    image text
);
