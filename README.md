# Portfolio Website

A modern portfolio website built with Laravel 11, Tailwind CSS, and Vite.

## Tech Stack

- **Laravel 11** - PHP Framework
- **PHP 8.2+** - Programming Language
- **Tailwind CSS 3.4** - Utility-first CSS Framework
- **Alpine.js 3.14** - JavaScript Framework
- **Vite 5** - Frontend Build Tool
- **MySQL** - Database
- **Docker** - Containerization

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- MySQL 8.0+
- Docker (optional)

## Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd Portfoliowebsite
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database** in `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

## Development

Run the development servers:

```bash
# Terminal 1: Laravel development server
php artisan serve

# Terminal 2: Vite development server
npm run dev
```

Visit `http://localhost:8000` in your browser.

## Docker Usage

Build and run with Docker:

```bash
docker-compose up -d
```

## Production Build

```bash
npm run build
php artisan optimize
```

## Code Quality

Laravel 11 includes Pint for code styling:

```bash
./vendor/bin/pint
```

## Testing

```bash
php artisan test
```

## Updated (November 2025)

- Upgraded to Laravel 11
- Migrated from Laravel Mix to Vite
- Updated to PHP 8.3
- Updated all dependencies to latest versions
- Modern ES6+ JavaScript modules


Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
