<?php

final class PhabricatorLegalpadZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => '所有签名',
      'Unverified Email' => '未确认的电子邮件',
      'Create New Document' => '创建新文档',
      'Type of signature required' => '需要签名类型',
      'Signed At' => '签署于',
      'Signature Type' => '签名类型',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => '感谢您签署此文档。请检查您的电子邮件以验证您的签名并完成过程。',
    );
  }

}
