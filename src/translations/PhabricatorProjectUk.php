<?php

final class PhabricatorProjectUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      '%s added %s member(s) for %s: %s.' => '%s додав %s користувача(ів) до %s: %s.',
      'Members: %s' => 'Користувачі: %s',
      'Unwatch Project?' => 'Скасувати перегляд проєкту?',
      'Members' => 'Користувачі',
      'Watch Project?' => 'Дивитися проєкт?',
      'You will no longer receive email or notifications about every object associated with this project.' => 'Ви більше не отримуватимете електронні листи чи сповіщення про кожен об’єкт, пов’язаний з цим проєктом.',
      'Watch Project' => 'Дивитися проєкт',
      'Watching a project also watches all subprojects and milestones of that project.' => 'Перегляд проєкту також відстежує всі підпроєкти та етапи цього проєкту.',
      'Type a project name...' => 'Введіть назву проєкта…',
      'Members of a project can always view it.' => 'Користувачі проєкту завжди можуть його переглянути.',
      'Unwatch Project' => 'Скасувати перегляд проєкту',
      'Project History' => 'Історія Проєкту',
      'Watchers' => 'Глядачі',
      'Watching a project will let you monitor it closely. You will receive email and notifications about changes to every object tagged with projects you watch.' => 'Перегляд проєкту дозволить вам уважно стежити за ним. Ви отримуватимете електронну пошту та сповіщення про зміни до кожного об’єкта, позначеного тегами проєктів, які ви переглядаєте.',
    );
  }

}
