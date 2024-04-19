<?php

final class PhabricatorConduitPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Use form-encoded data to submit parameters to Conduit endpoints. Sending a JSON-encoded body and setting \'Content-Type\': \'application/json\' is not currently supported.' => 'Use dados codificados por formulário para enviar parâmetros aos pontos de extremidade do Conduit. Enviar um corpo codificado em JSON e configurar \'Content-Type\': \'application/json\' não é atualmente suportado.',
      'Called After' => 'Chamado depois',
      'No such user "%s" exists.' => 'Nenhum usuário desse tipo "%s" existe.',
      'Standard API Token' => 'Token de API padrão',
      'Conduit' => 'Canalização',
      'Call Duration (us)' => 'Duração da chamada (nós)',
      'Caller PHID' => 'PHID do chamador',
      'Active API Tokens' => 'Tokens de API ativos',
      'You don\'t have any active API tokens.' => 'Você não tem nenhum token de API ativo.',
      'Generate API Token' => 'Gerar token de API',
      'Generate a new API token?' => 'Gerar um novo token de API?',
      'Called Before' => 'Chamado antes',
      'Developer API' => 'API do desenvolvedor',
      'Execute the call as the given user. (If omitted, the call will be executed as an omnipotent user.)' => 'Execute a chamada como o usuário especificado. (Se omitido, a chamada será executada como um usuário onipotente.)',
      'View API Token' => 'Visualizar o token da API',
      'Method Result' => 'Resultado do método',
      'Generate Token' => 'Gerar token',
    );
  }

}
