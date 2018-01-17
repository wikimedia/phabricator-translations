<?php

final class PhabricatorFeedEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Call %s before publishing!',
      'POST notifications of feed events.' => 'POST notifications of feed events.',
      'Feed story does not exist.' => 'Feed story does not exist.',
      'Dictionary with various data of the story' => 'Dictionary with various data of the story',
      'All Stories' => 'All Stories',
      'Query the feed for stories' => 'Query the feed for stories',
      'Creation (Newest First)' => 'Creation (Newest First)',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.',
      'Full HTML presentation of story' => 'Full HTML presentation of story',
      '(Unable to render story of class %s for Doorkeeper.)' => '(Unable to render story of class %s for Doorkeeper.)',
      'Story has no primary object!' => 'Story has no primary object!',
      'Key \'%s\' is not a valid chronological key!' => 'Key \'%s\' is not a valid chronological key!',
      'Republishing story...' => 'Republishing story...',
      'Story is asking for an object it did not request (\'%s\')!' => 'Story is asking for an object it did not request (\'%s\')!',
      'Simple one-line plain text representation of story' => 'Simple one-line plain text representation of story',
      'Include Projects' => 'Include Projects',
      'Publish a story to the feed.' => 'Publish a story to the feed.',
      'Specify a story key to republish.' => 'Specify a story key to republish.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.',
      'Republish a feed event to all consumers.' => 'Republish a feed event to all consumers.',
      'Include Users' => 'Include Users',
      'Feed Story Failed to Render (%s)' => 'Feed Story Failed to Render (%s)',
      'Story' => 'Story',
      'Full dictionary of story data plus rendered HTML' => 'Full dictionary of story data plus rendered HTML',
      'Specify exactly one story key to republish.' => 'Specify exactly one story key to republish.',
      'You must call %s if you %s!' => 'You must call %s if you %s!',
      'Unloaded Object \'%s\'' => 'Unloaded Object \'%s\'',
      'No story exists with key "%s"!' => 'No story exists with key "%s"!',
      'Feed options.' => 'Feed options.',
      'Creation (Oldest First)' => 'Creation (Oldest First)',
      'No Stories.' => 'No Stories.',
      'Story contains only the title of the story' => 'Story contains only the title of the story',
      'Unsupported view type, possibles are: %s' => 'Unsupported view type, possibles are: %s',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.',
      'Feed Stories' => 'Feed Stories',
      'Unknown rendering target: %s' => 'Unknown rendering target: %s',
      'Include stories about projects I am a member of.' => 'Include stories about projects I am a member of.',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.',
      'Review Recent Activity' => 'Review Recent Activity',
    );
  }

}
