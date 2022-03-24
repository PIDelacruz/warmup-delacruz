## PHP Warmup Module
*Contains website that accepts input from textbox when submitted and added to the database<br> afterwhich the data would be displayed on the website* <br><br>
*Data taken and displayed includes input from textbox and date time when submitted*
### Included Files
- ### Database Folder
  - **warmup.sql** <br> contains database sql file for importing
- ### Source Folder
  - **login_warmup.php** <br> contains login page
  - **database_login.php** <br> external php for verifying log in
  - **warmup.php** <br> contains main website page with php form
  - **database_input.php** <br> contains php for inserting php form input data to the database.
  - **database_output.php** <br> contains php for displaying data from database into main website (warmup.php)
  - **logout_warmup.php** <br> external php for logging out and destroying session
  - **dbcon.php** <br> external php for connection with database. used by all external php for database connection
  - **query_register.php** <br> php file for running insert with hash passwords
  
  
### Tools and Configuartions
- ### Running Website
  - Installed XAMPP 8.1.4 with PHP version 8.1.4
  - Configurations to php.ini includes: <br> -changed upload_max_filesize=128M (old = 40M) <br> -post_max_size = 128M (old = 40M)  
- ### Database
  - Uses MySQL in phpMyAdmin included in XAMPP installation.
