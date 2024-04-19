<?php

final class PhabricatorCoreEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Trying to read configuration "%s" before configuration has been initialized.' => 'Trying to read configuration "%s" before configuration has been initialised.',
      'Normalization of \'%s\'' => 'Normalisation of \'%s\'',
      'Database cluster configuration describes an invalid host ("%s", at index "%s") with an unrecognized role ("%s"). Valid roles are "%s" or "%s".' => 'Database cluster configuration describes an invalid host ("%s", at index "%s") with an unrecognised role ("%s"). Valid roles are "%s" or "%s".',
      'Analyzing tables...' => 'Analysing tables...',
      'Color' => 'Colour',
      'You have not initialized the database yet. You must initialize the database before you can adjust schemata. Run `%s` to initialize the database.' => 'You have not initialised the database yet. You must initialise the database before you can adjust schemata. Run `%s` to initialise the database.',
      'Authorized By' => 'Authorised By',
      'No tasks selected to reprioritize.' => 'No tasks selected to reprioritise.',
      '%s is already archived, and can not be reprioritized.' => '%s is already archived, and can not be reprioritised.',
      '%s was reprioritized (from "%d" to "%d").' => '%s was reprioritised (from "%s" to "%s").',
      'Edge type "%s" is not a recognized edge type.' => 'Edge type "%s" is not a recognised edge type.',
      'Database Not Initialized' => 'Database Not Initialised',
      'Optimized table (in %sms) but it had little effect.' => 'Optimised table (in %sms) but it had little effect.',
      'Analyzed %d table(s).' => 'Analysed %s table(s).',
      'No authorized blueprints.' => 'No authorised blueprints.',
      'Scoped environments were destroyed in a different order than they were initialized.' => 'Scoped environments were destroyed in a different order than they were initialised.',
      'Behavior' => 'Behaviour',
      'Authorization %d' => 'Authorisation %s',
      'Initialize storage only; do not apply patches or adjustments.' => 'Initialise storage only; do not apply patches or adjustments.',
      'Editor pattern "%s" is invalid: the pattern contains an unrecognized variable ("%s"). Use "%%%%" to encode a literal percent symbol.' => 'Editor pattern "%s" is invalid: the pattern contains an unrecognised variable ("%s"). Use "%%%%" to encode a literal percent symbol.',
      'Optimizing table "%s"."%s"...' => 'Optimising table "%s"."%s"...',
      'Storage patch "%s" specifies a "@phase" value ("%s"), but this is not a recognized phase. Valid phases are: %s.' => 'Storage patch "%s" specifies a "@phase" value ("%s"), but this is not a recognised phase. Valid phases are: %s.',
      'Refusing to redirect to local resource "%s". This URI is not formatted in a recognizable way.' => 'Refusing to redirect to local resource "%s". This URI is not formatted in a recognisable way.',
      'Colors' => 'Colours',
      'Insert mode verb "%s" is not recognized, use INSERT or REPLACE.' => 'Insert mode verb "%s" is not recognised, use INSERT or REPLACE.',
      'Reprioritized %s task(s).' => 'Reprioritised %s task(s).',
      'Storage initialized.' => 'Storage initialised.',
      'There is no database storage initialized in the current storage namespace ("%s"). Use "bin/storage upgrade" to initialize storage or use "--namespace" to choose a different namespace.' => 'There is no database storage initialised in the current storage namespace ("%s"). Use "bin/storage upgrade" to initialise storage or use "--namespace" to choose a different namespace.',
      'Hashtag normalization of "%s"' => 'Hashtag normalisation of "%s"',
      'Storage patch "%s" specifies it should apply in phase "%s", but this phase is unrecognized. Valid phases are: %s.' => 'Storage patch "%s" specifies it should apply in phase "%s", but this phase is unrecognised. Valid phases are: %s.',
      'Completed optimizations, reclaimed %s of disk space.' => 'Completed optimisations, reclaimed %s of disk space.',
      'Localization' => 'Localisation',
      'Database initialization on host "%s" applied no patches!' => 'Database initialisation on host "%s" applied no patches!',
      'Storage on host "%s" has not been initialized yet. You must initialize storage before selectively applying patches.' => 'Storage on host "%s" has not been initialised yet. You must initialise storage before selectively applying patches.',
      'Declining to synchronize static tables.' => 'Declining to synchronise static tables.',
      'Unknown serialization format \'%s\'.' => 'Unknown serialisation format \'%s\'.',
      'Analyzing table sizes (this may take a moment)...' => 'Analysing table sizes (this may take a moment)...',
      'Synchronizing static tables...' => 'Synchronising static tables...',
      'Run **%s** to initialize.' => 'Run **%s** to initialise.',
    );
  }

}
