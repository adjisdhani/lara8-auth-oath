# Simple Laravel 8 API Authentication with Laravel Passport (OAuth)

This is a Simple Laravel 8 API Authentication with Laravel Passport (OAuth) with endpoints accessible via RESTful API.

## Features
- Create new user (POST `/api/register`)
- Login user (POST `/api/login`)

- View data posts (GET `api/posts`)
- Create new posts (POST `/api/posts`)
- Show data posts (GET `api/posts`)
- Show data posts by ID (GET `api/posts`)
- Update data posts by ID (PUT `api/posts`)
- Delete data posts by ID (DELETE `api/posts`)

## Requirements
- PHP 7.4 or higher
- Composer
- Laravel 8
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-api-lara8-auth-jwt.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd simple-api-lara8-auth-jwt
   ```

3. **Install dependencies**:
   ```bash
   composer install
   ```

4. **Generate the application key**:
   ```bash
    php artisan key:generate
    ```
5. **Configure the .env file**:
   ```bash
    DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=simple_api_crud_lara8
	DB_USERNAME=root
	DB_PASSWORD=yourpassword
   ```

6. **Start the development server**:
   ```bash
    php artisan serve

7. **Generate the migration**:
   ```bash
    php artisan migrate
    ```

8. **Generate Laravel Passport's value**:
   ```bash
    php artisan passport:install
    ```

7. **Cara memakainya sama seperti yang JWT**:

## Author
Adjis Ramadhani Utomo

## License
This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).