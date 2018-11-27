# GPEvents
a Laravel project that allows visitors to filter volunteer events by specific causes.

# Steps for install:
- clone app ` git clone https://github.com/rach7110/GPEvents`
- cd into app folder
- run ` composer install `
- import the database file: `givepulse_test.sql` from the command line or a GUI like SequelPro.
- copy `.env.example` to a new `.env` file. Make sure to include values for the following environment variables:
    ``` 
  DB_DATABASE=
  DB_USERNAME=
  DB_PASSWORD=
    
   GOOGLE_MAP_KEY_JOB_APPLICATION=
    ```
- generate an app key `php artisan key:generate`
- start the server `php artisan serve`
- Open your browser and visit `localhost:8000`
