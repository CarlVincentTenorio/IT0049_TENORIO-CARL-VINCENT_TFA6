# IT0049 – TFA6: Laravel POS Application with Database Integration

## Project Overview

This project is a Laravel-based Point of Sale (POS) application developed as part of the IT0049 Web Technology laboratory activity (TFA6).

The application builds upon the previous TFA5 Laravel POS project by replacing static PHP arrays with a MySQL database. It uses Laravel migrations to define database tables, seeders to populate sample records, Eloquent ORM to retrieve data, and Blade templates to display customer and user information.

## Project Objectives

- Create Laravel migrations for the customers and users tables.
- Populate the database with at least five sample records per table.
- Implement Customer and User Eloquent models.
- Retrieve database records using Laravel controllers.
- Display customer and user records through Blade views.
- Apply Laravel's Model-View-Controller (MVC) architecture.

## Technologies Used

- PHP
- Laravel Framework
- MySQL
- XAMPP
- Blade Template Engine
- HTML
- Composer
- Git and GitHub
- Visual Studio Code

## Project Structure

```text
app/
├── Http/
│   └── Controllers/
│       ├── CustomerController.php
│       ├── UserController.php
│       └── PageController.php
└── Models/
    ├── Customer.php
    └── User.php

database/
├── migrations/
│   ├── 0001_01_01_000000_create_users_table.php
│   └── 2026_10_25_175933_create_customers_table.php
└── seeders/
    ├── DatabaseSeeder.php
    └── PosSeeder.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── customers.blade.php
    └── users.blade.php

routes/
└── web.php
```

## Database Structure

### Customers Table

| Column | Description |
|---|---|
| id | Primary key |
| full_name | Customer's full name |
| email | Customer's email address |
| phone | Customer's contact number |
| created_at | Record creation timestamp |
| updated_at | Record update timestamp |

### Users Table

| Column | Description |
|---|---|
| id | Primary key |
| username | Unique username |
| full_name | User's full name |
| created_at | Record creation timestamp |
| updated_at | Record update timestamp |

## Features

### 1. Customer Accounts

Displays customer information retrieved from the MySQL database, including customer ID, full name, email address, and phone number.

### 2. User Accounts

Displays POS user information retrieved from the MySQL database, including user ID, username, and full name.

### 3. Database Migrations

Uses Laravel migrations to create and manage database tables without manually writing SQL statements.

### 4. Database Seeding

Uses `PosSeeder` to insert five sample customers and five sample users. The seeder uses `updateOrCreate()` to avoid duplicating records with matching customer emails or usernames.

### 5. Eloquent ORM

Uses Laravel Eloquent models to retrieve records from MySQL instead of using static PHP arrays.

### 6. Blade Templates

Uses Blade views to display database records dynamically in HTML tables.

## Installation and Setup

### Step 1: Clone the Repository

```bash
git clone https://github.com/CarlVincentTenorio/IT0049_TENORIO-CARL-VINCENT_TFA6.git
```

Navigate to the project directory:

```bash
cd IT0049_TENORIO-CARL-VINCENT_TFA6
```

### Step 2: Install Dependencies

Ensure PHP and Composer are installed, then run:

```bash
composer install
```

### Step 3: Configure the Environment

Create a `.env` file from the provided example:

```bash
cp .env.example .env
```

For Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### Step 4: Configure MySQL

Start MySQL using XAMPP and create a database named:

```text
it0049_tfa6_pos
```

Update the `.env` file:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=it0049_tfa6_pos
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=file
```

These settings assume a local XAMPP installation with the default MySQL configuration.

### Step 5: Run Database Migrations and Seeders

Execute:

```bash
php artisan migrate --seed
```

This creates the required database tables and inserts the sample customer and user records.

### Step 6: Start the Application

Run:

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Application Routes

| URL | Description |
|---|---|
| `/` | Home page |
| `/about` | About page |
| `/customers` | Displays customer records |
| `/users` | Displays user records |

## Sample Database Records

The database contains five sample customers and five sample POS users.

**Customers:** Juan Dela Cruz, Maria Santos, Pedro Reyes, Ana Garcia, and Jose Mendoza.

**Users:** Carlos Mendoza, Angela Reyes, Mark Santos, Patricia Garcia, and John Dela Cruz.

## Laravel MVC Implementation

The application follows Laravel's Model-View-Controller architecture.

- **Model:** Customer and User models interact with the MySQL database using Eloquent ORM.
- **View:** Blade templates display customer and user information in HTML tables.
- **Controller:** CustomerController and UserController retrieve database records and pass them to the appropriate views.
- **Routes:** The `routes/web.php` file connects URLs to controller methods.

## Testing and Verification

The application was tested locally using Laravel's development server and XAMPP MySQL.

The following functionality was verified:

- Database migrations executed successfully.
- Five sample records were inserted into each required table.
- Eloquent models successfully retrieved database records.
- Customer and User controllers displayed the correct data.
- Blade views displayed all five customer and user records.
- The `/customers` and `/users` pages loaded successfully.

## GitHub Repository

https://github.com/CarlVincentTenorio/IT0049_TENORIO-CARL-VINCENT_TFA6

## Hosted Application

Deployment pending.

## Academic Information

**Course:** IT0049 – Web Technology

**Laboratory Activity:** TFA6 – Laravel Database Integration

**Developer:** Carl Vincent Tenorio

## References

- Laravel Documentation – Migrations: https://laravel.com/docs/13.x/migrations
- Laravel Documentation – Eloquent ORM: https://laravel.com/docs/13.x/eloquent
- Laravel Documentation – Database Seeding: https://laravel.com/docs/13.x/seeding
- Stauffer, M. (2024). *Laravel: Up & Running* (3rd ed.).
