# Details

Date : 2024-11-12 10:24:22

Directory d:\\Kampus\\Semester 5\\tugas_besar (4)\\tugas_besar

Total : 84 files,  11530 codes, 1173 comments, 731 blanks, all 13434 lines

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)

## Files
| filename | language | code | comment | blank | total |
| :--- | :--- | ---: | ---: | ---: | ---: |
| [README.md](/README.md) | Markdown | 45 | 0 | 22 | 67 |
| [app/Console/Kernel.php](/app/Console/Kernel.php) | PHP | 15 | 7 | 6 | 28 |
| [app/Exceptions/Handler.php](/app/Exceptions/Handler.php) | PHP | 17 | 9 | 5 | 31 |
| [app/Http/Controllers/ArticleController.php](/app/Http/Controllers/ArticleController.php) | PHP | 90 | 10 | 18 | 118 |
| [app/Http/Controllers/AuthController.php](/app/Http/Controllers/AuthController.php) | PHP | 49 | 13 | 15 | 77 |
| [app/Http/Controllers/BookController.php](/app/Http/Controllers/BookController.php) | PHP | 86 | 10 | 15 | 111 |
| [app/Http/Controllers/Controller.php](/app/Http/Controllers/Controller.php) | PHP | 9 | 0 | 4 | 13 |
| [app/Http/Controllers/DashboardController.php](/app/Http/Controllers/DashboardController.php) | PHP | 10 | 1 | 4 | 15 |
| [app/Http/Kernel.php](/app/Http/Kernel.php) | PHP | 42 | 21 | 7 | 70 |
| [app/Http/Middleware/Authenticate.php](/app/Http/Middleware/Authenticate.php) | PHP | 11 | 3 | 4 | 18 |
| [app/Http/Middleware/CheckAdmin.php](/app/Http/Middleware/CheckAdmin.php) | PHP | 19 | 6 | 5 | 30 |
| [app/Http/Middleware/CheckRole.php](/app/Http/Middleware/CheckRole.php) | PHP | 15 | 10 | 5 | 30 |
| [app/Http/Middleware/EncryptCookies.php](/app/Http/Middleware/EncryptCookies.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/PreventRequestsDuringMaintenance.php](/app/Http/Middleware/PreventRequestsDuringMaintenance.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/RedirectIfAuthenticated.php](/app/Http/Middleware/RedirectIfAuthenticated.php) | PHP | 20 | 5 | 6 | 31 |
| [app/Http/Middleware/TrimStrings.php](/app/Http/Middleware/TrimStrings.php) | PHP | 11 | 5 | 4 | 20 |
| [app/Http/Middleware/TrustHosts.php](/app/Http/Middleware/TrustHosts.php) | PHP | 12 | 5 | 4 | 21 |
| [app/Http/Middleware/TrustProxies.php](/app/Http/Middleware/TrustProxies.php) | PHP | 14 | 10 | 5 | 29 |
| [app/Http/Middleware/ValidateSignature.php](/app/Http/Middleware/ValidateSignature.php) | PHP | 8 | 11 | 4 | 23 |
| [app/Http/Middleware/VerifyCsrfToken.php](/app/Http/Middleware/VerifyCsrfToken.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Requests/ArticleRequest.php](/app/Http/Requests/ArticleRequest.php) | PHP | 23 | 8 | 5 | 36 |
| [app/Http/Requests/BookRequest.php](/app/Http/Requests/BookRequest.php) | PHP | 22 | 8 | 6 | 36 |
| [app/Http/Requests/LoginRequest.php](/app/Http/Requests/LoginRequest.php) | PHP | 25 | 0 | 6 | 31 |
| [app/Http/Requests/RegisterRequest.php](/app/Http/Requests/RegisterRequest.php) | PHP | 32 | 8 | 6 | 46 |
| [app/Models/Article.php](/app/Models/Article.php) | PHP | 8 | 0 | 4 | 12 |
| [app/Models/Book.php](/app/Models/Book.php) | PHP | 7 | 0 | 3 | 10 |
| [app/Models/User.php](/app/Models/User.php) | PHP | 15 | 0 | 8 | 23 |
| [app/Providers/AppServiceProvider.php](/app/Providers/AppServiceProvider.php) | PHP | 12 | 8 | 5 | 25 |
| [app/Providers/AuthServiceProvider.php](/app/Providers/AuthServiceProvider.php) | PHP | 11 | 11 | 5 | 27 |
| [app/Providers/BroadcastServiceProvider.php](/app/Providers/BroadcastServiceProvider.php) | PHP | 12 | 3 | 5 | 20 |
| [app/Providers/EventServiceProvider.php](/app/Providers/EventServiceProvider.php) | PHP | 21 | 12 | 6 | 39 |
| [app/Providers/RouteServiceProvider.php](/app/Providers/RouteServiceProvider.php) | PHP | 24 | 10 | 7 | 41 |
| [bootstrap/app.php](/bootstrap/app.php) | PHP | 17 | 30 | 9 | 56 |
| [composer.json](/composer.json) | JSON | 66 | 0 | 1 | 67 |
| [composer.lock](/composer.lock) | JSON | 8,129 | 0 | 1 | 8,130 |
| [config/app.php](/config/app.php) | PHP | 27 | 131 | 31 | 189 |
| [config/auth.php](/config/auth.php) | PHP | 28 | 74 | 14 | 116 |
| [config/broadcasting.php](/config/broadcasting.php) | PHP | 36 | 23 | 13 | 72 |
| [config/cache.php](/config/cache.php) | PHP | 59 | 34 | 19 | 112 |
| [config/cors.php](/config/cors.php) | PHP | 11 | 12 | 12 | 35 |
| [config/database.php](/config/database.php) | PHP | 83 | 47 | 22 | 152 |
| [config/filesystems.php](/config/filesystems.php) | PHP | 32 | 32 | 13 | 77 |
| [config/hashing.php](/config/hashing.php) | PHP | 14 | 32 | 9 | 55 |
| [config/logging.php](/config/logging.php) | PHP | 79 | 34 | 19 | 132 |
| [config/mail.php](/config/mail.php) | PHP | 61 | 54 | 20 | 135 |
| [config/queue.php](/config/queue.php) | PHP | 51 | 42 | 17 | 110 |
| [config/sanctum.php](/config/sanctum.php) | PHP | 17 | 53 | 14 | 84 |
| [config/services.php](/config/services.php) | PHP | 17 | 11 | 7 | 35 |
| [config/session.php](/config/session.php) | PHP | 23 | 157 | 35 | 215 |
| [config/view.php](/config/view.php) | PHP | 10 | 20 | 7 | 37 |
| [database/factories/UserFactory.php](/database/factories/UserFactory.php) | PHP | 25 | 14 | 6 | 45 |
| [database/migrations/2014_10_12_000000_create_users_table.php](/database/migrations/2014_10_12_000000_create_users_table.php) | PHP | 21 | 6 | 6 | 33 |
| [database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php](/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php) | PHP | 19 | 6 | 4 | 29 |
| [database/migrations/2019_08_19_000000_create_failed_jobs_table.php](/database/migrations/2019_08_19_000000_create_failed_jobs_table.php) | PHP | 23 | 6 | 4 | 33 |
| [database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php](/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php) | PHP | 24 | 6 | 4 | 34 |
| [database/migrations/2023_12_30_095239_create_books_table.php](/database/migrations/2023_12_30_095239_create_books_table.php) | PHP | 25 | 0 | 4 | 29 |
| [database/migrations/2024_01_01_141744_create_articles_table.php](/database/migrations/2024_01_01_141744_create_articles_table.php) | PHP | 26 | 6 | 4 | 36 |
| [database/seeders/DatabaseSeeder.php](/database/seeders/DatabaseSeeder.php) | PHP | 9 | 9 | 5 | 23 |
| [package.json](/package.json) | JSON | 13 | 0 | 1 | 14 |
| [phpunit.xml](/phpunit.xml) | XML | 30 | 2 | 1 | 33 |
| [public/index.php](/public/index.php) | PHP | 14 | 30 | 12 | 56 |
| [resources/js/app.js](/resources/js/app.js) | JavaScript | 1 | 0 | 1 | 2 |
| [resources/js/bootstrap.js](/resources/js/bootstrap.js) | JavaScript | 3 | 23 | 7 | 33 |
| [resources/views/articles/create.blade.php](/resources/views/articles/create.blade.php) | PHP | 129 | 7 | 12 | 148 |
| [resources/views/articles/edit.blade.php](/resources/views/articles/edit.blade.php) | PHP | 116 | 0 | 11 | 127 |
| [resources/views/articles/show.blade.php](/resources/views/articles/show.blade.php) | PHP | 131 | 0 | 3 | 134 |
| [resources/views/auth/login.blade.php](/resources/views/auth/login.blade.php) | PHP | 268 | 1 | 35 | 304 |
| [resources/views/auth/register.blade.php](/resources/views/auth/register.blade.php) | PHP | 112 | 0 | 1 | 113 |
| [resources/views/books/create.blade.php](/resources/views/books/create.blade.php) | PHP | 138 | 1 | 4 | 143 |
| [resources/views/books/edit.blade.php](/resources/views/books/edit.blade.php) | PHP | 109 | 0 | 10 | 119 |
| [resources/views/books/show.blade.php](/resources/views/books/show.blade.php) | PHP | 131 | 0 | 3 | 134 |
| [resources/views/dashboard.blade.php](/resources/views/dashboard.blade.php) | PHP | 118 | 0 | 3 | 121 |
| [resources/views/welcome.blade.php](/resources/views/welcome.blade.php) | PHP | 463 | 9 | 68 | 540 |
| [routes/api.php](/routes/api.php) | PHP | 1 | 8 | 6 | 15 |
| [routes/channels.php](/routes/channels.php) | PHP | 5 | 10 | 4 | 19 |
| [routes/console.php](/routes/console.php) | PHP | 6 | 10 | 4 | 20 |
| [routes/web.php](/routes/web.php) | PHP | 43 | 9 | 12 | 64 |
| [tests/CreatesApplication.php](/tests/CreatesApplication.php) | PHP | 13 | 3 | 6 | 22 |
| [tests/Feature/ExampleTest.php](/tests/Feature/ExampleTest.php) | PHP | 11 | 4 | 5 | 20 |
| [tests/TestCase.php](/tests/TestCase.php) | PHP | 7 | 0 | 4 | 11 |
| [tests/Unit/ExampleTest.php](/tests/Unit/ExampleTest.php) | PHP | 10 | 3 | 4 | 17 |
| [vendor/spatie/ignition/resources/compiled/ignition.css](/vendor/spatie/ignition/resources/compiled/ignition.css) | CSS | 1 | 2 | 0 | 3 |
| [vendor/spatie/ignition/resources/compiled/ignition.js](/vendor/spatie/ignition/resources/compiled/ignition.js) | JavaScript | 6 | 0 | 1 | 7 |
| [vite.config.js](/vite.config.js) | JavaScript | 10 | 0 | 2 | 12 |

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)