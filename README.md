# User Guide

## Installation

Follow the steps mentioned below to install and run the project.

1. Clone or download the repository
2. Go to the project directory and run `composer install`
3. Create `.env` file by copying the `.env.example`. You may use the command to do that `cp .env.example .env`
4. Update the database name and credentials in `.env` file
5. Run the command `php artisan migrate --seed`
6. Run the command `php artisan jwt:secret` 
7. You may create a virtualhost entry to access the application or run `php -S localhost:8000 -t public` from the project root and visit `http://127.0.0.1:8000`

# Application Endpoints

### Login:
generate token by sending `POST` request to `/api/login` with this credentials 


```
{
    "email": "islam@zedan.com",
    "password": "123456789"
}
```


### User CRUD Endpoints:
using JWT token send requests to these endpoints

```
- GET /api/users           //returns all users
- POST /api/users          //insert new user
    {
        "name" : "required",
        "email" : "required, email, and unique",
        "password" : "required"
    }
- PUT /api/users/{id}           //update user
    {
        "name" : "required",
        "email" : "required, email, and unique"
    }

- DELETE /api/users/{id}           //delete user   
```
