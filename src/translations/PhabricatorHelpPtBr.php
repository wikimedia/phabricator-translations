<?php

final class PhabricatorHelpPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Feche qualquer caixa de diálogo, incluindo esta.',
      'Unsupported Editor Protocol' => 'Protocolo de editor não suportado',
      'Change Settings' => 'Mudar configurações',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Seu URI do editor configurado usa um protocolo não suportado. Altere suas configurações para usar um protocolo suportado ou peça ao seu administrador para adicionar suporte ao protocolo escolhido, configurando: %s',
      '%s Help' => 'Ajuda de %s',
      'Keyboard Shortcuts' => 'Atalhos de Teclado',
    );
  }

}
