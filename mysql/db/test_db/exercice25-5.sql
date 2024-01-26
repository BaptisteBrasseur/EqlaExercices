use employees;
SELECT title, COUNT(e.emp_no) AS nb_employees FROM employees AS e
INNER JOIN titles AS t ON e.emp_no = t.emp_no
GROUP BY title;
SELECT title, COUNT(e.emp_no) AS nb_employees FROM employees AS e
INNER JOIN titles AS t ON e.emp_no = t.emp_no
GROUP BY title
ORDER BY nb_employees DESC LIMIT 1;
SELECT title, COUNT(e.emp_no) AS nb_employees FROM employees AS e
INNER JOIN titles AS t ON e.emp_no = t.emp_no
GROUP BY title
ORDER BY nb_employees LIMIT 1;
SELECT title, AVG(s.salary) AS moyenne FROM employees AS e
INNER JOIN titles AS t ON e.emp_no = t.emp_no
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
GROUP BY title;
SELECT AVG(s.salary) AS moyenne FROM salaries AS s;
SELECT first_name, last_name, AVG(s.salary) AS moyenne FROM employees AS e
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
GROUP BY salary DESC LIMIT 1;
SELECT first_name, last_name, AVG(s.salary) AS moyenne FROM employees AS e
INNER JOIN salaries AS s ON e.emp_no = s.emp_no
GROUP BY salary LIMIT 1;