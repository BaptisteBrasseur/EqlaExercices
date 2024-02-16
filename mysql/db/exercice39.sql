use employees;
CREATE VIEW employees_info AS
SELECT
    e.emp_no,
    e.birth_date,
    e.first_name,
    e.last_name,
    e.gender,
    e.hire_date,
    d.dept_name,
    t.title,
    s.salary
FROM
    employees e
        JOIN
    dept_emp de ON e.emp_no = de.emp_no
        JOIN
    departments d ON de.dept_no = d.dept_no
        JOIN
    titles t ON e.emp_no = t.emp_no
        JOIN
    salaries s ON e.emp_no = s.emp_no
WHERE
        de.to_date = '9999-01-01';
SELECT * FROM employees_info LIMIT 10;