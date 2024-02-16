use employees;
DELIMITER $$
DROP FUNCTION IF EXISTS anciennete_employe;
CREATE FUNCTION anciennete_employe(emp_id INT, hire_date DATE) RETURNS INT(2)
BEGIN
DECLARE anciennete_employe INT(2);
SET anciennete_employe=Year(CURRENT_DATE())-YEAR(hire_date);
RETURN anciennete_employe;
END;
$$
DELIMITER ;
SELECT emp_no,first_name,last_name,anciennete_employe(emp_no,hire_date) AS anciennete,YEAR(hire_date) FROM employees
WHERE emp_no IN (10614,10444,10001,10562,10006);