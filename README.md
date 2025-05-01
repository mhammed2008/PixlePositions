<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
# PixlePositions

![PixlePositions Logo](https://via.placeholder.com/150x50?text=PixlePositions)  
A modern position tracking and management platform built with Laravel.

## Live Demo
The application is currently deployed and accessible at:  
[https://pixlepositions-main-laoffp.laravel.cloud/](https://pixlepositions-main-laoffp.laravel.cloud/)

## Table of Contents
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Development](#development)
- [Deployment](#deployment)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [Support](#support)
- [License](#license)

## Features
- **User Authentication**: Secure login/registration system with email verification
- **Position Management**: Create, update, and track positions with geolocation
- **Real-time Updates**: Live position tracking using WebSockets
- **Reporting**: Generate detailed reports and analytics
- **Multi-platform Support**: Responsive design works on desktop and mobile
- **API Access**: RESTful API for integration with other systems

## Technology Stack
- **Backend**: Laravel 10
- **Frontend**: Blade templates, Livewire, Alpine.js
- **Database**: MySQL 8
- **Cache**: Redis
- **Queue**: Laravel Horizon
- **Real-time**: Laravel Echo, Pusher
- **Hosting**: Laravel Cloud
- **CI/CD**: GitHub Actions

## Installation
To set up a local development environment:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-org/pixlepositions.git
   cd pixlepositions
Install dependencies:

bash
composer install
npm install
Create and configure the .env file:

bash
cp .env.example .env
Generate application key:

bash
php artisan key:generate
Run database migrations:

bash
php artisan migrate --seed
Compile assets:

bash
npm run build
Configuration
Important environment variables:

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

bash
php artisan serve
npm run dev
Run tests:

bash
php artisan test
