<?php

final class PhabricatorHeraldPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Forbidden' => 'Proibido',
      'Create Herald Rule' => 'Criar regra de herald',
      'Create Herald Rule: %s' => 'Criar regra de herald: %s',
      'Create Rule' => 'Criar regra',
      'Author Not Active' => 'Autor não ativo',
      'Added a comment: %s' => 'Adicionado um comentário: %s',
      'Herald Transcript' => 'Transcrição herald',
      'Type a rule type...' => 'Digite um tipo de regra...',
      'Authored by %s' => 'Autoria de %s',
      'Active Rules' => 'Regras ativas',
    );
  }

}
