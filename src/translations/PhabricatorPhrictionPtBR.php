<?php

final class PhabricatorPhrictionPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Edit Older Version %s...' => 'Editar versão mais antiga %s...',
      'Publish Draft' => 'Publicar esboço',
      'Other document activity not listed above occurs.' => 'Outra atividade de documento não listada acima ocorre.',
      'Version %d of %d: ' => 'Versão %s de %s:',
      'Phriction Document' => 'Documento da Phriction',
      'Save and Publish' => 'Salvar e publicar',
      '%s moved this document to %s.' => '%s moveu este documento para %s.',
      'Revert the published version of this document to an older version?' => 'Reverter a versão publicada deste documento para uma versão mais antiga?',
      'Version %d' => 'Versão %s',
      'Edit Phriction Document Configurations' => 'Editar configurações do documento phriction',
      'Content object "%s" can not be published because it belongs to a different document.' => 'O objeto de conteúdo "%s" não pode ser publicado porque pertence a um documento diferente.',
      'Edit Current Version %s...' => 'Editar versão atual %s...',
      'Wiki Documents' => 'Documentos Wiki',
      'Edit Draft Version %s...' => 'Editar versão de rascunho %s...',
      'You are viewing an unpublished draft of this document.' => 'Você está visualizando um rascunho não publicado deste documento.',
      '%s published a new version of %s.' => '%s publicou uma nova versão de %s.',
      'Publish Draft?' => 'Publicar esboço?',
      'Draft %d' => 'Rascunho %s',
      '%s moved %s to %s.' => '%s movimentou %s para %s.',
      'View Draft Version' => 'Visualizar versão de rascunho',
      'This document has unpublished draft changes.' => 'Este documento tem alterações de rascunho não publicadas.',
      '%s published a new version of this document.' => '%s publicou uma nova versão deste documento.',
      'You are viewing the current published version of this document.' => 'Você está vendo a versão atual publicada deste documento.',
      'Update the published version of this document to this newer version?' => 'Atualizar a versão publicada deste documento para esta versão mais recente?',
      'Publish Older Version?' => 'Publicar versão mais antiga?',
      'Save as Draft' => 'Salvar como esboço',
      'Publish Older Version' => 'Publicar uma versão mais antiga',
      'This engine is used to edit Phriction documents.' => 'Este mecanismo é usado para editar documentos da Phriction.',
      'Already Published' => 'Já publicado',
      'Unable to load Content object with PHID "%s".' => 'Não é possível carregar o objeto de conteúdo com o PHID "%s".',
      'You can not create a document which does not have a parent.' => 'Você não pode criar um documento que não tenha um mestre.',
    );
  }

}
