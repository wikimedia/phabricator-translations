<?php

final class PhabricatorSlowvoteDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      '%s changed the voting method from %s to %s.' => '%s Leɛ a nu-neɛbu waaloŋ ayi %s te %s.',
      'Voters' => 'Nu-neɛ deme',
      'Always Visible' => 'Maŋ kaara saŋa zaa',
      '%s changed the status of this poll from %s to %s.' => '%s leɛre a gbagbalaa ŋa %s te %s',
      'Approval' => 'Sage deebo',
      'Anyone can see the responses' => 'Neɛ zaa naŋ baŋ nyɛ la a sagebu',
      'Plurality' => 'Yagroo',
      '%s changed who can see the responses from %s to %s.' => '%s leɛre neɔ naŋ na nyɛ a sagebu ŋa te ta %s te ta %s.',
      '%s changed who can see the responses of %s from %s to %s.' => '%s leɛre new naŋ na nyɛ a sagebu ŋa %s te ta %s te %s',
      'Only the poll owner can see the responses' => 'Neɛ naŋ na so o yoŋ la naŋ baŋ sage',
    );
  }

}
