<?php

final class PhabricatorLegalpadMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'လက်မှတ်များအားလုံး',
      'Unverified Email' => 'အတည်မပြုထာသော အီးမေးလ်',
      'Signature Type' => 'လက်မှတ်အမျိုးအစား',
      'Contact Email' => 'ဆက်သွယ်ရန် အီးမေးလ်',
      'Notes' => 'မှတ်စုများ',
    );
  }

}
