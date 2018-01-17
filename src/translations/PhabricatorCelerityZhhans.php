<?php

final class PhabricatorCelerityZhhans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zhhans';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => '使用标准颜色',
      'No resource source exists with name "%s"!' => '不存在名称为“%s”的资源来源！',
      'Unable to render resource "%s", which has unknown type "%s".' => '无法渲染资源“%s”，它拥有未知类型“%s”。',
      'Writing map "%s".' => '正在写入地图“%s”。',
      'Use High Contrast Colors' => '使用高对比度颜色',
      'Dark Mode (Experimental)' => '黑暗模式（实验）',
      'Use Larger Font Size' => '使用更大的字体大小',
      'Found %d binary resources.' => '找到%s个二进制资源。',
      'No resource with symbol "%s" exists in source "%s"!' => '在来源“%2$s”中不存在符号为“%1$s”的资源！',
      'Celerity' => '敏捷',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => '用于“%s”的包规格包括“%s”，但符号不会由任何资源%s。',
      'Attempting to resolve unknown resource, "%s".' => '尝试解决未知资源，“%s”。',
      'Rebuilt "%s" syntax CSS.' => '重组“%s”语法CSS。',
      'CSS file \'%s\' has unknown variable \'%s\'.' => 'CSS文件“%s”有未知变量“%s”。',
      'Literal %s is not allowed inside inline script.' => '逐字%s在行内脚本中不允许。',
      'Binary' => '二进制',
      'Use Red/Green (Deuteranopia) Colors' => '使用红/绿（绿色盲）颜色',
      'Resource "%s" must %s at most one Celerity target.' => '资源“%s”必须%s至少一个敏捷目标。',
      'Cycle detected in resource graph: %s' => '在资源图表中检测到循环：%s',
      'Rebuild syntax highlighting CSS.' => '重组语法高亮CSS',
      'Found %d text resources.' => '找到%s个文本资源。',
      'Found %d packages.' => '找到%s个包。',
    );
  }

}
