<?php

final class PhabricatorPhrictionEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => 'The path to the document.',
      'No such document.' => 'No such document.',
      'Edit Older Version %s...' => 'Edit Older Version %s...',
      'DOCUMENT DIFF' => 'DOCUMENT DIFF',
      'A moved document can not be moved again.' => 'A moved document can not be moved again.',
      'Next Change »' => 'Next Change »',
      'Last Edited' => 'Last Edited',
      'Publish Draft' => 'Publish Draft',
      'Moved' => 'Moved',
      'Other document activity not listed above occurs.' => 'Other document activity not listed above occurs.',
      'Version %d of %d: ' => 'Version %s of %s: ',
      'DOCUMENT CONTENT' => 'DOCUMENT CONTENT',
      'EDIT NOTES' => 'EDIT NOTES',
      'Missing Ancestor' => 'Missing Ancestor',
      'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Retrieve information about a Phriction document.' => 'Retrieve information about a Phriction document.',
      'A document\'s subscribers change.' => 'A document\'s subscribers change.',
      'Unknown document status \'%s\'!' => 'Unknown document status \'%s\'!',
      'Overwrite Changes' => 'Overwrite Changes',
      'Can Not Delete Document!' => 'Can Not Delete Document!',
      'Revert' => 'Revert',
      'No parent/ancestor paths specified.' => 'No parent/ancestor paths specified.',
      'Unknown URI type \'%s\'!' => 'Unknown URI type \'%s\'!',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => 'Document path "%s" is not a valid path. The normalized form of this path is "%s".',
      'Stubbed' => 'Stubbed',
      'There is no document here, but you may create it.' => 'There is no document here, but you may create it.',
      'Edit Notes' => 'Edit Notes',
      'Phriction Wiki Document' => 'Phriction Wiki Document',
      'Phriction Document' => 'Phriction Document',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => 'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'To edit a wiki document, you must also be able to view all of its ancestors.',
      'Content Changes' => 'Content Changes',
      'This version of the document is already the published version.' => 'This version of the document is already the published version.',
      'Document Hierarchy' => 'Document Hierarchy',
      'More...' => 'More...',
      'A document\'s title changes.' => 'A document\'s title changes.',
      'Save and Publish' => 'Save and Publish',
      'Current Path' => 'Current Path',
      '(Untitled Document)' => '(Untitled Document)',
      'Phriction User Guide' => 'Phriction User Guide',
      '%s moved this document to %s.' => '%s moved this document to %s.',
      'Content' => 'Content',
      'Update a Phriction document.' => 'Update a Phriction document.',
      'Revert the published version of this document to an older version?' => 'Revert the published version of this document to an older version?',
      'Document Content' => 'Document Content',
      'Version %d' => 'Version %s',
      'Last Author' => 'Last Author',
      'Published document changed' => 'Published document changed',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => 'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)',
      'Can not create document because the parent document with slug %s does not exist!' => 'Can not create document because the parent document with slug %s does not exist!',
      'Edit Phriction Document Configurations' => 'Edit Phriction Document Configurations',
      'Accept Path' => 'Accept Path',
      'Content object "%s" can not be published because it belongs to a different document.' => 'Content object "%s" can not be published because it belongs to a different document.',
      'Edit Current Version %s...' => 'Edit Current Version %s...',
      'Edit this Document' => 'Edit this Document',
      'Document History: %s' => 'Document History: %s',
      'Ancestor Paths' => 'Ancestor Paths',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => 'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".',
      'Wiki Documents' => 'Wiki Documents',
      'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Edit Draft Version %s...' => 'Edit Draft Version %s...',
      'Document this content is for.' => 'Document this content is for.',
      'You are viewing an unpublished draft of this document.' => 'You are viewing an unpublished draft of this document.',
      '%s deleted this document.' => '%s deleted this document.',
      '<%s>' => '<%s>',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.',
      'An already deleted document can not be deleted.' => 'An already deleted document can not be deleted.',
      'Stub' => 'Stub',
      '%s moved this document from %s.' => '%s moved this document from %s.',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.',
      '%s published a new version of %s.' => '%s published a new version of %s.',
      'No such document exists.' => 'No such document exists.',
      'Edit Existing Document?' => 'Edit Existing Document?',
      'Read information about Phriction documents.' => 'Read information about Phriction documents.',
      'The document %s already exists. Do you want to edit it instead?' => 'The document %s already exists. Do you want to edit it instead?',
      'A deleted document can not be moved.' => 'A deleted document can not be moved.',
      'Printable Page' => 'Printable Page',
      'Welcome to Phriction' => 'Welcome to Phriction',
      'CHANGES TO DOCUMENT CONTENT' => 'CHANGES TO DOCUMENT CONTENT',
      '%s moved %s from %s' => '%s moved %s from %s',
      'This document is empty. You can edit it to put some proper content here.' => 'This document is empty. You can edit it to put some proper content here.',
      'Publish Draft?' => 'Publish Draft?',
      'A document is deleted.' => 'A document is deleted.',
      'Would you like to use the path %s instead?' => 'Would you like to use the path %s instead?',
      'Delete Document?' => 'Delete Document?',
      'Document Deleted' => 'Document Deleted',
      'Content version.' => 'Content version.',
      'Documents must have content.' => 'Documents must have content.',
      'You can not move a document to its existing location. Choose a different location to move the document to.' => 'You can not move a document to its existing location. Choose a different location to move the document to.',
      '"%s" <%s>' => '"%s" <%s>',
      'Document History' => 'Document History',
      'Draft %d' => 'Draft %s',
      'Wiki Document' => 'Wiki Document',
      'Original Change' => 'Original Change',
      'Empty Parent Document' => 'Empty Parent Document',
      'Document already exists!' => 'Document already exists!',
      '%s moved %s to %s.' => '%s moved %s to %s.',
      'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.' => 'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.',
      '« Previous Change' => '« Previous Change',
      'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.' => 'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.',
      'View Draft Version' => 'View Draft Version',
      'Edit Conflict' => 'Edit Conflict',
      '%s edited the content of %s.' => '%s edited the content of %s.',
      'This document has unpublished draft changes.' => 'This document has unpublished draft changes.',
      'Version %s vs %s' => 'Version %s vs %s',
      '%s edited the content of this document.' => '%s edited the content of this document.',
      'This document is already deleted. You must specify content to re-create the document and make further edits.' => 'This document is already deleted. You must specify content to re-create the document and make further edits.',
      'Parent Paths' => 'Parent Paths',
      '%s published a new version of this document.' => '%s published a new version of this document.',
      'You are viewing the current published version of this document.' => 'You are viewing the current published version of this document.',
      'Update the published version of this document to this newer version?' => 'Update the published version of this document to this newer version?',
      '%s changed the title from %s to %s.' => '%s changed the title from %s to %s.',
      'Publish Older Version?' => 'Publish Older Version?',
      'Hierarchy' => 'Hierarchy',
      'Save as Draft' => 'Save as Draft',
      'Edited by %s' => 'Edited by %s',
      'No Document Here' => 'No Document Here',
      'A document\'s content changes.' => 'A document\'s content changes.',
      'A moved document can not be deleted.' => 'A moved document can not be deleted.',
      'Adjust Path' => 'Adjust Path',
      'Read information about Phriction document history.' => 'Read information about Phriction document history.',
      'Test rules which run when a wiki document is created or updated.' => 'Test rules which run when a wiki document is created or updated.',
      'Welcome' => 'Welcome',
      'A stub document can not be deleted.' => 'A stub document can not be deleted.',
      'Can not move document because the parent document with slug %s does not exist!' => 'Can not move document because the parent document with slug %s does not exist!',
      '%s by %s, %s' => '%s by %s, %s',
      'Publish Older Version' => 'Publish Older Version',
      'Create this Document' => 'Create this Document',
      'This engine is used to edit Phriction documents.' => 'This engine is used to edit Phriction documents.',
      'Edits' => 'Edits',
      'Already Published' => 'Already Published',
      'Retrieve history about a Phriction document.' => 'Retrieve history about a Phriction document.',
      'Unable to load Content object with PHID "%s".' => 'Unable to load Content object with PHID "%s".',
      'Create a Phriction document.' => 'Create a Phriction document.',
      'You are viewing an older version of this document, as it appeared on %s.' => 'You are viewing an older version of this document, as it appeared on %s.',
      'Status information about the document.' => 'Status information about the document.',
      'React to wiki documents being created or updated.' => 'React to wiki documents being created or updated.',
      'Document Fields' => 'Document Fields',
      'All Content' => 'All Content',
      'Phriction Content' => 'Phriction Content',
      'Phriction Document Content' => 'Phriction Document Content',
      'Created through child' => 'Created through child',
      'Page Not Found' => 'Page Not Found',
      'New Document' => 'New Document',
      '%s stubbed out this document when creating %s.' => '%s stubbed out this document when creating %s.',
      'Empty Document' => 'Empty Document',
      'Move Here' => 'Move Here',
      'Get the content of documents or document histories.' => 'Get the content of documents or document histories.',
      'Create a new document at' => 'Create a new document at',
      'New Path' => 'New Path',
      'Phriction Documents' => 'Phriction Documents',
      'A stub document can not be moved.' => 'A stub document can not be moved.',
      'You can not create a document which does not have a parent.' => 'You can not create a document which does not have a parent.',
      'Most Recent Change' => 'Most Recent Change',
      'Really delete this document? You can recover it later by reverting to a previous version.' => 'Really delete this document? You can recover it later by reverting to a previous version.',
      'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Wiki Document %d' => 'Wiki Document %s',
      'Move Away' => 'Move Away',
    );
  }

}
