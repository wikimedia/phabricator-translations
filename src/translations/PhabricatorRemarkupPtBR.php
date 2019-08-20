<?php

final class PhabricatorRemarkupPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Processar texto através de observação no contexto do Phabricator.',
      'Invalid markup engine.' => 'Mecanismo de marcação inválido.',
      'Content may not be empty.' => 'O conteúdo pode não estar vazio.',
    );
  }

}
