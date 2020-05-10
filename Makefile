.phony: test cs-check cs-fix

test:
	docker-compose run --rm php make _test

cs-check:
	docker-compose run --rm php vendor/bin/phpcs --standard=PSR2 src tests

cs-fix:
	docker-compose run --rm php vendor/bin/phpcbf --standard=PSR2 src tests

ci: cs-check test