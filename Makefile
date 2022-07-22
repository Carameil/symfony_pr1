##################
# Docker compose
##################

dc-build:
	docker-compose build

dc-start:
	docker-compose up -d

dc-cli:
	docker-compose run --rm php-cli bin/console

##################
# Composer
##################

c-req:
	docker-compose run --rm php-cli composer install