## PHP Warmup Module
*contains website that accepts input from textbox to be submitted and added to the database afterwhich the data would be displayed on the website*
### Included Files
- ### Database Folder
  - **messages.sql** <br> contains database sql file for importing
- ### Source Folder
  - **warmup.php** <br> contains main website page with php form
  - **database_input.php** <br> contains php for inserting php form input data to the database.
  - **database_output.php** <br> contains php for displaying data from database into main website (warmup.php)
### Tools and Configuartions
- ### Running Website
  - Installed XAMPP 8.1.4 with PHP version 8.1.4
  - Configurations to php.ini includes: <br> -changed upload_max_filesize=128M (old = 40M) <br> -post_max_size = 128M (old = 40M)  
- ### Database
  - Uses MySQL in phpMyAdmin included in XAMPP installation.
