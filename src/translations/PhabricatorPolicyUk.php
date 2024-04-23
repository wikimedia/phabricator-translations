<?php

final class PhabricatorPolicyUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'У доступі відмовлено: %s',
      'Users who can see objects in this space:' => 'Користувачі, які можуть бачити об’єкти в цьому просторі:',
      'After a user passes space policy checks, they must still pass object policy checks.' => 'Після того, як користувач пройде перевірку політики простору, він все одно повинен пройти перевірку політики об’єктів.',
      'Can View' => 'Можна переглядати',
      'Special Rules' => 'Спеціальні правила',
      'Object Policy' => 'Об\'єктна політика',
      'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Цей об’єкт є загальнодоступним, і його може переглядати будь-хто, навіть якщо у нього немає облікового запису Phabricator.',
      'Policy Details: %s' => 'Деталі політики: %s',
      'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Цей об’єкт знаходиться в %s, і його можуть бачити або редагувати лише користувачі, які мають доступ до перегляду об’єктів у просторі.',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'У деталях, це означає, що ці користувачі можуть виконати цю дію, якщо вони спочатку пройдуть усі описані вище перевірки:',
      'Spaces Documentation' => 'Документація про простір',
      'This object has special rules which override normal object policy rules:' => 'Цей об’єкт має спеціальні правила, які замінюють звичайні правила політики об’єктів:',
    );
  }

}
