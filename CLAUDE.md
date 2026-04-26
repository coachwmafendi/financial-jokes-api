# CLAUDE.md - Financial Jokes API

## Project Context
A simple REST API built with Laravel 13 and PHP 8.3, designed to serve financial jokes with Malaysian nuances. Uses SQLite for data storage.

## Development Commands
- **Start Server:** `php artisan serve --port=8001`
- **Database Setup:** `php artisan migrate --seed`
- **Run Tests:** `php artisan test`
- **Clear Cache:** `php artisan cache:clear`

## Key Endpoints
- `GET /api/jokes` - List all jokes
- `GET /api/jokes/random` - Get a random joke

## Coding Guidelines
- **Framework:** Follow standard Laravel 13 conventions.
- **Architecture:** Use Controllers for request handling and Models for data interaction.
- **PHP Version:** Ensure compatibility with PHP 8.3 features.
- **Naming:** Use camelCase for variables/properties and PascalCase for classes.
- **API Responses:** Maintain consistent JSON response structures.
