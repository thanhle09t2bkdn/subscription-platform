# Install source

### Require
- PHP >= 7.3

### Init source

`composer install`

`cp .env.example .env`

`php artisan key:generate`

### Migrate and seed database

`php artisan migrate --seed`

### Run queue

`php artisan queue:work --queue=subscriber-job --tries=0 --timeout=0`

---

### Api Document(Postman)

 `postman/Subscription Platform Api.postman_collection.json`
