<?php

final class PhabricatorConfigPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Memory Usage' => 'Uso de memória',
      'Table' => 'Tabela',
      'No active repositories have outstanding errors.' => 'Nenhum repositório ativo possui erros pendentes.',
      'Access Denied' => 'Acesso negado',
      'This table can use a better table engine.' => 'Esta tabela pode usar um mecanismo de tabela melhor.',
      'Character Set' => 'Conjunto de caracteres',
      'You can find more information about rebuilding the search index here: %s' => 'Você pode encontrar mais informações sobre como reconstruir o índice de pesquisa aqui: %s',
      'Not Available' => 'Não disponível',
      'Not Enabled' => 'Não habilitado',
      'Issue Resolved' => 'Problema resolvido',
      'This column has the wrong autoincrement setting.' => 'Esta coluna tem a configuração de autoincremento incorreta.',
      'Allows you to add footer links on most pages.' => 'Permite adicionar links no rodapé na maioria das páginas.',
      'USWest Region' => 'Região de USWest',
      'Configuring Outbound Email' => 'Configurando e-mails de saída',
      'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Os endereços de correio de entrada agora estão configurados para cada aplicativo na ferramenta Aplicativos.',
      'Uptime' => 'Tempo de atividade',
      'Mark activities complete even if there is no outstanding need to complete them.' => 'Marque as atividades completas, mesmo se não houver uma necessidade pendente de concluí-las.',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'O algoritmo de indexação para o índice de pesquisa de texto completo foi atualizado e o índice precisa ser recriado. Até você reconstruir o índice, a pesquisa global (e outra pesquisa de texto completo) não funcionará corretamente.',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'Sua configuração do PHP seleciona um fuso horário inválido. Selecione um fuso horário válido.',
      'Config' => 'Configuração',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Esta é uma lista de substituição de expressões regulares que permite escolher quais arquivos de idioma são destacados como. Se seus projetos tiverem determinadas regras sobre nomes de arquivos ou usarem extensões de idioma incomuns ou ambíguas, você poderá criar um mapeamento aqui. Este é um dicionário ordenado de expressões regulares que será testado contra o nome do arquivo. Eles devem mapear para uma linguagem explícita como um valor de cadeia ou um índice numérico para os grupos capturados como um inteiro.',
      'You enabled Elasticsearch but the index does not exist.' => 'Você ativou o Elasticsearch, mas o índice não existe.',
      'Elasticsearch Misconfigured' => 'Elasticsearch mal configurado',
      'The search index algorithm has been updated and the index needs be rebuilt.' => 'O algoritmo do índice de pesquisa foi atualizado e o índice precisa ser reconstruído.',
      'PHP Timezone' => 'Fuso Horário do PHP',
      '%s Active' => '%s Ativo',
      'User Interface' => 'Interface de usuário',
      'Enable developer mode' => 'Ativar o modo de desenvolvedor',
    );
  }

}
