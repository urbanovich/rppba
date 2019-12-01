ИПР No2

Шаблонизация проекта
Использование bootstrap для мультимедийной верстки.

Цель работы: разработка макета

Для разработки макета приложения воспользуемся фрэймворком
Bootstrap , который предоставит нам мультимедийность и упростит
разработку дизайна приложения
Использование шаблона проектирования HMVC.

```shell script
docker-compose -f docker/docker-compose.yml up -d;
docker exec -it rppba-php7.2-fpm bash
cd rppba;
composer install;
npm i;
npm run development
```