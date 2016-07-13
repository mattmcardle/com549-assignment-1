# com549-assignment-1
To get the app up and running, with Docker installed, run ```docker-compose up```

You will also need to run the database migrations (to create the tables) and the seeds (to insert data into the tables). To do this, connect to the "league" container by using:

```docker-compose exec league /bin/bash```

And then run this command to run the migrations:

```php artisan migrate```

And this one to seed the db:

```php artisan db:seed```

After this you should be able to view the site by visiting http://localhost:8080
