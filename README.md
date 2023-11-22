# Flat

## Project Overview

"Flat" is a user-friendly web application designed to simplify flat management, allowing users to interact with listings effortlessly.

## Technologies

-   **PHP (Laravel)**
-   **MySQL**
-   **Unit Testing**
-   **Tailwind CSS**

### CRUD Functionality

-   Users can Create, Read, Update, and Delete flat listings.

### User Authentication

-   Secure access for users, including registration and logout.

### Unit Test Coverage

-   Comprehensive unit tests cover controllers, requests, routes, views, and authentication processes.

## Getting Started

### 1. Clone the Repository:

```bash
git clone https://github.com/victor90braz/flat.git
```

### 2. Check Installed Versions:

```bash
php --version 8.2.10
node --version v18.17.1
npm --version 10.0.0
```

### 2. Database Connection:

Update your `.env` file with the appropriate database connection details:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

## Backend Setup

#### Install Dependencies:

```bash
composer install
```

#### Run Migrations and Seed the Database:

```bash
php artisan migrate --seed
```

## Frontend Setup

### Install Frontend Dependencies:

```bash
npm install
```

## Start Server

#### Start the Laravel Application:

```bash
php artisan serve
```

### Start the Frontend Development Server:

```bash
npm run dev
```

## Access your project in your browser:

```bash
http://127.0.0.1:8000
```

## Run Tests:

```bash
php artisan test
```

## Features

### Dynamic Home Page

-   Discover all flats created by users, with detailed listings for a comprehensive view.

### Flat Details Section

-   Explore flat listings in-depth. Engage in discussions and share insights by adding comments. Users can manage their listings with ease.

### Comments Feature

-   Enrich discussions by commenting on flat listings. Share thoughts, ask questions, and interact seamlessly.

### My Flats Section

-   A personalized space for users to manage their flats effortlessly.
