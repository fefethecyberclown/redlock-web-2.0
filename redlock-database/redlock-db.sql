CREATE DATABASE Redlock;
USE Redlock;
CREATE TABLE users (
  ID int(11) NOT NULL AUTO_INCREMENT,
  Nama varchar(255) NOT NULL,
  Alamat varchar(255) NOT NULL,
  Jabatan varchar(255) NOT NULL,
  PRIMARY KEY (ID)
);
INSERT INTO users (Nama, Alamat, Jabatan) VALUES
  ('Felysia Meytri', 'Semarang', 'Boss'),
  ('Fefe', 'Jakarta', 'Pentester'),
  ('Bukan Fefe', 'Surabaya', 'Consultant'),
  ('Fefelysia', 'Bali', 'Chef'),
  ('efef', 'Singapore', 'Content Creator');
