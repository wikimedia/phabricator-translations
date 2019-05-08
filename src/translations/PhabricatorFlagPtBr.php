<?php

final class PhabricatorFlagPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => 'Marcado com o bandeira "%s".',
      'Personal Bookmarks' => 'Marcadores pessoais',
      'Query flag markers.' => 'Marcadores de sinalização.',
      'Clear a flag.' => 'Limpar uma bandeira.',
      'Purple' => 'Roxo',
      'Unknown groupBy parameter: %s' => 'Parâmetro groupBy desconhecido: %s',
      'Mark with %s flag.' => 'Marque com %s bandeira.',
      'Flags are private. Only you can view or edit your flags.' => 'Bandeiras são privados. Só você pode ver ou editar seus flags.',
      'Must pass an id or an objectPHID.' => 'Deve passar um id ou um objectPHID.',
      'Already marked with %s flag.' => 'Já marcado com bandeira %s.',
      'Flag For Later' => 'Marcar para mais tarde',
      'You are not the creator of this flag.' => 'Você não é o criador dessa bandeira .',
      'Flag %s' => 'Bandeira %s',
      'Create or modify a flag.' => 'Crie ou modifique uma bandeira .',
      'Create Flag' => 'Criar marcação',
      'You can flag this %s if you want to remember to look at it later.' => 'Você pode sinalizar este %s se quiser lembrar de analisá-lo mais tarde.',
      'No flags found.' => 'Nenhuma bandeira encontrada.',
      'Bad flag ID.' => 'ID de bandeira ruim.',
      'Remove %s Flag' => 'Remover bandeira %s',
      'All Object Types' => 'Todos os tipos de objeto',
      'Already Marked' => 'Já marcado',
      'Flag Color' => 'Cor da bandeira',
      'Mark with flag' => 'Marcar com bandeira',
      'Flagged' => 'Sinalizado',
    );
  }

}
