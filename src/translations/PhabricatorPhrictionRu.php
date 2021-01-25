<?php

final class PhabricatorPhrictionRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => 'Путь до страницы.',
      'No such document.' => 'Нет такой страницы.',
      'Edit Older Version %s...' => 'Редактировать прежнюю версию %s...',
      'DOCUMENT DIFF' => 'СРАВНЕНИЕ СТРАНИЦ',
      'A moved document can not be moved again.' => 'Перемещëнная страница не может быть перемещена снова.',
      'Next Change »' => 'Следующая правка »',
      'Last Edited' => 'Отредактировано',
      'Publish Draft' => 'Опубликовать черновик',
      'Moved' => 'Перемещена',
      'Other document activity not listed above occurs.' => 'Происходит что-то не перечисленное выше.',
      'Version %d of %d: ' => 'Версия %s страницы %s:',
      'DOCUMENT CONTENT' => 'СОДЕРЖИМОЕ СТРАНИЦЫ',
      'EDIT NOTES' => 'РЕДАКТИРОВАТЬ ЗАМЕТКИ',
      'Missing Ancestor' => 'Потерян предок',
      'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Эта страница была перемещена в %s. Вы можете отредактировать её, добавив тем самым сюда содержимое, или верните прежнюю версию через историю страницы.',
      'Retrieve information about a Phriction document.' => 'Получить информацию о Вики-странице.',
      'A document\'s subscribers change.' => 'Добавлены или удалены подписчики.',
      'Unknown document status \'%s\'!' => 'Неизвестное состояние страницы «%s»!',
      'Overwrite Changes' => 'Перезаписать изменения',
      'Can Not Delete Document!' => 'Невозможно удалить страницу!',
      'No parent/ancestor paths specified.' => 'Не заданы пути предков.',
      'Unknown URI type \'%s\'!' => 'Неизвестный тип URI «%s»!',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => '«%s» не является правильным путём до Вики-страницы. Вот нормализованная форма: «%s».',
      'Stubbed' => 'Заготовка',
      'There is no document here, but you may create it.' => 'Страницы не найдены, но вы можете создать одну.',
      'Edit Notes' => 'Редактировать заметки',
      'Phriction Wiki Document' => 'Вики-страница Phriction',
      'Phriction Document' => 'Вики-страница Phriction',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => 'По такому пути уже есть другая страница, поэтому нельзя переместить эту. Для начала сделайте что-нибудь с той.',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'Для редактирования Вики-страницы вам также должны быть видны все её предки.',
      'Content Changes' => 'Изменения содержимого',
      'This version of the document is already the published version.' => 'Эта версия страницы уже опубликованная.',
      'Document Hierarchy' => 'Содержание',
      'More...' => 'Больше...',
      'A document\'s title changes.' => 'Изменяется заголовок страницы.',
      'Save and Publish' => 'Сохранить и опубликовать',
      'Current Path' => 'Текущий путь',
      '(Untitled Document)' => '(Безымянная страница)',
      'Phriction User Guide' => 'Вики (Phriction): Руководство пользователя',
      '%s moved this document to %s.' => 'Пользователь %s переместил страницу в %s.',
      'Content' => 'Содержимое',
      'Update a Phriction document.' => 'Обновить Вики-страницу.',
      'Revert the published version of this document to an older version?' => 'Вернуть прежнюю версию страницы взамен опубликованной сейчас?',
      'Document Content' => 'Содержимое страницы',
      'Version %d' => 'Версия %s',
      'Last Author' => 'Последнее изменение от',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => 'Другой пользователь внёс изменения в страницу после того, как вы начали. Вы бы хотели записать страницу поверх его правок? (Если да, потом не забудьте провести слияние ваших версий в новом издании.)',
      'Can not create document because the parent document with slug %s does not exist!' => 'Невозможно создать страницу, потому что не существует предка «%s»!',
      'Edit Phriction Document Configurations' => 'Править настройки Вики-страницы',
      'Accept Path' => 'Принять путь',
      'Content object "%s" can not be published because it belongs to a different document.' => 'Объект содержимого «%s» не может быть опубликован, поскольку он принадлежит другой странице.',
      'Edit Current Version %s...' => 'Редактировать настоящую версию %s...',
      'Edit this Document' => 'Редактировать эту страницу',
      'Document History: %s' => 'История правок: %s',
      'Ancestor Paths' => 'Пути предков',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => 'Для просмотра Вики-страницы вам также должны быть видны все её предки. Пограничная политика просмотра предков следующая: «%s».',
      'Wiki Documents' => 'Вики-страницы',
      'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Эта страница была перемещена. Вы можете отредактировать её, добавив тем самым сюда содержимое, или верните прежнюю версию через историю страницы.',
      'Edit Draft Version %s...' => 'Редактировать черновик версии %s...',
      'Document this content is for.' => 'Страница, которой принадлежит содержимое.',
      'You are viewing an unpublished draft of this document.' => 'Вы просматриваете неопубликованный черновик страницы.',
      '%s deleted this document.' => 'Пользователь %s удалил эту страницу.',
      '<%s>' => '<%s>',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => 'Этот метод заморожен и в конечном итоге будет признан устаревшим. Новый код должен использовать вместо этого «phriction.content.search».',
      'An already deleted document can not be deleted.' => 'Страница уже была удалена.',
      'Stub' => 'Заготовка',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => 'Этот метод заморожен и в конечном итоге будет признан устаревшим. Новый код должен использовать вместо этого «phriction.content.search».',
      '%s published a new version of %s.' => 'Пользователь %s опубликовал новую версию %s.',
      'No such document exists.' => 'Нет такой Вики-страницы.',
      'Edit Existing Document?' => 'Отредактировать уже существующую страницу?',
      'Read information about Phriction documents.' => 'Информация о Вики-страницах Phriction.',
      'The document %s already exists. Do you want to edit it instead?' => 'Страница %s уже есть. Вы бы хотели её отредактировать?',
      'A deleted document can not be moved.' => 'Удалённая страница не может быть перемещена.',
      'Printable Page' => 'Страница для печати',
      'Welcome to Phriction' => 'Добро пожаловать в Вики (Phriction)',
      'CHANGES TO DOCUMENT CONTENT' => 'ИЗМЕНЕНИЯ В СОДЕРЖИМОМ СТРАНИЦЫ',
      '%s moved %s from %s' => 'Пользователь %s переместил %s из %s',
      'This document is empty. You can edit it to put some proper content here.' => 'Эта страница пустая. Вы можете отредактировать её, добавив тем самым сюда содержимое.',
      'Publish Draft?' => 'Опубликовать черновик?',
      'A document is deleted.' => 'Страница удалена.',
      'Would you like to use the path %s instead?' => 'Не хотели бы вы применить иной путь как %s?',
      'Delete Document?' => 'Удалить Вики-страницу?',
      'Document Deleted' => 'Страница удалена',
      'Content version.' => 'Версия содержимого.',
      'Documents must have content.' => 'Страницы должны иметь содержимое.',
      'You can not move a document to its existing location. Choose a different location to move the document to.' => 'Страница уже находится по этому пути.',
      '"%s" <%s>' => '«%s» <%s>',
      'Document History' => 'История правок',
      'Draft %d' => 'Черновик %s',
      'Original Change' => 'Первоначальная правка',
      'Empty Parent Document' => 'Пустая страница-предок',
      'Document already exists!' => 'Страница уже есть!',
      '%s moved %s to %s.' => 'Пользователь %s переместил %s в %s.',
      'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.' => 'Вики (Phriction) - это простой и лëгкий в использовании страничный агрегат, в котором все изменения имеют значение.',
      '« Previous Change' => '« Предыдущая правка',
      'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.' => 'Путь, что вы ввели («%s»), не является правильным для вики-страницы. В нём не должны содержаться пробелы и специальные символы.',
      'View Draft Version' => 'Показать черновую версию',
      'Edit Conflict' => 'Обнаружена параллельная правка',
      '%s edited the content of %s.' => 'Пользователь %s отредактировал содержимое %s.',
      'This document has unpublished draft changes.' => 'Эта страница имеет неопубликованные черновые правки.',
      'Version %s vs %s' => 'Версии: %s — %s',
      '%s edited the content of this document.' => 'Пользователь %s отредактировал содержимое этой страницы.',
      'This document is already deleted. You must specify content to re-create the document and make further edits.' => 'Страница уже удалена.',
      'Parent Paths' => 'Пути-предки',
      '%s published a new version of this document.' => 'Пользователь %s опубликовал новую версию этой страницы.',
      'You are viewing the current published version of this document.' => 'Вы просматриваете настоящую опубликованную версию страницы.',
      'Update the published version of this document to this newer version?' => 'Обновить опубликованную версию страницы до этой новой?',
      '%s changed the title from %s to %s.' => 'Пользователь %s изменил заголовок: %s ➜ %s.',
      'Publish Older Version?' => 'Опубликовать прежнюю версию?',
      'Hierarchy' => 'Иерархия',
      'Save as Draft' => 'Сохранить как черновик',
      'Edited by %s' => 'Отредактировано %s',
      'No Document Here' => 'Здесь нет страницы',
      'A document\'s content changes.' => 'Изменяется содержимое страницы.',
      'A moved document can not be deleted.' => 'Перемещëнная страница не может быть удалена.',
      'Adjust Path' => 'Исправьте путь',
      'Read information about Phriction document history.' => 'Информация об истории Вики-страниц.',
      'Test rules which run when a wiki document is created or updated.' => 'Правила проверки, которые запускаются при создании или обновлении Вики-страницы.',
      'A stub document can not be deleted.' => 'Заготовка не может быть удалена.',
      'Can not move document because the parent document with slug %s does not exist!' => 'Невозможно переместить страницу, потому что не существует предка «%s»!',
      '%s by %s, %s' => '%s в редакции %s, %s',
      'Publish Older Version' => 'Опубликовать прежнюю версию',
      'Create this Document' => 'Создать эту страницу',
      'This engine is used to edit Phriction documents.' => 'Этот движок используется для редактирования Вики-страниц.',
      'Edits' => 'Правки',
      'Already Published' => 'Уже опубликована',
      'Retrieve history about a Phriction document.' => 'Поднять историю Вики-страницы.',
      'Unable to load Content object with PHID "%s".' => 'Невозможно загрузить объект содержимого с PHID «%s».',
      'Create a Phriction document.' => 'Создать Вики-страницу.',
      'You are viewing an older version of this document, as it appeared on %s.' => 'Вы просматриваете прежнюю версию этой страницы, датируемую %s.',
      'Status information about the document.' => 'Информация о состоянии страницы.',
      'React to wiki documents being created or updated.' => 'Реагировать на создание и обновление Вики-страниц.',
      'Document Fields' => 'Поля страницы',
      'All Content' => 'Всё содержимое',
      'Phriction Content' => 'Вики-содержимое Phriction',
      'Phriction Document Content' => 'Вики-содержимое Phriction',
      'Created through child' => 'Создана через потомка',
      'Page Not Found' => 'Страница не найдена',
      'New Document' => 'Новая страница',
      '%s stubbed out this document when creating %s.' => 'Пользователь %s сделал эту страницу заготовкой при создании %s.',
      'Empty Document' => 'Пустая страница',
      'Move Here' => 'Переместить сюда',
      'Get the content of documents or document histories.' => 'Получить содержимое или историю страниц.',
      'Create a new document at' => 'Создать новую страницу в',
      'New Path' => 'Новый путь',
      'Phriction Documents' => 'Вики-страницы Phriction',
      'A stub document can not be moved.' => 'Заготовка не может быть перемещена.',
      'You can not create a document which does not have a parent.' => 'Вы не можете создать страницу без предка.',
      'Most Recent Change' => 'Самая последняя правка',
      'Really delete this document? You can recover it later by reverting to a previous version.' => 'Точно удалять эту страницу? Вы сможете вернуть её путём возврата в прошлую версию.',
      'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.' => 'Эта страница была удалена. Вы можете отредактировать её, добавив тем самым сюда содержимое, или верните прежнюю версию через историю страницы.',
      'Wiki Document %d' => 'Вики-страница %s',
      'Move Away' => 'Переместить вовне',
    );
  }

}
