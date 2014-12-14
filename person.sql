CREATE TABLE person
(
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(50),
email VARCHAR (50)
);

CREATE TABLE person_skill
(
person_id INT,
skill_id INT
);