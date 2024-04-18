# Library Project

 ## 1. Description of the project
 This is a simple library app. It enables a user to list all available books, borrow one, list all borrowed books and return a book.

 Pending features :
 - authentication, reviews, advanced search and filtering features.
 

## 🛠️2. Installation
 Clone the repository:
```bash
git clone https://github.com/nati-Bel/library-project.git
```

Run the following commands:

```bash
composer install
```

Copy .env.example, rename as .env, change the db_username and db_password if it's necessary, and rename db_database with your database name

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel 
DB_USERNAME=root
DB_PASSWORD=
```

### Command to APP_KEY
```bash
php artisan key:generate
```
### Run the migrations
```bash
php artisan migrate
```
### Seed the database
```bash
php artisan db:seed
```
### Start the server
```bash
php artisan serve
```

### Running Tests
Create a database for testing purposes by copying the env.file and renaming it as env.testing and changing db_database name. Next, create and the new database for testing by running the following command :

```bash
  php artisan migrate --env=testing
```

To run tests, run the following command

```bash
  php artisan test
```

# 💻6. Technologies Used:

<ul>
    <li>LARAVEL</li>
    <li>BLADE</li>
    <li>TAILWIND</li>
    <li>ALPINE</li>
</ul>
