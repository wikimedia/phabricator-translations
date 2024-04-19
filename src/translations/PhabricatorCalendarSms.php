<?php

final class PhabricatorCalendarSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'ICS File' => 'ICS-teâttõs',
      '.ics File' => '.ics-teâttõs',
      'Deleted Event' => 'Jaukkuum šõddmõš',
      'Create New Event' => 'Raaj ođđ šõddmõõžž',
      'Accept' => 'Priim',
      'Start date and time of the event.' => 'Šõddmõõžž äʹlǧǧempeiʹvv da -äiʹǧǧ',
      'Source File' => 'Käivvteâttõs',
      'Start date is invalid.' => 'Äʹlǧǧempeiʹvv lij vââǥǥlaž.',
    );
  }

}
