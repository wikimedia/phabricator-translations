<?php

final class PhabricatorextCoreZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Skip OFFSET rows before processing the remaining transactions.' => '在处理完其他事务之前跳过OFFSET行。',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**MediaWiki实例名称**
    为此MediaWiki实例选择一个永久的名称。Phabricator在内部使用此名称以跟踪此MediaWiki实例，以防之后的URL更改。
    使用小写字母、数字和句点。例如：
    `mediawiki`、`mediawiki.mycompany`或者`mediawiki.engineering`都是合理的名称。',
    );
  }

}
