

USE school_db;
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_name VARCHAR(100) NOT NULL,
    additional_comments TEXT,
    suggestions TEXT,
    question1 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question2 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question3 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question4 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question5 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question6 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question7 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question8 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question9 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question10 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question11 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    question12 ENUM('Yes', 'No', 'Maybe') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

