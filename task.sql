CREATE TABLE task
(
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(100),
  description TEXT
);

CREATE TABLE task_skill
(
  task_id INT,
  skill_id INT
);