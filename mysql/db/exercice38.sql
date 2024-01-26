use employees;
DELIMITER $$
DROP FUNCTION IF EXISTS anciennete_employe;
CREATE FUNCTION anciennete_employe(emp_id INT, hire_date DATE) RETURNS INT(2)
BEGIN
DECLARE anciennete_employe INT(2);
SET anciennete_employe=CURRENT_DATE()-YEAR(hire_date);
RETURN anciennete_employe;
END;
$$
DELIMITER ;
SELECT emp_no,first_name,last_name,anciennete_employe FROM employees;