<?php

final class PhabricatorManiphestPt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Criar Tarefa',
      'Triage' => 'Triagem',
      'Define task subtypes.' => 'Definir subtipos de tarefa.',
      'Priority of the task.' => 'Prioridade da tarefa.',
      'Task Fields' => 'Campos da Tarefa',
      'Update an existing Maniphest task.' => 'Atualizar uma tarefa existente do Maniphest.',
      'A task\'s subscribers change.' => 'Uma alteração dos inscritos na tarefa.',
      '%s closed %s as %s.' => '%s fechou %s as %s.',
      '%s added %s commit(s) to %s: %s.' => '%s adicionou %s submissão(ões) para %s: %s.',
      'TASK DETAIL' => 'DETALHE DA TAREFA',
      'Closed after %s' => 'Fechado depois de %s',
      'Changed Task Priority' => 'Mudou a Prioridade da Tarefa',
      'Oldest open task.' => 'Tarefa aberta mais antiga.',
      'Subtasks' => 'Subtarefas',
      'Update has no effect.' => 'Atualização não tem efeito.',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Relatórios do Maniphest',
      'From Email' => 'Do e-mail',
      'Needs Triage' => 'Precisa de Triagem',
      'Mentioned In' => 'Mencionado Em',
      'Assigned Task' => 'Tarefas atribuídas',
      'Open Subtasks' => 'Subtarefas abertas',
      'Assigned task to: %s.' => 'Atribuiu a tarefa a: %s.',
      'Points' => 'Pontos',
      'Untitled Task' => 'Tarefa Sem Título',
      'Edit Subtasks' => 'Editar Subtarefas',
      'Subtasks.' => 'Subtarefas.',
      '(Not Assigned)' => '(Não atribuída)',
      'Opened' => 'Aberta',
      'Subscribed' => 'Subscrito',
      'Assigned' => 'Atribuída',
    );
  }

}
