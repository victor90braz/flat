# Flat

## Project Overview

"Flat" is a web application crafted with PHP (Laravel), MySQL, and Tailwind CSS. The goal is to provide a straightforward platform with essential features:

-   **CRUD Functionality:**
    Users can Create, Read, Update, and Delete flat listings.
-   **User Login and Registration:** Secure access for users.

-   **Unit Test Coverage:**
    Comprehensive unit tests cover various functionalities, including controllers, requests, routes, views, and authentication processes.

### Features:

#### Dynamic Home Page:

Discover all flats created by users. Listings include vital details for a comprehensive view.

#### Flat Details Section:

Explore flat listings in-depth. Engage in discussions and share insights by adding comments to specific flat listings.

#### Comments Feature:

Enrich discussions by commenting on flat listings. Share your thoughts, ask questions, and interact with other users seamlessly.

#### My Flats Section:

A personalized space for users to manage their flats easily. Delete or edit listings with seamless control.

"Flat" is designed for simplicity, allowing users to interact with flat listings, share thoughts, and manage their own flats effortlessly.

## Technologies:

PHP (Laravel), MySQL, Unit Testing, and Tailwind CSS Project

## Backend Setup

### 1. Clone the Repository:

        git clone https://github.com/victor90braz/flat.git

### 2. Start the Laravel Development Server:

Install dependencies:

-                                                               composer install

Run migrations and seed the database:

-                                                               php artisan migrate --seed

Start the Laravel application:

-                                                               php artisan serve

Run Tests:

-                                                               php artisan test

Access your project at http://127.0.0.1:8000 in your browser.

### 3. Check Installed PHP Version:

php --version

-                                                               PHP 8.2.10

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

-                                                       v18.17.1

npm --version

-                                                       10.0.0

### 2. Clone the Repository (if not done already):

        git clone https://github.com/victor90braz/flat.git

### 3. Install Frontend Dependencies:

-                                                     npm install

### 4. Start the Frontend Development Server:

-                                                     npm run dev

Access your project at http://127.0.0.1:8000 in your browser.
