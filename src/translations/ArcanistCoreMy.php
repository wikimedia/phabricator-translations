<?php

final class ArcanistCoreMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'ဖိုင်အပ်လုဒ်လုပ်ရာတွင် မအောင်မြင်သောကြောင့် ရပ်ဆိုင်းလိုက်ပါသည်။ binary အပ်လုဒ်များကို ကျော်ရန် %s အသုံးပြုနိုင်ပါသည်။',
  'Ref "%s" does not exist in remote "%s".' => 'ရည်ညွှန်းချက် " %s " သည် အဝေးထိန်း " %s " တွင် မရှိပါ။',
  'Flexible Heredoc and Nowdoc is not available before PHP 7.3.' => 'PHP 7.3 မတိုင်မီ Flexible Heredoc နှင့် Nowdoc တို့ကို ရရှိနိုင်ခြင်းမရှိပါ။',
  'This process has PID %d. Acquiring lock...' => 'ဒီလုပ်ငန်းစဉ်မှာ PID %d ရှိတယ်။ သော့ရယူနေတယ်...',
  'This working copy is associated with the %s repository.' => 'ဤအလုပ်လုပ်နေသောမိတ္တူသည် %s repository နှင့်ဆက်စပ်နေသည်။',
  'Lint Disabler' => 'အမွေးအမှင် ပိတ်ခြင်း',
  'Call to "posix_getpgid(...)" failed!' => '"posix_getpgid(...)" သို့ ခေါ်ဆိုခြင်း မအောင်မြင်ပါ။',
  'The "squash" strategy collapses multiple local commits into a single commit when publishing. It produces a linear published history (but discards local checkpoint commits). This is the default strategy.' => '"squash" ဗျူဟာသည် publish လုပ်သည့်အခါ local commit များစွာကို commit တစ်ခုတည်းအဖြစ် ပြိုကွဲစေသည်။ ၎င်းသည် linear publish history ကို ထုတ်လုပ်ပေးသည် (သို့သော် local checkpoint commit များကို စွန့်ပစ်သည်)။ ၎င်းသည် default ဗျူဟာဖြစ်သည်။',
  'Call Conduit API methods.' => 'Conduit API နည်းလမ်းများထံ ခေါ်ဆိုပါ။',
  'Symbol "%s" does not identify a valid revision.' => '"%s" သင်္ကေတသည် တရားဝင်ပြင်ဆင်မှုကို မဖော်ပြပါ။',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => '%3$s မှာ %s ဒါမှမဟုတ် %s ကို တိုက်ရိုက်မခေါ်ပါနဲ့။ အဲဒီအစား %4$s ဒါမှမဟုတ် %5$s ကို ခေါ်ပါ။',
  'A linter for Composer related files.' => 'Composer နှင့်သက်ဆိုင်သောဖိုင်များအတွက် linter တစ်ခု။',
  '"%s" (%s)' => '"%s" (%s)',
  'Saved "%s" as "%s".' => '"%s" ကို "%s" အဖြစ် သိမ်းဆည်းလိုက်ပါပြီ။',
  'Night has fallen. The moon overhead is waxing, and provides just enough light that you can make out your surroundings. It is quite cold.' => 'ညရောက်ပြီ။ ခေါင်းပေါ်မှာ လက တဖြည်းဖြည်း မှိန်လာပြီး ပတ်ဝန်းကျင်ကို မြင်နိုင်လောက်အောင် အလင်းရောင် လုံလောက်စွာ ပေးစွမ်းနေတယ်။ အတော်လေး အေးတယ်။',
  '(This message was raised at line %s, but the file only has %s line(s).)' => array(
    
    array(
      '(ဤမက်ဆေ့ချ်ကို  %s၊ လိုင်းတွင် ထုတ်ဖော်ပြသခဲ့သော်လည်း ဖိုင်တွင် %s  လိုင်း) သာ ရှိပါသည်။',
      '(ဤမက်ဆေ့ချ်ကို  %s၊ လိုင်းတွင် ထုတ်ဖော်ပြသခဲ့သော်လည်း ဖိုင်တွင် %s လိုင်းများ) သာ ရှိပါသည်။',
    ),
  ),
  'Not parsing!' => 'ခွဲခြမ်းစိတ်ဖြာတာ မဟုတ်ဘူး။',
  'Portuguese (Portugal)' => 'ပေါ်တူဂီ (Portugal)',
  'Create an alias from __command__ to __target__ (optionally, with __options__).

Aliases allow you to create shorthands for commands and sets of flags you
commonly use, like defining "arc draft" as a shorthand for "arc diff --draft".

**Creating Aliases**

You can define "arc draft" as a shorthand for "arc diff --draft" like this:

  $ arc alias draft diff -- --draft

Now, when you run "arc draft", the command will function like
"arc diff --draft".

<bg:yellow> NOTE: </bg> Make sure you use "--" before specifying any flags you
want to pass to the command! Otherwise, the flags will be interpreted as flags
to "arc alias".

**Listing Aliases**

Without any arguments, "arc alias" will list aliases.

**Removing Aliases**

To remove an alias, run:

  $ arc alias <alias-name>

You will be prompted to remove the alias.

**Shell Commands**

If you begin an alias with "!", the remainder of the alias will be invoked as
a shell command. For example, if you want to implement "arc ls", you can do so
like this:

  $ arc alias ls \'!ls\'

When run, "arc ls" will now behave like "ls".

**Multiple Toolsets**

This workflow supports any toolset, even though the examples in this help text
use "arc". If you are working with another toolset, use the binary for that
toolset define aliases for it:

  $ phage alias ...

Aliases are bound to the toolset which was used to define them. If you define
an "arc draft" alias, that does not also define a "phage draft" alias.

**Builtins**

You can not overwrite the behavior of builtin workflows, including "alias"
itself, and if you install a new workflow it will take precedence over any
existing aliases with the same name.' => '__command__ မှ __target__ အထိ alias တစ်ခု ဖန်တီးပါ (ရွေးချယ်နိုင်သည်၊ __options__ ဖြင့်)။

Aliases များသည် သင်
အသုံးများသော command များနှင့် flags များအတွက် shorthands များကို ဖန်တီးခွင့်ပြုသည်၊ ဥပမာ "arc diff --draft" ကို "arc diff" အတွက် shorthand အဖြစ် သတ်မှတ်ခြင်းကဲ့သို့ပင်။

**Creating Aliases**

 "arc diff --draft" အတွက် shorthand အဖြစ် "arc draft" ကို အောက်ပါအတိုင်း သတ်မှတ်နိုင်သည်-

 $ arc alias draft diff -- --draft

ယခု၊ "arc draft" ကို run သောအခါ၊ command သည် 
"arc diff --draft".

 ကဲ့သို့ လုပ်ဆောင်လိမ့်မည်။<bg:yellow> မှတ်ချက်:</bg> command သို့ပေးပို့လိုသော flags များကိုသတ်မှတ်ခြင်းမပြုမီ "--" ကိုသုံးပါ။ မဟုတ်ပါက၊ flags များကို flags
to "arc alias".

**Listing Aliases**

 argument မရှိဘဲ "arc alias" သည် alias များကိုစာရင်းပြုစုလိမ့်မည်။

**Removing Aliases**

 alias တစ်ခုကိုဖယ်ရှားရန်၊ arc alias ကို run ပါ။<alias-name> 

 alias ကိုဖယ်ရှားရန် သင့်အားတောင်းဆိုလိမ့်မည်။ 

**Shell Commands**

 alias တစ်ခုကို "!" ဖြင့်စတင်ပါက၊ alias ၏ကျန်အပိုင်းကို 
a shell command အဖြစ်ခေါ်ယူမည်ဖြစ်သည်။ ဥပမာအားဖြင့်၊ "arc ls" ကိုအကောင်အထည်ဖော်လိုပါက၊ သင်လုပ်ဆောင်နိုင်သည်
ဤကဲ့သို့လုပ်ဆောင်နိုင်သည်-

 $ arc alias ls \'!ls\'

 ကို run သောအခါ၊ "arc ls" သည်ယခုအခါ "ls" ကဲ့သို့ပြုမူလိမ့်မည်။

**Multiple Toolsets**

ဤ workflow သည် ဤ help text ရှိ ဥပမာများသည် "arc" ကိုသုံးသော်လည်း မည်သည့် toolset ကိုမဆို ပံ့ပိုးပေးသည်။ အခြား toolset ဖြင့်အလုပ်လုပ်နေပါက၊ ၎င်းအတွက် binary ကိုသုံးပါ
toolset define aliases for it:

 $ phage alias ...

Aliases များသည် ၎င်းတို့ကိုသတ်မှတ်ရန်အသုံးပြုခဲ့သော toolset နှင့်ချိတ်ဆက်ထားသည်။ "arc draft" alias ကို 
 လို့ သတ်မှတ်ရင်၊ အဲဒါက "phage draft" alias ကိုလည်း သတ်မှတ်မှာ မဟုတ်ပါဘူး။ 

**Builtins**

 "alias"
 ကိုယ်တိုင် အပါအဝင် builtin workflows တွေရဲ့ အပြုအမူကို overwrite လုပ်လို့မရပါဘူး။ ပြီးတော့ workflow အသစ်တစ်ခုကို install လုပ်ရင် နာမည်တူတဲ့ ရှိပြီးသား alias တွေထက် ဦးစားပေးခံရပါလိမ့်မယ်။',
  'Arrays should use the short array syntax.' => 'Array များသည် array syntax အတိုကို အသုံးပြုသင့်သည်။',
  'File Symbol "%s"' => 'ဖိုင်သင်္ကေတ "%s"',
  'Try running your arc command again.' => 'သင့်ရဲ့ arc command ကို ပြန် run ကြည့်ပါ။',
  'Local commit "%s" does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'ဒေသတွင်း commit "%s" သည် "%s" ထဲသို့ သန့်ရှင်းစွာ ပေါင်းစည်းခြင်း မရှိပါ။ ဒေသတွင်း ပြောင်းလဲမှုများကို သန့်ရှင်းစွာ ပေါင်းစည်းနိုင်စေရန် ပြန်လည်ပြုပြင် သို့မဟုတ် ပေါင်းစည်းပါ။',
  'CC: %s' => 'CC: %s',
  'Failed to write file data.' => 'ဖိုင်ဒေတာကို ရေးသား၍မရပါ။',
  'Regenerate shell completion rules, without installing any configuration.' => 'မည်သည့် configuration ကိုမျှ ထည့်သွင်းခြင်းမရှိဘဲ shell ပြီးစီးမှုစည်းမျဉ်းများကို ပြန်လည်ထုတ်လုပ်ပါ။',
  'Execute a Phage subprocess.' => 'Phage ဆပ်ပရိုဆက်ဆာတစ်ခုကို လုပ်ဆောင်ပါ။',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'ဖိုင်သည် စာသားဖိုင်မဟုတ်ပါက \'binary\' ဟု မှတ်သားနိုင်ပါသည်။ ဤဖိုင်ကို \'binary\' အဖြစ် မှတ်သားပြီး ဆက်လုပ်လိုပါသလား။',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => '\'%s\' စည်းမျဉ်းသည် မမှန်ကန်ပါ၊ ၎င်းတွင် \'%s\' ကဲ့သို့သော အမျိုးအစားနှင့် အမည်ရှိရမည်။',
  'Task Symbol "%s"' => 'ဖိုင်သင်္ကေတ "%s"',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => 'ယူနစ်စမ်းသပ်မှုမက်ဆေ့ချ် တစ်ခုကို တည်ဆောက်သည့်အခါ "%2$s" သို့ ပေးပို့သော parameter ("%s") သည် အများဆုံးအရှည် %3$s  bytes ရှိသော string တစ်ခုဖြစ်ရမည်ဖြစ်ပြီး၊ အရှည်မှာ %4$s  bytes ဖြစ်ရမည်။',
  'In multi-line parameter declarations, each parameter should be on a separate line.' => 'multi-line parameter declarations တွေမှာ parameter တစ်ခုစီဟာ သီးခြား line တစ်ခုပေါ်မှာ ရှိသင့်ပါတယ်။',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates you are using a self-signed certificate.

As of OSX Yosemite, certificates must be added to the OSX keychain. You can do this with `security add-trusted-cert` from the command line, or by visiting the site in Safari and choosing to trust the certificate permanently.

For more information, see instructions in "%s".' => 'SSL ချိတ်ဆက်မှုကို ညှိနှိုင်းနေစဉ် SSL Certificate Authority ကို အတည်ပြုရာတွင် အမှားအယွင်းတစ်ခု ဖြစ်ပွားခဲ့သည်။ ၎င်းသည် သင်သည် self-signed certificate ကို အသုံးပြုနေကြောင်း ညွှန်ပြလေ့ရှိသည်။

OSX Yosemite မှစ၍ လက်မှတ်များကို OSX keychain တွင် ထည့်သွင်းရမည်။ command line မှ `security add-trusted-cert` ဖြင့် သို့မဟုတ် Safari ရှိ site သို့ ဝင်ရောက်ပြီး လက်မှတ်ကို အမြဲတမ်းယုံကြည်ရန် ရွေးချယ်ခြင်းဖြင့် ၎င်းကို လုပ်ဆောင်နိုင်သည်။

နောက်ထပ်အချက်အလက်များအတွက် "%s" ရှိ ညွှန်ကြားချက်များကို ကြည့်ပါ။',
  'None of the configured interpreters can be located.' => 'ပြင်ဆင်သတ်မှတ်ထားသော စကားပြန်များထဲမှ တစ်ခုကိုမျှ ရှာမတွေ့ပါ။',
  'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'ဤ workflow (\'%s\') သည် Repository API တစ်ခု လိုအပ်ပြီး true ကို ပြန်ပေးရန် %s ကို အစားထိုးပါသည်။',
  'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => 'ဒီ patch ဟာ ဖိုင်နာမည်ရဲ့ case size ကို ပြောင်းလဲဖို့ ကြိုးစားလို့ မအောင်မြင်ခဲ့နိုင်ဘူး (ဥပမာ \'%s\' ကနေ \'%s\' အထိ)။ Mercurial က case-sensitive filesystem တွေမှာ ဒီလို patch တွေကို အသုံးပြုလို့မရပါဘူး။ ဒီ patch ကို ကိုယ်တိုင်အသုံးပြုရပါမယ်။',
  'Executable files should either be binary or contain a shebang.' => 'အကောင်အထည်ဖော်နိုင်သောဖိုင်များသည် binary ဖြစ်ရမည် သို့မဟုတ် shebang ပါဝင်ရမည်။',
  'Numeric literal separators are not available before PHP 7.4.' => 'PHP 7.4 မတိုင်မီက ဂဏန်းသင်္ချာ ခွဲခြားသည့် သင်္ကေတများကို အသုံးပြု၍မရပါ။',
  'Landing onto target "%s", the default target under Git.' => 'Git အောက်ရှိ မူရင်းပစ်မှတ်ဖြစ်သော ပစ်မှတ် "%s" ပေါ်သို့ ရောက်ရှိခြင်း။',
  'Unknown argument \'%s\'. Try \'%s\'.' => 'မသိသော argument \'%s\'။ \'%s\' ကို စမ်းကြည့်ပါ။',
  'Path \'%s\' is not readable.' => '\'%s\' လမ်းကြောင်းကို ဖတ်၍မရပါ။',
  'No match found. Try `%s %s` to search for a linter.' => 'ကိုက်ညီမှု မတွေ့ပါ။ linter တစ်ခုကို ရှာဖွေရန် `%s %s` ကို စမ်းကြည့်ပါ။',
  'English (Pirate)' => 'အင်္ဂလိပ် (ပင်လယ်ဓားပြ)',
  'Pick' => 'ကန်ထုတ်',
  'Unknown Symbol' => 'အမည်မသိ သင်္ကေတ',
  'ERROR' => 'အမှား',
  'Modified' => 'ပြုပြင်ထားသော',
  'File Error' => 'ဖိုင်အမှား',
  'Version' => 'ဗားရှင်း',
  'Skip' => 'ကျော်ရန်',
  'Type' => 'အမျိုးအစား',
  'Current Value' => 'လက်ရှိတန်ဖိုး',
  'Oct' => 'အောက်',
  'Accepted' => 'လက်ခံခဲ့သည်',
  'Jun' => 'ဇွန်',
  'CONNECT' => 'ချိတ်ဆက်',
  'Name' => 'အမည်',
  'Aug' => 'ဩ',
  'OKAY' => 'အိုကေ',
  'Error' => 'အမှား',
  'Priority' => 'ဦးစားပေးအဆင့်',
  'Closed' => 'ပိတ်သိမ်းပြီး',
  'ID' => 'အိုင်ဒီ',
  'Dec' => 'ဒီ',
  'Jul' => 'ဇူ',
  'Nov' => 'နို',
  'Unknown' => 'မသိရှိပါ',
  'Apr' => 'ဧ',
  'Mar' => 'မတ်',
  'Feb' => 'ဖေ',
);
  }

}
