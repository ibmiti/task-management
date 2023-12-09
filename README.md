# Task Management

This project is focused around tasks management and priority changing of tasks by drag and drop

## Prerequisites

Ensure you have the following software installed:

- PHP(https://www.php.net/) (>= 7.x)
- Composer(https://getcomposer.org/)



### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ibmiti/task-management

1.a Unzip file 
    unzip task-management.zip

2. Change into the project directory:
 
    cd your-project ( you can name it whatever you like )

3. Install PHP dependencies:

    composer install

### Configuration 

1. Copy the .env.example file to .env:
    cp .env.example .env

2. Generate the application key:
    php artisan key:generate

### DB Setup 

1. Run Migration
    php artisan migrate

2. Seed Database (optional)
    php artisan db:seed

3. Running the application
    php artisan serve
