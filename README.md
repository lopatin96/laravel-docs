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
php artisan vendor:publish --tag="laravel-docs-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-docs-views"
```

### Config
```php
php artisan vendor:publish --tag="laravel-docs-config"
```