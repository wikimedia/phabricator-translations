<?php

final class PhabricatorPeopleLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
      'View Activity Log' => 'Tala Journal ya misala',
      'Real Name must have no more than %d characters.' => 'Nkombo ya solo esengeli kozala na bilembo koleka %s te.',
      'Authored Commits' => 'Ba Commits oyo bakomi',
      'Received Badges' => 'Ba Badges oyo bazwaki',
      'User Profile' => 'Profil ya Mosaleli',
      'Authored Revisions' => 'Ba révisions oyo bakomi',
      'No authored tasks.' => 'Misala ya mokomi te.',
      'Find users whose usernames or real names contain a substring.' => 'Luka basaleli oyo bankombo ya basaleli to bankombo na bango ya solo ezali na molongo ya moke.',
      'People Profile Pictures' => 'Bato Bililingi ya Profil',
      'Authored Tasks' => 'Misala oyo bakomi',
    );
  }

}
