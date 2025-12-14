<?php
final class TranslateWikiInternalEnUSTranslation
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_US';
  }

  public function getTranslations() {
    return array(
      'Read %s string(s).' => array(
        'Read %s string.',
        'Read %s strings.'
      ),
    );
  }
}