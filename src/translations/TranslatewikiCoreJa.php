<?php

final class TranslatewikiCoreJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '翻訳をエクスポートするライブラリへのパスを提供します。',
      'NONE' => 'なし',
      'Provide a locale code with "--locale".' => 'ロケールコードに"--locale"を指定します。',
      'Ignoring string "%s"; not present in translation source file.' => '文字列「%s」を無視します。翻訳ソースファイルには存在しません。',
      'Provide the path to exactly one library to export translations from.' => '翻訳をエクスポートするための1つのライブラリへのパスを提供します。',
      'Provide a project name to export strings under with "--as".' => '文字列をエクスポートするプロジェクト名を"--as"で指定します。',
      'Raw strings' => '生の文字列',
      'Name of the project that a translation file is being generated for.' => '翻訳ファイルが生成されているプロジェクトの名前。',
      'Extracting library strings...' => 'ライブラリの文字列を抽出する…',
      'GENDER' => '性别',
      'Locale code for the generated source.' => '生成されたソースのロケールコード。',
      'Provide a classname with "--class".' => '"--class"でクラス名を指定します。',
      'Class name to generate.' => '生成するクラス名。',
      'Provide a JSON source file with "--source".' => 'JSONソースファイルに"--source"を指定します。',
      'JSON source file containing translation strings.' => '翻訳文字列を含むJSONソースファイル。',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'ファイル 「%s」を生成するためのライブラリ文字列の抽出が必要ですが、そのようなファイルは存在しません！',
      'Used in:' => '使用箇所:',
      'English strings' => '英語の文字列',
      'Variable Types: %s.' => '変数の型: %s。',
      'Base URI for browsing files in the project being exported.' => 'エクスポートされるプロジェクト内のファイルを参照するためのベースURI。',
      'Done.' => '完了。',
      'PLURAL' => '複数',
    );
  }

}
