<?php

final class PhabricatorDrydockDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Waiting For Reclamation' => 'Kyɛllɛ a yiibu',
      'No enabled blueprints exist with a blueprint class that can plausibly allocate resources to satisfy the requested lease.' => 'Yuobu leɛ maaloo ba tona neŋ a leɛ maaloo klaasi na toɔŋ nyɛ  tontonneba nyaamo
    a toɔŋ nyɛ a sɔroo wagere  boɔbo.',
      'Activation complete. Leases are permanent until manually released with:' => 'Ateveete baaree. Toma zie eɛ la pamenante ka a manuuli wa iri tere neŋ:',
      'Leases activated in %sms.' => 'Boma tomo piilee neŋ %sms',
      'When this diff was generated, the server was running an older version of the software which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'A tɛɛtɛɛloŋ na naŋ da Maale, a saseɛ miri da tona vɛɛse koraa a sɔfe-wɛɛ poɔŋ naŋ na ba sage de zibalɛɛ mine, lɛ zuiŋ a leɛbo da ba tage gaa toɔre zibalɛɛ mine. Leɛbo naŋ tage gaa yelbalɛɛ mine kyɛ baŋ gaa a saseɛ miri poɔŋ',
      'Release all resources. Dangerous!' => 'Iri a boma zaa. Naŋ taa faaloŋ.',
      'Value provided to "--count" must be a nonzero, positive number.' => 'Namba naŋ tere ko "--count" naŋ e a zagela, namba toroŋ.',
      'Waiting For Activation' => 'Kyɛlɛ la voɔɔ',
      'Unable to parse argument to "--until".' => 'Naŋ ba toɔŋ leɛ tonne tagetaa he tɔ \'\'--te tɔ\'\'.',
      'Specified blueprint "%s" is not capable of satisfying the configured lease.' => 'Kaa iri sɛgere buluu \'\'%s\'\' ba toɔŋ semmo ko wagere kaŋa',
      'Execute a query with identifiers before getting the identifier map.' => 'Maale a soobo neŋ wulwuli mine kyɛ baŋ nyɛ a wulwuli mape',
      'No leases selected for release.' => 'Vo-fee zaa ba paale kyaare a iribu',
      'Waiting for reclamation of resources: %s.' => 'Kyɛllɛ ko leɛ deebo ko boma: %s.',
      'Waiting for daemons to activate leases...' => 'Kyɛllɛ a daemons ka o piili tona...',
      'Waiting for activation of resources: %s.' => 'Kyɛllɛ a tontomboma piiluu: %s.',
      'Lease a given number of identical resources.' => 'Vo- fee kaŋa ko yele yitaa mine.',
      'Blueprint "%s" could not be loaded. Try a blueprint ID or PHID.' => 'Leɛ maaloo \'\'%s\'\' ba toɔŋ nyɛ emmbo. E a leɛ maaloo ID aneŋ PHID nyɛ',
      'Can not issue a query with an empty identifier list.' => 'Koŋ toɔŋ de tere sooro aneŋ yeli zagelaa mine',
      'Reading JSON attributes from stdin...' => 'Kanna JSON yɛlɛ yineŋ stdin...',
      'No resources selected for release.' => 'Boŋkaŋa zaa ba nyɛ iribu a deterebo eŋɛ',
      'Use "--lease" to specify a lease.' => 'De \'\'--wagere\'\' te ta a wulli a wagere.',
      'Attribute "repositories.map" should be a map of repository specifications.' => 'Kaa bɔ \'\'bombinne. bambo magere\'\' seŋ ka o e bambo magere ko bombinne yelbalaa.',
      'Drydock Lease %d' => 'Maaloo toma zie %s',
      'Specify which resources you want to release. See "--help" for guidance.' => 'Kaa iri toŋ boma fo naŋ na iri. Nyɛ \'\'--sommo\'\' kyaare wulluu.',
      'Lease resources from a specific blueprint.' => 'Toma zie tontonneba yi a bluupriinti kaŋa.',
      'Working copy lease has invalid attribute "%s".' => 'Toma de yi zie kaŋa vo fee kaŋa taa la yel-saane \'\'%s\'\'',
      'Requested' => 'Sorebo',
      'Release all leases. Dangerous!' => 'Iri a wagere sere zaa. Yelferaa la!',
      'Blueprint "%s" is specified more than once (as "%s" and "%s").' => 'Toma zie \'\'%s\'\' wullee ŋa ( a \'\'%s\'\' ane \'\'%s\'\')',
      'Leases queued for activation:' => 'Toma zie kɔr',
      'Select which leases you want to release. See "--help" for guidance.' => 'Iri toma zie na fo naŋ na de tere. Nyɛ \'\'--sommo\'\' de guubu.',
      'Working copy lease is missing required attribute "%s".' => 'Tona a toma zie ba nyɛrɛ a boɔbo atiributi \'\'%s\'\'',
      'Drydock Resource %d' => 'Maaloo boma %s',
      'Specify a resource type with "--type".' => 'Wulli a tontomboma parɛɛ neŋ \'\'--parɛɛ\'\'',
      'No known blueprint class can ever allocate the specified lease. Check that the resource type is spelled correctly.' => 'Leɛ maaloo klaasi ba bammo koŋ baŋ nyɛ a o meŋɛ toma zie. Kaa nyɛ a tontonneba parɛɛ na sɛgebo toree la.',
    );
  }

}
