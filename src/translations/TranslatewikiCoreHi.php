<?php

final class TranslatewikiCoreHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'एक लाइब्रेरी का पथ प्रदान करें जहाँ से अनुवाद को निर्यात किया जाएगा।',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'अपरिचित "%%" पैटर्न वाला स्ट्रिंग एक्सट्रैक्ट न किया जा सका, "%s": %s।',
      'NONE' => 'कोई नहीं',
      'Provide a locale code with "--locale".' => '"--locale" से एक स्थानीयकरण कोड प्रदान करें।',
      'Ignoring string "%s"; not present in translation source file.' => 'स्ट्रिंग "%s" को अनदेखा किया; अनुवाद स्रोत फ़ाइल में मौजूद नहीं है।',
      'Provide the path to exactly one library to export translations from.' => 'सिर्फ एक ही लाइब्रेरी का पथ प्रदान करें जहाँ से अनुवाद को निर्यात किया जाएगा।',
      'Provide a project name to export strings under with "--as".' => '"--as" से एक परियोजना का नाम प्रदान करें जिसके अंतर्गत स्ट्रिंग्स को निर्यात किया जाएगा।',
      'Raw strings' => 'रॉ स्ट्रिंग्स',
      'Name of the project that a translation file is being generated for.' => 'परियोजना का नाम जिसके लिए अनुवाद फ़ाइल बनाया जा रहा है।',
      'Extracting library strings...' => 'लाइब्रेरी से स्ट्रिंग्स एक्सट्रैक्ट हो रहे हैं...',
      'GENDER' => 'लिंग',
      'Locale code for the generated source.' => 'बनाए गए स्रोत के लिए स्थानीयकरण कोड।',
      'Provide a classname with "--class".' => '"--class" से एक classname प्रदान करें।',
      'Read %s string(s).' => '%s स्ट्रिंग्स/स्ट्रिंग्स पढ़ें।',
      'Class name to generate.' => 'बनाने के लिए क्लास का नाम।',
      'Frequency Data' => 'आवृत्ति की डेटा',
      'Provide a JSON source file with "--source".' => '"--source" से एक JSON स्रोत फ़ाइल प्रदान करें।',
      'Generate a Phabricator translation classfile.' => 'एक Phabricator अनुवाद classfile बनाएँ।',
      'JSON source file containing translation strings.' => 'JSON स्रोत फ़ाइल जिसमें अनुवाद स्ट्रिंग्स हैं।',
      'Export translation strings from a libphutil library.' => 'एक libphutil लाइब्रेरी से अनुवाद स्ट्रिंग्स निर्यात करें।',
      'Writing data (%s, %s) to "%s"...' => 'डेटा (%s, %s) को "%s" में लिखा रहा है...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'फ़ाइल "%s" बनाने के लिए लाइब्रेरी से स्ट्रिंग एक्सट्रैक्ट करने की अपेक्षा की थी, मगर ऐसा कोई फ़ाइल मौजूद नहीं है!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'परियोजना का नाम जिसे निर्यात किया जा रहा है। निर्यात किए गए फ़ाइलों को उस नाम से "projects/" के नीचे लिखा जाएगा।',
      'Used in:' => 'इस्तेमाल:',
      'English strings' => 'अंग्रेज़ी स्ट्रिंग्स',
      'Context strings' => 'प्रसंग के स्ट्रिंग्स',
      'Provide a project name with "--project".' => '"--project" से परियोजना का एक नाम प्रदान करें।',
      'Variable Types: %s.' => 'वेरिएबल के प्रकार: %s।',
      'Provide an output file with "--out".' => '"--out" से एक आउटपुट फ़ाइल प्रदान करें।',
      'Base URI for browsing files in the project being exported.' => 'निर्यात किए जा रहे परियोजना में फ़ाइलें खोजने के लिए जड़ URI।',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'स्ट्रिंग्स एक्सट्रैक्ट करने से पहले पूरी संरचना फिर से बिल्ड करने के लिए एक्सट्रैक्टर पर --clean पास करें। काफ़ी धीमा है!',
      'Done.' => 'पूर्ण हुआ।',
      'Location to write the generated translation file.' => 'बनाया गया अनुवाद फ़ाइल लिखने का स्थान।',
      'PLURAL' => 'बहुवचन',
    );
  }

}
