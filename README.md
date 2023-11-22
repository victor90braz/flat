# Flat

-   **Responsive Design and Mobile Version**

## Project Overview

"Flat" is like a friendly neighborhood bulletin board but on the web! It's your go-to spot for easy apartment living. Here, you can chat with neighbors, share thoughts about flats, and even leave helpful reviews. No more complicated processes – just a simple and interactive way for everyone to connect and make apartment living a breeze!

## Technologies

-   **PHP (Laravel)**
-   **MySQL**
-   **Laragon**
-   **TablePlus**
-   **Unit Testing**
-   **Tailwind CSS**

### CRUD Functionality

-   Users can Create, Read, Update, and Delete flat listings and their own comments.

### User Authentication

-   Secure access for users, including registration and logout.

### Unit Test Coverage

-   Comprehensive unit tests cover controllers, requests, routes, views, and authentication processes.

## Getting Started

### Check Installed Versions:

```bash
php --version 8.2.10
node --version v18.17.1
npm --version 10.0.0
```

### Clone the Repository:

```bash
git clone https://github.com/victor90braz/flat.git
```

## Database Connection

Ensure Laragon and TablePlus are optionally installed for database access:

-   **Laragon:** A local PHP development environment.

-   **TablePlus:** A modern database client with an elegant UI for managing various databases.

Update your `.env` file with the appropriate database connection details:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flat
DB_USERNAME=root
DB_PASSWORD=
```

### Backend Setup

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
