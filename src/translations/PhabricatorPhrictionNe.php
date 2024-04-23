<?php

final class PhabricatorPhrictionNe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ne';
  }

  protected function getTranslations() {
    return array(
      'No such document.' => 'कुनैपनि कागजात फेला परेन',
      'Last Edited' => 'अन्तिम सम्पादन',
      'Moved' => 'सारिएको',
      'Other document activity not listed above occurs.' => 'अन्य कागजात गतिविधि माथि सूचीबद्ध छैन',
      'DOCUMENT CONTENT' => 'कागजातको सामग्री',
      'Edit Conflict' => 'सम्पादन द्वन्द',
      'Edits' => 'सम्पादनहरू',
    );
  }

}
