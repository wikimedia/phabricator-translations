<?php

final class PhabricatorPhortunePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'The billing name can be no longer than %s characters.' => 'O nome do faturamento não pode ter mais de %s caracteres.',
      'Phortune Payment Method' => 'Método de pagamento da Phortune',
      'There was an error adding this payment method:' => 'Ocorreu um erro ao adicionar este método de pagamento:',
      '%s removed the billing name for this account (was %s).' => '%s removeu o nome de faturamento desta conta (%s).',
      'Account billing address.' => 'Endereço de cobrança da conta.',
      'Decline Code' => 'Código de declínio',
      'Merchant description.' => 'Descrição do comerciante.',
      '%s changed the billing name for this account from %s to %s.' => '%s mudou o nome de faturamento desta conta de %s para %s.',
      'ACCOUNT OVERVIEW' => 'VISÃO GERAL DA CONTA',
      'Error Type' => 'Tipo de erro',
      'Account name for billing purposes.' => 'Nome da conta para fins de faturamento.',
      'New account billing address.' => 'Novo endereço de cobrança da conta.',
      '%s set the billing name for this account to %s.' => '%s define o nome de faturamento desta conta como %s.',
      'Error Param' => 'Parâmetro de erro',
      'Bill To:' => 'Projeto de lei para:',
      'You are making too many attempts to add payment methods in a short period of time.' => 'Você está fazendo muitas tentativas para adicionar métodos de pagamento em um curto período de tempo.',
      'Edit Payment Method' => 'Editar método de pagamento',
      'CHANGES TO BILLING ADDRESS' => 'MUDANÇAS NO ENDEREÇO DE FATURAMENTO',
      '%s updated the account billing address.' => '%s atualizou o endereço de cobrança da conta.',
      'From:' => 'De:',
      'New account billing name.' => 'Novo nome de faturamento da conta.',
      'Additional details about this error:' => 'Detalhes adicionais sobre este erro:',
      'Billing Name' => 'Nome de cobrança',
      'Payment Method' => 'Método de pagamento',
      'Error Code' => 'Erro de código',
    );
  }

}
