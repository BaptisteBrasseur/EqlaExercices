use employees;
SELECT DISTINCT first_name, last_name, gender, hire_date, t.title FROM employees AS e
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
INNER JOIN titles AS t ON e.emp_no = t.emp_no LIMIT 10;
SELECT first_name, last_name, gender, hire_date, s.salary AS salary, s.from_date AS start, s.to_date AS s_end FROM employees AS e
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
GROUP BY e.emp_no HAVING emp_no =10500;/*
SELECT DISTINCT first_name, last_name, gender, hire_date, t.title, s.to_date AS s_end
FROM employees AS e
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
INNER JOIN titles AS t ON e.emp_no = t.emp_no
ORDER BY s_end DESC LIMIT 10;