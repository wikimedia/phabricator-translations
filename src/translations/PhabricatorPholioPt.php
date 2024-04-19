<?php

final class PhabricatorPholioPt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt';
  }

  protected function getTranslations() {
    return array(
      'Uploading Image...' => 'A Carregar Imagem...',
      'Upload Complete...' => 'Carregamento Terminado...',
    );
  }

}
