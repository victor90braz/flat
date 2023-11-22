# Flat

## Project Overview

"Flat" is a web application built with PHP (Laravel), MySQL, and Tailwind CSS. It aims to create a simple page application with CRUD functionality, including user login and registration.

## Technologies:

PHP (Laravel), MySQL, Unit Testing, and Tailwind CSS Project

## Backend Setup

### 1. Clone the Repository:

        git clone https://github.com/victor90braz/flat.git

### 2. Start the Laravel Development Server:

Install dependencies:

-                                 composer install

Run migrations and seed the database:

-                                 php artisan migrate --seed

Start the Laravel application:

-                                 php artisan serve

Run Tests:

-                                 php artisan test

Access your project at http://127.0.0.1:8000 in your browser.

### 3. Check Installed PHP Version:

php --version

-                                 PHP 8.2.10

### 4. Database Connection:

Update your .env file with the appropriate database connection details:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_user
        DB_PASSWORD=your_database_password

## Frontend Setup

### 1. Install Node.js and NPM:

Make sure you have Node.js and NPM installed. Check your versions:

node --version

-                         v18.17.1

npm --version

-                         10.0.0

### 2. Clone the Repository (if not done already):

bash

git clone https://github.com/victor90braz/flat.git

### 3. Install Frontend Dependencies:

-                       npm install

### 4. Start the Frontend Development Server:

-                       npm run dev

Access your project at http://127.0.0.1:8000 in your browser.

## Project Images

### feature tests

![Flat Tests Image](/storage/images/flat-tests.png)

This image showcases the results of various feature tests for the "Flat" project. It includes tests for controllers, requests, routes, views, and components, covering functionalities like flat listing, user authentication, commenting, and more.

### responsive design

![Main Page Image](/storage/images/flat-home.png)

This responsive main page design, crafted with Laravel and Tailwind CSS, renders all flats with features for users to create, edit, and view details. The mobile version is optimized for seamless user interaction.

### form validation

![Login Image](/storage/images/flat-login.png)

This image represents a login page designed with Laravel and Tailwind CSS. The form includes request validation to ensure a secure and seamless user login experience.

### routes

![routes](/storage/images/flat-routes.png)

This image represents a routes of pages and respectives controllers.
