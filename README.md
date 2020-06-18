<div align="center">
  
![hng](https://res.cloudinary.com/iambeejayayo/image/upload/v1554240066/brand-logo.png)

<br>

</div>

#### AUTHENTIATION ROUTES
```bash
- [x] api/login - to login an existing user
```




# Installation Guide

- You need a server, download [Wamp](http://www.wampserver.com/en/) or [Xampp](https://www.apachefriends.org/index.html)

- fork and clone this repository to get a local copy
- change into the new projects directory
- add upstream and checkout to a new branch
- run `cp .env.example .env` to get .env file
- add your database details
- run `composer install`
- run `php artisan migrate` to migrate database schema
- run `php artisan passport:install`
- Then start your local serve using `php artisan serve` 

