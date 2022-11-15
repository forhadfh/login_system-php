create table users(
    id INT (3) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(40),
    phone VARCHAR(11),
    email VARCHAR(30),
    password TEXT,
    username VARCHAR(30),
    joiningdate TIMESTAMP,
    status TEXT,
);