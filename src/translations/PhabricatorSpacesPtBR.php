<?php

final class PhabricatorSpacesPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s atualizou a descrição do espaço por %s.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Esse erro geralmente indica que %s está habilitado, mas não há espaços com uma política de visualização "%s". Essas configurações são contraditórias e implicam em um erro de configuração.)',
      'Spaces User Guide' => 'Guia do usuário do espaços',
      'Hide Active Spaces' => 'Ocultar espaços ativos',
      '%s updated the space description.' => '%s atualizou a descrição do espaço.',
      '%s archived space %s.' => '%s de espaço arquivado %s.',
      'PHID of the policy space this object is part of.' => 'PHID do espaço de política do qual este objeto faz parte.',
      'Default edit policy for newly created spaces.' => 'Política de edição padrão para espaços recém-criados.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Somente o primeiro espaço criado pode ser o espaço padrão e deve permanecer como espaço padrão sempre.',
      'Search for objects in certain spaces.' => 'Procure objetos em determinados espaços.',
      'Activate Space: %s' => 'Ativar espaço: %s',
      'Support for Spaces' => 'Suporte para espaços',
      '%s renamed space %s from %s to %s.' => '%s renomeou espaço de %s de %s para %s.',
      'Create a Space' => 'Crie um espaço',
      'Alternate Space' => 'Espaço alternativo',
      '%s activated this space.' => '%s ativou esse espaço.',
      'Archive Space: %s' => 'Espaço de arquivo: %s',
      'Spaces must have a name.' => 'Espaços devem ter um nome.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Objetos existentes neste Espaço serão ocultados dos resultados da consulta por padrão.',
      '%s made this the default space.' => '%s fez deste o espaço padrão.',
      '%s archived this space.' => '%s arquivou este espaço.',
      'Type a space name...' => 'Digite um nome de espaço...',
      'Existing objects will no longer be hidden from query results.' => 'Objetos existentes não serão mais ocultados dos resultados da consulta.',
      'You do not have permission to create spaces.' => 'Você não tem permissão para criar espaços.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Peça a alguém para lhe dar acesso a um espaço para poder visualizar e criar objetos.',
      'Default Space' => 'Espaço padrão',
      'Archive Space' => 'Espaço de arquivo',
      'CHANGES TO SPACE DESCRIPTION' => 'MUDANÇAS À DESCRIÇÃO DO ESPAÇO',
      'Default view policy for newly created spaces.' => 'Política de visualização padrão para espaços recém-criados.',
      'Spaces' => 'Espaços',
      'Browse Spaces' => 'Procurar espaços',
      'Can Create Spaces' => 'Pode criar espaços',
      'All Spaces' => 'Todos os espaços',
      'Control access to groups of objects.' => 'Controle o acesso a grupos de objetos.',
      'If you activate this space, you will be able to create objects inside it again.' => 'Se você ativar este espaço, poderá criar objetos dentro dele novamente.',
      'Create Space' => 'Criar espaço',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Entrar ou peça a alguém para criar um espaço público com o qual usuários com a saída podem acessar.',
      'Policy Namespaces' => 'Nomes de política de nomes',
      '%s activated space %s.' => '%s ativou o espaço %s.',
      '%s created this space.' => '%s criou este espaço.',
      'Space %s: %s' => 'Espaço %s: %s',
      'No Access to Spaces' => 'Sem acesso a espaços',
      '%s renamed this space from %s to %s.' => '%s renomeou esse espaço de %s para %s.',
      'No spaces found.' => 'Nenhum espaço encontrado.',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Esta instalação usa espaços para organizar objetos, mas os usuários desconectados não têm acesso a nenhum espaço.',
      'Edit Space' => 'Editar espaço',
      'Test Space' => 'Espaço de teste',
      '%s made space %s the default space.' => '%s fez do espaço %s o espaço padrão.',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'NOTA: Você está criando o **espaço padrão**. Todos os objetos existentes serão colocados neste espaço. Você deve criar um espaço padrão antes de poder criar outros espaços.',
      'Activate Space' => 'Ativar espaço',
      'PhabricatorSpacesApplication' => 'PhabricatorSpacesApplication',
      'Show Only Active Spaces' => 'Mostrar apenas espaços ativos',
      'Policy namespaces to segment object visibility throughout your instance.' => 'Os nomes de políticas são marcados para segmentar a visibilidade do objeto em toda a sua instância.',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Se você arquivar este espaço, você não poderá mais criar novos objetos dentro dele.',
      '%s created space %s.' => '%s criou espaço %s.',
      'Default Space #2' => 'Espaço padrão #2',
      'Active Spaces' => 'Espaços ativos',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Essa instalação usa espaços para organizar objetos, mas sua conta não tem acesso a nenhum espaço.',
    );
  }

}
