
CREATE DATABASE `Ultimate_Health_Solution`;
USE `Ultimate_Health_Solution`;

CREATE TABLE `Hospital`(
    `Serial_No` INT UNSIGNED NOT NULL,
    `Hospital_ID` VARCHAR(200) NOT NULL,
    `Hospital_Name` TEXT NOT NULL,
    `Hospital_Address` TEXT NOT NULL
);

CREATE TABLE `Patient_Record`(
    `Serial_No` INT UNSIGNED NOT NULL,
    `Person_ID` VARCHAR(200) NOT NULL,
    `Doctor_ID` VARCHAR(200) NOT NULL,
    `Age` TEXT NOT NULL,
    `Date` DATE NOT NULL,
    `Disease` TEXT NOT NULL,
    `Medicine` TEXT NOT NULL
);

CREATE TABLE `Patient`(
    `Serial_No` INT UNSIGNED NOT NULL,
    `Patient_ID` VARCHAR(200) NOT NULL,
    `Password` VARCHAR(200) NOT NULL,
    `Image` VARCHAR(200) NOT NULL,
    `Patient_Name` TEXT NOT NULL,
    `Father's_Name` TEXT NOT NULL,
    `Gender` TEXT NOT NULL,
    `Blood_Group` TEXT NOT NULL
);

CREATE TABLE `Doctor`(
    `Serial_No` INT UNSIGNED NOT NULL,
    `Hospital_ID` VARCHAR(200) NOT NULL,
    `Doctor_ID` VARCHAR(200) NOT NULL,
    `Password` VARCHAR(200) NOT NULL,
    `Image` VARCHAR(200) NOT NULL,
    `Doctor_Name` TEXT NOT NULL,
    `Doctor_Speciality` TEXT NOT NULL
);

ALTER TABLE
    `Hospital`
ADD
    UNIQUE `hospital serial_no unique`(`Serial_No`);

ALTER TABLE
    `Hospital`
ADD
    PRIMARY KEY `hospital hospital_id primary`(`Hospital_ID`);

ALTER TABLE
    `Patient_Record`
ADD
    PRIMARY KEY `patient_record serial_no primary`(`Serial_No`);

ALTER TABLE
    `Patient`
ADD
    UNIQUE `patient serial_no unique`(`Serial_No`);

ALTER TABLE
    `Patient`
ADD
    PRIMARY KEY `patient patient_id primary`(`Patient_ID`);

ALTER TABLE
    `Doctor`
ADD
    UNIQUE `doctor serial_no unique`(`Serial_No`);

ALTER TABLE
    `Doctor`
ADD
    PRIMARY KEY `doctor doctor_id primary`(`Doctor_ID`);

ALTER TABLE
    `Patient_Record`
ADD
    CONSTRAINT `patient_record doctor_id foreign` FOREIGN KEY(`Doctor_ID`) REFERENCES `Doctor`(`Doctor_ID`);

ALTER TABLE
    `Patient_Record`
ADD
    CONSTRAINT `patient_record person_id foreign` FOREIGN KEY(`Person_ID`) REFERENCES `Patient`(`Patient_ID`);

ALTER TABLE
    `Doctor`
ADD
    CONSTRAINT `doctor hospital_id foreign` FOREIGN KEY(`Hospital_ID`) REFERENCES `Hospital`(`Hospital_ID`);