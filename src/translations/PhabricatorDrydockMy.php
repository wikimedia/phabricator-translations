<?php

final class PhabricatorDrydockMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Resource' => 'အရင်းအမြစ်',
      'Show Details' => 'အသေးစိတ် ပြရန်',
      'Resource type.' => 'အရင်းအမြစ် အမျိုးအစား',
      'Resource %d: %s' => 'အရင်းအမြစ် %s:%s',
      'Resource %d' => 'အရင်းအမြစ် %s',
      'Resource Type' => 'အရင်းအမြစ် အမျိုးအစား',
      'Via:' => 'မှတဆင့်:',
      'All Resources' => 'အရင်းအမြစ် အားလုံး',
      'No Resource' => 'အရင်းအမြစ် မရှိပါ',
    );
  }

}
