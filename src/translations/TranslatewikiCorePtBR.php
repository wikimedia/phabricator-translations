<?php

final class TranslatewikiCorePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Forneça o caminho para uma biblioteca para exportar traduções de.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Não foi possível extrair a string com o padrão "%%" não reconhecido, "%s": %s.',
      'NONE' => 'NENHUM',
      'Provide a locale code with "--locale".' => 'Forneça um código de localidade com "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignorando a string "%s"; não está presente no arquivo de origem da tradução.',
      'Provide the path to exactly one library to export translations from.' => 'Forneça o caminho para exatamente uma biblioteca para exportar as traduções.',
      'Provide a project name to export strings under with "--as".' => 'Forneça um nome de projeto para exportar sequências de caracteres com "--as".',
      'Raw strings' => 'Cordas cruas',
      'Name of the project that a translation file is being generated for.' => 'Nome do projeto para o qual um arquivo de tradução está sendo gerado.',
      'Extracting library strings...' => 'Extraindo cadeias de bibliotecas...',
      'GENDER' => 'GÊNERO',
      'Locale code for the generated source.' => 'Código de local para a origem gerada.',
      'Provide a classname with "--class".' => 'Forneça um nome de classe com "--class".',
      'Read %s string(s).' => 'Lê %s texto(s).',
      'Class name to generate.' => 'Nome da classe para gerar.',
      'Frequency Data' => 'Dados de frequência',
      'Provide a JSON source file with "--source".' => 'Forneça um arquivo de origem JSON com "--source".',
      'Generate a Phabricator translation classfile.' => 'Gere um classfile de tradução do Phabricator.',
      'JSON source file containing translation strings.' => 'Arquivo de origem JSON contendo cadeias de caracteres de tradução.',
      'Export translation strings from a libphutil library.' => 'Exportar sequências de tradução de uma biblioteca libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Escrevendo dados (%s, %s) para "%s" ...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Esperada extração de seqüência de caracteres da biblioteca para gerar o arquivo "%s", mas esse arquivo não existe!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Nome do projeto sendo exportado. Os arquivos exportados serão gravados em "projects/" usando esse nome.',
      'Used in:' => 'Usado em:',
      'English strings' => 'Textos inglês',
      'Context strings' => 'Sequências de contexto',
      'Provide a project name with "--project".' => 'Forneça um nome de projeto com "--project".',
      'Variable Types: %s.' => 'Tipos de variáveis: %s.',
      'Provide an output file with "--out".' => 'Fornecer um arquivo de saída com "--out".',
      'Base URI for browsing files in the project being exported.' => 'URI base para pesquisar arquivos no projeto que está sendo exportado.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Passe --clean para o extrator subjacente para descartar caches antes de extrair strings e fazer uma reconstrução limpa completa. Lento!',
      'Done.' => 'Feito.',
      'Location to write the generated translation file.' => 'Local para gravar o arquivo de tradução gerado.',
      'PLURAL' => 'PLURAL',
    );
  }

}
