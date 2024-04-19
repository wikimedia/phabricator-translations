<?php

final class PhabricatorPonderMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Create New Question' => 'မေးခွန်းအသစ် ဖန်တီးရန်',
      'Answer Summary' => 'အဖြေ အကျဉ်းချုပ်',
      'Ask a Question' => 'မေးခွန်းတစ်ခု မေးရန်',
      'Ask Question' => 'မေးခွန်းမေးရန်',
      'New Question' => 'မေးခွန်းအသစ်',
      'Add Answer' => 'အဖြေ ထည့်ပေါင်းရန်',
    );
  }

}
