-- Buat database
CREATE DATABASE IF NOT EXISTS becekbersih;

-- Gunakan database
USE becekbersih;

-- Buat tabel users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Tambahkan data contoh
INSERT INTO users (email, password) VALUES
('test@example.com', MD5('password123')),
('admin@becekbersih.com', MD5('admin123'));
