<?php

final class PhabricatorPhameDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Comments are disabled for this post. Edit it anyway?' => 'Kɔmentere ŋmaaɛ la ko a posi ŋa. Maale o eŋ ane a lɛ zaa?',
      'Use the same policy as the parent blog.' => 'De a poolisi na ne o zu ka a dɔgereba bolɔge.',
      'inherit from blog' => 'De yi bolɔge',
      'You can not interact with this post because it is locked.' => 'Fo koŋ baŋ toŋ ne a posi ŋa bonso o lareɛ la.',
      'Edit Locked Post' => 'Maale larebo posi eŋ',
      'Same as Blog' => 'Neŋ o zu aŋa bolɔge',
      'Comments have been disabled for this post.' => 'Kɔmente ŋmaaɛ la ko a posi ŋa.',
      'Post Locked' => 'Posi a larebo',
    );
  }

}
