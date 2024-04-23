<?php

final class PhabricatorPhrequentZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => '现已工作',
      'Stop Time' => '停止时间',
      'Start Time' => '开始时间',
      'Stop Tracking Time' => '停止追踪时间',
      'Start Tracking Time' => '开始追踪时间',
      'Stop Tracking' => '停止追踪',
      'Tracked %s' => '已追踪%s',
      'Ended' => '已结束',
    );
  }

}
