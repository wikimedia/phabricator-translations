<?php

final class PhabricatorRemarkupPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Mecanismo de marcação inválido.',
      'Process text through remarkup.' => 'Processar texto através de observação no contexto do Phabricator.',
      'Content may not be empty.' => 'O conteúdo pode não estar vazio.',
    );
  }

}
