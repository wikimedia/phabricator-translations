<?php

final class PhabricatorFilesPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'New alt text.' => 'Novo texto alternativo.',
      'Preview (220px)' => 'Pré-visualização (220px)',
      'Alt Text' => 'Texto alternativo',
      'Upload a File' => 'Enviar um arquivo',
      'Temporary' => 'Temporário',
      'Choose Icon' => 'Escolher ícone',
      'Unable to upload file: this server is not configured with any storage engine which can store large files.' => 'Não é possível fazer o carregamento do arquivo: esse servidor não está configurado com nenhum mecanismo de armazenamento que possa armazenar arquivos grandes.',
      'tasks' => 'tarefas',
      'Choose Icon...' => 'Escolher ícone...',
      'Not Applicable' => 'Não aplicável',
      'File was only partially transferred, upload did not complete.' => 'O arquivo foi transferido apenas parcialmente, o upload não foi concluído.',
      'Failed!' => 'Falhou!',
      'Store and Share Files' => 'Armazenar e compartilhar arquivos',
      'Prepare to upload a file.' => 'Prepare-se para carregar um arquivo.',
      'File alternate text must not be longer than %s character(s).' => 'O texto alternativo do arquivo não deve ter mais de %s caracteres.',
      'Drop Files to Upload' => 'Solte arquivos para enviar',
      'View as Remarkup' => 'Visualizar como remarcação',
      'Upload a file to the server.' => 'Carregue um arquivo para o servidor.',
      'language' => 'Idioma',
      'Unable to upload file: this file is too large for any configured storage engine.' => 'Não é possível fazer o carregamento do arquivo: esse arquivo é muito grande para qualquer mecanismo de armazenamento configurado.',
    );
  }

}
