<!-- README.en.md -->

[Português (BR)](./README.md) · [English](./README.en.md)

# Flyback

The Flyback project aims to develop a web system that improves internal communication within educational institutions by providing a structured channel for submitting improvement suggestions from students, parents and teachers. The project is justified by the need to offer a safe and organized space for the school community to share ideas, opinions and report problems that contribute to a more participatory educational environment.

## Requirements

- **Composer:** installed on the system or accessed via Sail.
- **PHP:** up-to-date (recommended PHP 8.3+).
- **Docker & Docker Compose:** to run the environment with Laravel Sail.
- **Laravel Sail:** recommended for containerized development.
- **Node.js & npm:** to manage and build front-end assets (Tailwind / Vite).

## Technologies

- **PHP**
- **MariaDB**
- **Tailwind CSS**
- **Alpine.js**
- **Laravel** (main framework)
- **Docker / Laravel Sail**

## About the project

The application is built using the **Laravel** framework, which provides an MVC structure, migrations, the Eloquent ORM, routing and modern development tools. The front-end uses **Tailwind CSS** for utility-first styling and **Alpine.js** for lightweight interactivity.

## Running the project (recommended: Laravel Sail)

Follow these steps to run the project locally using Sail:

1. Clone the repository:

```bash
git clone https://github.com/mateusmendes12/Flyback.git
cd Flyback
```

2. Copy the environment file and adjust if necessary:

```bash
cp .env.example .env
# Edit .env if you need to adjust DB, APP_URL, etc.
```

3. Start containers and install dependencies:

```bash
# Start containers in background (build if necessary)
./vendor/bin/sail up -d --build

# Install PHP dependencies (if not already installed)
./vendor/bin/sail composer install

# Generate application key
./vendor/bin/sail artisan key:generate

# Run migrations (and optional seeds)
./vendor/bin/sail artisan migrate
# To run migrations with seeds
./vendor/bin/sail artisan migrate --seed

# Install JS dependencies and run Vite (dev mode)
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev

# Create storage symlink (if needed)
./vendor/bin/sail artisan storage:link
```

4. Open the application at `http://localhost` (or the port set in `.env`).

Notes:
- If you prefer not to use containers, install Composer, PHP, MariaDB and Node.js locally and run the equivalent commands without `./vendor/bin/sail`.
- Adjust `DB_CONNECTION` and database credentials in `.env` if you are using MariaDB outside Sail.

## License

This project is licensed under the **GNU General Public License v3.0**. See: https://www.gnu.org/licenses/gpl-3.0.html
