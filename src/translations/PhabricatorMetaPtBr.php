<?php

final class PhabricatorMetaPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informação',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Este aplicativo não pode ser desinstalado porque é necessário que o Phabricator funcione.',
      'Syntax' => 'Sintaxe',
      'You cannot install an installed application.' => 'Você não pode instalar um aplicativo instalado.',
      'Show First-Party Applications' => 'Mostrar aplicativos primários',
      'Create Application' => 'Criar aplicativo',
      'Unknown order "%s"!' => 'Ordem desconhecida "%s"!',
      'Really Uninstall Application?' => 'Desinstalar realmente o aplicativo?',
      'Prototypes Not Enabled' => 'Protótipos não habilitados',
      'Really uninstall the %s application?' => 'Desinstalar realmente o aplicativo de %s?',
      'Policy does not exist.' => 'Política não existe.',
      'Launcher' => 'Iniciador',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => 'Para gerenciar protótipos, ative-os definindo %s em sua configuração do Phabricator.',
      'Save Policies' => 'Salvar políticas',
      'Prototype' => 'Protótipo',
      'Extension' => 'Extensão',
      'Validation Failed' => 'Falha ao validar',
      'Show Installed Applications' => 'Mostrar aplicativos instalados',
      'Configure' => 'Configurar',
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    );
  }

}
