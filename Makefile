#Makefile
install: #Установка composer
	composer install
brain-games: #Вызов brain-games.php
	./bin/brain-games
validate: #Проверка валидности composer.json
	composer validate
lint: #Запуск линтера PHP_Codesniffer по стандарту PSR12
	composer exec --verbose phpcs -- --standard=PSR12 src bin