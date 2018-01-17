<?php

final class PhabricatorSpacesZhhans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zhhans';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s更新了%s的空间描述。',
      'Spaces User Guide' => '空间用户指导',
      'Hide Active Spaces' => '隐藏激活空间',
      '%s archived space %s.' => '%s存档了空间%s。',
      'Activate Space: %s' => '激活空间：%s',
      'Support for Spaces' => '空间支持',
      'Create a Space' => '创建空间',
      'Alternate Space' => '备用空间',
      'Spaces must have a name.' => '空间必须有一个名称。',
      'Existing objects in this Space will be hidden from query results by default.' => '此空间中的现有对象将从查询结果中默认隐藏。',
      '%s archived this space.' => '%s存档了此空间。',
      'Archive Space' => '存档空间',
      'CHANGES TO SPACE DESCRIPTION' => '对空间描述的更改',
      'Spaces' => '空间',
      'Create Space' => '创建空间',
      'Policy Namespaces' => '方针名字空间',
      '%s activated space %s.' => '%s激活了空间%s。',
      '%s created this space.' => '%s创建了此空间。',
      'Space %s: %s' => '空间%s：%s',
      'No spaces found.' => '找不到空间。',
      'Edit Space' => '编辑空间',
      'Test Space' => '测试空间',
      '%s made space %s the default space.' => '%s将空间%s设置为默认空间。',
      'Activate Space' => '激活空间',
      'PhabricatorSpacesApplication' => 'Phabricator空间应用',
      'Show Only Active Spaces' => '只显示激活的空间',
      'Active Spaces' => '激活空间',
    );
  }

}
