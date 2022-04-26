#Makefile
install: #Установка composer
	composer install
brain-games: #Вызов brain-games.php
	./bin/brain-games
validate: #Проверка валидности composer.json
	composer validate