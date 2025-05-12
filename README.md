# Kenjer Construction Site Portal

A full-stack Laravel web portal created for a family-run construction business. This system helps manage service listings, image galleries, and invoicing through a responsive, modern interface.

---

## 📦 Tech Stack

| Layer      | Tech                     |
|------------|--------------------------|
| Backend    | Laravel 10 (PHP)         |
| Frontend   | Blade, Tailwind CSS      |
| Styling    | Tailwind CSS, PostCSS    |
| Auth       | Laravel Breeze (or Jetstream) |
| DB         | MySQL (via Docker)       |
| Server     | NGINX (via Docker)       |
| Dev Tools  | Docker Compose, Vite, npm |

---

## 📁 Project Structure

- `app/` – Controllers, Models, and core Laravel logic
- `resources/views/` – Blade templates for pages
- `routes/` – Route definitions (`web.php`, `auth.php`)
- `config/` – Laravel service config files
- `public/` – Static assets and entry point (`index.php`)
- `database/` – Migrations, factories, seeders
- `docker-compose/` – NGINX and PHP containers

---

## ⚙️ Features

- ✅ Responsive homepage with services and gallery
- ✅ Authenticated admin panel to create/view invoices
- ✅ Upload multiple images for project showcases
- ✅ Invoice system with PDF-ready views
- ✅ SEO-friendly routes and structure

---

## 🚀 Getting Started

```bash
cp .env.example .env
composer install
npm install && npm run build
php artisan key:generate
php artisan migrate --seed
docker-compose up -d
