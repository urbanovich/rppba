ИПР No 1

Фрэймворк Laravel
Установка OpenServer, и php - фрэймворка Laravel.
Цель работы: установка фрэймворка

Перед установкой и особенности установки
Copmoser - менеджер зависимостей PHP
Установка Laravel
Структура и жизненный цикл фрэймворка
Удаление public из url проекта

```shell script
docker-compose -f docker/docker-compose.yml up -d;
docker exec -it rppba-php7.2-fpm bash
cd rppba;
composer install;
```