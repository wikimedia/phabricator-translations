<?php

final class PhabricatorPhortuneHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'No purchase history.' => 'Nincs vásárlási történet.',
      'Choose a Merchant' => 'Kereskedő kiválasztása',
      'Add Address' => 'Cím hozzáadása',
      'New email address.' => 'Új e-mail-cím.',
      'Email address.' => 'E-mail cím.',
      'Payments' => 'Kifizetések',
      'Stop Autopay' => 'Automatikus fizetés leállítása',
      '%s changed the status for this address to %s.' => '%s megváltoztatta a cím állapotát erre: %s.',
      '[Invoice #%d] %s' => '[Számla #%s] %s',
      'Unsubscribed' => 'Leiratkozva',
      'Order Status' => 'Rendelés állapota',
      'Contact Information' => 'Elérhetőség',
      '[Order #%d] %s' => '[Rendelés #%s] %s',
      'New Managers' => 'Új menedzserek',
      'Access Key' => 'Hozzáférési kulcs',
      'Add Email Address' => 'E-mail cím hozzáadása',
      'Receipts' => 'Számlák',
      'Choose a Payment Method' => 'Fizetési mód kiválasztása',
      'UNSUBSCRIBE' => 'LEIRATKOZÁS',
      'Subscription Details' => 'Feliratkozás részletei',
    );
  }

}
