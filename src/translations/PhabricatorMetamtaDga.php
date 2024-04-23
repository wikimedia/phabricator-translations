<?php

final class PhabricatorMetamtaDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'This mail is addressed to the public email address of an object ("%s"), but public replies are not enabled on this server. An administrator may have recently disabled this setting, or you may have replied to an old message. Try replying to a more recent message instead.' => 'A maali ŋa aderesi a pɔbiliki emaali aderesi a ɔɔgyɛte (\'%s\'\'), kyɛ pɔbiliki sagebo ba sage a sɛɛva ŋa. Aminisiterata naŋ toɔŋ baŋ toɔŋ pɛgɛɛ a ŋaa sɛɛtere na, bee fo naŋ baŋ iri la a duori koroŋ na. Toɔŋ iree a duori saama na.',
      'List outbound messages.' => 'Leɛ yiibu yɛlɛ duoroo',
      'Your account ("%s") has not been approved yet. You can not interact over email until your account is approved.' => 'A fo akante (\'\'%s\'\') ba nyɛ sagebo sɛre. Fo koŋ toɔŋ yeli yɛlɛ yineŋ a emaali ka fo akante wa sage.',
      'This mail can not be processed because no application knows how to handle it. Check that the address you sent it to is correct.' => 'A mail ŋa koŋ baŋ gaa toɔri bonso gampɛle zaa ba baŋne a bee taa a. Kaa a addressee fo naŋ de tere tu la sori.',
      'Your account ("%s") is disabled, so you can not interact with over email.' => 'A fo akante (\'\'%s\'\') pɔgɛɛ, azuiŋ fo koŋ toɔŋ laŋ erɛ neŋ a emaali.',
      'Your email to %s was not processed, because an error occurred while
    trying to handle it:
    %s
    -- Original Message Body -----------------------------------------------------
    %s
    -- Original Message Headers --------------------------------------------------
    %s
    ' => 'A fo emaali %s da nyɛɛ eebo, bonso yelbalaa mine da eɛɛ kyɛ boɔrɔ ka o taa o:
    %s
    -- Meŋɛ duoro eŋgbani-----------------------------------------------------
    %s
    -- Meŋɛ duoro yelzu --------------------------------------------------
    %s
    A leɛroo a Dagaare poɔŋ.',
      'Sent by %s' => 'De yi %s',
      'Generated by Server' => 'Piilii yineŋ sɛɛva',
      'Mail From Self' => 'Meŋɛ mail daga',
      'Used if the "From:" address does not map to a user account. Setting a default author will allow anyone on the public internet to create objects by sending email to this address.' => 'Toŋ neŋ kaa a \'\'yineŋ:\'\' aderese ba tu a tontonnaa a akante. Sɛɛte a defaali sɛgerɛ naŋ sagɛɛ a entanɛ zaa ka maale a boma a yi emaali sɛɛdi a aderese ŋa',
      'List inbound messages.' => 'Yɛlɛ naŋ ba',
    );
  }

}
