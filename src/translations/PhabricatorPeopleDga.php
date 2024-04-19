<?php

final class PhabricatorPeopleDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      '[%s] Account Login Link' => '[%s] die daga kpeɛbo liŋk',
      '[%s] Account Password Link' => '[%s] Die daga gbori biri liŋk',
      '[%s] Username Changed' => '[%s] tontona yuori tɛgɛɛ la',
      '[%s] Primary Address Changed' => '[%s] peramere adrɛse tɛgɛɛ la',
      'Get Well Soon,
    %s' => 'Sa weoŋ,%s',
      'After you have set a password, you can log in again in the future by going here:' => 'Ka foŋ wa sɛte gbori biri baare, fo na baŋ la maale kpɛ la a puoriŋ ka foŋ gaa kyɛ:',
      'Send "Welcome to %s" email with login instructions.' => 'Toɔle "waabo yaane ko %s" eemail ne kpeɛbo mannewulii.',
      '[%s] Welcome to %s' => '[%s] Ne fo kyɛ %s waabo yaane',
      'Enable %s? They will be able to access this server and receive email again.' => 'Eŋ %s? Ba na tõɔ asɛses la a sɛva ŋa a la maale deɛ eemail.',
      'You can use this login link to regain access to your account:
      %s
    ' => 'Fo na baŋ de la kpeɛbo liŋk ŋa na leɛnyɛ asɛses gaa fo die daga:
      %s',
      'To log in, follow this link and set a password:' => 'Ka foŋ na kpɛ, tu liŋk ŋa a sɛte gbori biri:',
      'Remove %s as an administrator? They will no longer be able to perform administrative functions on this server.' => 'Iri %s ka o ta la e administeeta? Ba ko la baŋ tõɔ toŋ administeeti tontonne a sɛva ŋa poɔ.',
      'This email address (%s) is no longer your primary email address. Going forward, all email will be sent to your new primary email address (%s).' => 'A eemail adrɛse ŋa (%s) ba la e fo peramere eemail adrɛse. A yi ŋaa kyɛ gɛrɛ, eemail zaa na maŋ toɔle wa la fo peramere eemail adrɛse paalaa (%s).',
      'This is now your primary email address (%s). Going forward, all email will be sent here.' => 'Pampana ŋa la fo peramere eemail adrɛse (%s). A yi ŋaa kyɛ gɛrɛ, eemail zaa na maŋ toɔle wa la kyɛ.',
      '[%s] Email Verification' => '[%s] Email vɛrefikaaseŋ',
      'Empower %s as an administrator? They will be able to create users, approve users, make and remove administrators, delete accounts, and perform other administrative functions on this server.' => 'Ko %s sori ka o e administeeta? Ba na baŋ tõɔ kuri la tontonneba, sage tontonneba, maale ane iri adminiteetare, sãã die dabare, ane toŋ adminiteeti tontonne mine a sɛva ŋa eŋɛ.',
      'You can use this link to reset your password:
      %s
    ' => 'Fo na baŋ tu la a liŋk ŋa a leɛ sɛte fo gbori biri:
    %s',
      'Your %s account (%s) has been approved by %s. You can login here:' => 'Fo %s die daga (%s) sage de %s o la. Fo na baŋ kpɛ la kyɛ',
      '**Why do bot accounts need an email address?**
    Although bots do not normally receive email, they can interact with other systems which require an email address. Examples include:
      - If the account takes actions which //send// email, we need     an address to use in the //From// header.
      - If the account creates commits, Git and Mercurial require     an email address for authorship.
      - If you send email //to// this server on behalf of the     account, the address can identify the sender.
      - Some internal authentication functions depend on accounts     having an email address.
    The address will automatically be verified, so you do not need to be able to receive mail at this address, and can enter some invalid or nonexistent (but correctly formatted) address like `bot@yourcompany.com` if you prefer.' => '**Bonzuiŋ ka boti die daga seŋ ka o taa eemail adrɛse?**
    Ane a zaa ka boti ba maŋ dereɛ eemail, a na baŋ yeli la yɛlɛ ne sisitem yobo naŋ derɛ eemail adrɛse. Aseŋ:
      - ka a dieŋ e eebo kaŋa naŋ na //send// eemail, te na boɔrɔ la adrɛse na toŋ ne a //From// zu poɔ.
      - ka a die daga kuri kɔment, Git ane Mercurial na boɔrɔ la eemail adrɛse na ko soora.
      - ka foŋ toɔle eemail //to// sɛva ŋa a die daga yuori eŋɛ, a adrɛse na baŋ wuli la a toɔla.
      - entɛɛnal ɔtentikaasenne mine tontonne maŋ are la die dagere naŋ taa eemail adrɛse.
    A adrɛse na vɛrefaa la  omeŋɛ, a lɛ na a ba seŋ ka fo na baŋ de mail a adrɛse ŋa poɔ, ane fo na baŋ kpɛ ne la adrɛse na ba tori bee ba tona (but correctly formatted) aŋa `bot@yourcompany.com` ka foŋ boɔrɔ.',
      'Love,
    %s' => 'Nombu,
    %s',
      '%s Account "%s" Approved' => '%s Die daga "%s" sage de',
      'Allow %s to access this server?' => 'Bare o vuo %s ka o asɛses sɛva ŋa?',
      'Create a standard user account. These users can log in, use the web interface and API, and receive email.' => 'Kuri standaate tontona die daga. Tontonneba bama na baŋ kpɛ la, de a wɛb niŋe ane API, a nyɛ eemail.',
      'After you set up your account, you can log in again in the future by going here:' => 'Ka foŋ wa sɛt fo die daga yɛlɛ baare, fo na baŋ la maale kpɛ la nandaare ka foŋ gaa kyɛ:',
      'Disable %s? They will no longer be able to access this server or receive email.' => 'ŋmaa %s? Ba ko la baŋ tõɔ asɛses a sɛva ŋa bee nyɛ eemail.',
      '%s (%s) has changed your %s username.' => '%s (%s) leɛre la fo %s tontoŋyuori.',
    );
  }

}
