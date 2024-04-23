<?php

final class PhabricatorDaemonPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Archived Tasks' => 'Tarefas arquivadas',
      'Leased Tasks' => 'Tarefas alugadas',
      'Freed %s task lease(s).' => 'Livrou a concessão da tarefa %s.',
      'Manage Daemons' => 'Gerenciar Daemons Phabricator',
      'Disable the lock log.' => 'Desativar o registro de bloqueio.',
      'Started' => 'Iniciado',
    );
  }

}
