install:
	composer install
	cp .env.example .env
	php artisan k:g
