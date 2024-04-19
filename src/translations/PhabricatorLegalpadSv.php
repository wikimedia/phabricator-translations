<?php

final class PhabricatorLegalpadSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      '%s updated the document signature type.' => '%s uppdaterade dokumentets signaturtyp.',
      'This document has an unknown signature type ("%s").' => 'Detta dokument har en okänd signaturtyp ("%s").',
      'DOCUMENT' => 'DOKUMENT',
      '%s updated the document signature type for %s.' => '%s uppdaterade dokumentets signaturtyp för %s.',
      'Sign Document' => 'Signera dokument',
    );
  }

}
