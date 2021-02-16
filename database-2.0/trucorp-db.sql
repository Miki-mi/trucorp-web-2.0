USE Trucorp;

CREATE TABLE users(
	ID VARCHAR(10) PRIMARY KEY,
	Nama VARCHAR(30) NOT NULL,
	Kantor VARCHAR(10) NOT NULL
);

INSERT INTO users (ID, Nama, Kantor) VALUES
('ID001', 'Roger', 'Pusat'),
('ID002', 'Mike', 'Pusat'),
('ID003', 'David', 'Cabang'),
('ID004', 'Ilham', 'Cabang'),
('ID005', 'Wendy', 'Pusat'),
('ID006', 'Iko', 'Pusat'),
('ID007', 'Maria', 'Cabang');
