create database hogwarts;

create table teacher_table
(
    id    tinyint auto_increment
        primary key,
    name  varchar(20) null,
    email varchar(30) not null,
    constraint teacher_table_id_uindex
        unique (id)
);

create table group_table
(
    id               tinyint auto_increment
        primary key,
    name             varchar(30) null,
    location         varchar(30) null,
    teacher_assigned tinyint     null,
    constraint class_table_id_uindex
        unique (id),
    constraint group_table_teacher_table_id_fk
        foreign key (teacher_assigned) references teacher_table (id)
);

create table student_table
(
    id       tinyint auto_increment
        primary key,
    name     varchar(30) null,
    email    varchar(50) null,
    group_id tinyint     null,
    constraint student_table_id_uindex
        unique (id),
    constraint student_table_group_table_id_fk
        foreign key (group_id) references group_table (id)
)
    comment 'table of all students';

