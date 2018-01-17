<?php

final class PhabricatorTypeaheadZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Typeahead' => 'Typeahead',
      'Reference: Advanced Functions' => '参考资料：高级函数',
      'Image URI' => '图片URI',
      'Select' => '选择',
      'This source is not usable directly.' => '此来源不可直接使用。',
      'Sprite' => '雪碧',
      'Function Quick Reference' => '函数快速参考',
      'Auto' => '自动',
      'Tokenization of "%s"' => '“%s”的令牌化',
      'Priority Type' => '优先级类型',
      'Using Typeahead Functions' => '使用Typeahead函数',
    );
  }

}
