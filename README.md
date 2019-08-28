Install xampp and composer for windows
Run "composer install" after cloning the repo
Make a copy of .env.example and rename it .env
Create a database with your suitable name and insert the database name, username and password in .env file
Create a mailtrap.io account and put the necesary information in .env file to check dummy emails
Run "php artisan key:generate"
Run "php artisan config:cache"
Run "php artisan cache:clear"
Run "php artisan route:cache"
Run "php artisan migrate --seed"
Run "php artisan serve" and check by "localhost:8000" url
