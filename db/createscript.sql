drop database if exists customshoes;

-- create database
create database customshoes;

-- use database
use customshoes;

-- create tables

create table user (
    userID int not null auto_increment, 
    firstname varchar(25), 
    lastname varchar(25), 
    username varchar(25), 
    password varchar(25), 
    primary key(userID)
);

create table colorshoes (
    colorID int not null auto_increment, 
    userID int, 
    shoe varchar(25), 
    sole varchar(25), 
    logo varchar(25), 
    outer1 varchar(25), 
    exterior varchar(25), 
    primary key(colorID), 
    foreign key(userID) REFERENCES user(userID)
);

create table colorcontrollers (
    contID int not null auto_increment, 
    userID int, 
    controller varchar(25), 
    button varchar(25), 
    pad varchar(25), 
    middle varchar(25), 
    sides varchar(25), 
    primary key(contID), 
    foreign key(userID) REFERENCES user(userID)
);

--inserts
insert into user values (1, "leon", "mathis", "leonmathis", "123");
insert into user values (2, "Kanye", "West", "ye", "donda")