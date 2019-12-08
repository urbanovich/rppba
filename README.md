HMVC на практике 

Разработка приложения для бизнес - анализа с использованием
архитектурного шаблона проектирования HMVC.
Реализация взаимодействия контроллеров, моделей и элементов представления.
Иерархия контроллерови (и других классов) приложения. Реализация маршруто в
приложения.

Задача контрольной работы - реализация приложения на шаблоне проектирования
HMVC

Для выполнения контрольной работы, необходимо наличие следующих
инструментов: Apache, PHP, Composer, Node.js

```shell script
docker-compose -f docker/docker-compose.yml up -d;
docker exec -it rppba-php7.0-fpm bash
cd la1;
composer install;
npm i;
npm run development
```

go to http://localhost:8080/ for frontend  
go to http://localhost:8080/admin for backend