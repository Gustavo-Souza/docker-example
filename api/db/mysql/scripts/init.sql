CREATE DATABASE IF NOT EXISTS book_db;
USE book_db;

CREATE TABLE IF NOT EXISTS books (
  id INTEGER auto_increment,
  name VARCHAR(255),
  price DECIMAL(10, 2),

  PRIMARY KEY (id)
);

INSERT INTO books (name, price) VALUES ("Book test #1", 89.99);
INSERT INTO books (name, price) VALUES ("Book test #2", 19.00);