CREATE TABLE personal_info (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  bio TEXT
);

CREATE TABLE education (
  id INT PRIMARY KEY AUTO_INCREMENT,
  degree VARCHAR(255),
  institution VARCHAR(255),
  start_date DATE,
  end_date DATE
);

CREATE TABLE skills (
  id INT PRIMARY KEY AUTO_INCREMENT,
  skill_name VARCHAR(255),
  description TEXT
);

CREATE TABLE projects (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_name VARCHAR(255),
  description TEXT,
  start_date DATE,
  end_date DATE
);

CREATE TABLE contact_form (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  message TEXT
);