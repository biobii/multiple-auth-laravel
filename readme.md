## Multiple Authentication Using Laravel 5.5

This is fresh Laravel 5.5 installation with Multiple Auth => Admin and Users.

I learned this repository from DevMarketers. That was very helpful to understanding this concept. I'm so excited. Check it out guys!

How to use:
1. Clone this repository
2. Rename .env.example to .env
3. Open .env file and setup your database and email (for sending reset password request)
4. Run php artisan migrate
5. Done!

For the API Authentication I'm not sure this is completely secure. But I'm try this way and it works. I just create a new unique column called 'api_token' (check on migration folder).
For the example you can find out the api routes on routes/api.php and see how to use the auth middleware. Go to app/Http/Controllers/Api/Auth/ApiAuthController.php for the login methods.
To authenticate request, just add Authorization on header and give the value with 'Bearer yourtoken'.