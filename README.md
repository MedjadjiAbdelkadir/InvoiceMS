# InvoiceMS

## About InvoiceMS
A website for the purpose of invoice management, following up customers with their invoice and electronic payment

## Features
- Multi Languages (English, French and Arabic)
- dark mode

## Roles
  
### Customers
- View profile
- View all paid and unpaid invoice and archives
- Online payment of invoice
- Possibility to print the invoice
- Submit a report about the meter in case of a technical problem

### Unit Manager
- View the branches and activities of branch officials affiliated with the subsidiary unit
- Sending and receiving reports to branch and administrator officials
View bills belonging to his unit

### Branch Manager
- Editing invoices for each client
- Sending and receiving the unit administrator report
- Follow-up of the invoices payment process
- Sending automatic reminders to late payment recipients (according to a date mentioned in the invoice)

### Admins
- Administrators often have the authority to administer the site
## Screenshots
### Login page
```bash
# Screenshot Login page is currently not available 
```
### Customer Dashboard Page
```bash
# Screenshot Customer Dashboard Page is currently not available 
```
### Unit Manager Dashboard Page
```bash
# Screenshot Unit Manager Dashboard Page is currently not available 
```
### Branch Manager Dashboard Page
```bash
# Screenshot Branch Manager Dashboard Page is currently not available 
```

## Technologies Used in the Project 

- [Laravel ^8.75](https://laravel.com).
- [database MySQL](https://www.mysql.com)


## Project Structure 
┌─ `app` \
├─ `bootstrap` \
├─ `config` \
├─ `database` \
├─ `public` \
├─ `resources` \
├─ `routs` \
├─ `storage` \
├─ `tests` \
├─ `vendor` \
├─ `.env.example` \
├─ `artisan` \
├─ `composer.json` \
├─ `package.json` \
└─ `README.md`

## Requirement
- [php version 7.3.0](https://www.php.net)
- [composer](https://getcomposer.org)

## How To Use

### Download Repository

```bash
# Clone this repository
$ git clone https://github.com/MedjadjiAbdelkadir/InvoiceMS.git
# Go to the project directory
$ cd InvoiceMS
# Create file .env
$ cp .env.example .env.
# Generate Key Of .env
$ php artisan key:generate.
```

### Create DataBase && Migration && Seeding
```bash
# Create DataBase
$ CREATE DATABASE IF NOT EXISTS 'invoices_ms'
# Go to file .env
DB_DATABASE=invoices_ms
# Migration Table
$ php artisan migrate
# Seeding table
$ php artisan db:seed
```

### Run Project

```bash
# Run the project
$ php artisan serve
```