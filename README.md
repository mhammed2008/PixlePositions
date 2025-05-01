
## 🎯 Pixel Positions

> **Pixel Positions** is a modern, developer-focused job board designed to connect tech professionals with top opportunities. Built with Laravel and deployed on Laravel Cloud, it offers a seamless experience for both job seekers and employers.

## 🌐 Live Demo

Explore the live application here: [https://pixlepositions-main-laoffp.laravel.cloud/](https://pixlepositions-main-laoffp.laravel.cloud/)

## 📌 Features

- 🔍 **Job Listings**: Browse and search for jobs by title, company, or tags.  
- 📝 **Job Posting**: Employers can post new job openings with detailed descriptions.  
- 🏷️ **Tagging System**: Jobs can be categorized using tags for easy filtering.  
- 💼 **Company Profiles**: View detailed information about hiring companies.  
- 📱 **Responsive Design**: Optimized for desktops, tablets, and mobile devices.  

## 🛠️ Technologies Used

- **Backend**: [Laravel](https://laravel.com/) – PHP framework for web artisans  
- **Frontend**: Blade templates with Tailwind CSS for styling  
- **Deployment**: [Laravel Cloud](https://cloud.laravel.com/) – Fully managed infrastructure for Laravel applications  
- **Database**: MySQL  
- **Version Control**: Git  

## 🚀 Getting Started

### Prerequisites

- PHP >= 8.0  
- Composer  
- MySQL  
- Node.js and NPM  

## Installation
To set up a local development environment:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-org/pixlepositions.git
   cd pixlepositions
Install dependencies:

    composer install
    npm install
    
Create and configure the .env file:

    cp .env.example .env
    
Generate application key:

    php artisan key:generate
    
Run database migrations:

    php artisan migrate --seed
    
Compile assets:

    npm run build
    
Configuration Important environment variables:

env

    APP_NAME=PixlePositions
    APP_ENV=production
    APP_DEBUG=false
    APP_URL=https://pixlepositions-main-laoffp.laravel.cloud
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pixlepositions
    DB_USERNAME=root
    DB_PASSWORD=
    
    BROADCAST_DRIVER=pusher
    CACHE_DRIVER=redis
    QUEUE_CONNECTION=redis
    
    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=
    
    MAPBOX_PUBLIC_KEY=
    Development
    Start the development server:

Run Project:

    php artisan serve
    npm run dev


