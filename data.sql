CREATE DATABASE hospital_management;
USE hospital_management;
CREATE TABLE patients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address TEXT,
    admission_date DATE NOT NULL
);

insert into patients (name,aga,gender,address,admission_date) values("Sajad",20,'Male','paghman','20224-01-4');
