<?php

final class ArcanistCoreIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Interuptita pro falio en la sendo di arkivo. Vu povas uzar %s por ne facar binara sendaji.',
      'Ref "%s" does not exist in remote "%s".' => 'Refero "%s" ne existas en remota "%s".',
      'This working copy is associated with the %s repository.' => 'Ca funcionanta kopiuro esas asociita kun receveyo %s.',
      '"%s" (%s)' => '"%s" (%s)',
      'Saved "%s" as "%s".' => '"%s" konservita kom "%s".',
      '(This message was raised at line %s, but the file only has %s line(s).)' => '(Ca mesajo aparis che lineo %s, tamen l\'arkivo nur havas %s lineo/linei.)',
      'Not parsing!' => 'Ne facas \'\'parsing\'\'!',
      'Portuguese (Portugal)' => 'Portugalana (Portugal)',
      'File Symbol "%s"' => 'Simbolo dil arkivo "%s"',
      'CC: %s' => 'CC: %s',
      'Failed to write file data.' => 'Ne povis enrejistrar dati pri l\'arkivo.',
      'English (Pirate)' => 'Angla (pirato)',
      'Inline HTML' => 'HTML en singla lineo',
      'Remote Repository' => 'Arkiveyo remota',
      'No tests to run.' => 'Nula probi por exekutar.',
      'Expected JSON response from Slack.' => 'Expektis ke Slack sendis JSON-arkivo.',
      'NOTHING TO LAND' => 'NULU POR TEROVENAR',
      'Modified' => 'Modifikita',
      'Revision %s' => 'Revizuro %s',
      'TO INSTALL: %s' => 'POR INSTALAR: %s',
      'Version' => 'Versiono',
      'Class' => 'Klaso',
      '<default>' => '<default>',
      'Aug' => 'ago',
      'Title' => 'Titulo',
      'NOTE' => 'NOTO',
      'Done.' => 'Facita.',
      'DONE' => 'FACITA',
      'PREVIEW' => 'PREVIDAR',
    );
  }

}
