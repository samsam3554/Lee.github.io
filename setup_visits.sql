-- setup_visits.sql
CREATE DATABASE portfolio_db;
USE portfolio_db;

CREATE TABLE visits (
  id INT AUTO_INCREMENT PRIMARY KEY,
  count INT NOT NULL
);

INSERT INTO visits (count) VALUES (0);
