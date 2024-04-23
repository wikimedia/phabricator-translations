<?php

final class PhabricatorPolicyPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Acesso negado: %s',
      'No One Policy' => 'Nenhuma política',
      'These rules are processed in order.' => 'Essas regras são processadas em ordem.',
      'User Policies' => 'Políticas do usuário',
      'You do not have permission to edit this object.' => 'Você não tem permissão para editar este objeto.',
      'Can View' => 'Pode ver',
      'Object Policies' => 'Políticas de objeto',
      'Members of Project...' => 'Membros do projeto...',
      'Advanced' => 'Avançado',
      'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Testando o recurso "%s" em um objeto ("%s") que não suporta esse recurso.',
      'Special Rules' => 'Regras especiais',
      'Object Policy' => 'Política de objetos',
      'Members of the project "%s" can take this action.' => 'Os membros do projeto "%s" podem realizar essa ação.',
      'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Este objeto é público e pode ser visualizado por qualquer pessoa, mesmo que não possua uma conta Phabricator.',
      'Note:' => 'Nota',
      'Custom Policy' => 'Política personalizada',
      'All Users' => 'Todos os usuários',
      'Administrators can take this action.' => 'Os administradores podem executar essa ação.',
      'Policy Details: %s' => 'Detalhes da política: %s',
      '%s all other users.' => '%s todos os outros usuários.',
      'If No Rules Match' => 'Se nenhuma correspondência de regras',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'Em detalhes, isso significa que esses usuários podem executar esta ação, desde que passem em todas as verificações descritas acima primeiro:',
      'Save Policy' => 'Salvar política',
      'Unknown Policy' => 'Política desconhecida',
      'Change the join policy of the object.' => 'Altere a política de junção do objeto.',
      'This object has special rules which override normal object policy rules:' => 'Este objeto possui regras especiais que substituem as regras normais de diretiva de objeto:',
      'This object has a custom policy controlling who can take this action.' => 'Esse objeto tem uma política personalizada controlando quem pode realizar essa ação.',
      'User Policy' => 'Políticas do usuário',
    );
  }

}
