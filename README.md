# Contacts Management System

A simple and efficient web application for managing contacts, built with the Laravel framework.

## About The Project

This project provides a platform to list, create, view, edit, and delete contacts. Only authenticated admin users can manage contact data, others can only see the contacts.

### Key Features

-   List and paginate contacts.
-   View detailed information for each contact.
-   Admin-only access to create, edit, and delete contacts.
-   A simple one-click login system for the admin user.
-   Database seeding for easy setup with sample data.
-   Comprehensive feature tests to ensure application reliability.

### Installation

1.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

2.  **Set up the environment file:**
    Copy the example environment file and generate an application key.
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

3.  **Configure your `.env` file:**
    Open the `.env` file and update the database connection details (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4.  **Run database migrations and seeders:**
    This will create the necessary tables and populate them with initial data, including user roles, an admin user, and sample contacts.
    ```sh
    php artisan migrate --seed
    ```

5.  **Start the development server:**
    ```sh
    php artisan serve
    ```
    The application will be available at `http://127.0.0.1:8000`.

## Usage

### Viewing Contacts

Navigate to the application's homepage or the `/contacts` route to see a paginated list of all contacts. Anyone can view the contact list and details.

### Admin Access

To manage contacts (create, edit, delete), you need to be logged in as an administrator. The database seeder creates a default admin user with the following credentials:

-   **Email**: `admin@example.com`
-   **Password**: `test123456`

A special route is available for quick admin access during development:

-   Navigate to `/login`. This will automatically log you in as the admin user.

Once logged in, you will see options to add, edit, and delete contacts.

## Running Tests

This project comes with a suite of feature tests to ensure all functionalities work as expected. To run the tests, execute the following command from the project root:

```sh
./vendor/bin/phpunit
```

To run a specific test suite (e.g., Feature tests):

```sh
./vendor/bin/phpunit --testsuite Feature
```
