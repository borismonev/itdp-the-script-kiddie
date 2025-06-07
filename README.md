Laravel Authentication Assignment

Setup

1. bashcomposer install
2. npm install && npm run build
3. cp .env.example .env
4. php artisan key:generate
5. php artisan migrate
6. php artisan serve
7. Test Routes

Public Routes (no authentication required)

* GET / - Welcome page
* GET /register - User registration
* GET /login - User login

Protected Routes (authentication required)

* GET /dashboard - User dashboard
* GET /secret - Secret page
* GET /members-only - Members area

Assignment Requirements ✅

* Protected Routes: Try accessing /secret or /members-only without logging in - you'll be redirected to login
* User Registration: Register at /register to create a new account
* Remember Me: Login form has "Remember me" checkbox for persistent authentication
