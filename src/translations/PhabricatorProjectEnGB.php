<?php

final class PhabricatorProjectEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      '%s set this project\'s color to %s.' => '%s set this project\'s colour to %s.',
      'Edit Background Color' => 'Edit Background Colour',
      'New project tag color.' => 'New project tag colour.',
      'Column status "%s" is unrecognized, valid statuses are: %s.' => 'Column status "%s" is unrecognised, valid statuses are: %s.',
      'Adjust project colors.' => 'Adjust project colours.',
      '%s set the color for %s to %s.' => '%s set the colour for %s to %s.',
      'Project tag color.' => 'Project tag colour.',
      'Information about the project color.' => 'Information about the project colour.',
      'Organization' => 'Organisation',
      'Change the project tag color.' => 'Change the project tag colour.',
      'Configuration must be a list of project color specifications.' => 'Configuration must be a list of project colour specifications.',
      'Background Color' => 'Background Colour',
      'Solid Colors' => 'Solid Colours',
      'Allows you to relabel project colors.
    The list of available colors can not be expanded, but the existing colors may
    be given labels.
    Configure a list of color specifications. Each color specification should be a
    dictionary, which may contain these keys:
      - `key` //Required string.// The internal key identifying the color.
      - `name` //Required string.// Human-readable label for the color.
      - `default` //Optional bool.// Selects the default color used when creating
        new projects. Exactly one color must be selected as the default.
    You can look at the default configuration below for an example of a valid
    configuration.' => 'Allows you to relabel project colours.
    The list of available colours can not be expanded, but the existing colors may
    be given labels.
    Configure a list of colour specifications. Each colour specification should be a
    dictionary, which may contain these keys:
      - `key` //Required string.// The internal key identifying the colour.
      - `name` //Required string.// Human-readable label for the color.
      - `default` //Optional bool.// Selects the default color used when creating
        new projects. Exactly one colour must be selected as the default.
    You can look at the default configuration below for an example of a valid
    configuration.',
      'Two different colors ("%s", "%s") are marked as the default color. Only one color may be marked as the default.' => 'Two different colours ("%s", "%s") are marked as the default colour. Only one colour may be marked as the default.',
      'Add one or more projects to the object by listing their hashtags. Separate projects with spaces. For example, use `!projects #ios #feature` to add both related projects.
    Projects which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any projects.' => 'Add one or more projects to the object by listing their hashtags. Separate projects with spaces. For example, use `!projects #ios #feature` to add both related projects.
    Projects which are invalid or unrecognised will be ignored. This command has no effect if you do not specify any projects.',
      'Project colors must include one color marked as the "%s" color, but no such color exists.' => 'Project colours must include one colour marked as the "%s" colour, but no such colour exists.',
      'Change Background Color' => 'Change Background Colour',
      'Choose Icon and Color...' => 'Choose Icon and Colour...',
      'Icon special attribute "%s" is not valid. Recognized special attributes are: %s.' => 'Icon special attribute "%s" is not valid. Recognised special attributes are: %s.',
      '%s changed the background color of the project workboard.' => '%s changed the background colour of the project workboard.',
      'Project colors must have unique keys, but two icons share the same key ("%s").' => 'Project colours must have unique keys, but two icons share the same key ("%s").',
      'Color key "%s" is not a valid color key. The supported color keys are: %s.' => 'Colour key "%s" is not a valid colour key. The supported colour keys are: %s.',
      'Project name, hashtags, icon, image, or color changes.' => 'Project name, hashtags, icon, image, or colour changes.',
      'Use Icon and Color' => 'Use Icon and Colour',
    );
  }

}
