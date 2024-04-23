<?php

final class PhabricatorPhortuneSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'All Subscriptions' => 'Alla prenumerationer',
      'Invoice From' => 'Faktura från',
      'Subscriptions for %s' => 'Prenumerationer för %s',
      'Subscription' => 'Prenumeration',
      'SUBSCRIPTION' => 'PRENUMERATION',
      'There was a technical error while trying to automatically bill this subscription: %s' => 'Ett tekniskt fel uppstod när denna prenumeration skulle faktureras automatiskt: %s',
      'Your Subscriptions' => 'Dina prenumerationer',
      'Return to Subscription' => 'Tillbaka till prenumeration',
      'View All Invoices' => 'Visa alla fakturor',
    );
  }

}
