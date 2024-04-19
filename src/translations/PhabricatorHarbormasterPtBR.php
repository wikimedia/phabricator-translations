<?php

final class PhabricatorHarbormasterPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Unable to Pause Build' => 'Não é possível pausar a compilação',
      'Publishing "%s"...' => 'Publicando "%s"...',
      'Unable to Abort Build' => 'Não é possível abortar a compilação',
      'INVALID' => 'INVÁLIDO',
      'Work will continue on all builds. Really resume?' => 'O trabalho continuará em todas as compilações. Realmente retomar?',
      'Origin' => 'Origem',
      'This target has no associated artifacts.' => 'Este destino não possui artefatos associados.',
      'Unable to Resume Build' => 'Não é possível continuar a compilação',
      'Build Target PHID' => 'PHID de destino da construção',
      'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'Se você abortar todas as compilações, o trabalho será interrompido imediatamente. O trabalho será descartado e as compilações devem ser completamente reiniciadas.',
      'Build Target ID' => 'ID de segmentação de construção',
      'Active Plans' => 'Planos ativos',
      'New View (Prototype)' => 'Nova visão (protótipo)',
      'All Buildables' => 'Todos os Buildables',
      '%s empty logs are hidden.' => '%s registros vazios estão ocultos.',
      'Artifacts' => 'Artefatos',
      'Variables' => 'Variáveis',
      'Search for targets created on or after a particular date.' => 'Pesquise destinos criados em ou após uma data específica.',
      'Automatic Buildable' => 'Compilação automática',
      'Lines' => 'Linhas',
      'Container' => 'Contêiner',
      'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'Se você pausar todas as compilações, o trabalho será interrompido assim que as etapas atuais forem concluídas. Você pode retomar as compilações posteriormente.',
    );
  }

}
