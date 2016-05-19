# TimeZone

#### A Laravel package to get the current time according to timezone. 
Yes, you can change the timezone in your app.php file, but this one is for:

> learning "How to make Laravel packages"

#### Thanks to these tutorials:
1. http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/
2. http://kaltencoder.com/2015/07/laravel-5-package-creation-tutorial-part-1/ (Best one)

Install via composer (you really need this package? :laughing: ):

```
composer require abhishek123/timezones
```

In your `config\app.php`:

```
'providers' => [
   ...

   Abhishek\TimeZone\TimeZoneServiceProvider::class,
]
```

and

```
'aliases' => [
   ...

   'TimeZone' => Abhishek\TimeZone\Facades\TimeZone::class,
]
```