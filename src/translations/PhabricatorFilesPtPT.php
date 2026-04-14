<?php

final class PhabricatorFilesPtPT
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_PT';
  }

  protected function getTranslations() {
    return array(
  'No file was uploaded.' => 'Não foi carregado nenhum ficheiro.',
  'Upload a File' => 'Carregar um Ficheiro',
  'Partial Upload' => 'Carregamento Parcial',
  'You must choose a file to upload.' => 'Tem de escolher um ficheiro para carregar.',
  'Download file %s (%s)?' => 'Transferir o ficheiro %s (%s)?',
  'Upload' => 'Carregar',
  'Hide Manually Uploaded Files' => 'Ocultar Ficheiros Carregados Manualmente',
  'Download a file from the server.' => 'Transferir um ficheiro do servidor.',
  'No file was uploaded!' => 'Não foi carregado nenhum ficheiro!',
  'Upload Source' => 'Fonte do Carregamento',
  'Download URI for the file data.' => 'URI de transferência para os dados do ficheiro.',
  'Uploaded on %s' => 'Carregado a %s',
  'Uploaded by %s on %s' => 'Carregado por %s a %s',
);
  }

}
