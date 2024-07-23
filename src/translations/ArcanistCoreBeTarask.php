<?php

final class ArcanistCoreBeTarask
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'be_Tarask';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Спынена праз памылку загрузкі файлу. Вы можаце ўжыць %s для пропуску бінарных загрузак.',
      'This working copy is associated with the %s repository.' => 'Гэтая працоўная копія злучаная з сховішчам %s.',
      'Lint Disabler' => 'Адключэньне Lint',
      'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => 'Не выклікаць %s або %s непасрэдна на %s. Наўзамен выклікайце %s або %s.',
      'A linter for Composer related files.' => 'Linter для файлаў, зьвязаных з Composer',
      'Not parsing!' => 'Не апрацоўваем!',
      'Try running your arc command again.' => 'Паспрабуйце запусьціць вашую каманду arc яшчэ раз.',
      'CC: %s' => 'CC: %s',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Калі файл не зьяўляецца тэкставым, вы можаце пазначыць яго як «бінары». Пазначыць гэты файл як «бінарны» і працягнуць?',
      'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'Правіла «%s» няслушнае, яно мусіць мець тып і назву, падобныя да «%s».',
      'None of the configured interpreters can be located.' => 'Ніводны з наладжаных інтэрпрэтатараў ня знойдзены.',
      'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'Гэты працоўны працэс («%s») патрабуе API сховішча, перавызначце %s, каб вярнуць «true».',
      'Unknown argument \'%s\'. Try \'%s\'.' => 'Невядомы аргумэнт «%s». Паспрабуйце «%s».',
      'No match found. Try `%s %s` to search for a linter.' => 'Супадзеньняў ня знойдзена. Паспрабуйце «%s %s» для пошуку linter.',
      'Pick' => 'Узяць',
      'Browse URI "%s"' => 'Праглядзець URI «%s»',
      'Nowhere to load blob \'%s\' from!' => 'Няма адкуль загрузіць blob «%s»!',
      'Runtime Error' => 'Памылка выкананьня',
      'Output upload information in JSON format.' => 'Вывад інфармацыі пра загрузку ў JSON-фармаце.',
      'Inline HTML' => 'Укладзены HTML',
      'Remote Repository' => 'Аддаленае сховішча',
      'Empty certificate in credentials.' => 'Пусты сэртыфікат ва ўліковых зьвестках.',
      'No tests to run.' => 'Няма тэстаў для запуску.',
      'Unknown Symbol' => 'Невядомы сымбаль',
      '`%s` Statement Must Be The First Statement' => 'Сьцьверджаньне «%s» мусіць быць першым сьцьверджаньнем',
      'In most cases, arc can be upgraded automatically.' => 'У большасьці выпадкаў arc можа быць абноўлены аўтаматычна.',
      'Throwing Exception in `%s` Method' => 'Кідаем выключэньне ў мэтадзе «%s»',
      'Custom %s file was specified, but it was not found!' => 'Уласны файл %s быў пазначаны, але ён ня знойдзены!',
      'ERROR' => 'ПАМЫЛКА',
      'Do not upload binaries (like images).' => 'Не загружайце бінарныя файлы (напрыклад, выявы).',
      'Only one output format allowed' => 'Дазволены толькі адзін фармат вываду',
      'Install lessc using `%s`.' => 'Усталёўка lessc з дапамогай «%s».',
      'Lint does not currently support %s in SVN.' => 'Lint цяпер не падтрымлівае %s у SVN.',
      'Changes Planned' => 'Зьмены заплянаваныя',
      'Set %s to file mode 600.' => 'Вызначыць %s на рэжым файлу 600.',
      'Invalid Modifiers' => 'Няслушныя мадыфікатары',
      'Working Copy State' => 'Стан працоўнай копіі',
      'Space found before semicolon.' => 'Знойдзены прабел перад кропкай з коскай.',
      'Copied Here' => 'Скапіявана сюды',
      'Install PEP8 using `%s`.' => 'Усталяваць PEP8 з дапамогай «%s».',
      '    %s %s
    ' => '    %s %s',
      'Install flake8 using `%s`.' => 'Усталяваць flake8 з дапамогай «%s».',
      'Updating working copy...' => 'Абнаўленьне працоўнай копіі…',
      'Detects common misspellings of English words.' => 'Вызначае распаўсюджаныя памылкі ў ангельскіх словах.',
      'Modified' => 'Зьменена',
      'Do you want to edit the message?' => 'Вы жадаеце адрэдагаваць паведамленьне?',
      'Config: Reading user configuration file "%s"...' => 'Канфігурацыя: чытаньне файлу канфігурацыі ўдзельніка «%s»…',
      'Constants should be uppercase.' => 'Канстанты павінныя быць у верхнім рэгістры.',
      'Diff URI:' => 'URI-адрас розьніцы:',
      'Revision %s' => 'Вэрсія %s',
      'File Error' => 'Памылка файлу',
      'Avoid the use of inner functions.' => 'Пазьбягайце ўжываньня ўнутраных функцыяў.',
      'Install PHPCS with `%s`.' => 'Усталяваць PHPCS з дапамогай «%s».',
      'Unknown library version \'%s\'!' => 'Невядомая вэрсія бібліятэкі «%s»!',
      'Unrecognized property status \'%s\'.' => 'Нявызначаны статус уласьцівасьці «%s».',
      'Install JSCS using `%s`.' => 'Усталяваць JSCS з дапамогай «%s».',
      '`%s` Operator' => 'Апэратар «%s»',
      'Fail' => 'Не атрымалася',
      'Version' => 'Вэрсія',
      'Which URI do you want to open?' => 'Які URI вы жадаеце адкрыць?',
      'Dynamic `%s`' => 'Дынамічны «%s»',
      'Incomplete implementation: %s!' => 'Няпоўная рэалізацыя: %s!',
      'Array Separator' => 'Падзяляльнік масіву',
      'No tasks found.' => 'Задачы ня знойдзеныя.',
      '<default>' => '<дапомна>',
      'ALIAS' => 'ПСЭЎДАНІМ',
      'Use of Deprecated Function' => 'Выкарыстаньне састарэлай функцыі',
    );
  }

}
