# # Laravel-11 Starter Project

Welcome to the Laravel Starter Project! This repository provides a kickstart setup for Laravel version 11, incorporating various essential packages and features. It's designed to streamline your Laravel application development process.

## Table of Contents

- [# Laravel-11 Starter Project](#-laravel-11-starter-project)
  - [Table of Contents](#table-of-contents)
  - [Uses Packages](#uses-packages)
  - [Dashboard Template](#dashboard-template)
  - [Other Uses](#other-uses)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [Installation](#installation)
    - [Starting with Docker](#starting-with-docker)
  - [Deploy via FTP with CI/CD](#deploy-via-ftp-with-cicd)
      - [GitFlow for Merge Requests](#gitflow-for-merge-requests)
      - [FTP Deployment Process](#ftp-deployment-process)
  - [Laravel Self Updater](#laravel-self-updater)
    - [Features](#features-1)
    - [Usage](#usage)
    - [Error Handling](#error-handling)
  - [Contribution Guide](#contribution-guide)
  - [License](#license)

## Uses Packages

- Laravel [Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) (Used only backend code for authentication)
- [Spatie](https://github.com/spatie/laravel-permission) Roll and Permission
- Laravel [Telescope](https://laravel.com/docs/11.x/telescope) (Elegant debug assistant for local development)
- Laravel [Pulse](https://laravel.com/docs/11.x/pulse) (Application's performance Monitoring)
- Laravel [Clockwork](https://github.com/itsgoingd/clockwork) (Request Monitoring)
- Laravel [Horizon](https://laravel.com/docs/11.x/horizon) (Job And Queue manage)
- Laravel [Settings](https://github.com/anisAronno/laravel-settings) (Personal Package for application settings)
- Laravel [Media Gallery](https://github.com/anisAronno/laravel-media-gallery) (Personal Package for file management)
- Laravel [Activity Log](https://github.com/spatie/laravel-activitylog) (Track User Activity)
- Beautiful [Log Viewer](https://github.com/opcodesio/log-viewer) for local and production
- Laravel [Sweet Alert](https://github.com/realrashid/sweet-alert)
- Laravel [Pint](https://laravel.com/docs/11.x/pint) For code style fixing

## Dashboard Template

Utilizing the [admintoolkit-html](https://github.com/mostafizurhimself/admintoolkit-html) repository as our Dashboard Template. Explore this open-source admin template for more insights and details.

`We acknowledge the contributors for their valuable creation.`

## Other Uses

- Laravel [Database Notification](https://laravel.com/docs/11.x/notifications#database-notifications)
- Api authentication setup with [default token](https://laravel.com/docs/5.8/api-authentication)
- Api authentication setup with [Sanctum](https://laravel.com/docs/11.x/sanctum)

## Features

- Setup Role and permission with CRUD
- User Table showing and CRUD Complete
- Dashboard templating with Responsive Sidebar
- Use dark mode and light mode
- Show user notification
- Show User Activity log
- Central Media Gallery
- Editor JS for Content writing
- Application Settings setup
- User Timezone and Language setup by her location

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
   php artisan horizon
   ```

   or

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
version: '3'
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

## Deploy via FTP with CI/CD

This project utilizes Continuous Integration/Continuous Deployment (CI/CD) for automated deployment via FTP, following GitFlow principles for merge requests.

#### GitFlow for Merge Requests

Follow GitFlow principles to manage merge requests:

- **Feature Branches**: Develop new features in separate branches.
- **Pull Requests**: Submit pull requests to merge features into the `develop` branch.
- **Merge to Master**: Merge from `develop` to `master` for production-ready code.

#### FTP Deployment Process

To deploy your project:

1. Configure necessary environment variables in GitHub Settings:

   - **SERVER**: Your FTP server address.
   - **USERNAME**: Your FTP username.
   - **PASSWORD**: Your FTP password.

2. Upon merging into the `master` branch, GitHub Actions automates deployment to your specified FTP server.

## Laravel Self Updater

The Laravel Self Updater feature streamlines the process of updating your Laravel Starter application, making it easy to manage and deploy updates with minimal effort. Here’s how to use it:

### Features

- Automatically checks for updates.
- Initiates updates with simple Artisan commands.

### Usage

1. **Check for Updates:**
   Run the following command to check for available updates.

   ```bash
   php artisan update:check
   ```

2. **Initiate Update:**
   Use the following command to initiate the update process.

   ```bash
   php artisan update:initiate {version?}
   ```

   Replace `{version?}` with a specific version number if desired; otherwise, it will initiate the update for the latest version.

### Error Handling

Ensure to handle any potential errors during the update process gracefully. Implement logging to monitor any issues that arise during updates.

## Contribution Guide

For guidelines on contributing to this project, refer to the [Contribution Guide](https://github.com/anisaronno/laravel-starter/blob/develop/CONTRIBUTING.md).

## License

This application is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
