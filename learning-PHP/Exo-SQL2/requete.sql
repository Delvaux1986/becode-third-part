SELECT * FROM students,school; 
-- Select ALL 
SELECT prenom FROM students
-- SELECT ONLY PRENOM
SELECT prenom,datenaissance,school FROM students
-- SELECT PRENOM BIRTHDATE SCHOOL FROM STUDENTS
SELECT prenom FROM students WHERE genre= "F"
-- SELECT ONLY WOMAN


SELECT prenom FROM students ORDER BY prenom DESC
-- ORDER BT DSC
'SELECT prenom FROM students ORDER BY prenom DESC limit 2'
-- whit limit
INSERT INTO students (nom,prenom,datenaissance,genre,school) VALUES ('Dalor','Ginette',19300101,'F',1)
-- INSERT GINETTE
UPDATE students SET genre = 'M',prenom = 'Omer' WHERE prenom = 'Ginette' AND genre = 'F'
-- MODIF GINETTE
DELETE FROM students WHERE idStudent = '3'
-- DELETE FROM ID
ALTER TABLE students MODIFY school VARCHAR(15)
-- MODIF COLUMN
UPDATE students SET school = 'Anderlecht' WHERE school = '2'
