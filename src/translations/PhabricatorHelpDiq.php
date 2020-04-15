<?php

final class PhabricatorHelpDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Neya piya diyaloga pêroyın racınê',
      'Unsupported Editor Protocol' => 'Protokolê editoriyo ke desteg nêvêniyeno',
      'Change Settings' => 'Eyaran bıvurne',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Konfigure editore şıma URI, pheşti nêdeyaye yew protokol karneno. Desteg deyaye yew protokoli karnayışi rê eyaranê ho bıvurnê ya zi xızmetkarê ho ra protokolê cêrêni Konfigure kerdışa cıkerdışi bıwazê : %s',
      '%s Help' => '%s Peşti',
      'Keyboard Shortcuts' => 'Rayakılma klavyey',
    );
  }

}
