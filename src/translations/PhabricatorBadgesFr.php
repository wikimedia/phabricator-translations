<?php

final class PhabricatorBadgesFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Superstar' => 'Superstar',
      'Badge name.' => 'Nom du badge.',
      'Short description of the badge.' => 'Description courte du badge.',
      'Browse Badges' => 'Explorer les badges',
      '%s updated %s quality from %s to %s.' => '%s a augmenté la qualité de %s de %s à %s.',
      'Badges let you award and distinguish special users throughout your install.' => 'Les badges vous permettent de récompenser et de distinguer des utilisateurs spéciaux durant votre installation.',
      'Color and rarity of the badge.' => 'Couleur et rareté du badge.',
      '%s disabled this badge.' => '%s a désactivé ce badge.',
      'Award' => 'Récompense',
      'Awarded by %s on %s' => 'Décerné par %s sur %s',
      'Badge %d' => 'Badge %s',
      'Quality' => 'Qualité',
      'Archive Badge' => 'Archiver le badge',
      'Apply transactions to create a new badge or edit an existing one.' => 'Appliquer les transactions pour créer un nouveau badge ou en modifier un existant.',
      'Epic' => 'Épique',
      'Badge long description.' => 'Description longue du badge.',
      'Legendary' => 'Légendaire',
      '%s enabled the badge %s.' => '%s a activé le badge %s.',
      'Add Recipients' => 'Ajouter des destinataires',
      'International' => 'International',
      'Revoke badge award recipients.' => 'Révoquer les destinataires du badge de récompense.',
      '[Badge]' => '[Badge]',
      'Rare' => 'Rare',
      '%s enabled this badge.' => '%s a activé ce badge.',
      '%s updated the badge description for %s.' => '%s a mis à jour la description du badge %s.',
      'No badges found.' => 'Aucun badge trouvé.',
      'Revoke Recipients' => 'Révoquer les destinataires',
      'Badge quality must be set.' => 'La qualité du badge doit être définie.',
      'Average Person' => 'Personne moyenne',
      'Unknown Quality ("%s")' => 'Qualité inconnue (« %s »)',
      'Really Revoke Badge?' => 'Souhaitez-vous réellement révoquer le badge ?',
      '%s changed the badge icon from %s to %s.' => '%s a modifié l\'icône de badge de %s en %s.',
      'New badge name.' => 'Nouveau nom de badge.',
      'Create New Badge' => 'Créer un nouveau badge',
      'Award Recipients' => 'Destinataires de la récompense',
      'Nominomicon' => 'Nominomicon',
      'Can Create Badges' => 'Peut créer des badges',
      '%s revoked this badge from %s recipient(s): %s.' => '%s a révoqué ce badge pour %s destinataire(s) : %s.',
      '%s changed the badge icon for %s from %s to %s.' => '%s a modifié l\'icône de badge pour %s de %s vers %s.',
      'Type a badge name...' => 'Tapez un nom de badge...',
      '%s revoked %s from %s recipient(s): %s.' => '%s a révoqué %s pour %s destinataire(s) : %3$s.',
      'Add Recipient' => 'Ajouter un destinataire',
    );
  }

}
