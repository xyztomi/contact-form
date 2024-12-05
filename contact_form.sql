-- Create database for Contact Form
CREATE DATABASE IF NOT EXISTS contact_form;
USE contact_form;

-- Table for Messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data for Contact Form
INSERT INTO messages (name, email, message) VALUES 
('John Doe', 'john@example.com', 'Can you help me with my account?'),
('Jane Smith', 'jane@example.com', 'Great website! Looking forward to updates.');
