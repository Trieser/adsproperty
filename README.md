# 🏠 Ads Property - Modern Real Estate Company Profile

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-11-red?style=for-the-badge&logo=laravel)
![React](https://img.shields.io/badge/React-18-blue?style=for-the-badge&logo=react)
![Inertia](https://img.shields.io/badge/Inertia.js-black?style=for-the-badge)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)

**A modern, responsive real estate company profile website built with Laravel, Inertia.js, and React**

[🚀 Live Demo](#) • [📖 Documentation](#) • [🐛 Report Bug](#)

</div>

---

## ✨ Features

- 🏠 **Modern Company Profile** - Professional real estate company website
- 📱 **Responsive Design** - Works perfectly on desktop, tablet, and mobile
- ⚡ **Fast Development** - Hot reloading with Vite for instant feedback
- 🎨 **Beautiful UI** - Modern design with Tailwind CSS and Framer Motion
- 🌐 **SPA Experience** - Single Page Application with Inertia.js
- 🛡️ **Security First** - Built with Laravel's security best practices
- 📧 **Contact Forms** - Interactive contact forms for client inquiries
- 🏢 **Property Showcase** - Featured properties display section

## 🛠️ Tech Stack

- **Backend**: Laravel 11
- **Frontend**: React 18 + Inertia.js
- **Styling**: Tailwind CSS
- **Animations**: Framer Motion
- **Build Tool**: Vite
- **Database**: MySQL/PostgreSQL/SQLite
- **Authentication**: Laravel Sanctum (ready to implement)

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

### Required Software

| Software | Version | Download |
|----------|---------|----------|
| **PHP** | 8.2+ | [Download](https://www.php.net/downloads.php) |
| **Composer** | Latest | [Download](https://getcomposer.org/) |
| **Node.js** | 18+ | [Download](https://nodejs.org/) |
| **Git** | Latest | [Download](https://git-scm.com/) |
| **Database** | MySQL 8.0+ | [Download](https://dev.mysql.com/downloads/) |

### Quick Check

```bash
# Check if everything is installed
php --version
composer --version
node --version
npm --version
git --version
```

## 🚀 Quick Start

### 1. Clone the Repository

```bash
git clone https://github.com/Trieser/adsproperty.git
cd adsproperty
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Database

Edit `.env` file and update database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=adsproperty
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Setup Database

```bash
# Create database (run in MySQL/phpMyAdmin)
CREATE DATABASE adsproperty;

# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
```

### 6. Build Assets

```bash
# For development (with hot reloading)
npm run dev

# For production
npm run build
```

### 7. Start the Server

```bash
# Using Laravel's built-in server
php artisan serve

# Or using Laragon/XAMPP/MAMP
# Access via your local web server URL
```

## 🌐 Access the Application

- **URL**: `http://localhost:8000`
- **Home Page**: Modern company profile with property showcase
- **Admin Panel**: Coming soon...

## 📁 Project Structure

```
adsproperty/
├── app/
│   ├── Http/Controllers/    # Laravel controllers
│   ├── Models/             # Eloquent models
│   └── Providers/          # Service providers
├── resources/
│   └── js/
│       ├── Components/     # React components
│       ├── Layouts/        # Layout components
│       └── Pages/          # Page components
├── routes/
│   └── web.php            # Web routes
└── database/
    ├── migrations/         # Database migrations
    └── seeders/           # Database seeders
```

## 🎨 Customization

### Colors & Branding
The website uses a modern indigo color scheme. To customize:
1. Edit `resources/js/Pages/Welcome.jsx`
2. Update Tailwind CSS classes
3. Modify color variables in your CSS

### Content
Update company information, services, and contact details in:
- `resources/js/Pages/Welcome.jsx` - Main content
- Database seeders for dynamic content

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support, email info@adsproperty.com or create an issue in this repository.

---

<div align="center">
Made with ❤️ by Ads Property Team
</div>

