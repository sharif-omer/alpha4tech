# Alpha4Tech Website

A bilingual (Arabic & English) responsive company website built with Laravel and Bootstrap. The site showcases services, projects, team members, and includes a contact page. Designed for optimal performance across all screen sizes.

## Features

- 🔁 Bilingual Support (Arabic and English)
- 📱 Fully Responsive Design (Mobile, Tablet, Desktop)
- 🧩 Modular Laravel Structure
- 🎨 Bootstrap-based UI
- 🛠️ Dynamic Services Page
- 📂 Portfolio/Projects Display
- 👨‍💻 Team Members Section
- ✉️ Contact Form with Validation
- 🌐 RTL/LTR Layout Switching

## Tech Stack
- [Laravel 9](https://laravel.com/)
- [Bootstrap 5](https://getbootstrap.com/)
- Blade Templating Engine
- MySQL
## Setup Instructions
1. Clone the repo:
   `bash
   git clone https://github.com/sharif-omer/alpha4tech.git
   cd alpha4tech
   
3. Install dependencies:
composer install
npm install && npm run build

3. Setup environment:

cp .env.example .env
php artisan key:generate

4. Configure your .env file with your DB credentials.

5. Run migrations:
php artisan migrate

6. Start the local server:
php artisan serve
