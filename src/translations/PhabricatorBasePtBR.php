<?php

final class PhabricatorBasePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nenhum aplicativo \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Este aplicativo é necessário para o Phabricator operar, portanto, todos os usuários devem ter acesso a ele.',
      'Can Configure Application' => 'Pode configurar o aplicativo',
      'Can Use Application' => 'Pode usar o aplicativo',
      'Core Applications' => 'Aplicativos principais',
      'No application!' => 'Nenhuma aplicativo!',
      '%s Application' => '%s Aplicativo',
      'Developer Tools' => 'Ferramentas de desenvolvimento',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'A solicitação inclui o parâmetro restrito "%s", mas esse controlador ("%s") não está na lista de permissões. Recusar-se a atender a essa solicitação porque ela pode fazer parte de um ataque de redirecionamento.',
      'Unknown capability \'%s\'!' => 'Capacidade desconhecida \'%s\'!',
    );
  }

}
