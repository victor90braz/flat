In this project, I'll be building a web application called "Flat" using the Laravel PHP framework and styling it with the popular CSS framework, Tailwind CSS. The goal of this project is to create a simple page application with a CRUD.

**Getting Started:**

1. Clone the Repository:
   You can get started by cloning the project repository from GitHub:

    ```
    git clone https://github.com/victor90braz/flat.git
    ```

2. Create a New Laravel Project:
   We'll be using Laravel to power our web application. You can create a new Laravel project by running the following command:

    ```
    composer create-project laravel/laravel flat
    ```

3. Link the Storage Directory:
   Laravel provides a convenient way to create symbolic links from the "public" directory to the "storage" directory. This is important for serving assets. Run the following command to create the symbolic link:

    ```
    php artisan storage:link
    ```

4. Start the Development Server:
   To serve your Laravel application locally, use the following command:

    ```
    php artisan serve
    ```

    This will start a development server, and you can access your project in your browser at the provided URL (usually `http://127.0.0.1:8000`).

**Tailwind CSS Integration:**

We'll be using Tailwind CSS to style our web application. You can follow the official Tailwind CSS documentation to install and configure it in your Laravel project:

-   [Tailwind CSS Installation Guide](https://tailwindcss.com/docs/installation/framework-guides)

Additionally, the Tailwind CSS official documentation for Laravel provides specific guidance on integrating Tailwind CSS with Laravel:

-   [Tailwind CSS Guide for Laravel](https://tailwindcss.com/docs/guides/laravel)

**Project Overview:**

The "Flat" web application is a simple yet stylish project. We aim to create a visually appealing landing page with the following components:

-   A custom favicon.
-   A page title, "Flat."
-   A flex container to center content vertically and horizontally.
-   A heading with a large font size and underlining.
-   An image displayed below the heading.
-   Responsive design and beautiful styling using Tailwind CSS.

You can watch a video tutorial on building a simple Laravel and Tailwind CSS project for reference:

-   [Video Tutorial](https://youtu.be/qqIlkVuUC2Y?si=5y42DZc-SKTTwXHf)

This project provides an excellent opportunity to learn and apply Laravel and Tailwind CSS to create a modern and visually appealing web application. Enjoy your web development journey with "Flat"!
