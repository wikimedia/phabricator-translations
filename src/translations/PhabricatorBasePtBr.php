<?php

final class PhabricatorBasePtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nenhum aplicativo \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Espere que o usuário \'%s\' tenha acesso permitido a \'%s\'.',
      'Can Configure Application' => 'Pode configurar o aplicativo',
      'Can Use Application' => 'Pode usar o aplicativo',
      'Application Controller' => 'Controlador de aplicativo',
      'Public + configured' => 'Público + configurado',
      'Public Access' => 'Acesso público',
      'Core Applications' => 'Aplicativos principais',
      'No Login Required' => 'Nenhum login necessário',
      'No application!' => 'Nenhuma aplicativo!',
      'Email Verification Required' => 'Verificação de email obrigatória',
      'Developer Tools' => 'Ferramentas de desenvolvimento',
      'Unknown capability \'%s\'!' => 'Capacidade desconhecida \'%s\'!',
      'Admin Required' => 'administrador obrigatório',
      'Email Verification Required, With Exception' => 'Verificação de e-mail necessária, com exceção',
      'Allow Disabled' => 'Permitir desativação',
    );
  }

}
