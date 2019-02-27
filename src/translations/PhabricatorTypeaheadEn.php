<?php

final class PhabricatorTypeaheadEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Typeahead Results',
      'Typeahead' => 'Typeahead',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'This datasource ("%s") can not evaluate the function "%s(...)".',
      'Function Help' => 'Function Help',
      'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s' => 'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s',
      'All arguments to "%s(...)" must be integers, found "%s" in position %d.' => 'All arguments to "%s(...)" must be integers, found "%s" in position %s.',
      'Invalid Parameters' => 'Invalid Parameters',
      'Source Class' => 'Source Class',
      'Raw Query' => 'Raw Query',
      'Token Results (%s)' => 'Token Results (%s)',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => 'Configured datasource class "%s" must be a valid subclass of "%s".',
      'Token Name' => 'Token Name',
      'Reference: Advanced Functions' => 'Reference: Advanced Functions',
      'Image URI' => 'Image URI',
      'Select' => 'Select',
      'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.',
      'Display Name' => 'Display Name',
      'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.',
      'This source is not usable directly.' => 'This source is not usable directly.',
      'Unable to parse function and arguments for token "%s".' => 'Unable to parse function and arguments for token "%s".',
      'Token Query' => 'Token Query',
      'Invalid Function: %s' => 'Invalid Function: %s',
      'More Results' => 'More Results',
      'Browse Objects' => 'Browse Objects',
      'Typeahead Function Help' => 'Typeahead Function Help',
      'Sprite' => 'Sprite',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s',
      'Function Quick Reference' => 'Function Quick Reference',
      'Constraints for input "%s".' => 'Constraints for input "%s".',
      'Auto' => 'Auto',
      'You reach the edge of the abyss.' => 'You reach the edge of the abyss.',
      'Tokenization of "%s"' => 'Tokenization of "%s"',
      'Browse Numbers' => 'Browse Numbers',
      'Priority Type' => 'Priority Type',
      'Using Typeahead Functions' => 'Using Typeahead Functions',
    );
  }

}
