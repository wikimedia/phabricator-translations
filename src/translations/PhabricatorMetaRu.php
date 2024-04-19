<?php

final class PhabricatorMetaRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Completely Break Everything' => 'Полностью сломать Фабрикатор',
      'Information' => 'Информация',
      'Syntax' => 'Синтаксис',
      'You cannot install an installed application.' => 'Вы не можете установить установленное приложение.',
      'Show First-Party Applications' => 'Показать собственные приложения',
      'Create Application' => 'Создать приложение',
      'Unknown order "%s"!' => 'Неизвестное задание "%s"!',
      'Really Uninstall Application?' => 'Действительно удалить приложение?',
      'Prototypes Not Enabled' => 'Прототип не включен',
      'Really uninstall the %s application?' => 'Действительно удалить приложение %s?',
      'Policy does not exist.' => 'Правила не существует.',
      'Launcher' => 'Лаунчер',
      'This application is a prototype. %s' => 'Это приложение является прототипом.%s',
      '%s installed this application.' => '%s установил это приложение.',
      'Confirmation' => 'Подтверждение',
      'Explore More Applications' => 'Изучите больше приложений',
      'After configuring processing for inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring inbound mail, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from this server to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When %s receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => 'После настройки Phabricator для обработки входящей почты вы можете взаимодействовать с объектами (например, задачами и редакциями) по электронной почте. Для получения информации о настройке Phabricator см. **[[%s| Настройка входящей электронной почты]]**. 
    В большинстве случаев вы можете ответить на электронное письмо, полученное от Phabricator, и оставить комментарии. Вы также можете использовать **почтовые команды** для выполнения большего количества действий (например, запроса задачи или запроса изменений в редакции) без необходимости входа в веб-интерфейс. 
    Почтовые команды - это ключевые слова, которые начинаются с восклицательного знака, например `!claim`. Некоторые команды могут принимать параметры, такие как `!Assign alincoln`. 
    Чтобы использовать почтовые команды, напишите по одной команде в каждой строке в начале или в конце вашего почтового сообщения. Например, вы можете написать это в ответе на электронное письмо о задаче, чтобы рассказать о ней: 
    ```
    !claim
    Я позабочусь об этом.
    ```
    Когда Phabricator получит вашу почту, он сначала обработает команды, а затем отправит оставшееся тело сообщения в качестве комментария. Вы можете выполнять сразу несколько команд:
    ```
    !assign alincoln
    !close
    Я только что говорил с @alincoln, и он показал мне, что он починил это.
    ```',
      'Uninstalled' => 'Удален',
      'Show Uninstalled Applications' => 'Показать удаленные приложения',
      'Launchable' => 'Запускаемое',
      'Save Policies' => 'Сохранить правила',
      'Browse Applications' => 'Выбрать приложения',
      'To manage prototypes, enable them by setting %s in your configuration.' => 'Чтобы управлять прототипами, включите их, установив %s в конфигурации Phabricator.',
      'Prototype' => 'Прототип',
      'Edit Policies: %s' => 'Редактировать правило: %s',
      'Create New Application' => 'Создать новое приложение',
      'Extension' => 'Расширение',
      'Validation Failed' => 'Проверка провалилась',
      'Show Installed Applications' => 'Показать установленные приложения',
      '%s uninstalled this application.' => '%s удалил это приложение.',
      'Capability "%s" is not editable for this application.' => 'Возможность "%s" не изменяется для этого приложения.',
      'Mail Commands Overview' => 'Обзор почтовых команд',
      'Show Launchable Applications' => 'Показать приложения, которые можно запустить',
      'Show Released Applications' => 'Показать выпущенные приложения',
      'Show Non-Launchable Applications' => 'Показать приложения, которые не запускаются',
      '%s uninstalled %s.' => '%s удалил %s.',
      'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Это очень необычная ситуация, и на домашней странице Phabricator вы останетесь без какого-либо содержания. Вам следует делать это только в том случае, если вы уверены, что знаете, что делаете.',
      'Can\'t set non-public policies to public.' => 'Нельзя сделать частные правила общедоступными.',
      '%s installed %s.' => '%s установил %s.',
      'Configure Application Forms' => 'Настроить формы заявки',
      'Show Applications w/ App Email Support' => 'Показать приложения w/ поддержкая по электронной почте для приложения',
      'Uninstall' => 'Удалить',
      'Can\'t set the policy to a policy you can\'t view!' => 'Невозможно установить правила для правил, которые вы не можете просматривать!',
      'This application is required and cannot be uninstalled.' => 'Это приложение нельзя удалить, поскольку оно требуется для работы Phabricator.',
      'Type an application name...' => 'Введите название приложения...',
      'Install %s application?' => 'Установить приложение %s?',
      'Quick Reference' => 'Быстрая справка',
      'Show Applications w/o App Email Support' => 'Показать приложения без поддержки по почте',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Вы полностью уверены, что хотите удалить домашнее приложение?',
      '%s changed the %s policy for application %s from %s to %s.' => '%s изменил правило %s для приложения %s с %s до %s.',
      'Configure creation and editing forms in Applications.' => 'Настройте формы для создания и редактирования во вкладке приложения.',
      'Show Prototype Applications' => 'Показать прототипы приложений',
      'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Фабрикатор в настоящее время не настроен для приема входящей почты. Вы не сможете взаимодействовать с объектами по электронной почте, пока не настроена входящая почта.',
      '%s changed the %s policy from %s to %s.' => '%s изменило правило %s с %s в %s',
      'Edit Application: %s' => 'Редактировать приложение: %s',
      'Show Third-Party Applications' => 'Показать сторонние приложения',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'В этой таблице перечислены доступные почтовые команды. Дополнительные сведения о конкретной команде см. В разделе команд ниже.',
      'Show All Applications' => 'Все приложения',
    );
  }

}
