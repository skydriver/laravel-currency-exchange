### IMPORTANT
Before running this application, you must to be sure that ports 80 and 3306 on your local machine are available (if you have some HTTP server or mysql service active, you will not be able to run the containers)

## Application Setup

- Clone the project
- Run `composer install`
- Run docker containers `docker-compose up -d`
- Enter to the container `docker exec -it currency_exchange_app bash` (if you don't have bash, than use `sh`)
- Run `php artisan migrate`

## Run Application

When you complete the setup, and the docker containers are up, just navigate to `http://localhost` (Keep in mind that for API endpoints you need API Token for `Internal User`)

The Internal User API Token is defined in `.env` file `INTERNAL_USER_API_TOKEN` and should be passed as Bearer token

## Testing Application

- Run the containers `docker-compose up -d`
- Enter to the app container `docker exec -it currency_exchange_app bash`
- Run `php artisan test --testsuite=Unit`
- To run the Feature test suite, you must to configure the environment
- NOTE: You can configure the app to use different `.env` for testing

# API Key for Internal User

- Replace `FIXERIO_API_KEY=ADD_YOUR_API_KEY` with the API Key
- .env variable `FIXERIO_API_KEY`
- Keep in mind that API request limit/usage is 100 requests per day
