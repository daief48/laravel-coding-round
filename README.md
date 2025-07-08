# Laravel Coding Round API

## Setup Instructions

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database credentials
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve`

## API Endpoints

### Blog Posts

- POST `/api/posts`  
  Body: `{ "title": "string", "content": "string" }`

- GET `/api/posts`  
  Returns all posts

- GET `/api/posts/{id}`  
  Returns a single post by ID

### User Registration

- POST `/api/register`  
  Body: `{ "name": "string", "email": "string", "password": "string" }`

### Task Management

- POST `/api/tasks`  
  Body: `{ "title": "string", "is_completed": boolean (optional) }`

- PATCH `/api/tasks/{id}`  
  Body: `{ "is_completed": boolean }`

- GET `/api/tasks/pending`  
  Returns all tasks where `is_completed` is false
