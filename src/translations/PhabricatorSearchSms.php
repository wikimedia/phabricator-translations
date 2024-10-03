<?php

final class PhabricatorSearchSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'Ij käunnʼjam ni mii.',
      'Query: %s' => 'Kõjldõs: %s',
      'Query Name' => 'Kõjldõõzz nõmm',
      'Edit Saved Query' => 'Muuʹtt ruõʹǩǩum kõjldõõzz',
      'Delete Query' => 'Haaʹlääk-a kõjldõõzz jaukkeed?',
      'Attachments' => 'Meâlddõõzz',
      'Project Menu' => 'Projeʹkttvaʹlljõk',
      'Save Query' => 'Ruõkk kõjldõõzz',
      'SELECT' => 'VAʹLLJED',
      'NOTE' => 'HOʹHSS',
      'Saved Queries' => 'Ruõkkum kõjldõõzz',
      'Link' => 'Liŋkk',
      'Edit Queries...' => 'Muuʹtt ooccâmkõjldõõzzid...',
    );
  }

}
