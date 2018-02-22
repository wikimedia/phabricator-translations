<?php

final class PhabricatorTokensZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Goat' => '山羊',
      'Grey Medal' => '灰色勋章',
      'Rescind Token' => '撤除令牌',
      'Love' => '爱',
      'Query tokens.' => '查询令牌。',
      'Token flavor.' => '令牌风味。',
      '%s awarded %s a %s token.' => '%s为%s授予%s令牌。',
      'Barnstar' => '星章',
      'Award "%s" Token' => '授予“%s”令牌',
      'Give or change a token.' => '提供或更改一个令牌。',
      'Tokens Given' => '提供的令牌',
      'Baby Tequila' => '小龙舌兰',
      'Cookie' => 'Cookie',
      'Pirate Logo' => '海盗标志',
      'Pterodactyl' => '翼手龙',
    );
  }

}
