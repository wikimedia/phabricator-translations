<?php

final class PhabricatorDashboardPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'No dashboards found.' => 'Nenhum painel encontrado.',
      'Dashboards' => 'Painel',
      'Edit Dashboard' => 'Editar painel',
      'Archive Dashboard' => 'Arquivar painel',
      'Create Custom Pages' => 'Crie páginas personalizadas',
      'No panels found.' => 'Nenhum painel encontrado.',
      'Active Panels' => 'Painéis ativos',
      'Archived Panels' => 'Painéis arquivados',
      'Active Dashboards' => 'Painéis ativos',
    );
  }

}
