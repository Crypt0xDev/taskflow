<h1 align="center">TaskFlow</h1>

<p align="center">
  Organiza tus tareas, administra tu tiempo y aumenta tu productividad.
</p>

<p align="center">
  <img alt="Laravel 10" src="https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white">
  <img alt="PHP 8.3" src="https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white">
  <img alt="PostgreSQL 18" src="https://img.shields.io/badge/PostgreSQL-18-4169E1?logo=postgresql&logoColor=white">
  <img alt="Tailwind CSS 3" src="https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?logo=tailwindcss&logoColor=white">
  <img alt="Vite 4" src="https://img.shields.io/badge/Vite-4-646CFF?logo=vite&logoColor=white">
</p>

## Sobre el proyecto

TaskFlow es una aplicación web de gestión de tareas construida con Laravel.
El objetivo es tener un espacio simple donde crear tareas, agruparlas por
proyecto y ver de un vistazo qué toca hacer hoy.

> **Estado:** en construcción. Ahora mismo está montada la base del proyecto
> (Laravel + Tailwind + layout base con SEO). Las funcionalidades de tareas
> todavía no están implementadas.

## Stack

| Capa       | Tecnología                      |
| ---------- | ------------------------------- |
| Backend    | PHP 8.3 · Laravel 10            |
| Frontend   | Blade · Tailwind CSS 3 · Vite 4 |
| Base datos | PostgreSQL 18                   |
| Auth       | Laravel Sanctum                 |
| Calidad    | PHPUnit 10 · Laravel Pint       |

## Requisitos

- PHP 8.3 con las extensiones habituales de Laravel (incluida `pdo_pgsql`)
- Composer 2
- Node.js 18+ y npm
- PostgreSQL 18

## Puesta en marcha

```bash
# 1. Dependencias
composer install
npm install

# 2. Entorno
cp .env.example .env
php artisan key:generate

# 3. Base de datos
php artisan migrate

# 4. Levantar el proyecto (dos terminales)
php artisan serve   # http://127.0.0.1:8000
npm run dev         # compila assets en caliente
```

Antes de migrar, deja la conexión a PostgreSQL configurada en el `.env`:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=taskflow
DB_USERNAME=postgres
DB_PASSWORD=
```

Para producción, los assets se compilan con `npm run build`.

## Comandos útiles

```bash
php artisan test              # tests
./vendor/bin/pint             # formato de código PHP
php artisan migrate:fresh     # rehacer la base de datos
php artisan route:list        # ver rutas registradas
```
