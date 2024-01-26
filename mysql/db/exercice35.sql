USE Exercice27;
DELIMITER $$
DROP FUNCTION IF EXISTS hello;
CREATE FUNCTION hello(first_name VARCHAR(20), last_name VARCHAR(20))
RETURNS VARCHAR(50)
BEGIN
DECLARE hello VARCHAR(50);
SET hello=CONCAT('Hello ',first_name,' ',last_name,' !');
RETURN hello;
END;
$$
DELIMITER ;