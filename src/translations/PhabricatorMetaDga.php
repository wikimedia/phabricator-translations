<?php

final class PhabricatorMetaDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Completely Break Everything' => 'Ŋmare a boma zaa kpɛllɛm',
      'To manage prototypes, enable them by setting %s in your configuration.' => 'Naŋ maale toŋ neŋ poroto-parɛɛ, yuo a ayi sɛɛte %s a konfigere poɔŋ',
      'This application is required and cannot be uninstalled.' => 'A apulikasi nyɛ la boɔbo kuɛ ba boɔrɔ bimmo',
      'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'A tonton bone ba tu a maaloo sori.Fo tõɔ kpɛ a boma mine daga see ka ba maale inborn mail',
    );
  }

}
