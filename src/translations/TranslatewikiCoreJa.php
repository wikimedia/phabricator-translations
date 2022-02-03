<?php

final class TranslatewikiCoreJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '翻訳をエクスポートするライブラリへのパスを提供します。',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => '認識できない"%%"パターンを持つ文字列を抽出できませんでした、"%s"： %s。',
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
      'Read %s string(s).' => '%s の文字列を読み込みます。',
      'Class name to generate.' => '生成するクラス名。',
      'Frequency Data' => '頻度データ',
      'Provide a JSON source file with "--source".' => 'JSONソースファイルに"--source"を指定します。',
      'Generate a Phabricator translation classfile.' => 'Phabricatorの翻訳Classファイルを生成します。',
      'JSON source file containing translation strings.' => '翻訳文字列を含むJSONソースファイル。',
      'Export translation strings from a libphutil library.' => 'libphutilライブラリから翻訳文字列をエクスポートします。',
      'Writing data (%s, %s) to "%s"...' => 'データ（%s, %s）を「%s」に書き込みます…',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'ファイル 「%s」を生成するためのライブラリ文字列の抽出が必要ですが、そのようなファイルは存在しません！',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'エクスポートされるプロジェクトの名前。エクスポートされたファイルは、この名前を使って "projects/"に書き込まれます。',
      'Used in:' => '使用箇所:',
      'English strings' => '英語の文字列',
      'Context strings' => 'コンテキスト文字列',
      'Provide a project name with "--project".' => '"--project"でプロジェクト名を指定します。',
      'Variable Types: %s.' => '変数の型: %s。',
      'Provide an output file with "--out".' => '"--out"で出力ファイルを指定します。',
      'Base URI for browsing files in the project being exported.' => 'エクスポートされるプロジェクト内のファイルを参照するためのベースURI。',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => '文字列を抽出する前にキャッシュを削除し、完全に再構築を行うために、基礎となる抽出器に --clean を渡します。遅い!',
      'Done.' => '完了。',
      'Location to write the generated translation file.' => '生成された翻訳ファイルを書き込む場所です。',
      'PLURAL' => '複数',
    );
  }

}
