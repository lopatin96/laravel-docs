# Install
### View
#### Header
Replace content of *resource/views/layouts/header.blade.php* with:
```php
@include('laravel-navigation::navigation.header')
```

# Publishing
### Localization
```php
php artisan vendor:publish --tag="laravel-navigation-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-navigation-views"
```

### Config
```php
php artisan vendor:publish --tag="laravel-navigation-config"
```