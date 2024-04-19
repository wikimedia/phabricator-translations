<?php

final class PhabricatorOauthserverUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'OAuth Authorizations' => 'Авторизації OAuth',
      'Scope' => 'Область застосування',
      'OAuth Application Authorizations' => 'Авторизація додатків OAuth',
      'You haven\'t authorized any OAuth applications.' => 'Ви не авторизували жодної програми OAuth.',
      'You do not have access to OAuth authorizations.' => 'Ви не маєте доступу до авторизацій OAuth.',
    );
  }

}
