# User Manage system

In this markdown you will find out how to run and use this simple user management system made with laravel and Filament.

## Prerequisites

1. **PHP**: Since this project is making use of larvel 10, make sure to have at least [PHP](https://www.php.net/downloads.php) 8.1 or higher installed.

2. **Composer**: Install Composer, the PHP dependency manager. [Download Composer](https://getcomposer.org/download/).

3. **Database Server**: Your prefered database server that is compatible with laravel, I used mysql.

## Steps

## 1. Install Dependencies:
Open a terminal or command prompt and navigate to your project directory:
```bash
cd /path/to/the/laravel/project
```
Run the following command to install composer:
```bash
composer install
```

## 2. Create Environment File:

Duplicate the `.env.example` file and rename it to `.env`. Update the necessary configurations such as database connection details and any other environment-specific settings.

```bash
cp .env.example .env
```
Open the .env file in a text editor and make the necessary changes.
## Step 3: Generate Application Key

To generate the application you can use a key generate command:

```bash
php artisan key:generate
```
## Step 4: Database Migration and Seeding

After the database information is set in the .env file and the application key is generated. You can now start to migrate using the following commands.
```bash
php artisan migrate
```

```bash
php artisan db:seed
```
## Step 5: Run the Development Server

Now that everything is set up you should be able to start the server. To do this you can just use one easy serve command.

```bash
php artisan serve
```
This will run your Laravel application on http://localhost:8000 by default. But since the application is on the admin path, you need to navigate to http://localhost:8000/admin. 

## Step 6: Create a first user to be able to login
To acces the admin dashboard you will need to have created a user. To start creating a new user open a terminal in your project and type in the following command.

```bash
php artisan make:filament-user
```
Fill in the information, if everything went well you should have created a user to log into the admin dashboard.

## Step 7: Login and use the application
Now the only thing left to do is go back to the admin dashboard at http://localhost:8000/admin and login with the user data you just created. To manage other users you can navigate to users by using the menu on the left.