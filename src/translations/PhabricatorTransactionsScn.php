<?php

final class PhabricatorTransactionsScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      '%s added a comment.' => '%s agghiuncìu nu cummentu.',
      'Empty Comment' => 'Cummentu vacanti',
      'Email Body Text' => 'Testu dû corpu di l\'email',
      '✘ Hidden' => '✘ Ammucciatu',
      'No MFA' => 'Nuddu MFA',
      'Forms' => 'Furmi',
      'EMAIL PREFERENCES' => 'PRIFIRENZI EMAIL',
      'Comment Preview' => 'Antiprima dû cummentu',
      'EDIT DETAILS' => 'CANCIA LI DITTAGGHÎ',
      '(Show Details)' => '(Ammustra li dittagghî)',
      'Edit Comment' => 'Cancia cummentu',
      'Add Action...' => 'Aggghiunci azzioni...',
      '!%s (or %s)' => '!%s (o %s)',
      '%s ("%s")' => '%s ("%s")',
    );
  }

}
