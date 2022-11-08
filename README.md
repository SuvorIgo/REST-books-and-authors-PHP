# Тестовое задание для PHP-разработчика

<div align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/SuvorIgo/REST-books-and-authors-PHP">
  <img alt="Relative date" src="https://img.shields.io/date/1667928767">
</div>

![Yii2-basic](https://i1.wp.com/bologer.ru/wp-content/uploads/2017/06/yii2-scenarios.jpg)

## Используя фреймворк Yii2 (basic):

:white_check_mark: Реализовать сущности авторы и книги

:white_check_mark: Реализовать административную часть 
- [X] CRUD операции для авторов и книг
- [X] вывести список книг с обязательным указанием имени автора в списке
- [X] вывести список авторов с указанием кол-ва книг

:white_check_mark: Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице)

:white_check_mark: Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером
- [X] ```GET /api/v1/books/list``` -  получение списка книг с именем автора
- [X] ```GET /api/v1/books/by-id``` - получение данных книги по id
- [X] ```POST /api/v1/books/update``` - обновление данных книги
- [X] ```DELETE /api/v1/books/id``` - удаление записи книги из бд
