<?php

final class PhabricatorFilesIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'New alt text.' => 'Nova alt text.',
      '%s removed the alternate text for this file (was %s).' => '%s efacis l\'alternanta texto por ca arkivo (ol esis %s).',
      'Alt Text' => 'Alt Texto',
      'Custom Alt Text' => 'Custom Alt Text',
      '%s changed the alternate text for %s from %s to %s.' => '%s modifikis l\'alternanta texto por %s de %s a(d) %s.',
      'Failed to "json_decode(...)" JSON document after successfully decoding it with "phutil_json_decode(...).' => 'Failed to "json_decode(...)" JSON document after successfully decoding it with "phutil_json_decode(...).',
    );
  }

}
