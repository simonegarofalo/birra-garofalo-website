# Birra Garofalo

This HTML project represents a registration form for the Birra Garofalo website.

## Index

- [Description]
- [Installation]
- [Usage]


## Description

The HTML project is a web page that includes a registration form to collect information such as the user's first name, last name, and email address for commercial purposes. Once the mandatory fields are filled out, the user must also consent to the processing of their personal data before submitting the form.


## Installation

To view the project locally, follow these steps:

1. Clone the repository from GitHub:
    ```bash
    git clone https://github.com/tuo-username/birra-garofalo.git
    ```

2. Navigate to the project directory:
    ```bash
    cd birra-garofalo
    ```

3. Ensure you have a web server with PHP and MySQL configured.


4. Create a MySQL database named birra_garofalo and a table users with the fields:
    ```sql
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        trattamentodati BOOLEAN NOT NULL
    );
    ```

5. If necessary, modify the database connection details in the database.php file.

6. Open the index.html file in your web browser.


## Usage

You can use the registration form on the HTML page to collect data from potential prospects interested in your product and/or service. This data will be recorded and stored in the MySQL database.
