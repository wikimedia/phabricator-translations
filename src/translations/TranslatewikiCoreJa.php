<?php

final class TranslatewikiCoreJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '翻訳をエクスポートするライブラリへのパスを提供します。',
      'Provide a locale code with "--locale".' => 'ロケールコードに"--locale"を指定します。',
      'Ignoring string "%s"; not present in translation source file.' => '文字列「%s」を無視します。翻訳ソースファイルには存在しません。',
      'Provide the path to exactly one library to export translations from.' => '翻訳をエクスポートするための1つのライブラリへのパスを提供します。',
      'Name of the project that a translation file is being generated for.' => '翻訳ファイルが生成されているプロジェクトの名前。',
      'Class name to generate.' => '生成するクラス名。',
      'Provide a JSON source file with "--source".' => 'JSONソースファイルに"--source"を指定します。',
      'JSON source file containing translation strings.' => '翻訳文字列を含むJSONソースファイル。',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'ファイル 「%s」を生成するためのライブラリ文字列の抽出が必要ですが、そのようなファイルは存在しません！',
      'Base URI for browsing files in the project being exported.' => 'エクスポートされるプロジェクト内のファイルを参照するためのベースURI。',
      'Done.' => '完了。',
      'PLURAL' => '複数',
    );
  }

}
