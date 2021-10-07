CREATE TABLE `Customer` (
	`id_customer` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` varchar(50) NOT NULL,
	PRIMARY KEY (`id_customer`)
);

CREATE TABLE `Admin` (
	`id_admin` INT NOT NULL AUTO_INCREMENT,
	`username` varchar(40) NOT NULL UNIQUE,
	`password` varchar(40) NOT NULL,
	`active` INT(1) NOT NULL,
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id_admin`)
);

CREATE TABLE `data_laundry` (
	`id_admin` INT NOT NULL,
	`id_customer` INT(11) NOT NULL,
	`tanggal_masuk` DATE NOT NULL,
	`jenis_layanan` INT(5) NOT NULL,
	`bobot` INT(3) NOT NULL,
	`berat` INT(2) NOT NULL,
	`total_harga` INT(9) NOT NULL
);

ALTER TABLE `data_laundry` ADD CONSTRAINT `data_laundry_fk0` FOREIGN KEY (`id_admin`) REFERENCES `Admin`(`id_admin`);

ALTER TABLE `data_laundry` ADD CONSTRAINT `data_laundry_fk1` FOREIGN KEY (`id_customer`) REFERENCES `Customer`(`id_customer`);




