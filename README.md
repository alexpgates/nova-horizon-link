# Laravel Nova Horizon Link

This [Nova](https://nova.laravel.com/) tool adds a a link to [Laraval Horizon](https://horizon.laravel.com/) to the Nova sidebar.

That's all it does.

![screenshot of Laravel Nova Horizon Link tool](https://data.alexpgates.com/images/nova-horizon-link/screenshot.png)

## Installation

Install via [Composer](https://getcomposer.org/):
```
composer require alexpgates/horizon-link
```

Register the tool in `app/Providers/NovaServiceProvider`:

```php
public function tools()
{
    return [
        new \Alexpgates\HorizonLink\HorizonLink,
    ];
}
```
