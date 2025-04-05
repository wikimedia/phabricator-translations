<?php

final class PhabricatorCoreUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Запитання',
      'Creators' => 'Творці',
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => 'Налаштування часового поясу вашого веб-переглядача відрізняється від налаштування часового поясу у вашому профілі, натисніть, щоб узгодити.',
      'Minus' => 'Мінус',
      'OPTIMIZE' => 'ОПТИМІЗУВАТИ',
      'DESTROY' => 'ЗНИЩИТИ',
      'Expected "newExternalCursorStringForResult()"  in class "%s" to return a string, but got "%s".' => 'Очікувалося, що "newExternalCursorStringForResult()" у класі "%s" поверне рядок, але отримано "%s".',
      'Create Document' => 'Створити Документ',
      'italic text' => 'текст курсивом',
      'Tasks' => 'Завдання',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => 'Ви намагаєтеся зберегти деякі дані в постійному сховищі, але запит, зроблений вашим браузером, містив неправильний маркер. Перезавантажте сторінку та повторіть спробу. Можливо, вам знадобиться очистити файли cookie.',
      'Author: %s' => 'Автор: %s',
      'Administrators' => 'Адміністратори',
      'Give Token' => 'Дати токен',
      'Overview' => 'Огляд',
      'Example' => 'Приклад',
      'Refusing to redirect to local resource "%s". The URI has a domain, but the redirect is not marked external. Mark redirects as external to allow redirection off the local domain.' => 'Відмова від перенаправлення на локальний ресурс "%s". URI має домен, але переспрямування не позначено як зовнішнє. Позначте переспрямування як зовнішнє, щоб дозволити переспрямування з локального домену.',
      'Editor pattern "%s" is invalid: the final character in a pattern may not be an unencoded percent symbol ("%%"). Use "%%%%" to encode a literal percent symbol.' => 'Шаблон редактора "%s" недійсний: останній символ у шаблоні може не бути незакодованим символом відсотка ("%%"). Використовуйте "%%%%", щоб закодувати літеральний символ відсотка.',
      'Current Tasks' => 'Поточні Завдання',
      'Summary' => 'Підсумок',
      'Meme' => 'Меми',
      'Comma-Separated Values (.csv)' => 'Значення, розділені комами (.csv)',
      'This server is configured as "%s", but you are using the domain name "%s" to access a page which is trying to set a cookie. Access this service on the configured primary domain or a configured alternate domain. Cookies will not be set on other domains for security reasons.' => 'Цей сервер налаштовано як "%s", але ви використовуєте доменне ім’я "%s" для доступу до сторінки, яка намагається встановити файл cookie. Отримайте доступ до цієї служби в налаштованому основному домені або налаштованому альтернативному домені. Файли cookie не будуть встановлені на інших доменах з міркувань безпеки.',
      'Comment' => 'Коментар',
      'Group' => 'Група',
      'Custom field \'%s\' (with key \'%s\', of class \'%s\') is incompletely implemented: it claims to support a feature, but does not implement all of the required methods for that feature.' => 'Спеціальне поле "%s" (з ключем "%s", класу "%s") реалізовано не повністю: воно стверджує, що підтримує функцію, але не реалізовує всі необхідні методи для цієї функції.',
      'This server thinks you are using %s, but your client is convinced that it is using %s. This is a serious misconfiguration with subtle, but significant, consequences.' => 'Цей сервер вважає, що ви використовуєте %s, але ваш клієнт переконаний, що він використовує %s. Це серйозна неправильна конфігурація з непомітними, але значущими наслідками.',
      'Variable' => 'Змінна',
      'Bold' => 'Жирний',
      'Attempting to access attached data on %s, but the data is not actually attached. Before accessing attachable data on an object, you must load and attach it.
    Data is normally attached by calling the corresponding %s method on the Query class when the object is loaded. You can also call the corresponding %s method explicitly.' => 'Спроба отримати доступ до прикріплених  даних на %s, але дані насправді не прикріплено. Перш ніж отримати доступ до даних, які можна прикріпити до об’єкта, ви повинні завантажити та прикріпити його.
    Дані зазвичай прикріплюються шляхом виклику відповідного методу %s у класі Query під час завантаження об’єкта. Ви також можете явно викликати відповідний метод %s .',
      'September' => 'Вересень',
      'Grey' => 'Сірий',
      'Color' => 'Колір',
      'Transactions' => 'Транзакції',
      'Expected T_OPEN_TAG, T_WHITESPACE tokens at head of results for highlighting parse of PHP snippet.' => 'Очікувалися маркери T_OPEN_TAG, T_WHITESPACE на початку результатів для виділення аналізу фрагмента PHP.',
      'Team' => 'Команда',
      'Wed' => 'Ср',
      'Today' => 'Сьогодні',
      'Mon' => 'Пн',
      'Metadata' => 'Метадані',
      'Current Algorithm' => 'Поточний алгоритм',
      'If you are developing %s, these errors usually indicate that your schema specifications do not agree with the schemata your code actually builds.' => 'Якщо ви розробляєте %s, ці помилки зазвичай вказують на те, що специфікації вашої схеми не узгоджуються зі схемами, які насправді будує ваш код.',
      'This function includes results which have no value. Use a query like this to find results with no value:
    %s
    If you combine this function with other constraints, results which have no value or the specified values will be returned.' => 'Ця функція включає результати, які не мають значення. Використовуйте на зразок цього, щоб знайти результати без значення:
     %s 
    Якщо ви об\'єднаєте цю функцію з іншими обмеженнями, будуть повернуті результати, які або не мають значення або мають точно визначені значення.',
      'No notifications.' => 'Без сповіщень.',
      'This query (of class "%s") does not implement newResultObject(), but must implement this method to enable support for Spaces.' => 'Цей запит (класу "%s") не реалізовує newResultObject(), але має реалізувати цей метод, щоб увімкнути підтримку Spaces.',
      'Database isolation currently only supports some queries. You are trying to issue a query which does not begin with an allowed keyword (%s): \'%s\'.' => 'Ізоляція бази даних наразі підтримує лише деякі запити. Ви намагаєтеся виконати запит, який не починається з дозволеного ключового слова (%s): \'%s\'.',
      'Mailer configuration is invalid: multiple mailers have the same key ("%s"). Each mailer must have a unique key.' => 'Конфігурація поштової програми недійсна: кілька поштових програм мають однаковий ключ ("%s"). Кожен листовник повинен мати унікальний ключ.',
      'Attempting to render a tag with an \'%s\' attribute that begins with \'%s\'. This is either a serious security concern or a serious architecture concern. Seek urgent remedy.' => 'Спроба відобразити тег з атрибутом \'%s\', який починається з \'%s\'. Це або серйозна проблема безпеки, або серйозна проблема архітектури. Шукайте термінового засобу правового захисту.',
      'Flood the queue with test tasks. This command is intended for use during development and debugging.' => 'Заповніть чергу тестовими завданнями. Ця команда призначена для використання під час розробки та налагодження.',
      'Permit adjustments which truncate data. This option may destroy some data, but the lost data is usually not important (most commonly, the ends of very long object titles).' => 'Дозволити коригування, які скорочують дані. Цей параметр може знищити деякі дані, але втрачені вони зазвичай не важливі (найчастіше це кінці дуже довгих заголовків об’єктів).',
      'Expected to be passed a result object of class "LiskDAO" in "newExternalCursorStringForResult()", actually passed "%s". Return storage objects from "loadPage()" or override "newExternalCursorStringForResult()".' => 'Очікується передача об’єкта результату класу "LiskDAO" в "newExternalCursorStringForResult()", насправді передано "%s". Повернути об’єкти зберігання з "loadPage()" або замінити "newExternalCursorStringForResult()".',
      'File' => 'Файл',
      'Version' => 'Версія',
      'Submit' => 'Надіслати',
      'All Documents' => 'Усі документи',
      'This server is not configured to serve cluster requests. Set `cluster.addresses` in the configuration to whitelist cluster hosts before sending requests that use a cluster authentication mechanism.' => 'Цей сервер не налаштовано для обслуговування запитів кластера. Встановіть `cluster.addresses` у конфігурації для білого списку хостів кластера перед надсиланням запитів, які використовують механізм автентифікації кластера.',
      'Parameter to "%s" conversion in "qsprintf(...)" is not an instance of AphrontDatabaseTableRefInterface.' => 'Параметр для трансформації "%s" в "qsprintf (...)" не є прикладом AphrontDatabaseTableRefInterface.',
      'Quote' => 'Цитувати',
      'Continue anyway?' => 'Все-таки продовжити?',
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
      'You have not initialized the database yet. You must initialize the database before you can adjust schemata. Run `%s` to initialize the database.' => 'Ви ще не ініціалізували базу даних. Ви повинні ініціалізувати базу даних, перш ніж ви зможете налаштувати схеми. Запустіть `%s`, щоб ініціалізувати базу даних.',
      'Yellow' => 'Жовтий',
      'Thu' => 'Чт',
      'Sent' => 'Надіслано',
      'Expected "newInternalCursorFromExternalCursor()" to return an object of class "PhabricatorQueryCursor", but got "%s" (in class "%s").' => 'Очікувалося, що "newInternalCursorFromExternalCursor()" поверне об’єкт класу "PhabricatorQueryCursor", але отримано "%s" (у класі "%s").',
      'All Settings' => 'Всі Налаштування',
      'Creation (Newest First)' => 'Створення (Спочатку новітні)',
      'Italics' => 'Курсив',
      'November' => 'Листопад',
      'Some of these errors are caused by access control problems. The user you are connecting with does not have permission to see all of the database or tables that this software uses. You need to GRANT the user more permission, or use a different user.' => 'Деякі з цих помилок викликані проблемами контролю доступу. Користувач, з яким ви встановлюєте зв\'язок, не має дозволу переглядати всю базу даних або таблиці, які використовує це програмне забезпечення. Вам потрібно НАДАТИ цьому користувачеві додаткові дозволи або використовувати іншого користувача.',
      'Type' => 'Тип',
      'Add New Address' => 'Додати Нову Адресу',
      'Tuesday' => 'Вівторок',
      'Change the priority of selected tasks, causing them to execute before or after other tasks.' => 'Змініть пріоритет вибраних завдань, щоб вони виконувалися до або після інших завдань.',
      'Published' => 'Опубліковано',
      'Query class ("%s") did not return the correct type of object from "newResultObject()" (expected a subclass of "PhabricatorLiskDAO", found "%s"). Return an object of the expected type (this is common), or implement a custom "loadPage()" method (this is unusual in modern code).' => 'Клас запиту ("%s") не повернув правильний тип об\'єкта з "newResultObject()" (очікувався підклас "PhabricatorLiskDAO", знайдено " %s "). Повертайте об’єкт очікуваного типу (це поширене явище) або реалізуйте спеціальний метод "loadPage()" (це непоширене явище в сучасному коді).',
      'Sun' => 'Нд',
      'Change Password' => 'Змінити Пароль',
      'Queue tasks which require a specific amount of wall time to complete. By default, tasks complete as quickly as possible.' => 'Поставте в чергу завдання, для виконання яких потрібен певний час. За замовчуванням завдання виконуються якомога швидше.',
      'Request' => 'Запит',
      'Field "%s" is not a standard select field, nor a proxy of a standard select field.' => 'Поле "%s" не є стандартним полем вибору або проксі стандартного поля вибору.',
      'Multiple configured databases have the same internal key, "%s". You may have listed a database multiple times.' => 'Кілька налаштованих баз даних мають однаковий внутрішній ключ "%s". Можливо, ви вказали базу даних кілька разів.',
      'This error usually indicates that you need to "GRANT" the MySQL user additional permissions. See "GRANT" in the MySQL manual for help.' => 'Ця помилка зазвичай вказує на те, що вам потрібно "НАДАТИ" користувачеві MySQL додаткові дозволи. Перегляньте "НАДАННЯ" у посібнику MySQL для отримання допомоги.',
      'Unhandled Exception ("%s")' => 'Необроблений виняток («%s»)',
      'Request parameter "%s" is not formatted properly. Expected a JSON object, but value does not start with "{".' => 'Параметр запиту "%s" відформатовано неправильно. Очікувався об’єкт JSON, але значення не починається з "{".',
      'Login' => 'Увійти',
      'Search cluster configuration is not valid: each entry in the list must be a dictionary describing a search service, but the value with index "%s" is not a dictionary.' => 'Налаштування пошукового кластера недійсні: кожен запис у списку має бути словником, що описує службу пошуку, але значення з індексом "%s" не є словником.',
      'Owners' => 'Власники',
      'WMF Debug: rPHABdbc2ad3debdf1189cd93286ffad7861392c5c775' => 'Налагодження WMF: rPHABdbc2ad3debdf1189cd93286ffad7861392c5c775',
      'Mailer configuration ("%s") is invalid: priority must be greater than 0.' => 'Конфігурація поштової програми ("%s") недійсна: пріоритет має бути більшим за 0.',
      'Expected "\\n" at beginning of T_WHITESPACE token at head of tokens for highlighting parse of PHP snippet.' => 'Очікується "\\n" на початку маркера T_WHITESPACE у заголовку маркерів для виділення аналізу фрагмента PHP.',
      'Tue' => 'Вт',
      'Unable to access a required database or table. This almost always means that the user you are connecting with ("%s") does not have sufficient permissions granted in MySQL. You can use `bin/storage databases` to get a list of all databases permission is required on.' => 'Не вдається отримати доступ до необхідної бази даних або таблиці. Це майже завжди означає, що користувач,  з яким ви встановлюєте зв\'язок ("%s"), не має достатньо дозволів, наданих у MySQL. Ви можете використовувати `bin/storage databases`, щоб отримати список усіх баз даних, для яких потрібен дозвіл.',
      'mysqli->real_connect() failed, but did not set an error code or emit a message.' => 'mysqli->real_connect() не вдалось, але не встановило код помилки чи не видало повідомлення.',
      'Fullscreen Mode' => 'Повноекранний режим',
      'Description' => 'Опис',
      'Wednesday' => 'Середа',
      'Users' => 'Користувачі',
      'February' => 'Лютий',
      'This query (of class "%s") returned an object of class "%s" from getNewResultObject(), but it does not implement the required interface ("%s"). Objects must implement this interface to enable Spaces support.' => 'Цей запит (класу "%s") повернув об\'єкт класу "%s" з getNewResultObject(), але він не реалізовує потрібний інтерфейс ("%s"). Об’єкти мають реалізувати цей інтерфейс, щоб увімкнути підтримку Spaces.',
      'Mailer configuration ("%s") is invalid: mailer type ("%s") is unknown. Supported mailer types are: %s.' => 'Конфігурація поштової програми ("%s") недійсна: тип поштової програми ("%s") невідомий. Підтримувані типи поштових програм: %s.',
      'Author' => 'Автор',
      'Pin Form On Screen' => 'Закріпити форму на екрані',
      'Configuration file "%s" exists and is readable, but the content is not valid JSON. You may have edited this file manually and introduced a syntax error by mistake. Correct the file syntax to continue.' => 'Конфігураційний файл "%s" існує та його можна прочитати, але вміст не є дійсним JSON. Можливо, ви відредагували цей файл вручну та помилково ввели синтаксичну помилку. Щоб продовжити, виправте синтаксис файлу.',
      'Analysis' => 'Аналіз',
      'This query is constrained by a project you do not have permission to see.' => 'Цей запит обмежений проектом, дозволу на перегляд якого ви не маєте.',
      'This file uses \'%s\' but does not @requires the component which installs it. You may need to rebuild the Celerity map.' => 'Цей файл використовує \'%s\', але не @вимагає компонента, який його встановлює. Можливо, вам доведеться перебудувати карту Celerity.',
      'Specified "--min-failures" must not be larger than specified "--max-failures".' => 'Вказані "--min-failures" не повинні бути більшими за вказані "--max-failures".',
      'Sat' => 'Сб',
      'Time' => 'Час',
      'Space' => 'Простір',
      'Unable to establish a write-mode connection (to application database "%s") because this server is in read-only mode. Whatever you are trying to do does not function correctly in read-only mode.' => 'Не вдалося встановити з’єднання в режимі запису (до бази даних програми "%s"), оскільки цей сервер працює в режимі лише для читання. Усе, що ви намагаєтесь зробити, не працює належним чином у режимі лише для читання.',
      'Object (of class "%s") implements interface "%s", but defines method "%s" incorrectly: this method must return an object of class "%s".' => 'Об’єкт (класу "%s") реалізовує інтерфейс "%s", але неправильно визначає метод \'%s": цей метод має повертати об’єкт класу "%s".',
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
      'Retrying database connection to "%s" after connection failure (attempt %d; "%s"; error #%d): %s' => 'Повторна спроба з’єднання з базою даних "%s" після помилки з’єднання (спроба %s; "%s"; помилка #%s ): %s',
      'Never' => 'Ніколи',
      'Monospaced' => 'Моноширинний',
      'Unsubscribe' => 'Відписатися',
      'Tags' => 'Теги',
      'Username' => 'Ім\'я користувача',
      'Reports' => 'Звіти',
      'You can only generate a new quickstart file if MySQL supports the %s character set (available in MySQL 5.5 and newer). The configured server does not support %s.' => 'Ви можете створити новий файл швидкого запуску, лише якщо MySQL підтримує набір символів %s (доступний у MySQL 5.5 і новіших версіях). Налаштований сервер не підтримує %s.',
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
      'URI "%s" is not a valid fetchable resource. A valid fetchable resource URI must use one of these protocols: %s.' => 'URI "%s" не є дійсним доступним ресурсом. Дійсний URI доступного ресурсу має використовувати один із цих протоколів: %s.',
      'Curtain extension ("%s", of class "%s") returned a list of curtain panels from "%s" that contains an invalid value: a value (with key "%s") is not an object of class "%s". Each item in the returned array must be a panel.' => 'Розширення Curtain ("%s", класу "%s") повернуло список панелей штор із "%s", який містить недійсне значення: значення (з ключем "%s") не є об\'єктом класу "%s". Кожен елемент у поверненому масиві має бути панеллю.',
      'User' => 'Користувач',
      'Token' => 'Токен',
      'Change Priority' => 'Змінити пріоритет',
      'Query' => 'Запит',
      'Producer "%s" returned an invalid response from call to "%s". This method must return an object of class "%s", or an object which implements the "%s" interface.' => 'Виробник "%s" повернув недійсну відповідь від виклику до "%s". Цей метод має повертати об’єкт класу "%s" або об’єкт, який реалізовує інтерфейс "%s".',
      'Active' => 'Активний',
      'Search engine configuration has an invalid service specification (at index "%s"): %s.' => 'Конфігурація пошукової системи містить недійсну специфікацію сервісу (з індексом "%s"): %s .',
      'Expires' => 'Закінчується',
      'Data can not be exported to Excel because the "zip" PHP extension is not
    installed. Consult the setup issue in the Config application for guidance on
    installing the extension.' => 'Дані не можна експортувати в Excel, оскільки розширення PHP "zip" не
    встановлено. Зверніться стосовно проблеми налаштування в програмі Config, щоб отримати вказівки щодо
    встановлення розширення.',
      'Add __--master-data__ to the __mysqldump__ command, generating a CHANGE MASTER statement in the output. This option also dumps all data, including caches.' => 'Додайте __--master-data__ до команди __mysqldump__, згенерувавши оператор CHANGE MASTER у вихідних даних. Ця опція також вилучає усі дані, включаючи кеші.',
      'This function includes results which have any value. Use a query like this to find results with any value:
    %s' => 'Ця функція включає результати, які мають яке-небудь значення. Використовуйте такий запит, щоб знайти результати з яким-небудь значенням:
     %s',
      'Created' => 'Створено',
      'Calendar' => 'Календар',
      'Found %s adjustment(s) to apply, detailed above.
    You can review adjustments in more detail from the web interface, in Config > Database Status. To better understand the adjustment workflow, see "Managing Storage Adjustments" in the documentation.
    MySQL needs to copy table data to make some adjustments, so these migrations may take some time.' => 'Знайдено коригування (%s), яке/які потрібно застосувати, деталі вище.
     Ви можете переглянути коригування більш детально у веб-інтерфейсі в розділі Конфігурація > Статус Бази Даних. Щоб краще зрозуміти робочий процес коригування, перегляньте розділ "Керування налаштуваннями сховища» в документації".
    MySQL потрібно скопіювати дані таблиці, щоб внести деякі коригування, тому ці перенесення можуть зайняти деякий час.',
      'Maniphest' => 'Маніфест',
      'Application' => 'Застосунок',
      'Back' => 'Назад',
      'This service is configured in cluster mode and the address this request was received on ("%s") is not whitelisted as a cluster address.' => 'Ця служба налаштована в режимі кластера, і адреса, на яку надійшов цей запит ("%s"), не внесена до білого списку як адреса кластера.',
      'Fri' => 'Пт',
      'Open Tasks' => 'Відкрити завдання',
      'Dump only tables in the named database (or databases, if the flag is repeated). Specify database names without the namespace prefix (that is: use "differential", not "phabricator_differential").' => 'Перемістити тільки таблиці у названій базі даних (або базах даних, якщо прапорець повторюється). Вказуйте імена баз даних без префікса простору імен (тобто: використовуйте "differential", а не "phabricator_differential").',
      'Send Email' => 'Надіслати пошту',
      'Manage' => 'Управління',
      'You have surplus schemata (extra tables or columns which this software does not expect). For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'У вас є зайві схеми (зайві таблиці або стовпці, яких це програмне забезпечення не очікує). Інформацію про вирішення цих проблем дивіться у розділі "Surplus Schemata" у статті "Managing Storage Adjustments" у документації.',
      'Connected' => 'З\'єднано',
      'Tokens' => 'Токени',
      'Actions' => 'Дії',
      'Type a username or function...' => 'Введіть ім’я користувача чи функцію…',
      'Help' => 'Допомога',
      'ACTIVE' => 'АКТИВНИЙ',
      'Settings' => 'Налаштування',
      'Actor' => 'Діяч',
      'This service is configured to operate in cluster mode, but %s is not defined in the request context. Your webserver configuration needs to forward %s to PHP so the software can reject requests received on external interfaces.' => 'Цю службу налаштовано для роботи в режимі кластера, але %s не визначено в контексті запиту. Ваша конфігурація вебсервера має перенаправляти %s до PHP, щоб програмне забезпечення могло відхиляти запити, отримані через зовнішні інтерфейси.',
      'Bulleted List' => 'Маркований список',
      'Assigned To' => 'Задано',
      'Authored By' => 'Автор',
      'Timezone' => 'Часовий пояс',
      'Authors' => 'Автори',
      'Subscribe' => 'Підписатися',
      'The "--compress" flag requires the PHP "zlib" extension, but that extension is not available. Install the extension or omit the "--compress" option.' => 'Прапорець "--compress" вимагає розширення PHP "zlib", але це розширення недоступне. Установіть розширення або пропустіть опцію "--compress".',
      'Languages' => 'Мови',
      'Details' => 'Подробиці',
      'Public' => 'Публічний',
      'Relevance' => 'Актуальність',
      'Upload File' => 'Завантажити файл',
      'Numbered List' => 'Нумерований список',
      'All Applications' => 'Усі Додатки',
      'Sessions' => 'Сесії',
      'Projects must have a description. %s is public. Describe the project in a way that allows anyone to clearly understand what the scope is (not) about. Add links to relevant public project pages with more information, or link your #Team_Project. If you create a sprint, document its dates. See https://www.mediawiki.org/wiki/Phabricator/Creating_and_renaming_projects' => 'Проекти повинні мати опис. %s є публічним. Опишіть проект таким чином, щоб кожен міг чітко зрозуміти, про що (не) йдеться. Додайте посилання на відповідні загальнодоступні сторінки проєкту з додатковою інформацією або зв’яжіть свій #Team_Project. Якщо ви створюєте спринт, задокументуйте його дати. Див. https://www.mediawiki.org/wiki/Phabricator/Creating_and_renaming_projects',
      'Changes from before your most recent comment are hidden.' => 'Зміни, внесені до вашого останнього коментаря, приховано.',
      'Code Block' => 'Блок коду',
      'Required' => 'Потребує',
      'View All' => 'Див. все',
      'Preview' => 'Перегляд',
      'Updated' => 'Оновлено',
      'Advanced Search' => 'Розширений пошук',
      'URI "%s" is not a valid fetchable resource. A valid fetchable resource URI must specify a domain.' => 'URI "%s" не є дійсним доступним ресурсом. Дійсний URI доступного ресурсу має вказувати домен.',
      'Conduit API Tokens' => 'Токени Conduit API',
      'Session' => 'Сесія',
      'Save Changes' => 'Зберегти зміни',
      'Activity Logs' => 'Журнали діяльності',
      'Log In or Register' => 'Увійти або Зареєструватися',
      'Best Available Algorithm' => 'Найкращий доступний алгоритм',
      'Some of these errors are caused by surplus schemata (extra tables or columns which this software does not expect). These are not serious. For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'Деякі з цих помилок викликані завеликою кількістю схем (зайвими таблицями або стовпцями, яких це програмне забезпечення не очікує). Це неправильно. Щоб отримати відомості про вирішення цих проблем, перегляньте розділ "Surplus Schemata" у статті "Managing Storage Adjustments" у документації.',
      'Profile' => 'Профіль',
    );
  }

}
