<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <h1 align="center">Тестовое задание Алексеева Л. С.</h1>
    <br>
</p>

## Инструкция по развертыванию приложения

1. Склонировать репозиторий на локальную машину
   ```bash
   https://github.com/alekseevpy/test_assignment_TECHNOVISOR.git
   ```

2. Запустить `docker-compose` из корневой директории проекта
   ```bash
   docker-compose up -d
   ```

3. Выполнить миграции
   ```bash
   winpty docker exec -it yii2-app php yii migrate
   ```
   
4. Проект будет доступен по следующим ссылкам:

   <http://localhost/operator>

   <http://localhost/car>

   <http://localhost/operator-car>

6. Остановить и удалить контейнеры, тома и образы
    ```bash
    docker-compose down -v
    ```
