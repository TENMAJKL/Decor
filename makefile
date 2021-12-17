install:
	composer install
	npm install
	npx mix
	cp .env.example .env
	php artisan make:key
