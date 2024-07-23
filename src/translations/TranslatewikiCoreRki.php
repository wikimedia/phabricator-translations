<?php

final class TranslatewikiCoreRki
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'rki';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'ဘာသာပြန်တိမှ ထုတ်ယူရန် စာကြည့်တိုက်သို့ လမ်းကြောင်းပီးပါ။',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'အသိအမှတ်မပြုထားရေ "%%" ပုံစံ၊ "%s": %s နန့် စာတန်းကို ထုတ်ယူလို့မရပါ။',
      'NONE' => 'တစ်ခုလေ့မဟိပါ',
      'Slovenian' => 'ဆလိုဗေးနီးယန်းနိုင်ငံသား',
      'Provide a locale code with "--locale".' => '"--locale" ဖြင့် ဒေသန္တရကုဒ်ကို ပီးပါ။',
      'Ignoring string "%s"; not present in translation source file.' => '"%s" စာကြောင်းကို ထားခခြင်း; ဘာသာပြန်အရင်းအမြစ်ဖိုင်မှ မတွိ့ရပါ။',
      'Provide the path to exactly one library to export translations from.' => 'ဘာသာပြန်တိမှ ထုတ်ယူရန် စာကြည့်တိုက်သို့ လမ်းကြောင်းပီးပါ။',
      'Provide a project name to export strings under with "--as".' => '"--as" အောက်ဟိ စာကြောင်းတိ တင်ပို့ဖို့ ပရောဂျက်နာမည်ကို ပီးပါ။',
      'Raw strings' => 'Raw strings',
      'Name of the project that a translation file is being generated for.' => 'ဘာသာပြန်ဖိုင်တစ်ခုအတွက် ထုတ်ပီးနီရေ ပရောဂျက်နာမည်။',
      'Extracting library strings...' => 'စာကြည့်တိုက်လိုင်းတိကို ထုတ်ယူနီရေ...',
      'GENDER' => 'လိင်အမျိုးစား',
      'Ukrainian' => 'ယူကရိန်းနိုင်ငံသား',
      'Locale code for the generated source.' => 'ထုတ်ပီးရေ အရင်းအမြစ်အတွက် ဒေသကုဒ်။',
      'Provide a classname with "--class".' => '"--class" ဖြင့် အတန်းနာမည် တစ်ခုပီးပါ။',
      'Finnish' => 'ဖင်လန်နိုင်ငံသား',
      'Greek' => 'ဂရိနိုင်ငံသား ဂရိလူမျိုး',
      'Read %s string(s).' => '%s string(s) ကိုဖတ်ပါ။',
      'Russian' => 'ရုရှားနိုင်ငံသား',
      'Class name to generate.' => 'ထုတ်လုပ်ဖို့ အတန်းနာမည်။',
      'Frequency Data' => 'အသုံးများရေဒေတာ',
      'Provide a JSON source file with "--source".' => '"--source" ဖြင့် JSON အရင်းအမြစ်ဖိုင်ကို ပီးပါ။',
      'Generate a Phabricator translation classfile.' => 'Phabricator ဘာသာပြန် အတန်းဖိုင်ကို ဖန်တီးပါ။',
      'JSON source file containing translation strings.' => 'ဘာသာပြန်စာကြောင်းတိပါဝင်ရေ JSON အရင်းအမြစ်ဖိုင်။',
      'Export translation strings from a libphutil library.' => 'libphutil စာကြည့်တိုက်မှ ဘာသာပြန်စာတန်းတိကို ထုတ်ယူပါ။',
      'Writing data (%s, %s) to "%s"...' => 'ဒေတာ (%s၊ %s) "%s" သို့ ရွီးနီရေ...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => '"%s" ဖိုင်ကို ဖန်တီးဖို့ မျှော်လင့်ထားရေ ဒစ်ဂျစ်တယ် စာကြောင်းကို ထုတ်ယူကေလည်း ယင်းဖိုင်မျိုး မဟိမ့်ပါ။',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'တင်ပို့နီရေ ပရောဂျက်အတွက် နာမည်။ ထုတ်ယူထားရေ ဖိုင်တိကို ဒေနာမည်နန့် "ပရောဂျက်တိ/" သို့ စာရွီးပါဖို့။',
      'Used in:' => 'တွင်အသုံးပြုရေ-',
      'English strings' => 'အင်္ဂလိပ်စာတန်းတိ',
      'Context strings' => 'ဆက်စပ်စာကြောင်းတိ',
      'Provide a project name with "--project".' => 'ပရောဂျက်နာမည်ကို "--project" လို့ ပီးပါ။',
      'Variable Types: %s.' => 'ပြောင်းလဲနိုင်ရေအမျိုးအစားတိ- %s။',
      'Provide an output file with "--out".' => '"--out" နန့် အထွက်ဖိုင်ကို ပံ့ပိုးပါ။',
      'Base URI for browsing files in the project being exported.' => 'ထုတ်ယူနီရေ ပရောဂျက်ဟိ ဖိုင်တိကို ရှာဖွီခြင်းအတွက် အခြေခံ URI',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'ကြိုးတိကိုမထုတ်ယူခင် ကက်ရှ်တိကိုချဖို့ အရင်းခံထုတ်ယူရေ ကိရိယာသို့ သန့်ရှင်းရေးပြုလုပ်ပနာ အပြည့်အဝပြန်လည်တီဆောက်ပါ။ အနှေးချေ!',
      'Done.' => 'ပြီးယာ',
      'Location to write the generated translation file.' => 'ထုတ်ပီးထားရေ ဘာသာပြန်ဖိုင်ကို ရွီးသားရန် တည်နီရာ။',
      'PLURAL' => 'PLURAL',
    );
  }

}
