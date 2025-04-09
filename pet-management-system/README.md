# Pet Management System

This is a Laravel-based CRUD application for managing pets, owners, ownership details, food, and purchases. The project demonstrates CRUD operations, database management, and web routing in a Laravel application.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Database Setup](#database-setup)
  - [Running the Application](#running-the-application)
- [Project Structure](#project-structure)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)



## Features

- CRUD operations for managing Pets, Owners, Food, Purchases, and Ownership.
- Home page displays all pets in the database.
- User-friendly interface with Bootstrap-based design.
- Organized routes using Laravel resource controllers.
- Database interactions using Laravel Eloquent ORM.

## Tech Stack

- **Backend**: Laravel 9, PHP 8
- **Database**: MySQL
- **Frontend**: Blade templates, Bootstrap
- **Tools**: Composer, XAMPP (for local development)

## Getting Started

Follow these steps to set up the project locally.

### Prerequisites

- [Composer](https://getcomposer.org/download/) - Dependency manager for PHP
- [XAMPP](https://www.apachefriends.org/index.html) or any MySQL server - For running the MySQL database
- PHP 8.0 or higher
- Node.js and npm (optional, if you want to compile assets)

### Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/dristanta-silwal/pet-management-system.git
   cd pet-management-system
   ```

2. **Install dependencies**:

   ```bash
   composer install
   ```

3. **Copy `.env.example` to `.env`**:

   ```bash
   cp .env.example .env
   ```

4. **Generate application key**:

   ```bash
   php artisan key:generate
   ```

### Database Setup

1. Create a MySQL database named `pets_db` (or any name you prefer).

2. In the `.env` file, update the following settings to match your database configuration:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pets_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Run migrations** (only if starting fresh and tables don’t already exist):

   ```bash
   php artisan migrate
   ```

### Running the Application

To start the Laravel development server:

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser to view the application.

## Project Structure

- **app/Http/Controllers**: Contains all controllers for handling CRUD operations.
  - `PetController.php`: Handles CRUD for pets.
  - `OwnerController.php`: Handles CRUD for owners.
  - `OwnController.php`: Manages pet ownership records.
  - `FoodController.php`: Manages food records.
  - `PurchaseController.php`: Manages purchases.

- **resources/views**: Contains all Blade templates for the application.
  - `pets/`: Views for managing pets (index, create, edit, show).
  - `owners/`: Views for managing owners.
  - `owns/`, `foods/`, `purchases/`: Views for other entities.

- **routes/web.php**: Defines all web routes, including resource routes for each controller.

## Usage

- **Home Page**: Lists all pets.
- **CRUD Operations**:
  - Visit `/pets` to view, add, edit, or delete pets.
  - Visit `/owners` to manage owners.
  - Visit `/foods` to manage food records.
  - Visit `/purchases` to manage purchases.
  - Visit `/owns` to manage ownership records.

### API Endpoints

This application does not expose a public API, but the following routes are available for internal use via the controllers:

- **Pets**
  - `GET /pets`: List all pets
  - `POST /pets`: Store a new pet
  - `GET /pets/{id}`: Show a single pet
  - `PUT /pets/{id}`: Update an existing pet
  - `DELETE /pets/{id}`: Delete a pet

- **Owners**
  - `GET /owners`: List all owners
  - `POST /owners`: Store a new owner
  - `GET /owners/{id}`: Show a single owner
  - `PUT /owners/{id}`: Update an existing owner
  - `DELETE /owners/{id}`: Delete an owner

## Contributing

Contributions are welcome! Please fork the repository, create a feature branch, and submit a pull request.

### Steps to Contribute

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Open a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

---

### Additional Notes

- This project is for educational purposes and demonstrates basic CRUD operations using Laravel.
- Make sure to follow Laravel best practices for any additional features.
- If you plan to deploy this project, ensure that you secure your database credentials and any sensitive information.
