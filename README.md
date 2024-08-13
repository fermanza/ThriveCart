# Thrive Cart Assignment

This project is a data modeling exercise developed to showcase various skills.

## Features
- Composer
- PHPUnit (Unit and integration tests)
- PHPStan
- Docker
- Docker Compose
- Dependency Injection
- Strategy Pattern
- Sensible types
- Source control and code review
- Good separation/encapsulation
- Small accurate interfaces

## Installation

```bash
docker-compose up --build
```

## Run Tests

```bash
docker-compose exec app vendor/bin/phpunit tests
```

## Stops all the containers and removes them if needed

```bash
docker-compose down -v
```

## If you face issues running tests, try sh your docker-host and run

```bash
composer install
```

## Then run again the tests

## License

This project is licensed under the Mozilla Public License Version 2.0.

---

Made with 💖 by Fernando Manzano