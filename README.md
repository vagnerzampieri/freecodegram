Laravel PHP Framework Tutorial - Full Course for Beginners(2019)
  www.youtube.com/watch?v=ImtZ5yENzgE
  https://github.com/coderstape/freecodegram

install:
  - sudo pacman -S php
  - sudo pacman -S nodejs
  - sudo pacman -S npm
  - install composer (see composer download page)
    - move composer to globally
  - composer global require laravel/installer
    - add `composer/vendor/bin` in PATH


laravel new freecodegram
php artisan serve (localhost:8000)

### Add `make:auth` for Laravel 6.0

composer require laravel/ui
php artisan ui vue --auth
npm install && npm run dev
php artisan serve
