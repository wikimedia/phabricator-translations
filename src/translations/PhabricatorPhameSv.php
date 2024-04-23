<?php

final class PhabricatorPhameSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Search for posts within certain blogs.' => 'Sök efter inlägg inom vissa bloggar.',
      'Recent Posts' => 'Senaste inlägg',
      'Read information about blog posts.' => 'Läs information om blogginlägg.',
      'No blogs posts found.' => 'Inga blogginlägg hittades.',
      'There aren\'t any visible blog posts.' => 'Det finns inga synliga blogginlägg.',
      'You have no draft posts.' => 'Du har inga skissinlägg.',
      'Draft Posts' => 'Skissinlägg',
      'No description.' => 'Ingen beskrivning.',
      '%s changed the profile image for blog %s.' => '%s ändrade profilbilden för bloggen %s.',
      'Create or edit blog posts in Phame.' => 'Skapa eller redigera blogginlägg i Phame.',
      'Blog Posts' => 'Blogginlägg',
      'No one has written any blog posts yet.' => 'Ingen har ännu skrivit några blogginlägg.',
      'Search Posts' => 'Sök inlägg',
      'Published Posts' => 'Publicerade inlägg',
      'Posts must have a title.' => 'Inlägg måste ha en titel.',
      'All Posts' => 'Alla inlägg',
      'Archived Posts' => 'Arkiverade inlägg',
      'This blog has no visible posts.' => 'Denna blogg har inga synliga inlägg.',
    );
  }

}
