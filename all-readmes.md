Absolutely! Let's update the README to reflect the recent changes in class and interface names, as well as the usage examples with `StripeGateway` and `BraintreeGateway`.

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes classes and an interface: `Subscription`, `StripeGateway`, `BraintreeGateway`, and `GatewayInterface`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with various payment gateways. It defines methods for subscription-related operations and relies on a `GatewayInterface` object for gateway interactions.

```php
class Subscription {

    protected GatewayInterface $gateway;

    public function __construct(GatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
        // Implementation for subscription creation
    }

    public function cancel() {
        // Perform cancellation logic
        $this->gateway->findCustomer();
        $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice() {
        // Implementation for generating an invoice
    }

    public function swap($newPlan) {
        // Implementation for changing subscription plan
    }
}
```

### GatewayInterface

The `GatewayInterface` defines the behavior for a gateway, including methods to find a customer and find a subscription by customer.

```php
interface GatewayInterface {

    // Behavior: Find a customer
    public function findCustomer();

    // Behavior: Find a subscription by customer
    public function findSubscriptionByCustomer();
}
```

### StripeGateway Class

The `StripeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Stripe payment gateway.

```php
class StripeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Stripe
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Stripe
    }
}
```

### BraintreeGateway Class

The `BraintreeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Braintree payment gateway.

```php
class BraintreeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Braintree
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Braintree
    }
}
```

## Usage

To use the `Subscription` class with different gateways, follow these steps:

1. Instantiate a gateway object: `StripeGateway` or `BraintreeGateway`.
2. Use the gateway object to create a `Subscription` object, passing the gateway instance to the `Subscription` constructor.
3. Perform subscription-related actions such as creation, cancellation, invoicing, or plan swapping using the appropriate methods of the `Subscription` object.

Example Usage with Stripe Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "StripeGateway.php";

// Instantiate StripeGateway
$stripeGateway = new StripeGateway();

// Instantiate Subscription with the StripeGateway instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

Example Usage with Braintree Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "BraintreeGateway.php";

// Instantiate BraintreeGateway
$braintreeGateway = new BraintreeGateway();

// Instantiate Subscription with the BraintreeGateway instance
$subscription = new Subscription($braintreeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

In this updated README, we've incorporated the recent changes in class and interface names and provided example usage for both `StripeGateway` and `BraintreeGateway`. The layout and structure have been maintained for clarity.

````markdown
# GitHub: https://github.com/victor90braz/php-fundamentals

## Laravel Setup with Laragon

### Installation Steps:

1. Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. Choose the desired version:
    - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   Check available PHP commands:
    ```sh
    php -h
    ```
````

-   Start a local PHP server:
    ```sh
    PHP -S localhost:8888
    ```

## PHP String Handling: Double Quotes vs. Single Quotes

### Double Quotes (" "):

-   Variables enclosed in double quotes are replaced with their values. This is known as variable interpolation.

-   Escape sequences (e.g., `\n`, `\t`, `\"`) are interpreted and converted to special characters.

-   Example:
    ```php
    $name = "John";
    echo "Hello, $name!";
    // Outputs: Hello, John!
    ```

### Single Quotes (' '):

-   Variables inside single quotes are not interpolated; they are treated as literal strings.

-   Escape sequences are not interpreted within single quotes.
-   Everything inside single quotes is treated as a plain string.

-   Example:
    ```php
    $name = "John";
    echo 'Hello, $name!';
    // Outputs: Hello, $name!
    ```

The differences between the two code snippets you provided are related to how you output variables in PHP:

1. **Using `<?= ... ?>` (Short Echo Tags):**

    ```html
    <img src="<?= $pathImages['logo'] ?>" alt="Logo" />
    <h1 class="title"><?= $title ?></h1>
    ```

    In this approach, you're using the short echo tags `<?= ... ?>`, which are a shorthand way of echoing variables in PHP. They automatically output the result of the expression within the tags. It's a more concise and cleaner way to echo variables.

2. **Using `<?php echo ... ?>`:**
    ```html
    <img src="<?php echo $pathImages['logo'] ?>" alt="Logo" />
    <h1 class="title"><?php echo $title ?></h1>
    ```
    In this approach, you're using the traditional PHP syntax to echo variables. You explicitly use `<?php echo ... ?>` to output the content of the variable.

Both approaches achieve the same result, which is to insert the value of the variable into the HTML. However, the first approach using `<?= ... ?>` is considered more modern and concise, making the code cleaner and easier to read. It's often preferred in newer PHP code because it reduces verbosity.

Certainly, here's your updated README note with a comment about the importance of parameterized queries for security when working with user input:

````markdown
# Laracasts Course - Session 2

GitHub Repository: [Dynamically Web Application](https://github.com/victor90braz/dinamically-web-application)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select the version that suits your needs:
    - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   **Check Available PHP Commands:**
    ```sh
    php -h
    ```
````

-   **Start a Local PHP Server:**
    ```sh
    php -S localhost:8888
    ```

## Database Query Example:

```php
$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";
```

## Some MySQL Commands:

```sql
DROP TABLE users;
```

or

```sql
CREATE TABLE `users` (
`id` INT NOT NULL,
`username` VARCHAR(100) NOT NULL,
`admin` TINYINT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SELECT * FROM users WHERE id=2 OR admin=1;
SELECT * FROM posts WHERE id=2 OR id=1;
```

### Important Security Note:

When working with user input in SQL queries, always use parameterized queries to prevent SQL injection attacks. For example:

```php
$query = "SELECT * FROM posts WHERE id=?";
$id = $_GET['id'];
$posts = $dataBase->query($query, [$id])->fetch();
```

By using parameterized queries, you ensure that user input is properly sanitized, enhancing the security of your application.

```php
public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
}
```

````markdown
# Laracasts Course - Session 3

GitHub Repository: [Notes Mini Project](https://github.com/victor90braz/notes-mini-project)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select the version that suits your needs:
    - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   **Check Available PHP Commands:**
    ```sh
    php -h
    ```
````

-   **Start a Local PHP Server:**
    ```sh
    php -S localhost:8888
    ```

## Database Query Example:

```php
$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";
```

## Some MySQL Commands:

```sql
DROP TABLE users;
```

or

```sql
CREATE TABLE `users` (
`id` INT NOT NULL,
`username` VARCHAR(100) NOT NULL,
`admin` TINYINT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SELECT * FROM users WHERE id=2 OR admin=1;
SELECT * FROM posts WHERE id=2 OR id=1;
```

### Important Security Note:

When working with user input in SQL queries, always use parameterized queries to prevent SQL injection attacks. For example:

```php
$query = "SELECT * FROM posts WHERE id=?";
$id = $_GET['id'];
$posts = $dataBase->query($query, [$id])->fetch();
```

By using parameterized queries, you ensure that user input is properly sanitized, enhancing the security of your application.

```php
public function query($query, $params = []) {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
}
```

Absolutely! Let's update the README to reflect the recent changes in class and interface names, as well as the usage examples with `StripeGateway` and `BraintreeGateway`.

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes classes and an interface: `Subscription`, `StripeGateway`, `BraintreeGateway`, and `GatewayInterface`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with various payment gateways. It defines methods for subscription-related operations and relies on a `GatewayInterface` object for gateway interactions.

```php
class Subscription {

    protected GatewayInterface $gateway;

    public function __construct(GatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
        // Implementation for subscription creation
    }

    public function cancel() {
        // Perform cancellation logic
        $this->gateway->findCustomer();
        $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice() {
        // Implementation for generating an invoice
    }

    public function swap($newPlan) {
        // Implementation for changing subscription plan
    }
}
```

### GatewayInterface

The `GatewayInterface` defines the behavior for a gateway, including methods to find a customer and find a subscription by customer.

```php
interface GatewayInterface {

    // Behavior: Find a customer
    public function findCustomer();

    // Behavior: Find a subscription by customer
    public function findSubscriptionByCustomer();
}
```

### StripeGateway Class

The `StripeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Stripe payment gateway.

```php
class StripeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Stripe
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Stripe
    }
}
```

### BraintreeGateway Class

The `BraintreeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Braintree payment gateway.

```php
class BraintreeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Braintree
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Braintree
    }
}
```

## Usage

To use the `Subscription` class with different gateways, follow these steps:

1. Instantiate a gateway object: `StripeGateway` or `BraintreeGateway`.
2. Use the gateway object to create a `Subscription` object, passing the gateway instance to the `Subscription` constructor.
3. Perform subscription-related actions such as creation, cancellation, invoicing, or plan swapping using the appropriate methods of the `Subscription` object.

Example Usage with Stripe Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "StripeGateway.php";

// Instantiate StripeGateway
$stripeGateway = new StripeGateway();

// Instantiate Subscription with the StripeGateway instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

Example Usage with Braintree Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "BraintreeGateway.php";

// Instantiate BraintreeGateway
$braintreeGateway = new BraintreeGateway();

// Instantiate Subscription with the BraintreeGateway instance
$subscription = new Subscription($braintreeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

In this updated README, we've incorporated the recent changes in class and interface names and provided example usage for both `StripeGateway` and `BraintreeGateway`. The layout and structure have been maintained for clarity.

Absolutely! Let's update the README to reflect the recent changes in class and interface names, as well as the usage examples with `StripeGateway` and `BraintreeGateway`.

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes classes and an interface: `Subscription`, `StripeGateway`, `BraintreeGateway`, and `GatewayInterface`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with various payment gateways. It defines methods for subscription-related operations and relies on a `GatewayInterface` object for gateway interactions.

```php
class Subscription {

    protected GatewayInterface $gateway;

    public function __construct(GatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
        // Implementation for subscription creation
    }

    public function cancel() {
        // Perform cancellation logic
        $this->gateway->findCustomer();
        $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice() {
        // Implementation for generating an invoice
    }

    public function swap($newPlan) {
        // Implementation for changing subscription plan
    }
}
```

### GatewayInterface

The `GatewayInterface` defines the behavior for a gateway, including methods to find a customer and find a subscription by customer.

```php
interface GatewayInterface {

    // Behavior: Find a customer
    public function findCustomer();

    // Behavior: Find a subscription by customer
    public function findSubscriptionByCustomer();
}
```

### StripeGateway Class

The `StripeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Stripe payment gateway.

```php
class StripeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Stripe
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Stripe
    }
}
```

### BraintreeGateway Class

The `BraintreeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Braintree payment gateway.

```php
class BraintreeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Braintree
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Braintree
    }
}
```

## Usage

To use the `Subscription` class with different gateways, follow these steps:

1. Instantiate a gateway object: `StripeGateway` or `BraintreeGateway`.
2. Use the gateway object to create a `Subscription` object, passing the gateway instance to the `Subscription` constructor.
3. Perform subscription-related actions such as creation, cancellation, invoicing, or plan swapping using the appropriate methods of the `Subscription` object.

Example Usage with Stripe Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "StripeGateway.php";

// Instantiate StripeGateway
$stripeGateway = new StripeGateway();

// Instantiate Subscription with the StripeGateway instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

Example Usage with Braintree Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "BraintreeGateway.php";

// Instantiate BraintreeGateway
$braintreeGateway = new BraintreeGateway();

// Instantiate Subscription with the BraintreeGateway instance
$subscription = new Subscription($braintreeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

In this updated README, we've incorporated the recent changes in class and interface names and provided example usage for both `StripeGateway` and `BraintreeGateway`. The layout and structure have been maintained for clarity.

````markdown
# Laracasts Course - Session 4

GitHub Repository: [Project Organization](https://github.com/victor90braz/project-organization)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select the version that suits your needs:
    - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   **Check Available PHP Commands:**
    ```sh
    php -h
    ```
````

-   **Start a Local PHP Server:**

    ```sh
    php -S localhost:8888 -t public
    ```

    -   run local server
        PHP -S localhost:8888 -t public

-   github
    https://github.com/victor90braz/booking.git

-   install composer
    composer init
    composer install
    composer dump-autoload

-   search package to install
    composer search

    -   illuminate/collections

-   install package
    composer require illuminate/collections

-   run test
    vendor/bin/pest

-   tailwind
    https://tailwindui.com/components#product-application-ui

    <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Eloquent Relationship Demo

Welcome to the Eloquent Relationship Demo, a comprehensive guide to understanding and utilizing Eloquent relationships and database query logging in your Laravel project. This repository showcases various relationship types and provides detailed usage instructions. It allows you to grasp the power of Eloquent relationships for simplifying database querying and handling related data.

## Relationship Types

I've updated the README to include the latest code snippets and examples. The README now provides a comprehensive guide for understanding and using the Eloquent relationships and database query logging in your Laravel project. You can use this updated README for your project:

Eloquent relationships in Laravel allow you to define how different database tables are related to each other. They simplify querying and working with related data.

Examples:

1. **One-to-One**: A User has one Profile.

    ```php
    // User model
    public function profile() {
        return $this->hasOne(Profile::class);
    }
    ```

2. **One-to-Many**: A User has many Posts.

    ```php
    // User model
    public function posts() {
        return $this->hasMany(Post::class);
    }
    ```

3. **Many-to-Many**: Users can belong to multiple Roles, and Roles can have multiple Users.

    ```php
    // User model
    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    ```

4. **Has-Many-Through**: A Country has many Users through Cities.

    ```php
    // Country model
    public function users() {
        return $this->hasManyThrough(User::class, City::class);
    }
    ```

5. **Polymorphic Relations**: Comments can belong to both Posts and Videos.
    ```php
    // Comment model
    public function commentable() {
        return $this->morphTo();
    }
    ```

These relationships simplify database querying and make it easier to work with related data in your Laravel application.

# Database -> Tinker

\App\Models\User::factory(5)->create();
\App\Models\Post::factory(5)->create();
$user = new User();
$user->find(8) // user_id
$user->find(8)->posts

## Setup

To get started with this project, follow these steps:

1. Clone this repository to your local environment:

    ```shell
    git clone https://github.com/victor90braz/eloquent-relationship-braz.git
    ```

2. Navigate to the project directory:

    ```shell
    cd eloquent-relationship
    ```

3. Install the required dependencies using Composer:

    ```shell
    composer install
    ```

4. Create a copy of the `.env` file and configure your database connection settings:

    ```shell
    cp .env.example .env
    ```

5. Generate an application key:

    ```shell
    php artisan key:generate
    ```

6. Migrate the database to create the necessary tables:

    ```shell
    php artisan migrate
    ```

## Usage

### Create a Profile Schema and Migrate

Before demonstrating the relationships, you need to create a `profile` schema and migrate it to the database. Follow these steps:

1. Create a migration for the `Profile` model:

    ```shell
    php artisan make:migration create_profiles_table
    ```

2. Open the newly created migration file at `database/migrations/yyyy_mm_dd_create_profiles_table.php` and define the schema for the `profiles` table.

3. Run the migration to create the `profiles` table:

    ```shell
    php artisan migrate
    ```

### Retrieve a User's Profile

You can retrieve a user's profile using Laravel's Eloquent relationships. Here's an example of how to do it:

1. Start a Tinker session:

    ```shell
    php artisan tinker
    ```

2. Create a new `User` instance:

    ```php
    $user = new User();
    ```

3. Retrieve a user's profile by specifying the user's ID:

    ```php
    $profile = $user->find(2)->profile;
    ```

4. You can also log the SQL queries executed by the application for debugging purposes:

    ```php
    DB::listen(function ($sql) {
        var_dump($sql->sql, $sql->bindings);
    });
    ```

For more detailed examples and usage of each relationship type, please refer to the provided code in this repository.

## Database Query Logging

To enable database query logging and view the SQL queries that are executed, you can use the `DB::listen` function as shown earlier. This is a valuable tool for debugging and analysis.

## Second Way to Log

You can also log SQL queries using the `DB::enableQueryLog` and `DB::getQueryLog` methods in your Tinker session. Here's how:

```php
DB::enableQueryLog();
$user->find(8)->posts;
DB::getQueryLog();
```

This will display an array of logged queries with query text, bindings, and execution times, providing an alternative approach for debugging purposes.

# Create a new Post instance.

$post = new App\Models\Post()

# Find a Post with ID 1.

$post->find(1)

# Get tags related to Post with ID 1.

$post->find(1)->tags

# Retrieve tag names associated with Post ID 1.

$post->find(1)->tags->pluck('name')

# Create a new Tag instance.

$tag = new App\Models\Tag()

# Retrieve the first Tag from the database.

$tag->first()

# Get all the posts related to the first Tag.

$tag->first()->posts

# Find a Post with ID 1.

$post = new App\Models\Post()

# Find a Post with ID 1 and attach Tag ID 2 to it.

$post->find(1)->tags()->attach(2)

# more examples

$tag = new App\Models\Tag()
$tag->find(1)
$tag->find(1)->posts()->attach(2)

# delete association from post_id 1 and tag_id 2

$post->find(1)->tags()->detach(2)

# examples

$tag = App\Models\Tag::first()
$tag->posts()->attach(2)

# factory example

\App\Models\User::factory(5)->create();
\App\Models\Post::factory(5)->create();

-   once the tables are created with user and posts then create the references

    # case post

    $post = new App\Models\Post()
    $post->find(1)->tags()->attach(2)

    # case tag

    $tag = App\Models\Tag::first()
    $tag->posts()->attach(2)

# debugar

@php artisan vendor:publish --tag=laravel-assets --ansi --force

composer require barryvdh/laravel-debugbar --dev

# important!! add

protected $guarded = [];

# example create a post

Route::get('/', function () {
$user = App\Models\User::first();

    $post = $user->posts()->create([
        'title' => 'foobar',
        'body' => 'loren ipsum'
    ]);

    $post->tags()->attach(1);

    return view('welcome');

});

# new topic -> hasManyThrough

$affiliation = new App\Models\Affiliation
$affiliation = $affiliation->where('name', 'conservative')->first()

or

App\Models\Affiliation::whereName('liberal')->first()

$learning = App\Models\Affiliation::whereName('liberal')->first()
$learning->posts;

# example

$post = new Post()
$post->factory(4)->create(['user_id' => 7]);
App\Models\Affiliation::whereName('vel')->first()

# mophs

$collection = App\Models\Collection::first()
$collection->find(1)
$collection->videos

# test

"test": "php artisan test --filter="

npm run test LikeNotesTest

# create logic convence -> steps -> follow the alfabethic order

        - notes
            - id
            - title
            - body

        - users
            - id

        - note_user
            - user_id
            - note_id

composer create-project laravel/laravel chirper
composer require laravel/breeze --dev
php artisan breeze:install blade
php artisan serve
php artisan make:model --help
php artisan make:model -mfc Chirp
php artisan route:list

php artisan make:policy ChirpPolicy --model=Chirp

-   public function update(User $user, Chirp $chirp): bool
    {
            //
            return $chirp->user()->is($user);
    }

php artisan make:notification NewChirp
php artisan make:event ChirpCreated
php artisan make:listener SendChirpCreatedNotifications --event=ChirpCreated

https://laravel.com/docs/mail#introduction

github: https://github.com/victor90braz/code-katas-with-php-unit.git

composer require phpunit/phpunit

# set-up

composer.json

{
"require-dev": {
"phpunit/phpunit": "^10.4"
},
"autoload": {
"psr4": {
"App\\" : "src/"
}
}
}

run
composer dump-autoload
composer require --dev phpunit/phpunit
composer update
vendor/bin/phpunit tests/PrimeFactorsTest.php

**Title: Collection of SQL Statements, Laravel Schema Definitions, and Instructions for One-to-One Relationships in Laravel Models**

GitHub Repository: https://github.com/victor90braz/sakila.git

**Database Table Alterations:**

```sql
ALTER TABLE `comments`
ADD FOREIGN KEY (post_id) REFERENCES posts(id);

ALTER TABLE `comments`
ADD FOREIGN KEY (post_id) REFERENCES post_id(id) ON DELETE CASCADE;

ALTER TABLE `comments`
ADD FOREIGN KEY (post_id) REFERENCES post_id(id) ON DELETE RESTRICT;

ALTER TABLE `comments`
ADD FOREIGN KEY (post_id) REFERENCES post_id(id) ON DELETE NO ACTION;

ALTER TABLE `comments`
ADD FOREIGN KEY (post_id) REFERENCES post_id(id) ON DELETE SET NULL;
```

**Database Schema:**

```php
Schema::create('comments', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->text('body');
    $table->unsignedBigInteger('post_id');
    $table->unsignedBigInteger('user_id');
    $table->timestamps();

    $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
});
```

**SQL JOIN Queries:**

```sql
SELECT * FROM `posts` JOIN `comments` ON `comments`.`post_id` = `posts`.`id`;

SELECT * FROM `posts` INNER JOIN `comments` ON `comments`.`post_id` = `posts`.`id`;

SELECT * FROM `posts` LEFT JOIN `comments` ON `comments`.`post_id` = `posts`.`id`;

SELECT * FROM `posts` RIGHT OUTER JOIN `comments` ON `comments`.`post_id` = `posts`.`id`;
```

**SQL JOIN Notes:**

-   "LEFT OUTER JOIN" gets all records from `posts`.
-   "RIGHT OUTER JOIN" gets all records from `comments`.

**SQL Queries:**

```sql
SELECT * FROM users;

SELECT users.email, users.`name`, users.remember_token FROM users;
```

**SQL GROUP BY Query:**

```sql
SELECT users.email, users.`name`, users.remember_token, COUNT(comments.post_id)
FROM users
LEFT JOIN `comments` ON `comments`.post_id = post_id
GROUP BY users.email, users.`name`, users.remember_token;
```

**One-to-One Relationship:**

**CREATE DB RELATIONSHIP ONE-TO-ONE**

**Schema:**

```php
public function up(): void
{
    Schema::create('profiles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id');
        $table->string('website');
        $table->string('github');
        $table->string('twitter');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on 'users')->onDelete('cascade');
    });
}
```

**One-to-One Relationship Steps:**

**User Model:**

```php
class User extends Authenticatable
{
    use HasFactory;

    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
```

**Profile Model:**

```php
class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo User::class;
    }
}
```

\*\*Note: `protected $guarded = [];` should be added to the `Profile` model.

**Tinker Usage:**

Using Laravel Tinker:

```bash
php artisan tinker
$user = new User
$user->first()
$user->first()->profile
$user->first()->toArray()
```

**Note:**

To automatically include the `profile` relationship in queries, you can add `protected $with = ['profile']` in the `User` model.

```php
class User extends Authenticatable
{
    use HasFactory;
    protected $with = ['profile']

    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
```

Tinker Usage:

```bash
php artisan tinker
$user = new User
$user->all()
$user->first()->toArray()
```

**SELECT \***

```sql
SELECT * from posts
JOIN users on users.id = posts.user_id
WHERE user_id = 1
```

**SELECT posts.id, title, body, published_at, users.name**

```sql
SELECT posts.id, title, body, published_at, users.name from posts
JOIN users on users.id = posts.user_id
WHERE user_id = 1
```

**If we change the function name, specify the user_id as reference**

```php
class Post extends Model
{
use HasFactory;

    public function author() {

        return $this->belongsToMany(User::class, 'user_id');
    }

}
```

**Tinker**

```bash
$user = User::find(1);

> $post = $user->posts()->create([
>
> > . 'title' => 'foo',
> > . 'body' => 'foo baz',
> > . ]);

$user->first()->posts->toArray()
```

**Many to many**

```php
$this->belongsToMany(Post::class);
$this->belongsToMany(Tag::class);

    Schema::create('post_tag', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('post_id');
        $table->unsignedBigInteger('tag_id');
        $table->timestamps();

        $table->foreign('post_id')->references('id')->on('posts')
        ->onDelete('cascade');

        $table->foreign('tag_id')->references('id')->on('tags')
        ->onDelete('cascade');
    });
```

```sql
SELECT * from posts
LEFT JOIN post_tag
on post_tag.post_id = posts.id
WHERE post_tag.tag_id = 1

$post = App\Models\Post::find(1)
$post->tags

$post = App.Models.Post.find(6)
post.tags

$tag = App

.Models.Tag.find(2)
$tag->posts
```

Many to Many

```php
$this->belongsToMany(Post::class);
$this->belongsToMany(Tag::class);

Schema::create('post_tag', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->unsignedBigInteger('post_id');
    $table->unsignedBigInteger('tag_id');
    $table->timestamps();

    $table->foreign('post_id')->references('id')->on('posts')
    ->onDelete('cascade');

    $table->foreign('tag_id')->references('id')->on('tags')
    ->onDelete('cascade');
});

SELECT * from posts
LEFT JOIN post_tag
on post_tag.post_id = posts.id
WHERE post_tag.tag_id = 1

$post = App.Models.Post.find(1)
$post->tags

$post = App.Models.Post.find(6)
$post.tags

$tag = App.Models.Tag.find(2)
$tag->posts
```

**Index**

```sql
EXPLAIN SELECT * from profiles
WHERE user_id = 1

EXPLAIN gives info about the query. If the type is "all," adding an index on user_id can make the search faster. If the type is "ref," the database is already using an index for efficient filtering.

- check "type" and "rows"
```

# example EXPLAIN

EXPLAIN SELECT actor_id, COUNT(\*) from film_actor
GROUP BY actor_id

type(index)
rows(119323)

-----------------// ----------------

SELECT actor_id, COUNT(\*) from film_actor

WHERE actor_id = 5

GROUP BY actor_id

# select

## SELECT \*

SELECT \* from users
LEFT JOIN post_reads
on post_reads.user_id = users.id in (
SELECT id from posts WHERE user_id = users.id
)

## SELECT GROUP BY

SELECT users.id, users.`name` from users
LEFT JOIN post_reads
on post_reads.user_id = users.id in (
SELECT id from posts WHERE user_id = users.id
)

GROUP BY users.id

## SELECT GROUP BY COUNT(\*) as post_read

SELECT users.id, users.`name`, COUNT(\*) as post_read from users
LEFT JOIN post_reads
on post_reads.user_id = users.id in (
SELECT id from posts WHERE user_id = users.id
)

GROUP BY users.id

## SELECT ORDER BY total_post DESC

SELECT users.id, users.`name`, COUNT(\*) as total_post from users
LEFT JOIN post_reads
on post_reads.user_id = users.id in (
SELECT id from posts WHERE user_id = users.id
)

GROUP BY users.id
ORDER BY total_post DESC

## SELECT ORDER BY total_post DESC LIMIT 10

SELECT users.id, users.`name`, COUNT(\*) as total_post from users
LEFT JOIN post_reads
on post_reads.user_id = users.id in (
SELECT id from posts WHERE user_id = users.id
)

GROUP BY users.id
ORDER BY total_post DESC
LIMIT 10

## SELECT total_films

SELECT release_year, COUNT(\*) as total_films
from film
GROUP BY release_year
ORDER by release_year DESC

## SELECT AVG

SELECT AVG(total_films)
FROM(

    SELECT release_year, COUNT(*) as total_films
    from film
    GROUP BY release_year
    ORDER by release_year DESC

) calculate_avg_films

## SELECT round

SELECT round( AVG(total_films) ) as average_rounded
FROM(

    SELECT release_year, COUNT(*) as total_films
    from film
    GROUP BY release_year
    ORDER by release_year DESC

) calculate_avg_films

alter table `comments`
add FOREIGN key (post_id) REFERENCES posts(id)

alter table `comments`
add FOREIGN key (post_id) REFERENCES post_id(id) on DELETE CASCADE

alter table `comments`
add FOREIGN key (post_id) REFERENCES post_id(id) on DELETE RESTRICT

alter table `comments`
add FOREIGN key (post_id) REFERENCES post_id(id) on DELETE no ACTION

alter table `comments`
add FOREIGN key (post_id) REFERENCES post_id(id) on DELETE set NULL

I've updated the README to include the latest code snippets and examples. The README now provides a comprehensive guide for understanding and using the Eloquent relationships and database query logging in your Laravel project. You can use this updated README for your project:

Eloquent relationships in Laravel allow you to define how different database tables are related to each other. They simplify querying and working with related data.

Examples:

1. **One-to-One**: A User has one Profile.

    ```php
    // User model
    public function profile() {
        return $this->hasOne(Profile::class);
    }
    ```

2. **One-to-Many**: A User has many Posts.

    ```php
    // User model
    public function posts() {
        return $this->hasMany(Post::class);
    }
    ```

3. **Many-to-Many**: Users can belong to multiple Roles, and Roles can have multiple Users.

    ```php
    // User model
    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    ```

4. **Has-Many-Through**: A Country has many Users through Cities.

    ```php
    // Country model
    public function users() {
        return $this->hasManyThrough(User::class, City::class);
    }
    ```

5. **Polymorphic Relations**: Comments can belong to both Posts and Videos.
    ```php
    // Comment model
    public function commentable() {
        return $this->morphTo();
    }
    ```

These relationships simplify database querying and make it easier to work with related data in your Laravel application.

````markdown
# Eloquent Relationship Demo

This repository demonstrates various Eloquent relationships in Laravel, including one-to-one, one-to-many, many-to-many, has-many-through, and polymorphic relationships. It provides examples and usage instructions for each relationship type.

## Table of Contents

-   [Relationship Types](#relationship-types)
-   [Setup](#setup)
-   [Usage](#usage)
    -   [Create a Profile Schema and Migrate](#create-a-profile-schema-and-migrate)
    -   [Get a User's Profile](#get-a-users-profile)
-   [DB Query Logging](#db-query-logging)

## Relationship Types

This project illustrates the following Eloquent relationship types:

-   One-to-One
-   One-to-Many
-   Many-to-Many
-   Has-Many-Through
-   Polymorphic Relations

## Setup

To set up this project, follow these steps:

1. Clone this repository to your local environment:

    ```shell
    git clone https://github.com/victor90braz/eloquent-relationship.git
    ```

2. Navigate to the project directory:

    ```shell
    cd eloquent-relationship
    ```

3. Install the required dependencies using Composer:

    ```shell
    composer install
    ```

4. Create a copy of the `.env` file and configure your database connection settings:

    ```shell
    cp .env.example .env
    ```

5. Generate an application key:

    ```shell
    php artisan key:generate
    ```

6. Migrate the database to create the necessary tables:

    ```shell
    php artisan migrate
    ```

## Usage

### Create a Profile Schema and Migrate

Before demonstrating the relationships, you need to create a `profile` schema and migrate it to the database. To do this, follow these steps:

1. Create a migration for the `Profile` model:

    ```shell
    php artisan make:migration create_profiles_table
    ```

2. Open the newly created migration file at `database/migrations/yyyy_mm_dd_create_profiles_table.php` and define the schema for the `profiles` table.

3. Run the migration to create the `profiles` table:

    ```shell
    php artisan migrate
    ```

### Get a User's Profile

You can retrieve a user's profile using Laravel's Eloquent relationships. Here's an example of how to do it:

1. Start a Tinker session:

    ```shell
    php artisan tinker
    ```

2. Create a new `User` instance:

    ```php
    $user = new User();
    ```

3. Retrieve a user's profile by specifying the user's ID:

    ```php
    $profile = $user->find(2)->profile;
    ```

4. You can also log the SQL queries executed by the application using the following code:

    ```php
    DB::listen(function ($sql) {
        var_dump($sql->sql, $sql->bindings);
    });
    ```

    This will help you see the SQL queries generated by Eloquent.

For more detailed examples and usage of each relationship type, please refer to the provided code in this repository.

## DB Query Logging

To enable database query logging and see the SQL queries that are executed, you can use the `DB::listen` function. You can add the following code to your Tinker session or other parts of your Laravel application:

```php
DB::listen(function ($sql) {
    var_dump($sql->sql, $sql->bindings);
});
```
````

This will log the SQL queries and their bindings for debugging and analysis purposes.

---

# Second Way to Log

You can also log SQL queries using the `DB::enableQueryLog` and `DB::getQueryLog` methods in your Tinker session. Here's how to do it:

```php
> DB::enableQueryLog();
> = null

> $profile = $user->find(2);
> string(52) "select * from `users` where `users`.`id` = ? limit 1"
> array(1) {
> [0]=>
> int(2)
> }
> = App\Models\User {#7114
> ...
```

To view the logged queries, you can use the following code:

```php
> DB::getQueryLog();
> = [
>     [
>         "query" => "select * from `users` where `users`.`id` = ? limit 1",
>         "bindings" => [
>             2,
>         ],
>         "time" => 1.03,
>     ],
>     // Other logged queries
> ]
```

This provides an alternative way to log SQL queries for debugging purposes.

# Next Tinker Example

You can also use Tinker to interact with your models and relationships. Here's an example:

```shell
$ php artisan tinker
Psy Shell v0.11.22 (PHP 8.2.10 — cli) by Justin Hileman

> $user = new User();
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
= App\Models.User {#7095}

> $user->first()
= App.Models.User {#7097
    id: 1,
    username: "admin",
    name: "admin",
    email: "admin@gmail.com",
    email_verified_at: null,
    #password: "$2y$10$2Us440ufiOTCfxbEBjNW5O9u8gG5zDegNtE3/hHwrXSuPnZacrjUe",
    #remember_token: null,
    created_at: "2023-11-02 16:52:17",
    updated_at: "2023-11-02 16:52:17",
  }

> $user->experience;
= null

> $user->find(1)->experience


= App.Models.Experience {#7108
    id: 1,
    user_id: 1,
    points: 145,
    created_at: "2023-11-02 17:48:36",
    updated_at: "2023-11-02 17:48:36",
  }
```

This demonstrates how you can use Tinker to access your models and relationships interactively for testing and debugging.

```

```

-   installation
    composer create-project laravel/laravel app-example
-   command terminal
    php artisan serve

    ## GitHub Repository

Find the code and more on GitHub: [02-section Repository](https://github.com/victor90braz/02-section.git)

## https://github.com/victor90braz/02-section.git

# Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```

# Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

# spatie/yaml-front-matter

To install the `spatie/yaml-front-matter` package, run the following command:

```bash
composer require spatie/yaml-front-matter
```

# Caching Posts Data

To cache the posts data and improve performance, we use Laravel's caching feature.

```php
public static function all() {
    return cache()->rememberForever('posts.all', function () {
        $files = File::files(resource_path("posts"));

        return collect($files)->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        })->sortByDesc('date');
    });
}
```

# Using Artisan Tinker

You can use Artisan Tinker to interact with your application through the command line.

```bash
php artisan tinker
```

When prompted with `Do you really wish to run this command? (yes/no) [no]:`, enter `yes`.

## Available Commands

-   `cache('posts.all')`: Retrieve the cached posts data.
-   `cache()->forget('posts.all')`: Forget (delete) the cached posts data.
-   `cache()->get('posts.all')`: Get the cached posts data.

Example:

```php
> cache()->put('foo', 'bar');
> // or
> cache(['foo' => 'bar']);
> = true
> // or
> cache(['foo' => 'bar'], now()->addSeconds(3));

> cache('foo')
> = "bar"
```

## GitHub Repository

Find the code and more on GitHub: [03-section Repository](https://github.com/victor90braz/02-section.git)

## https://github.com/victor90braz/02-section.git

# Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```

# Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

# spatie/yaml-front-matter

To install the `spatie/yaml-front-matter` package, run the following command:

```bash
composer require spatie/yaml-front-matter
```

# Caching Posts Data

To cache the posts data and improve performance, we use Laravel's caching feature.

```php
public static function all() {
    return cache()->rememberForever('posts.all', function () {
        $files = File::files(resource_path("posts"));

        return collect($files)->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        })->sortByDesc('date');
    });
}
```

# Using Artisan Tinker

You can use Artisan Tinker to interact with your application through the command line.

```bash
php artisan tinker
```

When prompted with `Do you really wish to run this command? (yes/no) [no]:`, enter `yes`.

## Available Commands

-   `cache('posts.all')`: Retrieve the cached posts data.
-   `cache()->forget('posts.all')`: Forget (delete) the cached posts data.
-   `cache()->get('posts.all')`: Get the cached posts data.

Example:

```php
> cache()->put('foo', 'bar');
> // or
> cache(['foo' => 'bar']);
> = true
> // or
> cache(['foo' => 'bar'], now()->addSeconds(3));

> cache('foo')
> = "bar"
```

````markdown
# Laravel Database Interaction README

## GitHub Repository

-   Find the code and more on GitHub: [04-section-database Repository](https://github.com/victor90braz/04-section-database.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

## Connect to the Database

You can connect to your MySQL database using the following command:

```bash
mysql -u root -p
```

## Migrate the Database

To create the necessary database tables, run the migration with:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

Now, let's go through the steps in the Tinker session.

1. Create a new user instance:

```php
$user = new User();
```

2. Set the user's name, email, and password:

```php
$user->name = 'mario';
$user->email = 'mario@gmail.com';
$user->password = bcrypt('!mario');
```

3. Save the user to the database:

```php
$user->save();
```

4. Retrieve the user from the database (for example, by ID):

```php
$user->find(1);
```

## Posts

This sequence of commands creates a new user with the provided information and stores it in your database.

## Creating a New Category and Adding It to the Database Using Tinker

To create a new category and add it to the database, use the following commands:

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

3. Define the database schema for the "categories" table in the generated migration file.

4. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

5. Start a Tinker session:

```bash
php artisan tinker
```

6. Create a new category instance:

```php
$category = new \App\Models\Category;
```

7. Set the category's name and slug:

```php
$category->name = 'Personal';
$category->slug = 'personal';
```

8. Save the category to the database:

```php
$category->save();
```

## Retrieving Data with Eloquent

To retrieve data with Eloquent and access relationships, you can use the following commands in Tinker:

1. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

2. Access the post's category name:

```php
$post->category->name;
```

## HTML Structure with Inline Styles

Here's a refactored HTML structure with inline styles:

```html
<div
    class="container"
    style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f5f5f5;"
>
    <nav>
        <ul style="list-style: none;">
            <li
                style="font-weight: bold; color: #007bff; text-decoration: underline;"
            >
                {{ $post->category->name }}
            </li>
        </ul>
    </nav>

    <article style="margin-top: 20px; padding: 10px; background-color: #fff;">
        <h1 style="font-size: 24px; margin-bottom: 10px;">
            {{ $post->title }}
        </h1>
        <div>{!! $post->body !!}</div>
    </article>
    <a
        href="/"
        class="btn-go-back"
        style="display: inline-block; margin-top: 20px; text-decoration: underline; color: #007bff;"
        >Go Back</a
    >
</div>
```

## Working with the Database

Here are some useful commands for working with the database:

-   Refresh and seed the database:

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   Add fake data to the database:

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

-   Retrieve data with relationships:

```bash
php artisan tinker
\App\Models\Post::with('user', 'category')->first()
```

````markdown
# Laravel Database Interaction README

## GitHub Repository

-   Find the code and more on GitHub: [05-section Repository](https://github.com/victor90braz/05-section.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

## Connect to the Database

You can connect to your MySQL database using the following command:

```bash
mysql -u root -p
```

## Migrate the Database

To create the necessary database tables, run the migration with:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

4. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

1. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

2. Access the post's category name:

```php
$post->category->name;
```

## Working with the Database

Here are some useful commands for working with the database:

-   Refresh and seed the database:

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   Add fake data to the database:

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

-   Retrieve data with relationships:

```bash
php artisan tinker
\App\Models\Post::with('user', 'category')->first()
```

````markdown
# Laravel Database Interaction README

## GitHub Repository

-   Find the code and more on GitHub: [06-section Repository](https://github.com/victor90braz/06-section.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

## Connect to the Database

You can connect to your MySQL database using the following command:

```bash
mysql -u root -p
```

## Migrate the Database

To create the necessary database tables, run the migration with:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

4. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

1. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

2. Access the post's category name:

```php
$post->category->name;
```

## Working with the Database

Here are some useful commands for working with the database:

-   Refresh and seed the database:

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   Add fake data to the database:

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

-   Retrieve data with relationships:

```bash
php artisan tinker
\App\Models\Post::with('user', 'category')->first()
```

# search

Route::get('/', function () {

    $posts = Post::latest();

    if (request('search')) {
        $posts
            ->where('title', 'like' , '%'. request('search') . '%')
            ->orWhere('body', 'like' , '%'. request('search') . '%');
    };

    return view('posts', [
        'posts' =>   $posts->get(),
        'categories' => Category::all()
    ]);

});

````markdown
# Laravel Database Interaction README

## GitHub Repository

-   Find the code and more on GitHub: [06-section Repository](https://github.com/victor90braz/07-section.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

## Connect to the Database

You can connect to your MySQL database using the following command:

```bash
mysql -u root -p
```

## Migrate the Database

To create the necessary database tables, run the migration with:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

4. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

1. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

2. Access the post's category name:

```php
$post->category->name;
```

## Working with the Database

Here are some useful commands for working with the database:

-   Refresh and seed the database:

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   Add fake data to the database:

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

-   Retrieve data with relationships:

```bash
php artisan tinker
\App\Models\Post::with('user', 'category')->first()
```

# search

Route::get('/', function () {

    $posts = Post::latest();

    if (request('search')) {
        $posts
            ->where('title', 'like' , '%'. request('search') . '%')
            ->orWhere('body', 'like' , '%'. request('search') . '%');
    };

    return view('posts', [
        'posts' =>   $posts->get(),
        'categories' => Category::all()
    ]);

});

# php artisan migrate:fresh

# php artisan tinker

# \App\Models\Post::factory(50)->create();

Certainly, here's an updated version of your README with a nice explanation of pagination and a styled presentation:

````markdown
# Laravel Database Interaction README

**GitHub Repository:** [08-section Repository](https://github.com/victor90braz/08-section.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

Start the development server with the following command:

```bash
php artisan serve
```

## Connect to the Database

To connect to your MySQL database, use the following command:

```bash
mysql -u root -p
```

## Migrate the Database

Create the necessary database tables by running the migration:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

Create a new user and add it to the database using Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

4. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

1. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

2. Access the post's category name:

```php
$post->category->name;
```

## Working with the Database

Here are some useful commands for working with the database:

-   **Refresh and seed the database:**

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   **Add fake data to the database:**

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

-   **Retrieve data with relationships:**

```bash
php artisan tinker
\App\Models\Post::with('user', 'category')->first()
```

## Implementing Pagination for Search Results

Dealing with a large number of items, such as posts, requires implementing pagination to enhance the user experience and make navigation more manageable. In your code, you can achieve this using Laravel's pagination features.

### How to Implement Pagination

1. In your route or controller, when retrieving a list of posts, use the `paginate` method to split the results into multiple pages. For example:

    ```php
    $posts = Post::latest()->filter(
        request(['search', 'category', 'author'])
    )->paginate(6)->withQueryString()

    $posts = Post::latest()->filter(
        request(['search', 'category', 'author'])
    )->simplePaginate()->withQueryString()
    ```

    In this code, `paginate(6)` specifies that you want to display six posts per page. You can adjust this number according to your design and content.

2. To display pagination links in your view, you can use Laravel's built-in `links()` method. Add the following code to your view file to generate pagination links:

    ```php
    {{ $posts->links() }}
    ```

    Including `{{ $posts->links() }}` in your view provides users with a user-friendly way to navigate through multiple pages of search results.

```html
<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
        <x-posts-grid :posts="$posts" />

        {{ $posts->links() }} @else
        <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
```

### Additional Styling (Optional)

To style your pagination, you can modify your application's CSS. Laravel provides the flexibility to customize the look and feel to match your design.

## Additional Notes

### Vendor Publishing

You can use the following command to publish vendor assets related to pagination:

```bash
php artisan vendor:publish --tag=laravel-pagination
```

### AppServiceProvider Customization

You can customize the appearance of the pagination using the `AppServiceProvider`. Example code in `AppServiceProvider.php`:

```php
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

public function boot()
{
    // Uncomment one of the following lines based on your preferred styling:

    // Paginator::useBootstrap();  // Use Bootstrap pagination styling
    // Paginator::useBootstrapThree(); // Use Bootstrap 3 pagination styling
    // Paginator::useTailwind();  // Use Tailwind CSS pagination styling
}
```

This enhanced README provides clear instructions on setting up your Laravel application, interacting with the database, and implementing pagination for better user experience. You can also customize the pagination styling to suit your project's design.

````markdown
# Laravel Database Interaction README

**GitHub Repository:** [09-section Repository](https://github.com/victor90braz/09-section-register.git)

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

## Running the Application

Start the development server with the following command:

```bash
php artisan serve
```

## Connect to the Database

To connect to your MySQL database, use the following command:

```bash
mysql -u root -p
```

## Migrate the Database

Create the necessary database tables by running the migration:

```bash
php artisan migrate
```

## Creating a New User and Adding It to the Database Using Tinker

Create a new user and add it to the database using Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

3. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

4. Retrieve a post with its associated category:

```php
$post = \App\Models\Post::with('category')->first();
```

5. Access the post's category name:

```php
$post->category->name;
```

## Working with the Database

Here are some useful commands for working with the database:

-   **Refresh and seed the database:**

```bash
php artisan migrate:refresh
php artisan db:seed
```

-   **Add fake data to the database:**

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

## Notes

```html
<form action="/" method="POST">@csrf</form>
```

-   `@csrf` -> always have to add it to the form to avoid error 419

-   `store` function:

```php
public function store()
{
    request()->validate([
        'name' => 'required:max:255',
        'username' => 'required|max:255|min:3',
        'email' => 'required|email|max:255',
        'password' => 'required|max:255|min:7',
    ]);

    ddd(request()->all());
}
```

-   `Rule::unique('users', 'username')`

```php
'username' => [
    'required',
    'min:3',
    'max:255',
    Rule::unique('users', 'username')
],
```

Important to know, Laravel doesn't allow sending the form if it doesn't match.

```php
protected $fillable = [
    'name',
    'username',
    'email',
    'password',
];
```

Option is to disable it and add `guarded = []`:

```php
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $guarded = [];
```

Find an ID in the DB:

```php
> \App\Models\User::find(62)
> = App\Models.User {#6468
    id: 62,
    username: "ronaldinho10",
    name: "ronaldinho",
    email: "ronaldinho@gmail.com",
    email_verified_at: null,
    #password: "$2y$10$sESFNsEe8KCgyw4AGe2CJetr1N0nXeSxezjHam9rtVy.CFJBUlUBS",
    #remember_token: null,
    created_at: "2023-10-27 10:12:33",
    updated_at: "2023-10-27 10:12:33",
}
```

Very important to use the convention `set[Attribute]`:

```php
public function setPasswordAttribute($password) {
    $this->attributes['password'] = bcrypt($password);
}
```

Handle errors:

```php
@error('name')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
```

or at the end of form

<div class="mb-6">
    @foreach ($errors->all() as $error)
        <li class="text-red-500 text-xs">{{ $error }}</li>
    @endforeach
</div>

Handle input values:

```html
<input
    class="border border-gray-400 p-2 w-full"
    type="email"
    name="email"
    id="email"
    required
    value="{{ old('name') }}"
/>
```

````markdown
<h1 align="center">Laravel Database Interaction README</h1>

<p align="center">
  <strong>GitHub Repository:</strong> <a href="https://github.com/victor90braz/10-section-comments.git">10-section Repository</a>
</p>

## Introduction

Welcome to the Laravel Database Interaction README! This guide provides comprehensive instructions for setting up your Laravel project, connecting to a MySQL database, and creating and interacting with users, posts, and categories using the Tinker tool.

## Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

This command creates a new Laravel project named "app-example."

## Running the Application

Start the development server with the following command:

```bash
php artisan serve
```

This command will start the development server, allowing you to access your Laravel application locally.

## Connect to the Database

To connect to your MySQL database, use the following command:

```bash
mysql -u root -p
```

This command opens a MySQL command line interface where you can interact with your database.

## Migrate the Database

Create the necessary database tables by running the migration:

```bash
php artisan migrate
```

This command will create the required database tables based on your Laravel migrations.

## Creating a New User and Adding It to the Database Using Tinker

You can create a new user and add it to the database using Laravel's Tinker tool. Follow these steps:

1. Create a migration for the "categories" table:

```bash
php artisan make:migration create_categories_table
```

This command generates a migration file for the "categories" table.

2. Create a model for the "Category" entity:

```bash
php artisan make:model Category
```

This generates a model for the "Category" entity.

3. Run the migration to create the "categories" table:

```bash
php artisan migrate
```

This command executes the migration, creating the "categories" table in the database.

4. Retrieve a post with its associated category using PHP code like this:

```php
$post = \App\Models\Post::with('category')->first();
```

This code retrieves a post from the database along with its associated category.

5. Access the post's category name with the following PHP code:

```php
$post->category->name;
```

This code allows you to access the name of the post's category.

## Working with the Database

Here are some useful commands for working with the database:

-   **Refresh and seed the database:**

```bash
php artisan migrate:refresh
php artisan db:seed
```

These commands refresh the database schema and seed it with sample data.

-   **Add fake data to the database using Tinker:**

```bash
php artisan tinker
$cat = \App\Models\Category::factory(30)->create();
```

This allows you to add fake data to the database using Laravel's Tinker tool.

## Notes

```html
<form action="/" method="POST">@csrf</form>
```

-   `@csrf` -> You must always include this in your form to prevent error 419 (CSRF token mismatch) when submitting forms.

-   `store` function:

```php
public function store()
{
    request()->validate([
        'name' => 'required:max:255',
        'username' => 'required:max:255|min:3',
        'email' => 'required|email:max:255',
        'password' => 'required:max:255|min:7',
    ]);

    ddd(request()->all());
}
```

-   `Rule::unique('users', 'username')`

```php
'username' => [
    'required',
    'min:3',
    'max:255',
    Rule::unique('users', 'username')
],
```

Laravel ensures that the 'username' field is unique in the 'users' table when using `Rule::unique`.

```php
protected $fillable = [
    'name',
    'username',
    'email',
    'password',
];
```

An alternative is to disable it and add `guarded = []`:

```php
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $guarded = [];
```

This allows all fields to be mass assignable.

Find a specific ID in the DB:

```php
> \App\Models\User::find(62)
> = App\Models.User {#6468
    id: 62,
    username: "ronaldinho10",
    name: "ronaldinho",
    email: "ronaldinho@gmail.com",
    email_verified_at: null,
    #password: "$2y$10$sESFNsEe8KCgyw4AGe2CJetr1N0nXeSxezjHam9rtVy.CFJBUlUBS",
    #remember_token: null,
    created_at: "2023-10-27 10:12:33",
    updated_at: "2023-10-27 10:12:33",
}
```

This code retrieves a specific user with ID 62 from the database.

It

's essential to use the convention `set[Attribute]` for specific attribute handling:

```php
public function setPasswordAttribute($password) {
    $this->attributes['password'] = bcrypt($password);
}
```

This code defines a mutator for the 'password' attribute to automatically hash the password before storing it.

Handling errors in your forms:

```php
@error('name')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
```

This code displays an error message for the 'name' field in your form if there is an error.

Or, at the end of the form:

```html
<div class="mb-6">
    @foreach ($errors->all() as $error)
    <li class="text-red-500 text-xs">{{ $error }}</li>
    @endforeach
</div>
```

This code displays all validation errors at the bottom of your form.

Handling input values in your forms:

```html
<input
    class="border border-gray-400 p-2 w-full"
    type="email"
    name="email"
    id="email"
    required
    value="{{ old('name') }}"
/>
```

This code defines an input field for the 'email' attribute in your form, pre-filling it with the old input value.

## Comment Section

To create a Comment model along with its migration and factory, run:

```bash
php artisan make:model Comment -mfc
```

This command generates a Comment model, migration, and factory.

## Database

To migrate and seed the database from scratch, run:

```bash
php artisan migrate:fresh --seed
```

This command resets the database, migrates the tables, and seeds it with data.

## Additional Steps

Here are additional steps and code snippets for your Laravel application:

### Post Model

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function comments()
    {
        return $

this->hasMany(Comment::class);
    }
}
```

### Comment Model

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories.HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
```

### Interacting with Models

You can use Laravel Tinker to interact with your models. For example:

```bash
php artisan tinker
```

In Tinker, you can explore relationships and data. For instance:

```php
$comment = App\Models\Comment::first()
$comment->post
$comment->author
```

This allows you to explore the relationships between models and access related data.

# disable Model::unguard();

class AppServiceProvider

    public function boot()
    {
        Model::unguard();
    }

if guarded is disabled NEVER do it
Post::create(request()->all())

```

```

### Project Overview

This Laravel project is designed for integrating with the Mailchimp API for email marketing purposes. It provides a seamless interface for managing email marketing campaigns in your Laravel application.

### Getting Started

#### Step 1: Clone the Repository

```shell
git clone https://github.com/victor90braz/11-section.git
```

#### Step 2: Obtain Your Mailchimp API Key

Obtain your Mailchimp API key from the [Mailchimp API Key page](https://us21.admin.mailchimp.com/account/api/).

#### Step 3: Configure Laravel Environment Variables

Add your Mailchimp API key as an environment variable in your Laravel `.env` file:

```dotenv
MAILCHIMP_KEY=cdb9d6462fd76f4dda9277ad935134a4-us21
```

#### Step 4: Configure Laravel Services

In your Laravel `config/services.php` file, ensure that the Mailchimp configuration is set up correctly:

```php
'mailchimp' => [
    'key' => env('MAILCHIMP_KEY')
]
```

#### Step 5: Verify Configuration

To verify that your Mailchimp configuration is correctly loaded, run the following command in the Laravel Tinker:

```shell
php artisan tinker
> config('services.mailchimp')
```

#### Step 6: Install the Mailchimp Marketing Library

Install the Mailchimp Marketing library using Composer:

```shell
composer require mailchimp/marketing
```

#### Step 7: Next Steps

Follow the [Mailchimp Quick Start Guide](https://mailchimp.com/developer/marketing/guides/quick-start/) to make your first API call and explore more Mailchimp features.

### Additional Documentation and Examples

-   [Mailchimp API Documentation](https://mailchimp.com/developer/marketing/api/account-exports/)
-   [Mailchimp Lists API Documentation](https://mailchimp.com/developer/marketing/api/lists/)

### Sample API Calls

Here are some sample API calls demonstrating how to use the Mailchimp API in your Laravel application.

1. Add a member to a list:

```php
$response = $client->lists->addListMember("76cf69a4f6", [
    'email_address' => 'maria@gmail.com',
    'status' => 'subscribed'
]);
dd($response);
```

2. Get information about list members:

```php
$response = $client->lists->getListMembersInfo("76cf69a4f6");
dd($response);
```

3. Get information about a specific list:

```php
$response = $client->lists->getList("76cf69a4f6");
dd($response);
```

4. Get information about all lists:

```php
$response = $client->lists->getAllLists();
dd($response);
```

# README for the `MailchimpNewsletter` Class

```php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter {

    public function subscribe(string $email, $list = null) {

        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client()->lists->addListMember( $list , [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }

    protected function client() {

        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21',
        ]);
    }
}

```

## Using Dependency Injection

Alternatively, you can utilize dependency injection to make your code more elegant and maintainable. Here's how to use the `MailchimpNewsletter` class with dependency injection:

```php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }

        return redirect('/')
            ->with('success', 'You are now signed up for our newsletter!');
    }
}

```

## Integration in Laravel Routes

To implement the `MailchimpNewsletter` functionality in your Laravel routes, you can add the following route definition in your `routes/web.php` or `routes/api.php` file:

```php
Route::post('/newsletter', (NewsletterController::class));
```

````markdown
# Newsletter Subscription System

## Logic Overview

This document outlines the architecture and key components of a newsletter subscription system within a Laravel application. The system involves the following components:

-   Interface
-   Controller
-   Implementation classes
-   Binding in the Laravel service container

## 1. Interface Declaration (Newsletter)

An interface named `Newsletter` is declared, specifying the contract for newsletter subscriptions.

```php
interface Newsletter {
public function subscribe(string $email, string $list = null);
}
```
````

## 2. NewsletterController

A Laravel controller, `NewsletterController`, is defined, extending the base `Controller` class.

```php
class NewsletterController extends Controller {
public function __invoke(Newsletter $newsletter) {
    // Controller logic
}
}
```

The controller expects an instance of a class implementing the `Newsletter` interface through dependency injection.

## 3. MailchimpNewsletter Class

The `MailchimpNewsletter` class is declared, implementing the `Newsletter` interface, providing an implementation for the `subscribe` method.

```php
class MailchimpNewsletter implements Newsletter {
// Implementation of the subscribe method
}
```

## 4. Binding Implementation to Interface

In this section, a binding between the `Newsletter` interface and a concrete implementation is configured within the Laravel service container.

```php
app()->bind(Newsletter::class, function () {
// Configuration and creation of the MailchimpNewsletter instance
});
```

This configuration allows the application to provide an instance of the `MailchimpNewsletter` class when the `Newsletter` interface is requested.

## Observations

-   The code follows a dependency injection pattern, making the system flexible and testable.
-   The system is configured to use the Mailchimp API for newsletter subscriptions, and the concrete implementation is `MailchimpNewsletter`.
-   Laravel's service container manages the binding of the `Newsletter` interface to the `MailchimpNewsletter` class, allowing for easy switching between newsletter providers.
-   This code is suitable for a Laravel application and is typically defined in a service provider.

This README provides an overview of the newsletter subscription system's key components and their interactions within the application.

```

This formatted README provides a clear overview of the logic and its components, making it easier for others to understand and use in your documentation.
```

````markdown
# 12-Section Admin

12-Section Admin is a web application designed for managing and organizing content across various categories. This README will guide you through the setup, usage, and understanding of the codebase.

## Getting Started

### Step 1: Clone the Repository

```shell
git clone https://github.com/victor90braz/12-section-admin.git
```
````

### Category Selection in a Form

```php
<section class="px-6 py-8">
    <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        category
    </label>

    <section class="px-6 py-8">
        <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            category
        </label>

        <select name="category_id" id="category_id">
            @foreach (App\Models\Category::all() as $category)
                <option value="{{ $category->id }}" {{ strval(old('category_id')) === strval($category->id) ? 'selected' : '' }}>
                    {{ ucwords($category->name) }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </section>
</section>
```

### File Upload with Form Data

If a file is required in the form, make sure to include `enctype="multipart/form-data"`. Here's an example:

```php
<form action="/admin/posts" method="POST" enctype="multipart/form-data">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="thumbnail">
        thumbnail
    </label>

    <input class="border border-gray-400 p-2 w-full"
        type="file"
        name="thumbnail"
        id="thumbnail"
        required
        value="{{ old('thumbnail') }}"
    />
</form>
```

### Store Function

The `store` function processes and stores data. The inline comments explain each step within the function.

````php
public function store()
{
    // Use the ddd function to dump and die, showing the contents of the request
    // This is helpful for debugging and understanding the request data
    ddd(request()->all());

    // Use ddd to dump and die the 'thumbnail' file from the request
    ddd(request()->file('thumbnail'));

    // Store the 'thumbnail' file in the 'thumbnails' directory
    // This function will move the uploaded file to a specific location and return the path
    $path = request()->file('thumbnail')->store('thumbnails');

    // Return the path to the stored file
    // This can be useful for further processing or displaying the uploaded file
    return $path;
}

- Add the symbolic link to make the storage folder available in the public folder
  - Run the following command in the terminal:
    ```
    php artisan storage:link
    ```

### Database Migration

To create the necessary database structure, use the following migration:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
````

Run the following command in the terminal to migrate and seed the database:

```
php artisan migrate:fresh --seed
```

### Update Validation Rules

Update the validation rules in the `store` method to include the 'thumbnail' field and ensure it's an image:

```php
$attributes = request()->validate([
    'title' => 'required',
    'thumbnail' => 'required|image', // Ensure it's an image
    'slug' => ['required', Rule::unique('posts', 'slug')],
    'excerpt' => 'required',
    'body' => 'required',
    'category_id' => ['required', Rule::exists('categories', 'id')]
]);
```

# ex: asset

-   add to display html
    src="{{ asset('storage/' . $post->thumbnail) }}"

<link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
<img src="{{ asset('storage/' . 'images/favicon.png') }}" alt="favicon" width="50">

This README provides a comprehensive guide to setting up the project, understanding the category selection form, the `store` function, database migration, and updating validation rules.

# Mailpit - email testing for developers

![Tests](https://github.com/axllent/mailpit/actions/workflows/tests.yml/badge.svg)
![Build status](https://github.com/axllent/mailpit/actions/workflows/release-build.yml/badge.svg)
![Docker builds](https://github.com/axllent/mailpit/actions/workflows/build-docker.yml/badge.svg)
![CodeQL](https://github.com/axllent/mailpit/actions/workflows/codeql-analysis.yml/badge.svg)
[![Go Report Card](https://goreportcard.com/badge/github.com/axllent/mailpit)](https://goreportcard.com/report/github.com/axllent/mailpit)

Mailpit is a small, fast, low memory, zero-dependency, multi-platform email testing tool & API for developers.

It acts as an SMTP server, provides a modern web interface to view & test captured emails, and contains an API for automated integration testing.

Mailpit was originally **inspired** by MailHog which is [no longer maintained](https://github.com/mailhog/MailHog/issues/442#issuecomment-1493415258) and hasn't seen active development for a few years now.

![Mailpit](https://raw.githubusercontent.com/axllent/mailpit/develop/docs/screenshot.png)

## Features

-   Runs entirely from a single [static binary](https://mailpit.axllent.org/docs/install/)
-   Modern web UI to view emails (formatted HTML, highlighted HTML source, text, headers, raw source, and MIME attachments
    including image thumbnails), including optional [HTTPS](https://mailpit.axllent.org/docs/configuration/https/)
-   Optional [basic authentication](https://mailpit.axllent.org/docs/configuration/frontend-authentication/) for web UI & API
-   [HTML check](https://mailpit.axllent.org/docs/usage/html-check/) to test & score mail client compatibility with HTML emails
-   [Link check](https://mailpit.axllent.org/docs/usage/link-check/) to test message links (HTML & text) & linked images
-   [Create screenshots](https://mailpit.axllent.org/docs/usage/html-screenshots/) of HTML messages via web UI
-   Mobile and tablet HTML preview toggle in desktop mode
-   Advanced [mail search](https://mailpit.axllent.org/docs/usage/search-filters/)
-   [Message tagging](https://mailpit.axllent.org/docs/usage/tagging/)
-   Real-time web UI updates using web sockets for new mail & optional browser notifications for new mail (when accessed
    via either HTTPS or `localhost` only)
-   SMTP server with optional [STARTTLS & SMTP authentication](https://mailpit.axllent.org/docs/configuration/smtp-authentication/) (including an
    "accept any" mode)
-   [SMTP relaying](https://mailpit.axllent.org/docs/configuration/smtp-relay/) (message release) - relay messages via a different SMTP server
    including an optional allowlist of accepted recipients
-   Fast SMTP processing & storing - approximately 70-100 emails per second depending on CPU, network speed & email size,
    easily handling tens of thousands of emails
-   Configurable automatic email pruning (default keeps the most recent 500 emails)
-   A simple [REST API](https://mailpit.axllent.org/docs/api-v1/) for integration testing
-   Optional [webhook](https://mailpit.axllent.org/docs/integration/webhook/) for received messages
-   Multi-architecture [Docker images](https://mailpit.axllent.org/docs/install/docker/)

## Installation

The Mailpit web UI listens by default on `http://0.0.0.0:8025` and the SMTP port on `0.0.0.0:1025`.

Mailpit runs as a single binary and can be installed in different ways:

### Install via package managers

-   **Mac**: `brew install mailpit` (to run automatically in the background: `brew services start mailpit`)
-   **Arch Linux**: available in the AUR as `mailpit`
-   **FreeBSD**: `pkg install mailpit`

### Install via bash script (Linux & Mac)

Linux & Mac users can install it directly to `/usr/local/bin/mailpit` with:

```bash
sudo bash < <(curl -sL https://raw.githubusercontent.com/axllent/mailpit/develop/install.sh)
```

### Download static binary (Windows, Linux and Mac)

Static binaries can always be found on the [releases](https://github.com/axllent/mailpit/releases/latest). The `mailpit` binary can be extracted and copied to your `$PATH`, or simply run as `./mailpit`.

### Docker

See [Docker instructions](https://mailpit.axllent.org/docs/install/docker/) for 386, amd64 & arm64 images.

### Compile from source

To build Mailpit from source, see [Building from source](https://mailpit.axllent.org/docs/install/source/).

## Usage

Run `mailpit -h` to see options. More information can be seen in [the docs](https://mailpit.axllent.org/docs/configuration/runtime-options/).

If installed using homebrew, you may run `brew services start mailpit` to always run mailpit automatically.

### Testing Mailpit

Please refer to [the documentation](https://mailpit.axllent.org/docs/install/testing/) on how to easily test email delivery to Mailpit.

### Configuring sendmail

Mailpit's SMTP server (default on port 1025), so you will likely need to configure your sending application to deliver mail via that port.
A common MTA (Mail Transfer Agent) that delivers system emails to an SMTP server is `sendmail`, used by many applications, including PHP.
Mailpit can also act as substitute for sendmail. For instructions on how to set this up, please refer to the [sendmail documentation](https://mailpit.axllent.org/docs/install/sendmail/).

# Object-Oriented Principles in PHP

This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

## Table of Contents

-   [Introduction](#introduction)
-   [Classes](#classes)
-   [Features](#features)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Contributing](#contributing)
-   [License](#license)

## Introduction

This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

## Classes

## GitHub Repository

The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/02-object-oriented-principles-php).

### Team Class

The `Team` class represents a sports team and includes the following methods:

-   `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
-   `start(...$params)`: Static factory method to create a new `Team` instance.
-   `name()`: Get the name of the team.
-   `add($name)`: Add a new member to the team.
-   `members()`: Get the array of team members.

### Member Class

The `Member` class represents an individual team member and includes the following methods:

-   `__construct($name)`: Constructor to initialize a member with a name.
-   `lastViewed()`: Method to get the last viewed information for the member.

## Features

-   Implementation of the `Team` class with methods for managing team information.
-   Implementation of the `Member` class for representing individual members of the team.

## Installation

1. Clone the repository or download the ZIP file.
2. Install any necessary dependencies using the provided `composer.json` file:

    ```bash
    composer install
    ```

    # Object-Oriented Principles in PHP

    This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

    ## Table of Contents

    - [Introduction](#introduction)
    - [Classes](#classes)
    - [Features](#features)
    - [Installation](#installation)
    - [Usage](#usage)
    - [Contributing](#contributing)
    - [License](#license)

    ## Introduction

    This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

    ## Run a local PHP server in the "constructs" directory:

    php -S localhost:8888 -t constructs

    ## Classes

    ## GitHub Repository

    The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/02-object-oriented-principles-php).

    ### Team Class

    The `Team` class represents a sports team and includes the following methods:

    - `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
    - `start(...$params)`: Static factory method to create a new `Team` instance.
    - `name()`: Get the name of the team.
    - `add($name)`: Add a new member to the team.
    - `members()`: Get the array of team members.

    ### Member Class

    The `Member` class represents an individual team member and includes the following methods:

    - `__construct($name)`: Constructor to initialize a member with a name.
    - `lastViewed()`: Method to get the last viewed information for the member.

    ## Features

    - Implementation of the `Team` class with methods for managing team information.
    - Implementation of the `Member` class for representing individual members of the team.

    ## Installation

    1. Clone the repository or download the ZIP file.
    2. Install any necessary dependencies using the provided `composer.json` file:

        ```bash
        composer install
        ```

        # Object-Oriented Principles in PHP

This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

## Table of Contents

-   [Introduction](#introduction)
-   [Classes](#classes)
-   [Features](#features)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Contributing](#contributing)
-   [License](#license)

## Introduction

This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

## Classes

## GitHub Repository

The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/03-inheritance.git).

### Team Class

The `Team` class represents a sports team and includes the following methods:

-   `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
-   `start(...$params)`: Static factory method to create a new `Team` instance.
-   `name()`: Get the name of the team.
-   `add($name)`: Add a new member to the team.
-   `members()`: Get the array of team members.

### Member Class

The `Member` class represents an individual team member and includes the following methods:

-   `__construct($name)`: Constructor to initialize a member with a name.
-   `lastViewed()`: Method to get the last viewed information for the member.

## Features

-   Implementation of the `Team` class with methods for managing team information.
-   Implementation of the `Member` class for representing individual members of the team.

## Installation

1. Clone the repository or download the ZIP file.
2. Install any necessary dependencies using the provided `composer.json` file:

    ```bash
    composer install
    ```

    # Object-Oriented Principles in PHP

    This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

    ## Table of Contents

    - [Introduction](#introduction)
    - [Classes](#classes)
    - [Features](#features)
    - [Installation](#installation)
    - [Usage](#usage)
    - [Contributing](#contributing)
    - [License](#license)

    ## Introduction

    This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

    ## Run a local PHP server in the "constructs" directory:

    php -S localhost:8888 -t constructs

    ## Classes

    ## GitHub Repository

    The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/03-inheritance.git).

    ### Team Class

    The `Team` class represents a sports team and includes the following methods:

    - `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
    - `start(...$params)`: Static factory method to create a new `Team` instance.
    - `name()`: Get the name of the team.
    - `add($name)`: Add a new member to the team.
    - `members()`: Get the array of team members.

    ### Member Class

    The `Member` class represents an individual team member and includes the following methods:

    - `__construct($name)`: Constructor to initialize a member with a name.
    - `lastViewed()`: Method to get the last viewed information for the member.

    ## Features

    - Implementation of the `Team` class with methods for managing team information.
    - Implementation of the `Member` class for representing individual members of the team.

    ## Installation

    1. Clone the repository or download the ZIP file.
    2. Install any necessary dependencies using the provided `composer.json` file:

        ```bash
        composer install
        ```

        # Object-Oriented Principles in PHP

        This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

        ## Table of Contents

        - [Introduction](#introduction)
        - [Classes](#classes)
        - [Features](#features)
        - [Installation](#installation)
        - [Usage](#usage)
        - [Contributing](#contributing)
        - [License](#license)

        ## Introduction

        This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

        ## Run a local PHP server in the "constructs" directory:

        php -S localhost:8888 -t constructs

        ## Classes

        ## GitHub Repository

        The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/03-inheritance.git).

        ### Team Class

        The `Team` class represents a sports team and includes the following methods:

        - `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
        - `start(...$params)`: Static factory method to create a new `Team` instance.
        - `name()`: Get the name of the team.
        - `add($name)`: Add a new member to the team.
        - `members()`: Get the array of team members.

        ### Member Class

        The `Member` class represents an individual team member and includes the following methods:

        - `__construct($name)`: Constructor to initialize a member with a name.
        - `lastViewed()`: Method to get the last viewed information for the member.

        ## Features

        - Implementation of the `Team` class with methods for managing team information.
        - Implementation of the `Member` class for representing individual members of the team.

        ## Installation

        1. Clone the repository or download the ZIP file.
        2. Install any necessary dependencies using the provided `composer.json` file:
            ```bash
            composer install
            ```

        Sure, I'll provide a brief explanation of the code and then create a README explaining the key concepts like interfaces, implementation, etc.

        ### Code Explanation:

        1. **Setting Up Paths and Including Files:**
           The code starts by setting up a `$basePath` and requiring a file named "functions.php" using the concatenated `$basePath`.

        2. **Interface Definition:**
           An interface named `NewsLetter` is defined with a single method signature `subscribe($email)`. Interfaces in PHP allow for the declaration of method signatures without implementation details.

        3. **Implementing the Interface:**
           Two classes, `CampaignMonitor` and `Drip`, both implement the `NewsLetter` interface. They provide concrete implementations for the `subscribe($email)` method, fulfilling the requirements specified by the `NewsLetter` interface.

        4. **Controller and Subscription Handling:**
           The `NewsLetterSubscriptionsController` class defines a method `store` that accepts an instance of a class implementing the `NewsLetter` interface. It then calls the `subscribe` method on the provided instance with a predefined email.

        5. **Usage:**
           Finally, an instance of `NewsLetterSubscriptionsController` is created, and the `store` method is invoked with an instance of `CampaignMonitor`.

        ### README:

        ## Understanding the PHP Code

        This PHP code demonstrates the usage of interfaces and class implementation in object-oriented programming. Here's a breakdown of the key concepts:

        ### 1. Interfaces:

        An interface in PHP defines a contract, specifying method signatures without implementing their functionality. Classes implementing an interface must provide concrete implementations for all the methods defined in the interface. In this code, `NewsLetter` is an interface that requires implementing a `subscribe($email)` method.

        ### 2. Implementing an Interface:

        Classes `CampaignMonitor` and `Drip` both implement the `NewsLetter` interface by providing the required `subscribe($email)` method. This allows these classes to adhere to the contract defined by the `NewsLetter` interface.

        ### 3. Class Implementation and Usage:

        - `CampaignMonitor` and `Drip` classes are examples of implementing the `NewsLetter` interface. They define the specific behavior for subscribing a user using CampaignMonitor and Drip, respectively.

        - The `NewsLetterSubscriptionsController` class contains a method `store` that accepts an instance of a class implementing the `NewsLetter` interface. Inside this method, the `subscribe` method of the provided instance is called, allowing for subscription handling based on the specific implementation of the `NewsLetter` interface.

        ### 4. Usage Example:

        In the usage example provided in the code, an instance of `CampaignMonitor` is created and passed to the `store` method of `NewsLetterSubscriptionsController`. This demonstrates how the `NewsLetterSubscriptionsController` can work with different implementations of the `NewsLetter` interface, such as `CampaignMonitor` and `Drip`, through the common contract defined by the interface.

        Feel free to reach out if you have any further questions or need additional clarification!

        # Object-Oriented Principles in PHP

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

# Laracasts Course - Session 5

This repository is for the Laracasts Course on Sessions and Authentication.

GitHub Repository: [Sessions and Authentication GitHub Repository](https://github.com/victor90braz/sessions-authentication.git)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon, a development environment, from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select a version that suits your needs:
    - [Download Laragon Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   **Check Available PHP Commands:**
    You can check the available PHP commands using the following in the terminal:

    ```sh
    php -h
    ```

-   **Start a Local PHP Server:**
    To start a local PHP server, use the following command in the terminal:
    ```sh
    php -S localhost:8888 -t public
    ```

To initialize a session in the application (usually at the beginning of `index.php` in the `public` folder), use:

```php
session_start();
$_SESSION['name'] = 'victor braz';
<?= $_SESSION['name'] ?? $heading ?>
```

-   To get PHP information, run:

    ```sh
    php --info
    ```

-   To find where session data has been saved if it's not temporary, check the session save path using:

    ```sh
    session.save_path
    ```

-   If you want to find a session in the docs, create a file named `get_tmpdir.php` and save the following content:

    ```php
    <?php
    echo sys_get_temp_dir();
    ?>
    ```

    Run the command to get the path:

    ```sh
    php get_tmpdir.php
    ```

    # Laracasts Course - Session 6

This repository is part of the Laracasts Course on Refactoring Techniques.

GitHub Repository: [Refactoring Techniques GitHub Repository](https://github.com/victor90braz/refactoring-techniques.git)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon, a development environment, from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select a version that suits your needs:
    - [Download Laragon Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

-   **Check Available PHP Commands:**
    To explore available PHP commands, execute the following in the terminal:

    ```sh
    php -h
    ```

-   **Start a Local PHP Server:**
    Start a local PHP server using the following command in the terminal:

    ```sh
    php -S localhost:8888 -t public
    ```

To initialize a session in the application (usually at the beginning of `index.php` in the `public` folder), use:

```php
session_start();
$_SESSION['name'] = 'victor braz';
<?= $_SESSION['name'] ?? $heading ?>
```

-   To get PHP information, run:

    ```sh
    php --info
    ```

-   To find where session data has been saved if it's not temporary, check the session save path using:

    ```sh
    session.save_path
    ```

-   If you want to find a session in the docs, create a file named `get_tmpdir.php` and save the following content:

    ```php
    <?php
    echo sys_get_temp_dir();
    ?>
    ```

    Run the command to get the path:

    ```sh
    php get_tmpdir.php
    ```

### Composer Setup and Usage:

-   **Run Composer in the Terminal (cd):**

    Run the following command to initialize a new composer.json file:

    ```sh
    composer init
    ```

    Follow the on-screen prompts to generate the configuration.

-   **Composer Installation:**

    Install the necessary dependencies using the following command:

    ```sh
    composer install
    ```

-   **Composer Autoload:**

    After installation, generate the autoload files with:

    ```sh
    composer dump-autoload
    ```

-   **Add Vendor Directory to .gitignore:**

    It's recommended to add the vendor directory to .gitignore:

    ```sh
    echo '/vendor/' >> .gitignore
    ```

### Package Management:

-   **Getting Packages:**

    There are two ways to acquire a package:

    -   **Using Terminal:**
        Run the following command to search for packages:

        ```sh
        composer search package_name
        ```

    -   **Direct Download:**
        Visit [Packagist - The PHP Package Repository](https://packagist.org) and search for the package you need. You can then download it manually or install it via Composer.

-   **Installing Packages:**

    Use the following command to install a package via Composer:

    ```sh
    composer require package_name
    ```

### Testing with Pest Framework:

-   **Pest Installation:**

    To install Pest, follow the instructions provided in the [Pest Documentation](https://pestphp.com/docs/installation).

-   **Initialize Pest:**

    Run the following command to initialize Pest in your project:

    ```sh
    ./vendor/bin/pest --init
    ```

-   **Running Tests:**

    Use the following command to run tests with Pest:

    ```sh
    vendor/bin/pest
    ```

For more information about Pest, visit the [Pest GitHub repository](https://github.com/pestphp/pest).

---

Author: Victor Braz
Contact: victor.90braz@gmail.com
