# Linkify - URL Shortener

Linkify is a custom Laravel-based web application that allows users to shorten long URLs, manage their links, and track usage statistics. The project also includes user authentication, contact management, and a modern frontend powered by Vite.

## Features

- Shorten long URLs to easy-to-share short links
- Redirect users from short links to original URLs
- User registration, login, and profile management
- Contact form and contact management
- Usage statistics and analytics for shortened URLs
- Responsive UI with custom branding

## Project Structure

- `app/Http/Controllers/` - Laravel controllers for handling requests
- `app/Models/` - Eloquent models for database tables
- `resources/views/` - Blade templates for frontend pages
- `routes/web.php` - Web routes for the application
- `database/migrations/` - Database schema migrations
- `public/` - Public assets and entry point

## Getting Started

1. Clone the repository:
   ```bash
   git clone https://github.com/salim359/linkify.git
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy `.env.example` to `.env` and update environment variables:
   ```bash
   cp .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Register or log in to manage your URLs and contacts
- Shorten URLs and share the generated short links



