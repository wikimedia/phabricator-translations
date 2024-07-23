<?php

final class PhabricatorPolicyDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'User Policies' => 'Qaideyê Karberi',
      'CAPABILITIES' => 'HUNERİ',
      'Other: %s' => 'Zewbi:%s',
      'Can View' => 'Aseneyeno',
      'Only User: %s' => 'Teyna karber:%s',
      'Advanced' => 'Raverşiyaye',
      'Deny' => 'Red kerê',
      'Special Rules' => 'Qaidey Bağsey',
      'Space:' => 'Vengiye:',
      'OBJECT' => 'NESNE',
      'Note:' => 'Note:',
      'Edit Policy' => 'Politikay vurnayışi',
      'is new' => 'Neweyo',
      'Require Login' => 'Ronıştış lazımo',
      '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
      'Members of Project: %s' => 'Ezay Proceyi:%s',
      'New space PHID.' => 'Cayo Newe PHID.',
    );
  }

}
