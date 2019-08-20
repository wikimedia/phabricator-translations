<?php

final class PhabricatorHelpFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Fermer tous les dialogues, celui-ci inclus.',
      'Unsupported Editor Protocol' => 'Protocole d\'édition non supporté',
      'Change Settings' => 'Modifier les paramètres',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Votre éditeur d\'URI configuré utilise un protocole non pris en charge. Modifiez vos paramètres pour utiliser un protocole supporté, ou demandez à votre administrateur d\'ajouter la prise en charge du protocole choisi en configurant: %s',
      '%s Help' => 'Aide %s',
      'Keyboard Shortcuts' => 'Raccourcis clavier',
    );
  }

}
