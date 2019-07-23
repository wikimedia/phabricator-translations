<?php

final class PhabricatorLipsumRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'Argomende "%s" non ge s\'accocchie cu \'u nome de le generature.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => '\'Nu generatore lipsum jè reggistrate cu \'a chiave "%s". Sta chiave jè reservate.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Carecamende de \'n\'utende a uecchije sciute a male. E\' abbesogne de generà cchià utinde de test apprime.',
      'Generate objects without prompting for confirmation.' => 'Genere oggette senze cercà \'a conferme.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Non ge se pà carecà \'u simbole %s: sta classe non g\'esiste.',
      'Generator ("%s") was unable to generate an object.' => 'Generatore ("%s") non ge riesce a generà \'n\'oggette.',
      'OOPS' => 'Azz',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Stu comande genere date de test sindedice, \'ngluse le cunde utende. Jè pruggettate pe l\'ause jndr\'à ambiende de sveluppe accussì da putè testà le funziune cchiù facilmende. Non g\'esiste \'nu mode semblice pe scangellà ste date o annullà le effette de stu comande. Ce \'u lange jndr\'à \'n\'ambiende de produzione, jidde inquine le date tune cu \'nu sbuènne de rummate ca non ge segnifeche ninde e ca non ge puè scangellà.',
      'Generate synthetic test objects.' => 'Genere oggette de test sindetece.',
      'class' => 'classe',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Stoche a genere oggette de test sindetece pe sembre. Ause ^C pe fermà quanne si soddisfatte.',
      'Generated "%s": %s' => 'Generate "%s": %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Scacchie \'u tipe o le tipe de date de test ca vuè ccu genere, o scacchie "%s".',
      'Generate objects as quickly as possible.' => 'Genere oggette cchiù veloce possibbele.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'L\'Argomende "%s" jè ambigue, e s\'accocchie cu cchiù generature: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum jè \'nu strumende de sveluppe e test e pò sulamende essere langiate sus a installazziune jndr\'à modalità sveluppatore. Abbiltie "%s" jndr\'à configuraziona toje e abbilite lipsum.',
      'Selected generators: %s.' => 'Generature scacchiate: %s',
      'GENERATORS' => 'GENERATURE',
      'Are you sure you want to generate piles of garbage?' => 'Sì secure ca vuè generà mundagne de rummate?',
    );
  }

}
