# Contact Us Form Laravel Package


![Issuses](https://img.shields.io/github/issues/RanpuraDipen/laravel-contact-package)
![Forks](https://img.shields.io/github/forks/RanpuraDipen/laravel-contact-package)
![Stars](	https://img.shields.io/github/stars/RanpuraDipen/laravel-contact-package)

**For Laravel 5.7**

## Inrtoduction
This will send email to admin and save contact query in database.

## Getting Started
To get started add the following package to your  `composer.json` file using this command.

```bash
composer require dipen/contact
```

## Configuring
When composer installs Laravel Contact library successfully,

#### First Add Database credentials to the `.env` file

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Database Name
DB_USERNAME=Database Username 
DB_PASSWORD=Database Password
```
#### In the next step run following command.
```bash
php artisan migrate 
```

#### Next Add the email credentials to the `.env` file

```bash
MAIL_DRIVER=smtp 
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME='your email id'
MAIL_PASSWORD='your email password'
MAIL_ENCRYPTION='tls'
MAIL_FROM_ADDRESS='your email id'
MAIL_FROM_NAME="${APP_NAME}"
```

## Usage

#### Start Local Server 

```bash
php artisan serve
```
### Enjoy :)

```bash
http://localhost:8000/contact
```

#### That's all folks!


