# how can install this package

i'ts easy step .

1 - install with composer  

`composer require mobilysms/phpanonymous:dev-master`  

2 - add  provider class to app.php in config folder  . 

```php 

Mobilysms\Phpanonymous\MobilySmsPhpAnonymous::class, 

```
 
 3 - add aliases class 
 
```php 
'Mobily'    => Mobilysms\Phpanonymous\Mobily::class,
```

4 - then call this command from composer.

``` php artisan vendor:publish``` 

5 - just call method

```php 
Mobily::send(20123456789,'Your Message Here ');
```

you can get this file from this path on your project  `config/mobilysms.php`

and you can edit information account with mobily.ws sender name and mobile or user account and password 
you can edit more information if you want ! like timesend or datasend bla bla bla i'ts easy :) 

```php 

return [
	'sender'  =>'Anonymous', // Sender Name With Mobily.ws
	'mobile'  =>'123456789', // Mobile User Account With Mobily.ws
	'password'=>'password here', // Password Account With Mobile.ws
	'timeSend'=>0, // If You Don't know what this please don't change anything
	'dateSend'=>0, // If You Don't know what this please don't change anything
	'deleteKey'=>152485, // If You Don't know what this please don't change anything
	'resultType'=>1, // If You Don't know what this please don't change anything
	'viewResult'=>1, // If You Don't know what this please don't change anything
	'MsgID'=>rand(0000,9999), // If You Don't know what this please don't change anything
];

```

and you can use Mobily Class On Your Controller I'ts Easy

##Configuration


You Can Edit File Language With defualt  Locale folder 
and You Can Put your information to file mobilysms.php in config folder

If I got a problem you will know how to solve it

this package created by phpanonymous owner group php anonymoues developers on facebook 
you can join us https://www.facebook.com/groups/anonymouses.developers

