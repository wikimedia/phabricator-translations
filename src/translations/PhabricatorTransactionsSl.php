<?php

final class PhabricatorTransactionsSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Empty Comment' => 'Prazen komentar',
      'Email Body Text' => 'Besedilo telesa e-pošte',
      'Form Disabled' => 'Obrazec onemogočen',
      'Export format.' => 'Format izvoza.',
      'Validation Errors' => 'Napake validacije',
      'Specify an export format with "--format".' => 'Določite format izvoza z »--format«.',
      'Enable Form' => 'Omogoči obrazec',
      'Create Forms' => 'Ustvari obrazce',
      'New object subtype key.' => 'Nov ključ podtipa objekta.',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'Izhodna pot že obstaja. Uporabite »--overwrite«, da jo prepišete.',
      'Mark Form' => 'Označi obrazec',
      'Form Order' => 'Vrstni red obrazca',
      'Changed Policy' => 'Pravilnik spremenjen',
      'Post Comment' => 'Objavi komentar',
      'Changed Subscribers' => 'Naročniki spremenjeni',
      'Raw Comment' => 'Neobdelani komentar',
      'Comment History' => 'Zgodovina komentarja',
      'Comment Preview' => 'Predogled komentarja',
      'Validation errors:' => 'Napake pri preverjanju:',
      'If the output file already exists, overwrite it instead of raising an error.' => 'Če izhodna datoteka že obstaja, jo prepiši namesto sporočtve napake.',
      'Edit Comment' => 'Uredi komentar',
      'Remove Comment' => 'Odstrani komentar',
      'Flag "--overwrite" has no effect when outputting to stdout.' => 'Zastavica »--overwrite« nima učinka pri izpisu v stdout.',
      'This is a preview of the current form configuration.' => 'To je predogled trenutne konfiguracije obrazca.',
      'Form Preview' => 'Predogled obrazca',
    );
  }

}
