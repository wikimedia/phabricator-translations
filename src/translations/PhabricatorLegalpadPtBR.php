<?php

final class PhabricatorLegalpadPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'Todas as assinaturas',
      'No signatures match the query.' => 'Nenhuma assinatura corresponde à consulta.',
      'Signed Documents' => 'Documentos assinados',
      'DOCUMENT' => 'DOCUMENTO',
      'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'NOTA: Você só pode ver suas próprias assinaturas e assinaturas em documentos que você tem permissão para editar.',
      'Agreements and Signatures' => 'Acordos e assinaturas',
      'Sign Document' => 'Assinar documento',
    );
  }

}
