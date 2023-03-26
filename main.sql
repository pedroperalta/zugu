CREATE TABLE questions (
  id INT(11) NOT NULL AUTO_INCREMENT,
  question_text TEXT NOT NULL,
  correct_answer TEXT NOT NULL,
  option1 TEXT NOT NULL,
  option2 TEXT NOT NULL,
  option3 TEXT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO questions (question_text, correct_answer, option1, option2, option3) VALUES ('What is the sum of the following expression: $2x^2 + 3x - 4$ and $4x^2 - 2x + 1$?', '$6x^2 + x - 5$', '$6x^2 + x - 3$', '$6x^2 + x - 5$', '$6x^2 + x + 3$');
