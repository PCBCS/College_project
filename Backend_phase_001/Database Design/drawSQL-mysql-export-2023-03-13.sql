CREATE TABLE `Hospital`(
    `Serial No` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Hospital ID` VARCHAR(200) NOT NULL,
    `Hospital Name` TEXT NOT NULL,
    `Hospital Address` TEXT NOT NULL
);
ALTER TABLE
    `Hospital` ADD PRIMARY KEY `hospital_hospital id_primary`(`Hospital ID`);
CREATE TABLE `Patient Record`(
    `Serial No` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Person ID` VARCHAR(200) NOT NULL,
    `Doctor ID` VARCHAR(200) NOT NULL,
    `Age` TEXT NOT NULL,
    `Date` DATE NOT NULL,
    `Disease` TEXT NOT NULL,
    `Medicine` TEXT NOT NULL
);
ALTER TABLE
    `Patient Record` ADD PRIMARY KEY `patient record_serial no_primary`(`Serial No`);
CREATE TABLE `Patient`(
    `Serial No` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Patient ID` VARCHAR(200) NOT NULL,
    `Password` VARCHAR(200) NOT NULL,
    `Image` VARCHAR(200) NOT NULL,
    `Patient Name` TEXT NOT NULL,
    `Father's Name` TEXT NOT NULL,
    `Gender` TEXT NOT NULL,
    `Blood Group` TEXT NOT NULL
);
ALTER TABLE
    `Patient` ADD PRIMARY KEY `patient_patient id_primary`(`Patient ID`);
CREATE TABLE `Doctor`(
    `Serial No` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Hospital ID` VARCHAR(200) NOT NULL,
    `Doctor ID` VARCHAR(200) NOT NULL,
    `Password` VARCHAR(200) NOT NULL,
    `Image` VARCHAR(200) NOT NULL,
    `Doctor Name` TEXT NOT NULL,
    `Doctor Speciality` TEXT NOT NULL
);
ALTER TABLE
    `Doctor` ADD PRIMARY KEY `doctor_doctor id_primary`(`Doctor ID`);
ALTER TABLE
    `Patient Record` ADD CONSTRAINT `patient record_doctor id_foreign` FOREIGN KEY(`Doctor ID`) REFERENCES `Doctor`(`Doctor ID`);
ALTER TABLE
    `Patient Record` ADD CONSTRAINT `patient record_person id_foreign` FOREIGN KEY(`Person ID`) REFERENCES `Patient`(`Patient ID`);
ALTER TABLE
    `Doctor` ADD CONSTRAINT `doctor_hospital id_foreign` FOREIGN KEY(`Hospital ID`) REFERENCES `Hospital`(`Hospital ID`);