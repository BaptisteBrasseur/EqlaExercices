use employees;
CREATE VIEW inactive_employees AS
SELECT
    e.emp_no,
    e.birth_date,
    e.first_name,
    e.last_name,
    e.gender,
    e.hire_date,
    d.dept_name,
    de.to_date
FROM
    employees e
        JOIN
    dept_emp de ON e.emp_no = de.emp_no
        JOIN
    departments d ON de.dept_no = d.dept_no
WHERE CURDATE() > de.to_date;
SELECT * FROM inactive_employees LIMIT 10;