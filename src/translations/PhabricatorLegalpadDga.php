<?php

final class PhabricatorLegalpadDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      '%s:
    This email address was used to sign a Legalpad document in %s:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ' => '%s:
    A emaali aderesi la ka ba da saane neŋ a ligaalpaadi documen a %s:
    %s
    Sɔroo la peɛre a fo emaali aderese kyɛ sage a deɛbo ayi a liŋki neɛbo.
    %s
    A fo saane ba e kpɛ soŋ ka fooŋ ba baare a peɛre kaa nyɛ yeltuuri.
    Fo naŋ toɔŋ leɛ kaa nyɛ la a dokumen kyɛ:
    %s',
      'Document signers' => 'Gampɔle daga gologoloŋ',
      'Legalpad Document Body' => 'Ligaalpaadi dokumen eŋeŋ',
      'Read information about legalpad document signatures.' => 'Kanne a duori kyaare neŋ ligaapaadi dokumen saane',
      'Get the full content for each document.' => 'Bɔ a yelzu ko a dokumen kaŋa zaa',
      'The PHID of the signer' => 'A PHID a ko neɛ naŋ na neɛ o nuu',
      'This user who created this document' => 'A tontonnaa na naŋ maale a dokumen',
      'The name used by the signer.' => 'A yuori na naŋ toŋ neŋ a saana',
      'Create documents and track signatures.' => 'Maale dokumen sere ane teraki saane',
      'Signature Required to Log In' => 'Saane seŋ neŋ la kpeɛbo',
      'Legalpad Signature' => 'Ligaalpaadi saaneŋ',
      'The email used by the signer.' => 'A emaali naŋ toŋ ne a saana',
      'Whether or not this signature is an exemption' => 'Fo boɔrɔ bee ba boɔrɔ saane eɛ la iri baroo',
      'Search for signatures with a name containing the given string.' => 'Peɛre bɔ a saane a neŋ a yuori naŋ taa a sitiringin',
      'The PHID of the document' => 'A PHID a ko a gama',
      'The number of versions of this document' => 'A nɔmba ko vɛɛsi ko a dokumen',
      'Search for signatures on the given documents' => 'Peɛre bɔ a saane a dokumen mine kaŋa',
      'The title of this document' => 'A dokumen piiluu',
      'Get the signer list for the project.' => 'Bɔ a saaneba boma ko a porogyɛ',
      'Whether signatures on this doc are required to use this install' => 'Ka saane a dokumen boɔrɔ la entɔɔle',
      'Search for signatures with an email containing the given string.' => 'Peɛre bɔ a saane neŋ a emaali naŋ taa tagebo mine',
      'The PHID of the user who granted the exemption' => 'A PHID ko a tontonnaa naŋ boɔrɔ a kaa iruŋ',
    );
  }

}
