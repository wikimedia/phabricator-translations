<?php

final class PhabricatorMetamtaSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'ID: %d' => 'ID: %s',
      'Error Processing Mail (%s)' => 'Napaka pri obdelavi pošte (%s)',
      'Content Redacted' => 'Vsebina skrita',
      'Unhandled Exception' => 'Neobravnavana izjema',
      'Outbox' => 'Poslana pošta',
      'Emails' => 'E-poštni naslovi',
      'TEXT BODY' => 'TELO BESEDILA',
      'Status: %s' => 'Stanje: %s',
      'Load balancing between two mail servers did not select both servers after an absurd number of attempts.' => 'Izravnavanje obremenitve med dvema poštnima strežnikoma ni izbralo obeh strežnikov po absurdnem številu poskusov.',
      'PROPERTIES' => 'LASTNOSTI',
      'Exception raised by: %s' => 'Izjema zaradi: %s',
      'Request failed with errors: %s.' => 'Zahtevek je spodletel z napakami: %s.',
      'Unhandled Exception: %s' => 'Neobravnavana izjema: %s',
      'Disabled Recipient' => 'Prejemnik onemogočen',
      'No Public Mail' => 'Brez javne pošte',
      'Reasons' => 'Razlogi',
      'Processing Exception' => 'Izjema pri obdelavi',
      'Delivery reasons are listed from weakest to strongest.' => 'Razlogi za dostavo so navedeni od najšibkejšega do najmočnejšega.',
      'Disabled Sender' => 'Pošiljatelj onemogočen',
      'Text Body Truncated' => 'Telo besedila porezano',
    );
  }

}
