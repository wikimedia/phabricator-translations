<?php

final class TranslatewikiCoreZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '提供至库的路径以导出翻译。',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => '无法提取带有不被认可的“%%”模式字符串，“%s”：%s。',
      'NONE' => '无',
      'Provide a locale code with "--locale".' => '提供语言环境代码，格式：“--语言环境”。',
      'Ignoring string "%s"; not present in translation source file.' => '已忽略字符串“%s”；未在翻译来源文件中提供。',
      'Provide the path to exactly one library to export translations from.' => '准确提供至一个要导出翻译自的库路径。',
      'Provide a project name to export strings under with "--as".' => '提供项目名称，以导出带“--as”的字符串。',
      'Raw strings' => '原始字符串',
      'Name of the project that a translation file is being generated for.' => '正在生成翻译文件的项目名称。',
      'Extracting library strings...' => '正在提取库字符串...',
      'GENDER' => '性别',
      'Locale code for the generated source.' => '用于生成源代码的区域代码。',
      'Provide a classname with "--class".' => '提供带有“--class”的类名。',
      'Read %s string(s).' => '读取%s个字符串。',
      'Class name to generate.' => '要生成的类名。',
      'Frequency Data' => '频率数据',
      'Provide a JSON source file with "--source".' => '提供JSON来源文件，格式：“--来源”。',
      'Generate a Phabricator translation classfile.' => '生成Phabricator翻译类文件。',
      'JSON source file containing translation strings.' => 'JSON源文件包含翻译字符串。',
      'Export translation strings from a libphutil library.' => '从libphutil库导出翻译字符串。',
      'Writing data (%s, %s) to "%s"...' => '正在写入数据（%s，%s）至“%s”...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => '库字符串提取应生成文件“%s”，但这个文件并未存在！',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => '正在导出的项目名称。导出文件将使用此名称写入至“projects/”。',
      'Used in:' => '用于：',
      'English strings' => '英语字符串',
      'Context strings' => '环境字符串',
      'Provide a project name with "--project".' => '提供一个带有“--project”的项目名称。',
      'Variable Types: %s.' => '变量类型：%s。',
      'Provide an output file with "--out".' => '提供带“--out”的输出文件。',
      'Base URI for browsing files in the project being exported.' => '用于在项目导出时浏览文件的基本URI。',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => '传递--清空至潜在的提取器以在提取字符串之前放弃缓存，并进行完整的清空重建。过程较慢！',
      'Done.' => '完成。',
      'Location to write the generated translation file.' => '写入生成的翻译文件的位置。',
      'PLURAL' => '复数',
    );
  }

}
