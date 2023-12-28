# Laravel Starter Project (Version 10)

Welcome to the Laravel Starter Project! This repository provides a kickstart setup for Laravel version 10, incorporating various essential packages and features. It's designed to streamline your Laravel application development process.

## Table of Contents

-   [Laravel Starter Project (Version 10)](#laravel-starter-project-version-10)
    -   [Table of Contents](#table-of-contents)
    -   [Uses Packages](#uses-packages)
    -   [Other Uses](#other-uses)
    -   [Features](#features)
    -   [Getting Started](#getting-started)
        -   [Installation](#installation)
        -   [Starting with Docker](#starting-with-docker)
    -   [Contribution Guide](#contribution-guide)
    -   [License](#license)

## Uses Packages

-   Laravel [Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze) (authentication and application starter kits)
-   Laravel [Telescope](https://laravel.com/docs/10.x/telescope#introduction) (Request Monitoring)
-   Laravel [Horizon](https://laravel.com/docs/10.x/horizon#introduction) (Job And Queue manage)
-   Laravel [Debugbar](https://github.com/barryvdh/laravel-debugbar) (Monitoring every request)
-   Laravel [Settings](https://github.com/anisAronno/laravel-settings) (Personal Package for application settings)
-   Laravel [Media Uploader](https://github.com/anisAronno/Laravel-Media-Helper) (Personal Package for file management)
-   Laravel [Activity Log](https://github.com/spatie/laravel-activitylog) (Track User Activity)
-   Beautiful [Log Viewer](https://github.com/opcodesio/log-viewer) for local and production
-   [Spatie](https://github.com/spatie/laravel-permission) Roll and Permission
-   [Flowbite](https://flowbite.com/) For Tailwind Component
-   Laravel [Sweet Alert](https://github.com/realrashid/sweet-alert)
-   Laravel [Pint](https://laravel.com/docs/10.x/pint#introduction) For code style fixing

## Other Uses

-   Laravel [Database Notification](https://laravel.com/docs/10.x/notifications#database-notifications)
-   Api authentication setup with [default token](https://laravel.com/docs/5.8/api-authentication#introduction)
-   Api authentication setup with [Sanctum](https://laravel.com/docs/10.x/sanctum#introduction)

## Features

-   Setup Role and permission with CRUD
-   User Table showing and CRUD Complete
-   Dashboard templating with Responsive Sidebar
-   Use dark mode and light mode
-   Show user notification
-   Show User Activity log
-   Central Media Gallery
-   Editor JS for Content writing
-   Application Settings setup
-   User Timezone and Language setup by her location

## Getting Started

### Installation

1. Install the project with Composer:

    ```
    composer create-project anisaronno/laravel-starter
    ```

2. Switch to the repository folder:

    ```
    cd laravel-starter
    ```

3. Setup environment variables for the database and email.

4. Run database migrations:

    ```
    php artisan migrate
    ```

5. Run database seeding:

    ```
    php artisan db:seed
    ```

6. Run Jobs:

    ```
    php artisan queue:work
    ```

    or

    ```
    php artisan schedule:run
    ```

7. Run command for development:

    ```
    npm run dev
    ```

    for frontend build:

    ```
    npm run build
    ```

8. Start the local development server:

    ```
    php artisan serve
    ```

Now, access the server at http://localhost:8000.

### Starting with Docker

To start the Laravel Starter Project with Docker, you can utilize the provided `docker-compose.yml` file. Follow these steps:

1. Ensure Docker is installed on your system.

2. Create a `docker-compose.yml` file in the root directory of your project with the following content:

```yaml
version: "3"
services:
    # Define your services here (e.g., nginx, php, mysql, etc.)
    # Example services:
    nginx:
        image: nginx:alpine
        # Add your nginx configurations

    php:
        image: php:8.2-fpm
        # Add your PHP configurations

    # Add other necessary services as required.
```

3. Define the required services such as nginx, php, MySQL, etc., in the `docker-compose.yml` file based on your project's needs.

4. Once the `docker-compose.yml` file is configured, run the following command to start the services:

```bash
docker-compose up -d
```

5. Access your Laravel application at http://localhost:8000 or the specified port as per your configurations.

## Contribution Guide

For guidelines on contributing to this project, refer to the [Contribution Guide](https://github.com/anisaronno/laravel-starter/blob/develop/CONTRIBUTING.md).

## License

This application is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
