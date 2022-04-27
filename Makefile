#Makefile
install: #Установка composer
	composer install
brain-games: #Запуск brain-games
	./bin/brain-games
brain-even: #Запуск brain-even
	./bin/brain-even
brain-calc: #Запуск brain-calc
	./bin/brain-calc
brain-gcd: #Запуск brain-gcd
	./bin/brain-gcd
brain-progression: #Запуск brain-progression
	./bin/brain-progression
brain-prime: #Запуск brain-prime
	./bin/brain-prime
validate: #Проверка валидности composer.json
	composer validate
lint: #Запуск линтера PHP_Codesniffer по стандарту PSR12
	composer exec --verbose phpcs -- --standard=PSR12 src bin