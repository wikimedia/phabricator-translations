<?php

final class PhabricatorFilesDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'The file %s is not attached to the object %s.' => 'A faali %s ba e paale a boma %s.',
      'The file %s can not be detached from the object %s.' => 'A  faali  %s koŋ baŋ yi a boma %s.',
      'Detach File' => 'Wɛle a pɛll',
      'Attach File' => 'Paale gampɛle',
      'Do you want to attach the file %s to the object %s?' => 'Fo boɔrɔ la ka fo de a pɛll mare %s a ɔbgyɛte %s?',
      '(IMPORTANT) If you attach this file to this object, any user who has permission to view the object will be able to view and download the file!' => '(IMPORTANT) ka foŋ mare a pɛll ŋa a ɔbgyɛte ŋa, tontonna zaa naŋ taa sori na kaa a ɔbgyɛte na tõɔ kaa la a kyɛ danloodi a pɛll!',
      'File Not Attached' => 'Gaŋpɛle ba paale',
      'The file %s is referenced by the object %s, but not attached to it, so it can not be detached.' => 'A pɛll %s la ka a ɔbgyɛte %s ko sommo yizie, kyɛ ba mare o, a lɛ na o koŋ baŋ wɛle.',
      'Referenced File Visibility' => 'Yelyiibu boma nyaabo',
      'File Visibility Test Task' => 'Pɛll e lɛ asɛses tonnoɔre tombo',
      'View All Files' => 'Kaa a pɛllɛ zaa',
      'This object (of class "%s") does not implement the required interface ("%s"), so files can not be manually attached to it.' => 'A ɔɔgyɛ (a klaasi \'\'%s\'\') ba boɔrɔ a entafeesi (\'\'%s\'\'), azuiŋ faali koŋ toɔŋ paale.',
      'Confirm File Attachment' => 'Sage de a boma lammo',
      'Referenced Files' => 'Wuli a sommo yizie',
      'This object (of class "%s") does not implement the required interface ("%s"), so files can not be manually detached from it.' => 'A boma (a klaasi \'\'%s\'\') ba boɔrɔ niŋeŋ (\'\'%s\'\'), azuiŋ faali koŋ baŋ tage yi a poɔŋ.',
      'Really attach the file %s to the object %s, allowing any user who can view the object to view and download the file?' => 'Mare a pɛll meŋɛ %s ko ɔbgyɛte %s, na bare tontonna zaa vuo naŋ na baŋ kaa a ɔbgyɛte na kaa kyɛ danloodi a pɛll?',
      'Detach the file %s from the object %s?' => 'Wɛle a pɛll %s yi a ɔbgyɛte %s?',
      'View All %d Files' => 'Kaa a %s Faali zaa',
      'The file %s is already attached to the object %s.' => 'A pɛll %s da daŋ mare la a ɔbgyɛte %s eŋɛ.',
      'No OpenSSL extension available.' => 'YuoSSL yɔlɔɔ ba kyebe.',
    );
  }

}
