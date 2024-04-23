<?php

final class PhabricatorPhameFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Blog' => 'Blogi',
      'The author of a blog post can always view and edit it.' => 'Blogikirjoituksen kirjoittaja voi aina tarkastella ja muokata sitä.',
      'Browse Blogs' => 'Sela blogeja',
      'Create a Blog' => 'Luo blogi',
    );
  }

}
