<?php

final class PhabricatorPolicyDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'No One Policy' => 'Qet qaide çıniyo',
      'User Policies' => 'Qaideyê Karberi',
      'CAPABILITIES' => 'HUNERİ',
      'No Extended Policy' => 'Herabiyaye qaidey çıniyê',
      'Other: %s' => 'Zewbi:%s',
      'Can View' => 'Aseneyeno',
      'Only User: %s' => 'Teyna karber:%s',
      'Limits work.' => 'Limiti guriyenê',
      'Admin Policy' => 'Politikay Admini',
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
      'Invalid Policy' => 'Politikay Xırab',
      'Members of Project: %s' => 'Ezay Proceyi:%s',
      'New space PHID.' => 'Cayo Newe PHID.',
    );
  }

}
