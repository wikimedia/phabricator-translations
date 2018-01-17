<?php

final class TranslatewikiCoreZhhans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zhhans';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '提供至库的路径以导出翻译。',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => '无法提取带有不被认可的“%%”模式字符串，“%s”：%s。',
      'NONE' => '无',
      'Provide a locale code with "--locale".' => '提供语言环境代码，格式：“--语言环境”。',
      'Ignoring string "%s"; not present in translation source file.' => '已忽略字符串“%s”；未在翻译来源文件中提供。',
      'Raw strings' => '原始字符串',
      'Extracting library strings...' => '正在提取库字符串...',
      'GENDER' => '性别',
      'Read %s string(s).' => '读取%s个字符串。',
      'Class name to generate.' => '要生成的类名。',
      'Frequency Data' => '频率数据',
      'Provide a JSON source file with "--source".' => '提供JSON来源文件，格式：“--来源”。',
      'Generate a Phabricator translation classfile.' => '生成Phabricator翻译类文件。',
      'JSON source file containing translation strings.' => 'JSON源文件包含翻译字符串。',
      'Export translation strings from a libphutil library.' => '从libphutil库导出翻译字符串。',
      'Writing data (%s, %s) to "%s"...' => '正在写入数据（%s，%s）至“%s”...',
      'Used in:' => '用于：',
      'English strings' => '英语字符串',
      'Context strings' => '环境字符串',
      'Variable Types: %s.' => '变量类型：%s。',
      'Provide an output file with "--out".' => '提供带“--out”的输出文件。',
      'Done.' => '完成。',
      'Location to write the generated translation file.' => '写入生成的翻译文件的位置。',
      'PLURAL' => '复数',
    );
  }

}
