CREATE TABLE task
(
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(100),
  description TEXT,
  status VARCHAR(50),

  PRIMARY KEY(id)
);
