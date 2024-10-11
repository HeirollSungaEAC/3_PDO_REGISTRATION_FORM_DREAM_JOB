CREATE TABLE dream_professions (
    profession_id INT AUTO_INCREMENT PRIMARY KEY,
    profession_name VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    experience VARCHAR(255) NOT NULL,
    job_type VARCHAR(255) NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
