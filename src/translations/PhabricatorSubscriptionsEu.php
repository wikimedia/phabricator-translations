<?php

final class PhabricatorSubscriptionsEu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eu';
  }

  protected function getTranslations() {
    return array(
      'You are automatically subscribed to this object.' => 'Objektu honetara automatikoki harpideturik zaude.',
      'Removed %s subscriber(s): %s.' => '%s harpidedun ezabatuak: %s',
    );
  }

}
