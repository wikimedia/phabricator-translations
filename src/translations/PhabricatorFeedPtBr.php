<?php

final class PhabricatorFeedPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Ligue %s antes de publicar!',
      'Dictionary with various data of the story' => 'Dicionário com vários dados da história',
      'All Stories' => 'Todas as histórias',
      'Query the feed for stories' => 'Consultar o feed de histórias',
      'Creation (Newest First)' => 'Criação (mais novo primeiro)',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'O tipo de história deve ser um nome de classe válido e deve conter uma subclasse de %s. \'%s\' não é uma subclasse de %s.',
      'Full HTML presentation of story' => 'Apresentação completa em HTML da história',
      '(Unable to render story of class %s for Doorkeeper.)' => '(Não é possível renderizar a história da classe %s para o porteiro).',
      'Story has no primary object!' => 'A história não tem objeto primário!',
      'Republishing story...' => 'Republicando a história...',
      'Story is asking for an object it did not request (\'%s\')!' => 'A história está pedindo um objeto que não solicitou (\'%s\')!',
      'Simple one-line plain text representation of story' => 'Representação de texto simples de uma linha simples da história',
      'Include Projects' => 'Incluir projetos',
      'Publish a story to the feed.' => 'Publique uma história no feed.',
      'Specify a story key to republish.' => 'Especifique uma chave de história para republicar.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'A data "Ocorre antes" especificada é anterior no tempo que a data "Ocorre Após" especificada, portanto, essa consulta nunca poderá corresponder a nenhum resultado.',
      'Republish a feed event to all consumers.' => 'Republicar um evento de feed para todos os consumidores.',
      'Include Users' => 'Incluir usuários',
      'Feed Story Failed to Render (%s)' => 'Feed Story não conseguiu renderizar (%s)',
      'Story' => 'História',
      'Full dictionary of story data plus rendered HTML' => 'Dicionário completo de dados da história e HTML renderizado',
      'Specify exactly one story key to republish.' => 'Especifique exatamente uma chave de história para republicar.',
      'You must call %s if you %s!' => 'Você deve chamar %s se você %s!',
      'Unloaded Object \'%s\'' => 'Objeto descarregado \'%s\'',
      'No story exists with key "%s"!' => 'Não existe história com chave "%s"!',
      'Feed options.' => 'Opções de feed.',
      'Creation (Oldest First)' => 'Criação (mais antiga primeiro)',
      'Deprecated.' => 'Obsoleto.',
      'No Stories.' => 'Sem histórias.',
      'Story contains only the title of the story' => 'A história contém apenas o título da história',
      'Unsupported view type, possibles are: %s' => 'Tipo de visualização não suportado, os possíveis são: %s',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Tentando recuperar a chave do campo de marcação "%s", mas essa história do feed não solicitou que fosse processada.',
      'Feed Stories' => 'Histórias de feed',
      'Unknown rendering target: %s' => 'Alvo de renderização desconhecido: %s',
      'Include stories about projects I am a member of.' => 'Inclua histórias sobre projetos dos quais sou membro.',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'O tipo de história deve ser um nome de classe válido e deve conter uma subclasse de %s. \'%s\' não é uma classe carregável.',
      'Feed story (with key "%s") does not exist or could not be loaded.' => 'A história do feed (com a chave "%s") não existe ou não pôde ser carregada.',
      'Review Recent Activity' => 'Rever atividade recente',
    );
  }

}
