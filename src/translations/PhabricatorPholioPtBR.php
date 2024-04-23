<?php

final class PhabricatorPholioPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Edit Mock: %s' => 'Editar Mock: %s',
      'View Mock' => 'Ver Mock',
      'Review Mocks and Design' => 'Rever Mocks e Design',
      'Close Mock' => 'Fechar Mock',
      'Open Mocks' => 'Mocks abertos',
      'Image ("%s") does not specify which image it replaces.' => 'Imagem ("%s") não especifica qual imagem ela substitui.',
      'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => 'Imagem ("%s") pertence ao objeto errado ("%s", esperado "%s").',
      'You can not query for inline comments without also querying for images.' => 'Você não pode consultar comentários in-line sem consultar as imagens.',
      'Create Mock' => 'Criar Mock',
      'Click here, or drag and drop images to add them to the mock.' => 'Clique aqui ou arraste e solte as imagens para adicioná-las à mock.',
      'Upload Complete...' => 'Carregamento completo...',
      '[Pholio]' => '[Pholio]',
      'Mock History' => 'Histórico do Mock',
      'No image exists with PHID "%s".' => 'Nenhuma imagem existe com PHID "%s".',
      'Unknown (ID %d)' => 'Desconhecido (ID %s)',
      'Edit Mock' => 'Editar Mock',
      'Image "%s":' => 'Imagem "%s":',
      'Unable to load replacement image ("%s"): %s' => 'Não é possível carregar a imagem de substituição ("%s"): %s',
      'Unable to load replaced image ("%s"): %s' => 'Não é possível carregar a imagem substituída ("%s"): %s',
      'Create a Mock' => 'Criar Mock',
    );
  }

}
