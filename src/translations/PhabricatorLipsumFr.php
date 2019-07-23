<?php

final class PhabricatorLipsumFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'L’argument « %s » ne correspond à aucun nom de générateur.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'Un générateur lipsum est enregistré avec la clé « %s ». Cette clé est réservée.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Impossible de charger un utilisateur aléatoire. Vous devrez peut-être d\'abord générer plus d\'utilisateurs de test.',
      'Generate objects without prompting for confirmation.' => 'Générez des objets sans demander de confirmation.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Impossible de charger le symbole %s : cette classe n\'existe pas.',
      'Generator ("%s") was unable to generate an object.' => 'Generator ("%s") n\'a pas pu générer d\'objet.',
      'OOPS' => 'OOPS',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Cette commande génère des données de test synthétiques, y compris des comptes utilisateur. Elle a pour but d’être utilisées dans des environnements de développement pour tester des fonctionnalités plus facilement. Il n’existe pas de manière facile de supprimer ces données ou d’annuler les effets de cette commande. Si vous la lancez dans un environnement de production, elle polluera vos données en y ajoutant une grande quantité de déchets sans intérêt dont vous ne pourrez vous débarrasser.',
      'Generate synthetic test objects.' => 'Générer des objets de test synthétiques.',
      'class' => 'classe',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Générer des objets de test synthétiques pour toujours. Utiliser ^C pour l’arrêter lorsque vous serez satisfait.',
      'Generated "%s": %s' => '«&nbsp;%s&nbsp;» généré&nbsp;: %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Choisir quel(s) type(s) de données de test générer, ou sélectionner «&nbsp;%s&nbsp;».',
      'Generate objects as quickly as possible.' => 'Générer des objets le plus rapidement possible.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'L’argument «&nbsp;%s&nbsp;» est ambigu, et correspond à plusieurs générateurs&nbsp;: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum est un outil de test et de développement et peut être lancé seulement sur des installation en mode développeur. Activer «&nbsp;%s&nbsp;» dans votre configuration pour activer lipsum.',
      'Selected generators: %s.' => 'Générateurs sélectionnés&nbsp;: %s.',
      'GENERATORS' => 'GÉNÉRATEURS',
      'Are you sure you want to generate piles of garbage?' => 'Êtes-vous sûr de vouloir générer des piles de déchets ?',
    );
  }

}
