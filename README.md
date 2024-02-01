
# Kanye West Quotes Web Application

This is a simple web application built with Laravel that displays random quotes from Kanye West. It provides a web page where users can view 5 random Kanye West quotes and refresh the quotes with a button click. Authentication is required to access the quotes page.



## Features

- Display 5 random Kanye West quotes on a web page
- Refresh quotes with a button click
- Custom authentication for accessing the quotes page
- Expose an API route to fetch 5 random Kanye West quotes
- Feature tests to ensure functionality
- Unit tests (optional)

## Installation

Clone the repository:

```bash
git clone https://github.com/viv149/kanye-quotes.git

```
Install dependencies:

```bash
cd kanye-quotes
composer install

```

Set up your environment variables by renaming .env.example to .env and configuring it with your database and other settings:

```bash
cp .env.example .env

```

Generate application key:

```bash
php artisan key:generate

```
Run migrations to set up the database:

```bash
php artisan migrate

```
Serve the application:

```bash
php artisan serve

```
Access the application in your web browser at http://localhost:8000
    
## Usage

- Login to access the quotes page.
- Once logged in, you will be able to view 5 random Kanye West quotes.
- Click the "Refresh" button to get 5 new random quotes.


## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

