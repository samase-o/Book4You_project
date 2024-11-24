# Book Website

A dynamic and user-friendly PHP-based platform for browsing, searching, and managing books.

## Features
- **Browse Books**: View a wide range of books with details like title, author, and description.
- **Search Functionality**: Find books by title or author.
- **Admin Management**: Add, edit, or delete books via an admin panel.
- **User Accounts**: Register to save favorite books and write reviews.

## Technologies Used
- **Front-end**: HTML, CSS, JavaScript
- **Back-end**: PHP
- **Database**: MySQL

## Setup Instructions
1. Clone this repository to your local machine:
   ```bash
   git clone <repository-url>
2. Move the files to your server's root directory (e.g., htdocs for XAMPP).
3. Create a MySQL database and import the database.sql file included in the project.
4. Update the database connection details in the config.php file:
    ```bash
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_database_name";
5. Start your local server (e.g., XAMPP or WAMP) and open the website in your browser:
    ```bash
      http://localhost/book-website


## Folder Structure
- **css**: Stylesheets
- **images**: Images and book covers
- **includes**: PHP scripts (header, footer, database connection)
- **admin**: Admin panel files
- **user**: User-related pages

## Future Improvements
- Add a rating system for books.
- Enable advanced search filters.
- Implement a responsive design for better mobile compatibility.



