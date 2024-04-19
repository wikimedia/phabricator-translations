<?php

final class PhabricatorConsolePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Profile Page' => 'Página de perfil',
      'Whole Table' => 'Tabela inteira',
      'Small Table Scan' => 'Varredura de tabela pequena',
      'TABLE SCAN!' => 'VARREDURA DE TABELA!',
      'No Tables' => 'Sem tabelas',
    );
  }

}
