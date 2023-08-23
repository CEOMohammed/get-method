This project consists of an HTML form that submits a value using the GET method to a PHP script. The PHP script connects to a MySQL database and stores the submitted value. It also retrieves the last stored value from the database and displays it.

Files:
- get.html: HTML file containing the form for submitting a value.
- insert_get.php: PHP script that handles the form submission, stores the value in the database, and retrieves the last stored value.
- readme.txt: This file, providing information about the project.

Database:
- Name: robot_moves
- Table: get
- Columns: ID (auto-increment), Number

Setup:
1. Ensure you have a MySQL server installed and running.
2. Create a database named "robot_moves".
3. Create a table named "get" in the "robot_moves" database with the following columns: ID (auto-increment) and Number.
4. Update the database connection details (servername, username, password, dbname) in the insert_get.php file with your MySQL credentials.

Usage:
1. Open the get.html file in a web browser.
2. Enter a number in the input field and click the "Submit" button.
3. The submitted value will be stored in the "get" table of the "robot_moves" database.
4. The last stored value will be displayed on the page.
