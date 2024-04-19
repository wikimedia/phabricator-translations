<?php

final class PhabricatorBadgesPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Active Badges' => 'Emblemas ativos',
      'Edit Badge: %s' => 'Editar emblema: %s',
      'View Badge' => 'Ver emblema',
      '%s awarded this badge to %s recipient(s): %s.' => '%s recebeu este distintivo para %s destinatário (s): %s.',
      'Edit Badge' => 'Editar emblema',
      'View Recipients' => 'Ver destinatários',
      'Achievements and Notoriety' => 'Conquistas e notoriedade',
      'Award' => 'Premiar',
      'Awarded by %s on %s' => 'Concedido por %s em %s',
      'Archive Badge' => 'Arquivar emblema',
      'Badge long description.' => 'Descrição longa do emblema.',
      'Add Recipients' => 'Adicionar destinatários',
      '%s updated the flavor from %s to %s.' => '%s atualizou o sabor de %s para %s.',
      'Revoke Recipients' => 'Revogar destinatários',
      '%s revoked this badge from %s recipient(s): %s.' => '%s revogou este distintivo de %s destinatário (s): %s.',
      'Type a badge name...' => 'Digite um nome de distintivo...',
      'Default Edit Badges' => 'Editar emblemas padrão',
      'Add Recipient' => 'Adicionar destinatário',
    );
  }

}
