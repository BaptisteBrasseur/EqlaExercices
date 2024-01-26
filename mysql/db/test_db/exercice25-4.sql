use employees;
SELECT d.dept_name AS department, first_name, last_name, dm.from_date AS start, dm.to_date AS m_end FROM employees AS e
INNER JOIN dept_manager AS dm ON e.emp_no = dm.emp_no
INNER JOIN departments AS d ON d.dept_no = dm.dept_no;
SELECT first_name, last_name FROM employees AS e
INNER JOIN dept_manager AS dm ON e.emp_no = dm.emp_no;
SELECT first_name, last_name, d.dept_name AS department FROM employees AS e
INNER JOIN dept_emp AS de ON e.emp_no = de.emp_no
INNER JOIN departments AS d ON de.dept_no = d.dept_no
LIMIT 9;
SELECT first_name, last_name, d.dept_name FROM employees AS e
INNER JOIN dept_emp AS de ON e.emp_no = de.emp_no
INNER JOIN departments AS d ON de.dept_no = d.dept_no
WHERE d.dept_name = 'Finance'
LIMIT 9;
SELECT DISTINCT first_name, last_name, d.dept_name FROM employees AS e
INNER JOIN dept_emp AS de ON e.emp_no = de.emp_no
INNER JOIN departments AS d ON de.dept_no = d.dept_no
INNER JOIN dept_manager AS dm ON e.emp_no = dm.emp_no
INNER JOIN departments ON dm.dept_no = d.dept_no
WHERE d.dept_name = 'Finance';