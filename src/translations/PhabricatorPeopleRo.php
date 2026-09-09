<?php

final class PhabricatorPeopleRo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ro';
  }

  protected function getTranslations() {
    return array(
  'You must be an administrator to create administrators.' => 'Trebuie să fii administrator pentru a crea administratori.',
  'Approves a user.' => 'Aprobă un utilizator.',
  'Send Invitations' => 'Trimiteți invitații',
  'Confirm Approval' => 'Confirmați aprobarea',
  'MediaWiki username.' => 'Nume de utilizator MediaWiki.',
  'Make real names required' => 'Faceți ca numele reale să fie obligatorii',
  'Already Approved' => 'Deja aprobat',
  'Only admins can call this method.' => 'Doar administratorii pot apela această metodă.',
  '[%s] Welcome to %s' => '[%s] Bun venit la %s',
);
  }

}
