# Docker Development Environment

This repository includes an optional Docker Compose environment for running the FoodPark application locally without installing PHP, Composer, Node.js, Nginx, or MySQL directly on the host system.

## Architecture

```text
Browser
   |
   | HTTP :8080
   v
Nginx
   |
   | FastCGI :9000
   v
PHP-FPM / Laravel
   |
   | MySQL :3306
   v
MySQL
```

The environment consists of three services:

| Service | Technology        | Purpose                                       |
| ------- | ----------------- | --------------------------------------------- |
| `web`   | Nginx             | Serves HTTP traffic and forwards PHP requests |
| `app`   | PHP 8.2 / PHP-FPM | Runs the Laravel application                  |
| `db`    | MySQL 8           | Stores application data                       |

## Features

* Docker Compose development environment
* PHP 8.2 with PHP-FPM
* Nginx web server
* MySQL 8 database
* Multi-stage Docker builds
* Composer dependency installation during build
* Node.js / Vite frontend build
* MySQL health checks
* Automatic database initialization
* Persistent database and application storage
* Environment-based configuration

## Requirements

Install:

* Docker
* Docker Compose v2
* Git

Verify the installation:

```bash
docker version
docker compose version
git --version
```

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/websolutionus/udemy_restaurant_foodpark.git
cd udemy_restaurant_foodpark
```

### 2. Create the environment file

```bash
cp .env.example .env
```

### 3. Build the Docker images

```bash
docker compose build
```

### 4. Generate the Laravel application key

```bash
docker compose run --rm app php artisan key:generate
```

### 5. Start the application

```bash
docker compose up -d
```

Check the running containers:

```bash
docker compose ps
```

The application should now be available at:

```text
http://localhost:8080
```

## Useful Commands

Start the application:

```bash
docker compose up -d
```

Rebuild and start:

```bash
docker compose up -d --build
```

View logs:

```bash
docker compose logs -f
```

View Laravel / PHP-FPM logs:

```bash
docker compose logs -f app
```

Open a shell inside the application container:

```bash
docker compose exec app sh
```

Stop the environment:

```bash
docker compose down
```

Validate the Compose configuration:

```bash
docker compose config --quiet
```

## Database Initialization

The existing `database.sql` file is mounted into the MySQL initialization directory.

MySQL imports the dump automatically when the database volume is created for the first time.

To completely reset the local database:

```bash
docker compose down -v
docker compose up -d
```

> This removes the local database volume and all changes stored in it.

## Persistent Storage

Docker volumes are used for:

* MySQL database data
* Laravel storage
* uploaded application files

Recreating the application containers does not remove these volumes.

## Notes

This Docker configuration is intended for local development.

The example environment uses development credentials and settings and should not be treated as a production configuration.
