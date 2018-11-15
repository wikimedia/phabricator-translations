<?php

final class PhabricatorPonderFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Create New Question' => 'Créer une nouvelle question',
      'Ask a Question' => 'Poser une question',
      'Someone changes the questions details.' => 'Quelqu\'un a modifié les détails de la question.',
      '%s reopened this question.' => '%s a rouvert cette question.',
      'Questions must have a title.' => 'Les questions doivent avoir un titre.',
      'QUESTION DETAIL' => 'DETAIL DE LA QUESTION',
      'Open Questions' => 'Ouvrir les questions',
      'Obsolete' => 'Périmé',
      'Close Question' => 'Fermer la question',
      'Status of the question.' => 'Statut de la question.',
      'Empty Answer' => 'Réponse manquante',
      '%s updated the answer wiki.' => '%s a actualisé le wiki de réponse.',
      'Answer Comment' => 'Commentaire sur la réponse',
      'No questions found.' => 'Pas de questions trouvées.',
      'Ask Question' => 'Poser une question',
      '%s updated the answer details.' => '%s a actualisé les détails de la réponse.',
      'This answer has been hidden.' => 'Cette réponse a été cachée.',
      'New Question' => 'Nouvelle question',
      'The user who asked a question can always view and edit it.' => 'L\'utilisateur qui a posé une question peut toujours la voir et l\'éditer.',
      'Log In to Answer' => 'Connectez-vous pour répondre.',
      'Someone comments on the question.' => 'Quelqu\'un a commenté la question.',
      'Question title.' => 'Titre de la question.',
      'Questions and Answers' => 'Questions et réponses',
      'Answer History' => 'Historique de la réponse',
      'Edit Question' => 'Modifier la question',
      '%s closed this question as invalid.' => '%s a fermé cette réponse car elle était invalide.',
      'New question details.' => 'Détails de la nouvelle question.',
      '%s added this answer.' => '%s a ajouté cette réponse.',
      '%s asked %s.' => '%s a demandé %s.',
      'ANSWER DETAIL' => 'DETAIL DE LA REPONSE',
      '%s marked this answer as hidden.' => '%s a marqué cette réponse comme cachée.',
      '%s marked %s as visible.' => '%s a marqué %s comme visible.',
      'Answer' => 'Réponse',
      'Add a Comment' => 'Ajouter un commentaire',
      'This question is open for answers.' => 'Cette question est ouverte aux réponses.',
    );
  }

}
