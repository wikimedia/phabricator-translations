<?php

final class PhabricatorTypeaheadPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Invalid Parameters' => 'Parâmetros inválidos',
      'Select' => 'Selecionar',
      'Unable to parse function and arguments for token "%s".' => 'Não é possível analisar função e argumentos para token "%s".',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'O parâmetro HTTP chamado "parameters" para essa solicitação não é um parâmetro JSON válido. JSON é obrigatório. Exceção: %s',
      'Function Quick Reference' => 'Função de referência rápida',
    );
  }

}
