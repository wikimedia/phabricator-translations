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
      '%s Application' => '%s Aplicativo',
      'Email Verification Required' => 'Verificação de email obrigatória',
      'Application Controller, No Login Required' => 'Controlador de aplicativos, sem necessidade de entrar',
      'Developer Tools' => 'Ferramentas de desenvolvimento',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Este aplicativo é necessário para o Phabricator operar, portanto, todos os usuários devem ter acesso a ele.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'Espere que o usuário \'%s\' tenha acesso negado a \'%s\'.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'A solicitação inclui o parâmetro restrito "%s", mas esse controlador ("%s") não está na lista de permissões. Recusar-se a atender a essa solicitação porque ela pode fazer parte de um ataque de redirecionamento.',
      'Unknown capability \'%s\'!' => 'Capacidade desconhecida \'%s\'!',
      'Admin Required' => 'administrador obrigatório',
      'Email Verification Required, With Exception' => 'Verificação de e-mail necessária, com exceção',
      'Allow Disabled' => 'Permitir desativação',
    );
  }

}
