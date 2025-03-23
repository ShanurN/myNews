<<<<<<< HEAD
# mynews

***
##  С чего начать?
Для того, чтобы облегчить знакомство с сервисом GitFlic и первые шаги в нём, мы подготовили несколько рекомендаций.  
Уже опытный пользователь? Отредактируйте данный **README** файл по своему усмотрению.  
Не знаете что добавить в него? Перейдите в раздел `"Что должен содержать README файл"`, в котором описаны ключевые компоненты хорошего README файла. 

## Добавьте свои файлы
Если вы решили начать разработку проекта с создания репозитория в нашем сервисе, тогда клонируйте себе данный репозиторий следующим образом:


```
git clone https://gitflic.ru/project/shanur/mynews.git
cd mynews
**добавьте первые файлы вашего проекта**
git add .
git commit -m "Первый коммит"
git push -u origin master
```

Уже что-то делали в проекте? В таком случае инициализируйте гит-репозиторий в корне проекта и добавьте текущий репозиторий как удалённый репозиторий:

```
cd existing_folder
git init
git remote add origin https://gitflic.ru/project/shanur/mynews.git
git clone
**добавьте новые файлы**
git add .
git commit -m "Новый коммит"
git push -u origin master
```
***


# Что должен содержать README файл


Прежде всего, стоит понимать, что `README.md` — это краткая документация. Это первое, что видит человек, который открывает репозиторий. Поэтому здесь важно дать достаточно информации о проекте и рассказать, что он из себя представляет.
Ключевая информация, которую должен содержать README файл:

## Название и описание
Название проекта должно быть простым и понятным (чаще всего это одно слово).
Описание должно описывать основные функции проекта, включая его особенности и назначение. 
Если у вашего проекта есть альтернативные проекты, то в описании можно перечислить ключевые отличия, которые выделяют ваш проект на фоне всех остальных.

## Установка и настройка
Также в `README` файле рекомендуется перечислить необходимые инструкции для установки, 
будь то использование пакетных менеджеров (например, `Homebrew` на MacOS или `apt` на Linux), 
зависимости, которые могут понадобиться в ходе использования, а также шаги по их настройке.

## Совместная разработка
Можно добавить информацию о том, как принять участие в разработке вашего проекта, как стать непосредственным участником, правила оформления pull-requests и т.д.

## Контакты
Ссылки на внешние ресурсы, такие как документация, блог, страница проекта в социальных сетях, сообщество проекта и т.д.

## Статус проекта
В данном разделе рекомендуется указывать, на какой стадии находится проект, активно разрабатывается или находится в стадии застоя.
Если же проект готов и во всю используется, можно указывать актуальную версию, а также последние изменения, которые были сделаны с момента предыдущего релиза.

***

# Полезные ссылки

***

## Работа с проектом

- [ ] [Как создать проект](https://docs.gitflic.ru/project/project_create)
- [ ] [Как импортировать проект](https://docs.gitflic.ru/project/import_base)
- [ ] [Запросы на слияние](https://docs.gitflic.ru/project/merge_request)
- [ ] [Зеркалирование проекта](https://docs.gitflic.ru/project/mirror)
- [ ] [Импортировать проект с GitLab](https://docs.gitflic.ru/project/import)

## Команды
- [ ] [Создание команды](https://docs.gitflic.ru/team/create)
- [ ] [Обзор команды](https://docs.gitflic.ru/team/view)
- [ ] [Настройка команды](https://docs.gitflic.ru/team/settings)

## Реестр пакетов
- [ ] [Реестр пакетов](https://docs.gitflic.ru/registry/package)
- [ ] [PyPi](https://docs.gitflic.ru/registry/pypi_registry)
- [ ] [Generic](https://docs.gitflic.ru/registry/generic_registry)
- [ ] [Maven](https://docs.gitflic.ru/registry/maven_registry)
- [ ] [Docker](https://docs.gitflic.ru/registry/docker)

## Компании
- [ ] [Создание компании](https://docs.gitflic.ru/company/create)
- [ ] [Обзор компании](https://docs.gitflic.ru/company/view)
- [ ] [Тарифы и оплата](https://docs.gitflic.ru/company/price)
- [ ] [Запуск агента компании](https://docs.gitflic.ru/company/saas_runner_setup)

## CI/CD
- [ ] [Что такое GitFlic CI/CD](https://docs.gitflic.ru/cicd/introduction)
- [ ] [Задача (Job)](https://docs.gitflic.ru/cicd/job)
- [ ] [Конвейер (pipeline)](https://docs.gitflic.ru/cicd/pipeline)
- [ ] [Агенты](https://docs.gitflic.ru/cicd/agent)
- [ ] [Справочник для .yaml файла](https://docs.gitflic.ru/cicd/gitflic-ci-yaml)

## API
- [ ] [Введение в GitFlic API](https://docs.gitflic.ru/api/intro)
- [ ] [Методы для администратора](https://docs.gitflic.ru/api/admin)
- [ ] [Получение access токена](https://docs.gitflic.ru/api/access-token)


## Панель администратора
- [ ] [Панель администратора](https://docs.gitflic.ru/admin_panel/intro)
- [ ] [Панель управления](https://docs.gitflic.ru/admin_panel/dashboard)
- [ ] [Настройка LDAP](https://docs.gitflic.ru/admin_panel/ldap)
- [ ] [Ключевые настройки](https://docs.gitflic.ru/admin_panel/settings)

## Общая информация
- [ ] [Глоссарий](https://docs.gitflic.ru/common/gloss)
- [ ] [Права доступа ролей](https://docs.gitflic.ru/common/manage_roles)
- [ ] [Вебхуки](https://docs.gitflic.ru/common/webhook)
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 6a2bf97 (Новый коммит)
