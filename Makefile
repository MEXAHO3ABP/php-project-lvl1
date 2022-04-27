#Makefile
install: #Установка composer
	composer install
brain-games: #Запуск brain-games
	./bin/brain-games
brain-even: #Запуск brain-even
	./bin/brain-even
validate: #Проверка валидности composer.json
	composer validate
lint: #Запуск линтера PHP_Codesniffer по стандарту PSR12
	composer exec --verbose phpcs -- --standard=PSR12 src bin