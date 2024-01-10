 CREATE TABLE donors_tbl (
    donor_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(10),
    phone VARCHAR(15),
    address VARCHAR(255),
    donation_amount DECIMAL(10,2),
    donation_month VARCHAR(20),
    donation_type VARCHAR(20)
);

Query of donors_table

CREATE TABLE user_feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    subjects VARCHAR(255) NOT NULL,
    comment TEXT,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);