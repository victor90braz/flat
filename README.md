# Flat

## Project Overview

Flat is like a friendly web platform, where you can interact with other users and add your flat card.
Make sure to register to get a better user experience and to have access to all features.
Check in detail page. There, you will find some information about the flats, such as images, prices per month and the location area. Also, ready thoughts about previous experiences, and even leave helpful reviews.

With a responsive design and a dedicated mobile version.

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

### Requirements - check installed versions:

```bash
php --version 8.2.10
composer --version 2.6.5
node --version v18.17.1
npm --version 10.0.0
```

### Clone the Repository:

```bash
git clone https://github.com/victor90braz/flat.git
```

## Database Connection

Update your `.env` file with the appropriate database connection details:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flat
DB_USERNAME=root
DB_PASSWORD=
```

I chose Laragon and TablePlus, but they are optionally. You can use one of your preference for database access.

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
or
npm run start
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
or
npm run test
```

## Features

### Dynamic Home Page

-   On the home page you will find all user-created apartments, with detailed listings for a comprehensive overview.
-   Each page has a navigation section where the user can create a new flat or simply logout.

### Flat Details Section

-   Search for settings to edit or update your own card. Also explore flat listings in-depth.

### Comments Feature

-   A section dedicate to all users, to share thoughts and ask questions. Find out in Flat Details.

### My Flats Section

-   A personalized space for users to manage their favorites flats.
