# Flat

"Flat" is a user-friendly web application designed to simplify flat management, allowing users to interact with listings effortlessly.

## Project Overview

Built with PHP (Laravel), MySQL, and Tailwind CSS, "Flat" provides a straightforward platform with essential features:

### CRUD Functionality

-   Users can Create, Read, Update, and Delete flat listings.

### User Authentication

-   Secure access for users, including registration and logout.

### Unit Test Coverage

-   Comprehensive unit tests cover controllers, requests, routes, views, and authentication processes.

## Features

### Dynamic Home Page

-   Discover all flats created by users, with detailed listings for a comprehensive view.

### Flat Details Section

-   Explore flat listings in-depth. Engage in discussions and share insights by adding comments. Users can manage their listings with ease.

### Comments Feature

-   Enrich discussions by commenting on flat listings. Share thoughts, ask questions, and interact seamlessly.

### My Flats Section

-   A personalized space for users to manage their flats effortlessly.

## Technologies

PHP (Laravel), MySQL, Unit Testing, and Tailwind CSS Project

## Backend Setup

### 1. Clone the Repository:

```bash
git clone https://github.com/victor90braz/flat.git
```

````

### 2. Start the Laravel Development Server:

#### Install Dependencies:

```bash
composer install
```

#### Run Migrations and Seed the Database:

```bash
php artisan migrate --seed
```

#### Start the Laravel Application:

```bash
php artisan serve
```

#### Run Tests:

```bash
php artisan test
```

Access your project at http://127.0.0.1:8000 in your browser.

### 3. Check Installed PHP Version:

```bash
php --version
```

Ensure PHP version is 8.2.10 or similar.

### 4. Database Connection:

Update your .env file with the appropriate database connection details:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

## Frontend Setup

### 1. Install Node.js and NPM:

Ensure you have Node.js and NPM installed. Check your versions:

```bash
node --version
# v18.17.1

npm --version
# 10.0.0
```

### 2. Clone the Repository (if not done already):

```bash
git clone https://github.com/victor90braz/flat.git
```

### 3. Install Frontend Dependencies:

```bash
npm install
```

### 4. Start the Frontend Development Server:

```bash
npm run dev
```

Access your project at http://127.0.0.1:8000 in your browser.
````
