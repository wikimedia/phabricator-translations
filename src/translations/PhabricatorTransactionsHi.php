<?php

final class PhabricatorTransactionsHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'कार्यक्षेत्र लॉक / छुपाएं',
      '%s marked %s inline comment(s) as done.' => '%s को %s की इनलाइन टिप्पणी (चिन्हित) के रूप में चिह्नित किया गया है|',
      'Optional instructions, shown above the form.' => 'प्रपत्र के ऊपर दिखाए गए, वैकल्पिक निर्देश|',
      'List of PHIDs to set.' => 'PHIDs की सूची सेट करने के लिए',
      'Apply remaining actions?' => 'शेष क्रियाएं लागू करें?',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s संपादित ग्राहक, जोड़ दिया %s: %s; हटा दिया %s: %s|',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'पैरामीटर "%s" में लेनदेन विवरण की सूची होनी चाहिए, लेकिन कुंजी "%s" के साथ वाला आइटम एक शब्दकोष नहीं है|',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'उपप्रकार "%s" मान्य नहीं है: उपप्रकार कुंजी में केवल लोअरकेस लैटिन अक्षर ("a" "z" के माध्य से) हो सकते हैं।',
      'Mark as "Create" Form' => '"बनाएं" फ़ॉर्म के रूप में चिह्नित करें',
      'Capability not supported!' => 'क्षमता समर्थित नहीं है!',
    );
  }

}
