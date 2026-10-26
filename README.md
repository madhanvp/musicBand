# MusicBand — Instrument Management System

A Laravel-based web application for managing musical instruments, their categories, and associated images through a dedicated dashboard. The project demonstrates server-side development, database integration, CRUD operations, and image upload handling using Laravel.

## Overview

MusicBand is designed to organize musical instrument information in a structured way. It includes an instrument management interface that allows administrators to manage instrument records and their associated details.

The project was developed using Laravel, PHP, MySQL, and Tailwind CSS.

## Features

- **Instrument Management:** Create, view, update, and delete instrument records.
- **Category Organization:** Organize instruments into categories such as:
  - Tabla / Percussion
  - Bansuri / Wind
  - Tanpura / Strings
  - Harmonium / Keys
- **Image Uploads:** Upload instrument images in JPG, JPEG, PNG, and WebP formats.
- **Admin Dashboard:** Manage instrument records through a dedicated dashboard.
- **Database Integration:** Store instrument details and image paths in the database.
- **Laravel Routing:** Handle application requests through Laravel routes.
- **MVC Architecture:** Organize application logic using Laravel's Model-View-Controller structure.
- **Responsive UI:** Build the interface using Tailwind CSS.

## Technology Stack

| Technology | Purpose |
|---|---|
| PHP | Backend programming |
| Laravel 12 | Web application framework |
| MySQL | Database management |
| Blade | Laravel view templating |
| Tailwind CSS | UI styling |
| HTML5 | Page structure |
| JavaScript | Client-side interactions |
| Composer | PHP dependency management |
| XAMPP | Local development environment |
| Git & GitHub | Version control and source code hosting |

## Project Structure

```text
musicBand/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Requests/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   ├── web.php
│   └── console.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
```

*Note: This is a representative Laravel directory structure. Your actual repository may contain additional files or different directories.*

## Requirements

Install the following software before running the project:

- PHP 8.2 or a compatible version supported by the project's dependencies
- Composer
- MySQL or MariaDB
- Node.js and npm, if frontend assets need to be built
- Git
- XAMPP (optional, for local Apache and MySQL services)

## Installation and Setup

### 1. Clone the repository

```bash
git clone https://github.com/madhanvp/musicBand.git
cd musicBand
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Configure environment variables

Create your local environment file:

```bash
cp .env.example .env
```

On Windows Command Prompt, you can use:

```cmd
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 4. Configure the database

Start MySQL using XAMPP and create a database named:

```sql
CREATE DATABASE musicband_admin;
```

Update the following values in your `.env` file according to your local database configuration:

```dotenv
APP_NAME=MusicBand
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=musicband_admin
DB_USERNAME=root
DB_PASSWORD=
```

Change the database username, password, and port if your MySQL installation uses different settings.

### 5. Run database migrations

```bash
php artisan migrate
```

If the project already contains the required database tables, ensure the migrations and existing database schema are compatible before running this command.

### 6. Build frontend assets

If the repository includes a `package.json` file, install the JavaScript dependencies and build the frontend assets:

```bash
npm install
npm run build
```

### 7. Start the development server

```bash
php artisan serve
```

Open the application in your browser:

- Application: http://127.0.0.1:8000
- Admin dashboard: http://127.0.0.1:8000/admin
- Dashboard: http://127.0.0.1:8000/dashboard

The dashboard URLs are the project's known routes; access may depend on the application's authentication and route configuration.

## Instrument Categories

The application organizes musical instruments into the following groups:

| Category | Example |
|---|---|
| Percussion | Tabla |
| Wind | Bansuri |
| Strings | Tanpura |
| Keys | Harmonium |

These categories help keep instrument records organized and easier to manage.

## Image Uploads

The application supports the following image formats:

- JPG / JPEG
- PNG
- WebP

The configured upload size limit is 2048 KB (2 MB).

Uploaded image paths are stored as database values. Ensure the application's storage configuration and image-serving logic are set up correctly for uploaded images to appear in the interface.

## Learning Outcomes

This project provides practical experience with:

- Laravel application structure and MVC architecture
- PHP backend development
- Database configuration and integration
- CRUD operations
- Routing and controllers
- Form handling and validation
- Image upload processing
- Blade templates and Tailwind CSS
- Composer-based dependency management
- Git and GitHub version control
- Local application debugging

## Troubleshooting

**Database connection errors**

- Confirm that MySQL is running.
- Verify the database name and credentials in `.env`.
- Clear cached configuration if environment changes are not reflected:

```bash
php artisan config:clear
```

**Images are not displaying**

- Verify that the uploaded image exists at the expected location.
- Check the stored image path and the code used to generate its URL.
- Confirm the storage or public directory configuration.

**Dashboard access issues**

- Verify the configured routes in `routes/web.php`.
- Check the authentication middleware and available user accounts.
- Confirm that the local database contains the expected records.

**Dependencies or configuration errors**

```bash
composer install
php artisan optimize:clear
```

## Future Improvements

Potential enhancements for future development include:

- Search, filtering, and pagination for instruments
- Improved form validation and error handling
- Instrument category management
- Role-based access control
- Automated tests for CRUD operations
- Deployment with a production-ready web server

These are possible future enhancements, not claims about existing functionality.

## Author

**Madhan VP**

- GitHub: [@madhanvp](https://github.com/madhanvp)
- LinkedIn: [madhan-vp](https://www.linkedin.com/in/madhan-vp/)

## License

No license has been specified for this repository. Add a `LICENSE` file if you intend to grant others permission to use, modify, and distribute the project.

---

*MusicBand — A Laravel-based musical instrument management project.*
