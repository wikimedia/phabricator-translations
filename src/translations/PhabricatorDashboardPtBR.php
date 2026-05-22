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
  '%s changed the layout mode for this dashboard from %s to %s.' => '%s alterou o modo de layout desse painel de %s para %s.',
  'Archive Dashboard' => 'Arquivar painel',
  '%s changed the panels on this dashboard.' => '%s alterou os painéis desse painel.',
  'All Dashboards' => 'Todos os painéis',
  'Create Custom Pages' => 'Crie páginas personalizadas',
  'No panels found.' => 'Nenhum painel encontrado.',
  'Active Panels' => 'Painéis ativos',
  'Change the dashboard layout mode.' => 'Alterar o modo de layout do painel.',
  'You must choose a valid panel.' => 'Você deve escolher um painel válido',
  'Archived Panels' => 'Painéis arquivados',
  'Add Dashboard to Menu' => 'Adicionar painel ao menu',
  'Active Dashboards' => 'Painéis ativos',
  'You must choose a panel to add to the dashboard.' => 'Você deve escolher um painel para adicionar ao painel de controle.',
  'Create Dashboard' => 'Criar painel',
  'Type a dashboard name...' => 'Digite um nome para o painel...',
);
  }

}
