<?php

final class PhabricatorCoreUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => 'Налаштування часового поясу вашого веб-переглядача відрізняється від налаштування часового поясу у вашому профілі, натисніть, щоб узгодити.',
      'Give Token' => 'Дати токен',
      'Refusing to redirect to local resource "%s". The URI has a domain, but the redirect is not marked external. Mark redirects as external to allow redirection off the local domain.' => 'Відмова від перенаправлення на локальний ресурс "%s". URI має домен, але переспрямування не позначено як зовнішнє. Позначте переспрямування як зовнішнє, щоб дозволити переспрямування з локального домену.',
      'Meme' => 'Меми',
      'Comma-Separated Values (.csv)' => 'Значення, розділені комами (.csv)',
      'This server is configured as "%s", but you are using the domain name "%s" to access a page which is trying to set a cookie. Access this service on the configured primary domain or a configured alternate domain. Cookies will not be set on other domains for security reasons.' => 'Цей сервер налаштовано як "%s", але ви використовуєте доменне ім’я "%s" для доступу до сторінки, яка намагається встановити файл cookie. Отримайте доступ до цієї служби в налаштованому основному домені або налаштованому альтернативному домені. Файли cookie не будуть встановлені на інших доменах з міркувань безпеки.',
      'Custom field \'%s\' (with key \'%s\', of class \'%s\') is incompletely implemented: it claims to support a feature, but does not implement all of the required methods for that feature.' => 'Спеціальне поле "%s" (з ключем "%s", класу "%s") реалізовано не повністю: воно стверджує, що підтримує функцію, але не реалізовує всі необхідні методи для цієї функції.',
      'This server thinks you are using %s, but your client is convinced that it is using %s. This is a serious misconfiguration with subtle, but significant, consequences.' => 'Цей сервер вважає, що ви використовуєте %s, але ваш клієнт переконаний, що він використовує %s. Це серйозна неправильна конфігурація з непомітними, але значущими наслідками.',
      'Bold' => 'Жирний',
      'Attempting to access attached data on %s, but the data is not actually attached. Before accessing attachable data on an object, you must load and attach it.
    Data is normally attached by calling the corresponding %s method on the Query class when the object is loaded. You can also call the corresponding %s method explicitly.' => 'Спроба отримати доступ до прикріплених  даних на %s, але дані насправді не прикріплено. Перш ніж отримати доступ до даних, які можна прикріпити до об’єкта, ви повинні завантажити та прикріпити його.
    Дані зазвичай прикріплюються шляхом виклику відповідного методу %s у класі Query під час завантаження об’єкта. Ви також можете явно викликати відповідний метод %s .',
      'Transactions' => 'Транзакції',
      'Wed' => 'Ср',
      'Today' => 'Сьогодні',
      'Mon' => 'Пн',
      'Current Algorithm' => 'Поточний алгоритм',
      'If you are developing %s, these errors usually indicate that your schema specifications do not agree with the schemata your code actually builds.' => 'Якщо ви розробляєте %s, ці помилки зазвичай вказують на те, що специфікації вашої схеми не узгоджуються зі схемами, які насправді будує ваш код.',
      'This function includes results which have no value. Use a query like this to find results with no value:
    %s
    If you combine this function with other constraints, results which have no value or the specified values will be returned.' => 'Ця функція включає результати, які не мають значення. Використовуйте на зразок цього, щоб знайти результати без значення:
     %s 
    Якщо ви об\'єднаєте цю функцію з іншими обмеженнями, будуть повернуті результати, які або не мають значення або мають точно визначені значення.',
      'No notifications.' => 'Без сповіщень.',
      'This query (of class "%s") does not implement newResultObject(), but must implement this method to enable support for Spaces.' => 'Цей запит (класу "%s") не реалізовує newResultObject(), але має реалізувати цей метод, щоб увімкнути підтримку Spaces.',
      'Permit adjustments which truncate data. This option may destroy some data, but the lost data is usually not important (most commonly, the ends of very long object titles).' => 'Дозволити коригування, які скорочують дані. Цей параметр може знищити деякі дані, але втрачені вони зазвичай не важливі (найчастіше це кінці дуже довгих заголовків об’єктів).',
      'Expected to be passed a result object of class "LiskDAO" in "newExternalCursorStringForResult()", actually passed "%s". Return storage objects from "loadPage()" or override "newExternalCursorStringForResult()".' => 'Очікується передача об’єкта результату класу "LiskDAO" в "newExternalCursorStringForResult()", насправді передано "%s". Повернути об’єкти зберігання з "loadPage()" або замінити "newExternalCursorStringForResult()".',
      'Submit' => 'Надіслати',
      'All Documents' => 'Усі документи',
      'Parameter to "%s" conversion in "qsprintf(...)" is not an instance of AphrontDatabaseTableRefInterface.' => 'Параметр для трансформації "%s" в "qsprintf (...)" не є прикладом AphrontDatabaseTableRefInterface.',
      'Quote' => 'Цитувати',
      'Data can not be exported to Excel because the PHPExcel library is not
    installed. This software component is required to create Excel files.
    You can install PHPExcel from GitHub:
    > https://github.com/PHPOffice/PHPExcel
    Briefly:
      - Clone that repository somewhere on the sever
        (like `/path/to/example/PHPExcel`).
      - Update your PHP `%s` setting (in `php.ini`) to include the PHPExcel
        `Classes` directory (like `/path/to/example/PHPExcel/Classes`).' => 'Дані не можна експортувати в Excel, оскільки бібліотека PHPExcel не
    встановлена. Цей програмний компонент потрібен для створення файлів Excel.
    Ви можете встановити PHPExcel з GitHub:
    > https://github.com/PHPOffice/PHPExcel
    Коротко:
      - Клонуйте це сховище десь на сервері
       (як `/шлях/до/прикладу/PHPExcel`).
      - Оновіть налаштування PHP `%s` (у 
       `php.ini`), щоб включити PHPExcel
        Каталог `Classes` (на зразок `/path/to/example/PHPExcel/Classes`).',
      'Edit Menu' => 'Редагувати меню',
      'Thu' => 'Чт',
      'Expected "newInternalCursorFromExternalCursor()" to return an object of class "PhabricatorQueryCursor", but got "%s" (in class "%s").' => 'Очікувалося, що "newInternalCursorFromExternalCursor()" поверне об’єкт класу "PhabricatorQueryCursor", але отримано "%s" (у класі "%s").',
      'Creation (Newest First)' => 'Створення (Спочатку новітні)',
      'Italics' => 'Курсив',
      'Some of these errors are caused by access control problems. The user you are connecting with does not have permission to see all of the database or tables that this software uses. You need to GRANT the user more permission, or use a different user.' => 'Деякі з цих помилок викликані проблемами контролю доступу. Користувач, з яким ви встановлюєте зв\'язок, не має дозволу переглядати всю базу даних або таблиці, які використовує це програмне забезпечення. Вам потрібно НАДАТИ цьому користувачеві додаткові дозволи або використовувати іншого користувача.',
      'Type' => 'Тип',
      'Tuesday' => 'Вівторок',
      'Change the priority of selected tasks, causing them to execute before or after other tasks.' => 'Змініть пріоритет вибраних завдань, щоб вони виконувалися до або після інших завдань.',
      'Query class ("%s") did not return the correct type of object from "newResultObject()" (expected a subclass of "PhabricatorLiskDAO", found "%s"). Return an object of the expected type (this is common), or implement a custom "loadPage()" method (this is unusual in modern code).' => 'Клас запиту ("%s") не повернув правильний тип об\'єкта з "newResultObject()" (очікувався підклас "PhabricatorLiskDAO", знайдено " %s "). Повертайте об’єкт очікуваного типу (це поширене явище) або реалізуйте спеціальний метод "loadPage()" (це непоширене явище в сучасному коді).',
      'Sun' => 'Нд',
      'This error usually indicates that you need to "GRANT" the MySQL user additional permissions. See "GRANT" in the MySQL manual for help.' => 'Ця помилка зазвичай вказує на те, що вам потрібно "НАДАТИ" користувачеві MySQL додаткові дозволи. Перегляньте "НАДАННЯ" у посібнику MySQL для отримання допомоги.',
      'Unhandled Exception ("%s")' => 'Необроблений виняток («%s»)',
      'Login' => 'Увійти',
      'Search cluster configuration is not valid: each entry in the list must be a dictionary describing a search service, but the value with index "%s" is not a dictionary.' => 'Налаштування пошукового кластера недійсні: кожен запис у списку має бути словником, що описує службу пошуку, але значення з індексом "%s" не є словником.',
      'Owners' => 'Власники',
      'Tue' => 'Вт',
      'Unable to access a required database or table. This almost always means that the user you are connecting with ("%s") does not have sufficient permissions granted in MySQL. You can use `bin/storage databases` to get a list of all databases permission is required on.' => 'Не вдається отримати доступ до необхідної бази даних або таблиці. Це майже завжди означає, що користувач,  з яким ви встановлюєте зв\'язок ("%s"), не має достатньо дозволів, наданих у MySQL. Ви можете використовувати `bin/storage databases`, щоб отримати список усіх баз даних, для яких потрібен дозвіл.',
      'Fullscreen Mode' => 'Повноекранний режим',
      'Description' => 'Опис',
      'Wednesday' => 'Середа',
      'Users' => 'Користувачі',
      'This query (of class "%s") returned an object of class "%s" from getNewResultObject(), but it does not implement the required interface ("%s"). Objects must implement this interface to enable Spaces support.' => 'Цей запит (класу "%s") повернув об\'єкт класу "%s" з getNewResultObject(), але він не реалізовує потрібний інтерфейс ("%s"). Об’єкти мають реалізувати цей інтерфейс, щоб увімкнути підтримку Spaces.',
      'Pin Form On Screen' => 'Закріпити форму на екрані',
      'Configuration file "%s" exists and is readable, but the content is not valid JSON. You may have edited this file manually and introduced a syntax error by mistake. Correct the file syntax to continue.' => 'Конфігураційний файл "%s" існує та його можна прочитати, але вміст не є дійсним JSON. Можливо, ви відредагували цей файл вручну та помилково ввели синтаксичну помилку. Щоб продовжити, виправте синтаксис файлу.',
      'Specified "--min-failures" must not be larger than specified "--max-failures".' => 'Вказані "--min-failures" не повинні бути більшими за вказані "--max-failures".',
      'Sat' => 'Сб',
      'Space' => 'Простір',
      'Unable to establish a write-mode connection (to application database "%s") because this server is in read-only mode. Whatever you are trying to do does not function correctly in read-only mode.' => 'Не вдалося встановити з’єднання в режимі запису (до бази даних програми "%s"), оскільки цей сервер працює в режимі лише для читання. Усе, що ви намагаєтесь зробити, не працює належним чином у режимі лише для читання.',
      'Options "%s", "%s" and "%s" represent mutually exclusive ways to choose a policy. Specify only one.' => 'Опції "%s", "%s" і "%s" представляють взаємовиключні способи вибору політики. Вкажіть лише один спосіб.',
      'Subscribers' => 'Підписники',
      'API Token' => 'Токен API',
      'Notifications' => 'Сповіщення',
      'Thursday' => 'Четвер',
      'Applications' => 'Додатки',
      'Terminate' => 'Припинити',
      'Cancel' => 'Скасувати',
      'Developer Settings' => 'Налаштування для розробників',
      'Developer' => 'Розробник',
      'Never' => 'Ніколи',
      'Monospaced' => 'Моноширинний',
      'Unsubscribe' => 'Відписатися',
      'Tags' => 'Теги',
      'Reports' => 'Звіти',
      'Language' => 'Мова',
      'ID' => 'ID',
      'Translations' => 'Переклади',
      'Recent Activity' => 'Недавня активність',
      'To avoid this error, use %s to construct forms. If you are already using %s, make sure the form \'action\' uses a relative URI (i.e., begins with a \'%s\'). Forms using absolute URIs do not include CSRF tokens, to prevent leaking tokens to external sites.
    If this page performs writes which do not require CSRF protection (usually, filling caches or logging), you can use %s to temporarily bypass CSRF protection while writing. You should use this only for writes which can not be protected with normal CSRF mechanisms.
    Some UI elements (like %s) also have methods which will allow you to render links as forms (like %s).' => 'Щоб уникнути цієї помилки, використовуйте %s для створення форм. Якщо ви вже використовуєте %s, переконайтеся, що форма \'action\' використовує відносний URI (тобто починається з \'%s\'). Форми, що використовують абсолютні URI, не включають маркери CSRF, щоб запобігти витоку маркерів на зовнішні сайти.
    Якщо ця сторінка виконує записи, які не потребують захисту CSRF (зазвичай, заповнення кеш-пам’яті або ведення журналів), ви можете використовувати %s, щоб тимчасово уникнути захисту CSRF під час запису. Ви повинні використовувати це лише для записів, які не можна захистити звичайними механізмами CSRF.
    Деякі елементи інтерфейсу користувача (наприклад, %s) також мають методи, які дозволять вам перетворювати посилання в форми (наприклад, %s).',
      'Temporary Tokens' => 'Тимчасові токени',
      'Change Status' => 'Змінити статус',
      'Monday' => 'Понеділок',
      'Types' => 'Типи',
      'Action' => 'Дія',
      'Creation (Oldest First)' => 'Створення (Спочатку старі)',
      'User' => 'Користувач',
      'Token' => 'Токен',
      'Change Priority' => 'Змінити пріоритет',
      'Query' => 'Запит',
      'Active' => 'Активний',
      'Search engine configuration has an invalid service specification (at index "%s"): %s.' => 'Конфігурація пошукової системи містить недійсну специфікацію сервісу (з індексом "%s"): %s .',
      'Expires' => 'Закінчується',
      'Data can not be exported to Excel because the "zip" PHP extension is not
    installed. Consult the setup issue in the Config application for guidance on
    installing the extension.' => 'Дані не можна експортувати в Excel, оскільки розширення PHP "zip" не
    встановлено. Зверніться стосовно проблеми налаштування в програмі Config, щоб отримати вказівки щодо
    встановлення розширення.',
      'Add __--master-data__ to the __mysqldump__ command, generating a CHANGE MASTER statement in the output. This option also dumps all data, including caches.' => 'Додайте __--master-data__ до команди __mysqldump__, згенерувавши оператор CHANGE MASTER у вихідних даних. Ця опція також вилучає усі дані, включаючи кеші.',
      'Created' => 'Створено',
      'Calendar' => 'Календар',
      'Maniphest' => 'Маніфест',
      'Application' => 'Застосунок',
      'Back' => 'Назад',
      'Fri' => 'Пт',
      'Open Tasks' => 'Відкрити завдання',
      'Send Email' => 'Надіслати пошту',
      'Manage' => 'Управління',
      'Connected' => 'З\'єднано',
      'Tokens' => 'Токени',
      'Actions' => 'Дії',
      'Type a username or function...' => 'Введіть ім’я користувача чи функцію…',
      'Help' => 'Допомога',
      'ACTIVE' => 'АКТИВНИЙ',
      'Settings' => 'Налаштування',
      'Actor' => 'Діяч',
      'Bulleted List' => 'Маркований список',
      'Assigned To' => 'Задано',
      'Authored By' => 'Автор',
      'Timezone' => 'Часовий пояс',
      'Authors' => 'Автори',
      'Subscribe' => 'Підписатися',
      'Languages' => 'Мови',
      'Details' => 'Подробиці',
      'Public' => 'Публічний',
      'Relevance' => 'Актуальність',
      'Upload File' => 'Завантажити файл',
      'Numbered List' => 'Нумерований список',
      'All Applications' => 'Усі Додатки',
      'Sessions' => 'Сесії',
      'Changes from before your most recent comment are hidden.' => 'Зміни, внесені до вашого останнього коментаря, приховано.',
      'Code Block' => 'Блок коду',
      'Required' => 'Потребує',
      'View All' => 'Див. все',
      'Preview' => 'Перегляд',
      'Updated' => 'Оновлено',
      'Advanced Search' => 'Розширений пошук',
      'Conduit API Tokens' => 'Токени Conduit API',
      'Session' => 'Сесія',
      'Save Changes' => 'Зберегти зміни',
      'Activity Logs' => 'Журнали діяльності',
      'Log In or Register' => 'Увійти або Зареєструватися',
      'Best Available Algorithm' => 'Найкращий доступний алгоритм',
      'Profile' => 'Профіль',
    );
  }

}
