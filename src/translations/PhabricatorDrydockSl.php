<?php

final class PhabricatorDrydockSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Waiting to land revision into %s on %s...' => 'Čakanje na uveljavitev redakcije v %s na %s ...',
      'Logs' => 'Dnevniki',
      'This revision has been abandoned. Only accepted revisions may land.' => 'Ta redakcija je bila opuščena. Uveljavi se lahko samo sprejete redakcije.',
      'Search leases by resource.' => 'Iskanje najemov po viru.',
      'Already Dismissed' => 'Že zavrnjeno',
      'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.' => 'Želite opustiti to operacijo? Ne bo več prikazana, lahko pa v Drydocku poiščete dnevniške zapise.',
      'Dismiss Operation' => 'Opusti operacijo',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Želite odkloniti to pooblastitev? Objekt ne bo mogel zakupiti ali dodeliti virov, ustvarjenih s tem načrtom.',
      '<Unknown>' => '<Neznano>',
      'Already Declined' => 'Že zavrnjeno',
      'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.' => 'Prisilna prekinitev zakupa lahko zmoti delovanje  zakupnika in sproži uničenje osnovnega vira. Ni ga mogoče razveljaviti.',
      'Dismiss' => 'Opusti',
      'Already Complete' => 'Že končano',
      'Decline Authorization' => 'Odkloni pooblastitev',
      'Already Authorized' => 'Že pooblaščeno',
      'Revision Abandoned' => 'Redakcija opuščena',
      'Revision Not Accepted' => 'Redakcija ni sprejeta',
      'Search leases by owner.' => 'Iskanje najemov po lastniku.',
    );
  }

}
