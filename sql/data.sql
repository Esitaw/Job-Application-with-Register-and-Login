CREATE TABLE teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    subject_specialty VARCHAR(255),
    qualification VARCHAR(255),
    years_of_experience INT,
    school_name VARCHAR(255),
    address VARCHAR(255),
    nationality VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO teachers (id, first_name, last_name, email, gender, subject_specialty, qualification, years_of_experience, school_name, address, nationality, date_added) 
VALUES 
(1, 'Alice', 'Morgan', 'amorgan0@schoolmail.com', 'Female', 'Mathematics', 'PhD in Mathematics', 15, 'Greenwood High School', '123 Elm St.', 'USA', '2024-05-10 14:32:22'),
(2, 'John', 'Smith', 'jsmith1@schoolmail.com', 'Male', 'Physics', 'MSc in Physics', 10, 'Hilltop Academy', '45 Maple Ave.', 'Canada', '2024-06-15 10:17:53'),
(3, 'Maria', 'Gonzalez', 'mgonzalez2@schoolmail.com', 'Female', 'Chemistry', 'BSc in Chemistry', 5, 'Sunshine Secondary School', '78 Birch Blvd.', 'Argentina', '2024-07-20 08:45:30'),
(4, 'Liam', 'Brown', 'lbrown3@schoolmail.com', 'Male', 'English', 'MA in English Literature', 12, 'Riverbank High', '22 Pine St.', 'UK', '2024-09-01 16:40:20'),
(5, 'Nina', 'Patel', 'npatel4@schoolmail.com', 'Female', 'Biology', 'PhD in Biology', 20, 'Bright Future Academy', '56 Oak Lane', 'India', '2024-08-18 11:25:56'),
(6, 'Ethan', 'Taylor', 'etaylor5@schoolmail.com', 'Male', 'History', 'MEd in History', 8, 'Heritage School', '789 Cedar Rd.', 'Australia', '2024-02-20 15:38:49'),
(7, 'Sofia', 'Martinez', 'smartinez6@schoolmail.com', 'Female', 'Geography', 'BEd in Geography', 4, 'Horizon International School', '90 Spruce Way', 'Spain', '2024-09-19 09:49:52'),
(8, 'Oliver', 'Wilson', 'owilson7@schoolmail.com', 'Male', 'Computer Science', 'MSc in Computer Science', 6, 'Tech Valley High', '17 Ash Ct.', 'Germany', '2024-04-22 10:34:56'),
(9, 'Emma', 'Johnson', 'ejohnson8@schoolmail.com', 'Female', 'Art', 'BA in Fine Arts', 18, 'Creative Minds Academy', '24 Cherry Dr.', 'France', '2024-01-25 08:26:12'),
(10, 'Noah', 'White', 'nwhite9@schoolmail.com', 'Male', 'Physical Education', 'Diploma in Sports Science', 7, 'Active Learning School', '11 Walnut Ave.', 'South Africa', '2024-03-30 13:19:25'),
(11, 'Isabella', 'Clark', 'iclark10@schoolmail.com', 'Female', 'Music', 'MA in Music Education', 9, 'Harmony High School', '300 Melody Ln.', 'Italy', '2024-04-10 09:15:22'),
(12, 'Mason', 'Hall', 'mhall11@schoolmail.com', 'Male', 'Economics', 'MSc in Economics', 11, 'Capital Knowledge Academy', '29 Finance Rd.', 'USA', '2024-06-01 14:17:53'),
(13, 'Sophia', 'King', 'sking12@schoolmail.com', 'Female', 'Environmental Science', 'PhD in Environmental Studies', 14, 'Eco Future High', '234 Greenway', 'Brazil', '2024-03-21 08:32:15'),
(14, 'James', 'Lee', 'jlee13@schoolmail.com', 'Male', 'Psychology', 'MSc in Psychology', 10, 'Mindful Learning Center', '76 Mind St.', 'South Korea', '2024-07-02 16:19:30'),
(15, 'Emma', 'Hernandez', 'ehernandez14@schoolmail.com', 'Female', 'Social Studies', 'MA in Sociology', 8, 'Community Heritage Academy', '50 Unity Ave.', 'Mexico', '2024-08-14 11:25:56'),
(16, 'Benjamin', 'Lopez', 'blopez15@schoolmail.com', 'Male', 'Philosophy', 'PhD in Philosophy', 19, 'Thinkers High School', '87 Ethos Blvd.', 'Chile', '2024-01-09 13:18:45'),
(17, 'Amelia', 'Gomez', 'agomez16@schoolmail.com', 'Female', 'Drama', 'BA in Performing Arts', 6, 'Spotlight Academy', '12 Broadway', 'Argentina', '2024-02-15 17:45:12'),
(18, 'Lucas', 'Mitchell', 'lmitchell17@schoolmail.com', 'Male', 'Mathematics', 'BSc in Applied Mathematics', 5, 'Number Savvy High', '345 Calculus Dr.', 'Canada', '2024-06-25 10:33:27'),
(19, 'Lily', 'Harris', 'lharris18@schoolmail.com', 'Female', 'Physics', 'PhD in Astrophysics', 20, 'Galaxy International School', '78 Cosmos Ln.', 'India', '2024-05-08 13:20:18'),
(20, 'Jacob', 'Young', 'jyoung19@schoolmail.com', 'Male', 'Literature', 'MEd in English Literature', 12, 'Literary Dreams Academy', '200 Poem Ct.', 'UK', '2024-04-29 15:17:45'),
(21, 'Mia', 'Martinez', 'mmartinez20@schoolmail.com', 'Female', 'Spanish', 'BA in Spanish Literature', 4, 'Hispanic Heritage School', '55 Español Blvd.', 'Spain', '2024-02-20 08:55:13'),
(22, 'Ethan', 'Davis', 'edavis21@schoolmail.com', 'Male', 'Chemistry', 'MSc in Chemical Engineering', 13, 'Science Wonders Academy', '91 Molecule Dr.', 'USA', '2024-03-19 10:15:42'),
(23, 'Chloe', 'Garcia', 'cgarcia22@schoolmail.com', 'Female', 'Geography', 'MEd in Geography Education', 9, 'Global Explorers School', '67 World St.', 'Colombia', '2024-07-18 11:49:01'),
(24, 'Noah', 'Brown', 'nbrown23@schoolmail.com', 'Male', 'Art', 'BA in Fine Arts', 7, 'Creative Canvas Academy', '99 Paintbrush Blvd.', 'France', '2024-01-24 09:18:30'),
(25, 'Harper', 'White', 'hwhite24@schoolmail.com', 'Female', 'Computer Science', 'MSc in Software Engineering', 10, 'Tech Innovators School', '23 Silicon Valley Rd.', 'Australia', '2024-08-22 13:37:29');
