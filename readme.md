# How to run Importer Function

# Pre-requisites
1. Be sure you have docker and docker-compose installed.

# How to make app running in local machine.
1. Navigate to the directory of laravel-app.
2. Check .env file and change database credentials and change DATA_PROVIDER if needed. This is the endpoint provided in the exam.
3. Run "docker-compose build".
4. Run "docker-compose up -d".
5. Run docker exec -it laravel-app bash -c "sudo -u devuser /bin/bash".
6. Run "composer install".
7. Run "php artisan migrate".

# Run Data Importer Function
1. Run in your browser or POSTMAN this url http://localhost:8000/api/getAllPlayers.
 - This is the function for importing data from the endpoint and saving it to MySQL database.
 - This can be added also in a cron job or similar.

# RESTful API
1. Run url below in your browser or POSTMAN,
   - http://localhost:8000/api/getAllPlayers
   - this will return list of all players with only ID, firstname and second name.
2. Run this url http://localhost:8000/api/showPlayerById/1, "1" is the ID of the player and this will return full data of a single player
using the ID provided.

# PHPUnit Test
1. Navigate to the directory of laravel-app then run "phpunit".