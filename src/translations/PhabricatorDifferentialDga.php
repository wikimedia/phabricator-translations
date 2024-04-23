<?php

final class PhabricatorDifferentialDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'You can not add JIRA issues (%s) to this revision because your %s account is not linked to a JIRA account.' => 'Fo koŋ baŋ paale JIRA yɛlɛ %s eŋ a leɛkaabo ŋa bonso fo %s die daga ba liŋk JIRA die daga.',
      'Branch' => 'Leɛ.',
      'Revision' => 'Leɛ kannoo',
      'If you set this to true, patches will be attached to Differential mail (as text attachments). This will not work if you are using SendGrid as your mail adapter.' => 'Ka fo sɛte ŋa gaa yelmeŋ, pekyere na paale la a mail tɛɛtɛɛ (as text attachment). A ŋa koŋ toŋ toma ka foŋ tona ne SendGrid naŋ e fo mail adapta.',
      'You can not plan changes to this revision because it has already been closed.' => 'Fo koŋ baŋ nare tɛgebo ko a leɛkaabo ŋa bonso o ta daŋ pɔgɛɛ la.',
      'Normally, Differential revisions remain on the dashboard when they are "Accepted", and the author then commits the changes to "Close" the revision and move it off the dashboard.
    If you have an unusual workflow where Differential is used for post-commit review (normally called "Audit", elsewhere), you can set this flag to treat the "Accepted" state as a "Closed" state and end the review workflow early.
    This sort of workflow is very unusual. Very few installs should need to change this option.' => 'A senne lɛ, tɛɛtɛɛloŋ leɛkaabore kpalle la a dasibɔɔde ka ba naŋ wa "sage a" ka a sɛgerɛ pãã kɔmente a tɛgebo na "pɔge o" a leɛkaabo a kyɛ tage o yi a dasibɔɔde.
    Ka foŋ taa wɛkfuloo naŋ ba tori zie tɛɛtɛɛloŋ naŋ maŋ e posi-kɔmente leɛkaabo (ba naŋ maŋ boɔle "Audit" zie kaŋa), fo na baŋ sɛte la a flag ŋa na terɛte a "Accepted" beebo ka o e "Closed" beebo a kyɛ baare a leɛkaabo wɛkfuloo fɔŋ..
    A wɛkfuloo ŋa tɔ maŋ erɛ la. Furi awola la na boɔrɔ ka a tɛge a dairaa ŋa.',
      'Hold revision as draft.' => 'Nyɛge leɛ teɛroŋ taa ka o e ekaabo',
      'The best way to create a diff is to use the %s command-line tool.' => 'A lɛ fo naŋ na maale yel-tɛɛtɛɛ e ka fo tonne a %s wulibu-dɔlɔ boma',
      '%s retitled %s from %s' => '%s leɛbo yuori %s yineŋ %s',
      'Abandoned' => 'Bare',
    );
  }

}
