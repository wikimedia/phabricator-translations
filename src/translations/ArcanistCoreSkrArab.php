<?php

final class ArcanistCoreSkrArab
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'skr_Arab';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'فائل اپلوڈ ناکام تھیوݨ دی وجہ توں عمل رد کر ݙتا ڳیا۔ بائنری اپلوڈ چھوڑݨ کیتے تساں %s استعمال کر سڳدے ہو۔',
  'Ref "%s" does not exist in remote "%s".' => 'ریف "%s" ریموٹ "%s" اچ موجود کوئنی۔',
  'Flexible Heredoc and Nowdoc is not available before PHP 7.3.' => 'لچکدار Heredoc تے Nowdoc PHP 7.3 توں پہلے دستیاب کوئنی۔',
  'This process has PID %d. Acquiring lock...' => 'ایں عمل دا PID %d ہے۔ تالا حاصل کریندا پے۔۔۔',
  'This working copy is associated with the %s repository.' => 'ایں ورکنگ کاپی %s ریپوزٹری نال جڑی ہوئی ہے۔',
  'Lint Disabler' => 'لنٹ ڈسیبلر',
  'Call to "posix_getpgid(...)" failed!' => '"posix_getpgid(...)" کوں کال ناکام تھی ڳئی!',
  'The "squash" strategy collapses multiple local commits into a single commit when publishing. It produces a linear published history (but discards local checkpoint commits). This is the default strategy.' => '"squash" حکمت عملی شائع کرݨ ویلے ٻہوں سارے مقامی کمیٹس کوں ہک کمیٹ اچ ضم کر ݙیندی ہے۔ ایہ لکیری شائع شدہ تاریخ پیدا کریندی ہے (لیکن مقامی چیک پوائنٹ کمیٹس کوں خارج کر ݙیندی ہے)۔ ایہ ڈیفالٹ حکمت عملی ہے۔',
  'Call Conduit API methods.' => 'Conduit API میتھڈز کوں کال کرو۔',
  'Symbol "%s" does not identify a valid revision.' => 'علامت "%s" کہیں درست نظرثانی دی نشاندہی کوئنی کریندی۔',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => '%s یا %s کوں %s تے براہ راست نہ کال کرو۔ اینہہ دی بجائے %s یا %s کوں کال کرو۔',
  'A linter for Composer related files.' => 'Composer نال متعلقہ فائلاں کیتے ہک لنٹر۔',
  '"%s" (%s)' => '"%s" (%s)',
  'Saved "%s" as "%s".' => '"%s" کوں "%s" دے ناں نال محفوظ کیتا ڳیا۔',
  'Night has fallen. The moon overhead is waxing, and provides just enough light that you can make out your surroundings. It is quite cold.' => 'رات پی ڳئی ہے۔ اُتے چند ودھدا پے تے اِنی روشنی ݙیندا پے جو تساں اپݨے آسے پاسے کوں ݙیکھ سڳدے ہو۔ ٻہوں سردی ہے۔',
  '(This message was raised at line %s, but the file only has %s line(s).)' => array(
    
    array(
      '(ایہ پیغام %s لائن تے اٹھایا ڳیا ہا، لیکن فائل اچ صرف %s لائن.) ہے۔)',
      '(ایہ پیغام %s لائن تے اٹھایا ڳیا ہا، لیکن فائل اچ صرف %s لائناں. ہے۔)',
    ),
  ),
  'Not parsing!' => 'پارز کوئنی کریندا پے!',
  'Portuguese (Portugal)' => 'پرتگالی (پرتگال)',
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
existing aliases with the same name.' => '__command__ توں __target__ تائیں ہک عرف بݨاؤ (اختیاری طور تے __options__ نال)۔ عرف تساں کوں کمانڈاں تے عام استعمال تھیوݨ آلیاں فلیگ د

**عرف بݨاوݨ**

تساں "arc draft" کوں "arc diff --draft" دا مختصر ناں ایں طرح مقرر کر سڳدے ہو:

$ arc alias draft diff -- --draft

ہݨ، جڈاں تساں "arc draft" چلائسو، تاں کمانڈ "arc diff --draft" وانگ کم کریندی۔

<bg:yellow> نوٹ: </bg> ایہ یقینی بݨاؤ جو کمانڈ کوں ݙیوݨ آلے فلیگز توں پہلے تساں "--" استعمال کرو! ورنہ فلیگز "arc alias" دے فلیگز سمجھے ویسن۔

**عرفاں دی فہرست**

بغیر کہیں دلائل دے، "arc alias" عرفاں دی فہرست ݙیکھیندی ہے۔

**عرف مٹاوݨ**

عرف مٹاوݨ کیتے، ایہ چلاؤ:

$ arc alias <alias-name>

تساں کوں عرف مٹاوݨ کیتے پُچھیا ویسی۔ے مجموعے کیتے مختصر ناں بݨاوݨ دی اجازت ݙیندن، جیویں "arc draft" کوں "arc diff --draft" دا مختصر ناں مقرر کرݨ۔',
  'Arrays should use the short array syntax.' => 'ایری کوں مختصر ایری نحو استعمال کرݨا چاہیدا ہے۔',
  'File Symbol "%s"' => 'فائل علامت "%s"',
  'Try running your arc command again.' => 'اپݨی arc کمانڈ دوبارہ چلاوݨ دی کوشش کرو۔',
  'Local commit "%s" does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'مقامی کمیٹ "%s" "%s" اچ صاف طور تے ضم کوئنی تھیندی۔ مقامی تبدیلیاں کوں ریبیس یا ضم کرو تاکہ اوہ صاف طور تے ضم تھی سڳن۔',
  'CC: %s' => 'سی سی: %s',
  'Failed to write file data.' => 'فائل ڈیٹا لکھݨ اچ ناکامی تھی۔',
  'Regenerate shell completion rules, without installing any configuration.' => 'شیل تکمیل دے اصول بغیر کہیں ترتیب نصب کیتے دوبارہ پیدا کرو۔',
  'Execute a Phage subprocess.' => 'ہک Phage ذیلی عمل چلاؤ۔',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'اگر فائل ٹیکسٹ فائل کوئنی، تاں تساں اینکوں \'بائنری\' نشان لڳا سڳدے ہو۔ ایں فائل کوں \'بائنری\' نشان لڳاؤ تے اڳوں ودھو؟',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'اصول \'%s\' غلط ہے، اینکوں \'%s\' وانگوں ہک قسم تے ناں ہووݨا چاہیدا ہے۔',
  'Task Symbol "%s"' => 'ٹاسک علامت "%s"',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => 'یونٹ ٹیسٹ پیغام بݨاوݨ ویلے "%2$s" کوں ݙتا ڳیا پیرامیٹر ("%s") ہک تار ہووݨا چاہیدا ہے جیند دی ودھ توں ودھ لمبائی %3$s (bytes) ہے، لیکن اوہ %4$s bytes لمبا ہے۔',
  'In multi-line parameter declarations, each parameter should be on a separate line.' => 'ٻہوں ساری لائناں والے پیرامیٹر اعلاناں اچ، ہر پیرامیٹر ہک علیحدہ لائن تے ہووݨا چاہیدا ہے۔',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates you are using a self-signed certificate.

As of OSX Yosemite, certificates must be added to the OSX keychain. You can do this with `security add-trusted-cert` from the command line, or by visiting the site in Safari and choosing to trust the certificate permanently.

For more information, see instructions in "%s".' => 'SSL کنکشن تے ڳالھ مہاڑ کریندے ویلے SSL سرٹیفکیٹ اتھارٹی دی تصدیق کرݨ اچ ہک نقص تھی۔ ایہ عام طور تے ایندی نشاندہی کریندا ہے جو تساں خود دستخط شدہ سرٹیفکیٹ استعمال کریندے پے ہو۔ OSX Yosemite توں اڳوں، سرٹیفکیٹاں کوں OSX کی چین اچ شامل کرݨا ضروری ہے۔ تساں ایہ کم کمانڈ لائن توں `security add-trusted-cert` نال، یا Safari اچ سائٹ تے ونڄ تے سرٹیفکیٹ تے مستقل اعتماد کرݨ دی چوݨ کر تے کر سڳدے ہو۔ ودھیک معلومات کیتے "%s" اچ ہدایات ݙیکھو۔',
  'None of the configured interpreters can be located.' => 'ترتیب شدہ انٹرپریٹراں اچوں کوئی وی لڳایا کوئنی ونڄ سڳیا۔',
  'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'ایں ورک فلو (\'%s\') کوں Repository API دی ضرورت ہے، true واپس کرݨ کیتے %s کوں اووررائیڈ کرو۔',
  'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => 'ایہ پیچ شاید اینہہ وجہ توں ناکام تھیا ہووے جو ایہ کہیں فائل ناں دے کیس کوں تبدیل کرݨ دی کوشش کریندا ہے (مثال طور تے \'%s\' توں \'%s\' تائیں)۔ Mercurial کیس غیر حساس فائل سسٹماں تے اینجھے پیچ لاگو کوئنی کر سڳدا۔ تساں کوں ایہ پیچ ہتھیں لاوݨا پوسی۔',
  'Executable files should either be binary or contain a shebang.' => 'چلݨ آلی فائلاں یا تاں بائنری ہووݨ یا انہاں اچ شیبینگ ہووݨا چاہیدا ہے۔',
  'Numeric literal separators are not available before PHP 7.4.' => 'عددی لفظی جدا کرݨ آلے PHP 7.4 توں پہلے دستیاب کوئنی۔',
  'Landing onto target "%s", the default target under Git.' => 'ٹارگٹ "%s" تے لینڈ کریندا پے، Git دے تحت ڈیفالٹ ٹارگٹ۔',
  'Unknown argument \'%s\'. Try \'%s\'.' => 'نامعلوم دلیل \'%s\'۔ \'%s\' آزماؤ۔',
  'Path \'%s\' is not readable.' => 'رستہ \'%s\' پڑھیا کوئنی ونڄ سڳدا۔',
  'No match found. Try `%s %s` to search for a linter.' => 'کوئی میل کوئنی ملیا۔ لنٹر لبھݨ کیتے `%s %s` آزماؤ۔',
  'English (Pirate)' => 'انگریزی (پائریٹ)',
  'Pick' => 'چاؤ',
  'If the file is not a text file, mark it as binary with:

  $ %s
' => 'اگر فائل ٹیکسٹ فائل کوئنی، تاں اینکوں اینہہ نال بائنری نشان لڳاؤ:$ %s',
  'Browse URI "%s"' => 'URI "%s" کوں براؤز کرو۔',
  'The working copy includes changes to \'%s\' paths. These changes will not be included in the diff because SVN can not commit \'svn:externals\' changes alongside normal changes.' => 'ورکنگ کاپی اچ \'%s\' رستیاں تے تبدیلیاں شامل ہن۔ ایہ تبدیلیاں ڈف اچ شامل کوئنی تھیسن کیوں جو SVN \'svn:externals\' تبدیلیاں کوں عام تبدیلیاں نال کمیٹ کوئنی کر سڳدا۔',
  'Base commit ruleset to invoke when determining the start of a commit range. See "Arcanist User Guide: Commit Ranges" for details.' => 'کمیٹ رینج دی شروعات طے کرݨ ویلے چلاوݨ آلا بیس کمیٹ اصول مجموعہ۔ تفصیل کیتے "Arcanist User Guide: Commit Ranges" ݙیکھو۔',
  '**bookmarks**' => '**نشانیاں**',
  'Nowhere to load blob \'%s\' from!' => '\'%s\' بلاب کوں لݙݨ کیتے کوئی جاہ کوئنی!',
  'Runtime Error' => 'رن ٹائم نقص',
  'Argument "%s" does not take a parameter.' => 'دلیل "%s" کوئی پیرامیٹر کوئنی گھندی۔',
  'LARGE WORKING SET' => 'وݙا ورکنگ سیٹ',
  'Output upload information in JSON format.' => 'اپلوڈ دی معلومات JSON شکل اچ آؤٹ پٹ کرو۔',
  'LANDING' => 'لینڈنگ',
  'Inline HTML' => 'ان لائن ایچ ٹی ایم ایل',
  'Remote Repository' => 'ریموٹ ریپوزٹری',
  'Conduit API login required.' => 'Conduit API لاگ ان ضروری ہے۔',
  'Rule \'%s\' matched a zero-length token and causes no state transition.' => 'اصول \'%s\' ہک صفر لمبائی آلے ٹوکن نال میل کھاندا ہے تے کوئی حالت منتقلی پیدا کوئنی کریندا۔',
  'Confirms that revisions you did not author should land.' => 'ایندی تصدیق کریندا ہے جو جیڑھیاں نظرثانیاں تساں نہ لکھیاں ہوون انہاں کوں لینڈ تھیوݨا چاہیدا ہے۔',
  'No tests to run.' => 'چلاوݨ کیتے کوئی ٹیسٹ کوئنی۔',
  'Expected JSON response from Slack.' => 'Slack توں JSON جواب دی توقع ہائی۔',
  '%s assertion(s) passed.' => array(
    '%s assertion پاس تھی ڳیا۔',
    '%s assertions پاس تھی ڳیا۔',
  ),
  'NOTHING TO LAND' => 'لینڈ کرݨ کیتے کچھ کوئنی',
  'Expected to find a byte unit for meminfo key "%s" in meminfo source "%s", found no unit.' => 'meminfo ذریعہ "%2$s" اچ meminfo کلید "%s" کیتے بائٹ اکائی ملݨ دی توقع ہائی، کوئی اکائی کوئنی ملی۔',
  'Do not copy changes to the staging area.' => 'تبدیلیاں کوں اسٹیجنگ ایریا اچ نقل نہ کرو۔',
  'There was an error verifying the SSL connection. This usually indicates that the remote host has an SSL certificate for a different domain name than you are connecting with. Make sure the certificate you have installed is signed for the correct domain.' => 'SSL کنکشن دی تصدیق کرݨ ویلے ہک نقص تھی۔ ایہ عام طور تے ایندی نشاندہی کریندا ہے جو ریموٹ میزبان کول اُس ڈومین ناں کیتے SSL سرٹیفکیٹ ہے جیندے نال تساں جُڑدے پئے ہو اِنہہ توں مختلف ہے۔ تسلی کرو جو جیڑھا سرٹیفکیٹ تساں نصب کیتا ہے اوہ درست ڈومین کیتے دستخط شدہ ہے۔',
  'Expected a list!' => 'ہک فہرست دی توقع ہائی!',
  'Empty key is invalid!' => 'خالی کلید غلط ہے!',
  'Library conflict! The library \'%s\' has already been loaded (from \'%s\') but is now being loaded again from a new location (\'%s\'). You can not load multiple copies of the same library into a program.' => 'لائبریری ٹکراؤ! لائبریری \'%s\' پہلے ہی لوڈ تھی چکی ہے (\'%s\' توں) لیکن ہݨ اینکوں ہک نویں جاہ (\'%s\') توں دوبارہ لوڈ کیتا ویندا پے۔ تساں ہک پروگرام اچ ہک ہی لائبریری دیاں ٻہوں ساریاں نقلاں کوئنی لوڈ کر سڳدے۔',
  'Unknown symbol type "%s".' => 'نامعلوم علامت دی قسم "%s"۔',
  '%s does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '%s فی الحال ہک مرضی دی شدت دیاں سطحاں کوں سپورٹ کوئنی کریندا، کیوں جو اصولاں کوں آؤٹ پٹ اچ پیغاماں توں شناخت کوئنی کیتا ونڄ سڳدا۔',
  'Multiple configuration sources define an alias for "%s %s". The last definition in the most specific source ("%s") will be used.' => 'ٻہوں سارے ترتیب ذریعے "%s %s" کیتے ہک عرف متعین کریندے ہن۔ سب توں مخصوص ذریعے ("%s") اچ آخری تعریف استعمال تھئیسی۔',
  'Branch "%s" does not rebase cleanly from "%s" onto "%s", skipping.' => 'برانچ "%s" "%s" توں "%s" تے صاف طور تے ریبیس کوئنی تھیندی، چھوڑ دتا ونڄدا پے۔',
  'Unknown Symbol' => 'نامعلوم علامت',
  'Against which commit?' => 'کہیں کمیٹ دے خلاف؟',
  'commit-message' => 'commit-message',
  'It is morning. The sun is high in the sky to the east and you hear birds all around you. A gentle breeze rustles the leaves overhead.' => 'صبح ہے۔ سورج پورب ول آسمان اچ اُچا ہے تے تساں کوں آلے دوالے پنچھیاں دیاں آوازاں سنائی ݙیندیاں ہن۔ ہک ہولی ہوا اُتے پتے کھڑکا ریہی ہے۔',
  'Local branch "%s" tracks an upstream, but following it leads to a local cycle; ignoring branch upstream.' => 'مقامی برانچ "%s" ہک اپ اسٹریم دی پچھانھ کریندی ہے، لیکن ایندی پچھانھ کرݨ تے مقامی چکر پیدا تھیندا ہے؛ برانچ اپ اسٹریم کوں نظرانداز کیتا ویندا پے۔',
  'Project Config File' => 'منصوبہ ترتیب فائل',
  'Expected to match pattern "%s" against line "%s" in raw commit blob: %s' => 'خام کمیٹ بلاب اچ لائن "%2$s" دے خلاف پیٹرن "%s" نال میل کھاوݨ دی توقع ہائی: %3$s',
  'You stand in the middle of a small clearing.' => 'تساں ہک نکے کھلے میدان دے وچکار کھڑے ہو۔',
  'Unable to find a browser command to run. Set "browser" in your configuration to specify a command to use.' => 'چلاوݨ کیتے کوئی براؤزر کمانڈ کوئنی مل سڳی۔ استعمال کرݨ آلے کمانڈ دی وضاحت کرݨ کیتے تہاݙی ترتیب اچ "browser" سیٹ کرو۔',
  'Try/catch block catches "Exception", but does not catch "Throwable". In PHP7 and newer, some runtime exceptions will escape this block.' => 'Try/catch بلاک "Exception" کوں پکڑیندا ہے، لیکن "Throwable" کوں کوئنی پکڑیندا۔ PHP7 تے نویں اچ، کجھ رن ٹائم استثنیات ایں بلاک توں نکل ویسن۔',
  'HLint is a linter for Haskell code.' => 'HLint Haskell کوڈ کیتے ہک لنٹر ہے۔',
  'No Parent Scope' => 'کوئی پیرنٹ سکوپ کوئنی',
  'Use "*" after a response to save it in user configuration.' => 'اینکوں صارف ترتیب اچ محفوظ کرݨ کیتے جواب دے بعد "*" استعمال کرو۔',
  'Multiple repositories (%s) matched the query. You can use the "%s" configuration to select the one you want.' => 'ٻہوں سارے ریپوزٹریاں (%s) سوال نال میل کھا ڳئین۔ تساں "%s" ترتیب استعمال کر تے چاہیدے آلے کوں چُݨ سڳدے ہو۔',
  'The author of this revision (%s) is:' => 'ایں نظرثانی (%s) دا مصنف ہے:',
  'Update the local working copy before applying the patch.' => 'پیچ لاوݨ توں پہلے مقامی ورکنگ کاپی کوں اپ ڈیٹ کرو۔',
  'Using `%s` as the `%s` value instead of a variable was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. Move the statement inside the loop.' => 'ہک متغیر دی بجائے `%2$s` قدر دے طور تے `%s` استعمال کرݨ PHP 5.5 توں پہلے متعارف کوئنی تھیائی، لیکن ایہ کوڈ بیس PHP دے پہلے ورژن کوں ہدف بݨیندا ہے۔ بیان کوں لوپ دے اندر منتقل کرو۔',
  'SHELL' => 'SHELL',
  'Unlocking...' => 'انلاک کریندا پے…',
  '`%s` Statement Must Be The First Statement' => '`%s` بیان سب توں پہلا بیان تھیوݨا چاہیدا ہے',
  'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => 'دلیل "%s" غیر معروف ہے۔ جھنڈیاں دے خاتمے دی نشاندہی کرݨ کیتے "%s" استعمال کرو۔',
  'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'دعویٰ ناکام تھی ڳیا، \'%s\' دی توقع ہائی (تے %s:%d): %s',
  'Test case \'%s\' was expected to raise an exception, but it did not throw anything.' => 'ٹیسٹ کیس \'%s\' توں ہک استثنا اٹھاوݨ دی توقع ہائی، لیکن ایں کچھ کوئنی سٹیا۔',
  'Land %s revision(s) in the wrong state?' => array(
    'غلط حالت اچ %s نظرثانی لینڈ کرو؟',
    'غلط حالت اچ %s نظرثانیاں لینڈ کرو؟',
  ),
  'it is the first commit reachable from the working copy state which is not outgoing.' => 'ایہ اوہ پہلا کمیٹ ہے جیڑھا ورکنگ کاپی دی حالت توں پہنچ ونڄݨ آلا ہے جیڑھا آؤٹ گوئنگ کوئنی۔',
  'This `%s` or `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'ایں `%s` یا `%s` اچ ہک خالی نہ ہوݨ آلا بلاک ہے جیڑھا `%s`، `%s`، `%s`، `%s` یا `%s` تے ختم کوئنی تھیندا۔ کیا تساں انہاں اچوں ہک شامل کرݨ بھل ڳئے او؟ اگر تساں دا ارادہ فال تھرو دا ہے تاں ایں انتباہ کوں خاموش کرݨ کیتے ہک `%s` تبصرہ شامل کرو۔',
  'Provide a map of regular expressions to severity levels. All matching codes have their severity adjusted.' => 'ریگولر ایکسپریشنز توں شدت دی سطح تائیں ہک نقشہ فراہم کرو۔ تمام میل کھاوݨ آلے کوڈز دی شدت کوں ایڈجسٹ کیتا ڳئے۔',
  'Specify the state to merge into. By default, this is the same as the "onto" ref.' => 'اوہ حالت بیان کرو جیندے اچ مرج کرݨا ہے۔ ڈیفالٹ طور تے، ایہ اوہو ہے جیڑھا "onto" ریف ہے۔',
  'Rule \'%s\' in state \'%s\' in %s defines an invalid regular expression (\'%s\'): %s' => 'حالت \'%2$s\' اچ اصول \'%s\' %3$s اچ ہک ناجائز ریگولر ایکسپریشن (\'%4$s\') بیان کریندا ہے: %5$s',
  'In most cases, arc can be upgraded automatically.' => 'زیادہ تر کیسیں اچ، arc کوں خودکار طور تے اپ گریڈ کیتا ونڄ سڳدا ہے۔',
  'Row has no cell "%s".\\n' => 'قطار اچ "%s" سیل کوئنی۔',
  'Continue without loading library?' => 'لائبریری لوڈ کیتے بغیر جاری رکھو؟',
  'Throwing Exception in `%s` Method' => '`%s` طریقے اچ استثنا سٹݨا',
  'More than one revision exists in the working copy:

%s
Use \'%s\' to select a revision.' => 'ورکنگ کاپی اچ ہک توں ودھ نظرثانی موجود ہے: %s ہک نظرثانی منتخب کرݨ کیتے \'%s\' استعمال کرو۔',
  'Unknown VCS!' => 'نامعلوم وی سی ایس!',
  'Request signature verification failed: signature is not correct.' => 'درخواست دے دستخط دی تصدیق ناکام تھی: دستخط درست کوئنی۔',
  'You can not change the logfile after a write has occurred!' => 'ہک واری لکھائی تھی ونڄݨ دے بعد تساں لاگ فائل کوں تبدیل کوئنی کر سڳدے!',
  'English (Canada)' => 'انگریزی (کینیڈا)',
  '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identify the symbols (classes, interfaces, traits, enums and functions)
        in PHP source files. Symbols are divided into "have" symbols
        (symbols the file declares) and "need" symbols (symbols the file
        depends on). For example, class declarations are "have" symbols,
        while object instantiations with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.
' => '**extract-symbols-with-php-parser.php** [__options__] __path.php__ PHP ماخذ فائلیں اچ علامتیں (کلاسز، انٹرفیسز، ٹریٹس، اینمز تے فنکشنز) دی شناخت کرو۔ علامتیں کوں "have" علامتیں (علامتیں جیڑھیاں فائل بیان کریندی ہے) تے "need" علامتیں (علامتیں جیڑھیاں تے فائل انحصار کریندی ہے) اچ ونڈیا ڳئے۔ مثال دے طور تے، کلاس دے اعلان "have" علامتیں ہن، جڈاں جو "new X()" نال آبجیکٹ دی انسٹینٹی ایشن "need" علامتیں ہن۔ بلٹ انز تے ڈاک بلاکس اچ \'@phutil-external-symbol\' دے طور تے نشان زد علامتیں تے انحصار __--all__ دے بغیر چھوڑ ݙتا ویندے۔ علامتیں stdout تے JSON اچ رپورٹ کیتیاں ویندیاں ہن۔ ایہ اسکرپٹ لائبریری دی علامتیں دے نقشے بݨاوݨ کیتے اندرونی طور تے استعمال تھیندی ہے۔',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there.' => 'ایہ کوڈ بیس Windows تے PHP %s کوں ہدف بݨیندی ہے، لیکن `%s()` اوتھے دستیاب کوئنی۔',
  'Author: %s' => 'مصنف: %s',
  'Confirms that revisions with open parent revisions should land.' => 'تصدیق کریندی ہے جو کھلے پیرنٹ نظرثانیاں آلیاں نظرثانیاں کوں لینڈ تھیوݨا چاہیدا ہے۔',
  'Custom %s file was specified, but it was not found!' => 'کسٹم %s فائل بیان کیتی ڳئی، لیکن ایہ مل کوئنی!',
  'ERROR' => 'رپھڑ',
  'Do not upload binaries (like images).' => 'بائنریز (جیویں تصویریں) اپ لوڈ نہ کرو۔',
  'Default value for parameters with `%s` type hint can only be `%s`.' => '`%s` ٹائپ ہنٹ آلے پیرامیٹرز دی ڈیفالٹ قدر صرف `%s` تھی سڳدی ہے۔',
  'Use of Variable Variable' => 'متغیر متغیر دا استعمال',
  'Only one output format allowed' => 'صرف ہک آؤٹ پٹ فارمیٹ دی اجازت ہے۔',
  'Arrange tasks based on priority, created, or modified, default is priority.' => 'کمیں کوں ترجیح، بݨاوݨ یا ترمیم دی بنیاد تے ترتیب ݙیو، ڈیفالٹ ترجیح ہے۔',
  'Failed to create a temporary directory: the disk is full.' => 'ہک عارضی ڈائریکٹری بݨاوݨ اچ ناکامی: ڈسک بھری پئی ہے۔',
  'Value provided to "replaceQueryParam()" for key "%s" is NULL. Use "removeQueryParam()" to remove a query parameter.' => 'کلید "%s" کیتے "replaceQueryParam()" کوں ݙتی ڳئی قدر NULL ہے۔ query parameter ہٹاوݨ کیتے "removeQueryParam()" استعمال کرو۔',
  'Signal handler with key "%s" is already installed.' => 'کلید "%s" آلا سگنل ہینڈلر پہلے ہی انسٹال ہے۔',
  'Name constructors `%s` explicitly. This method is a constructor because it has the same name as the class it is defined in.' => 'کنسٹرکٹرز کوں واضح طور تے `%s` نام ݙیو۔ ایہ طریقہ ہک کنسٹرکٹر ہے کیوں جو ایندا ناں اوہو ہے جیڑھا اوں کلاس دا ہے جیندے اچ ایہ بیان تھیا ہے۔',
  'Install lessc using `%s`.' => '`%s` استعمال کر کے lessc انسٹال کرو۔',
  'Too many distinct parent refs!' => 'بہت زیادہ منفرد پیرنٹ refs!',
  'Unable to find \'%s\' file to configure test engines. Create an \'%s\' file in the root directory of the working copy.' => 'ٹیسٹ انجنز دی تشکیل کیتے \'%s\' فائل نہیں ملی۔ ورکنگ کاپی دی روٹ ڈائریکٹری اچ \'%s\' فائل بݨاؤ۔',
  'Fetch Repository: %s' => 'ریپازٹری حاصل کرو: %s',
  'Call to "posix_setsid()" failed!' => '"posix_setsid()" کوں کال ناکام تھی ڳئی!',
  'Use the message from a specific revision. If you do not specify a revision, arc will guess which revision is in the working copy.' => 'ہک مخصوص نظرثانی توں پیغام استعمال کرو۔ جے تساں نظرثانی بیان کوئنی کریندے، arc اندازہ لیسی جو ورکنگ کاپی اچ کیڑھی نظرثانی ہے۔',
  'Do you want to create a new commit with these %s change(s)?' => array(
    'کیا تساں ایں تبدیلی نال ہک نواں کمیٹ بݨاوݨا چاہندے ہو؟',
    'کیا تساں ایں تبدیلیاں نال ہک نواں کمیٹ بݨاوݨا چاہندے ہو؟',
  ),
  'Unexpected "%s" section in property addition.' => 'پراپرٹی اضافے اچ "%s" دا غیر متوقع حصہ۔',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the setting is correct and the library is located in the right place.' => 'مقام "%s" تے لائبریری لوڈ کرݨ اچ ناکامی۔ ایہ لائبریری "%s" بیان کریندی ہے۔ ݙیکھو جو سیٹنگ درست ہے تے لائبریری صحیح جاہ تے موجود ہے۔',
  'Diff Parse Exception: %s' => 'Diff Parse استثناء: %s',
  'Commit this revision anyway?' => 'ایہ نظرثانی بہرحال کمیٹ کر ݙیو؟',
  'After creating the task, open it in a web browser.' => 'کم بݨاوݨ دے بعد، اینکوں ویب براؤزر اچ کھولو۔',
  'Asymetric property visibility is not available before PHP 8.4.' => 'غیر متناسب پراپرٹی ویزیبیلٹی PHP 8.4 توں پہلے دستیاب کوئنی۔',
  'Amend working copy using unrelated revision %s?' => 'غیر متعلقہ نظرثانی %s استعمال کر کے ورکنگ کاپی کوں amend کرو؟',
  'DETACHED HEAD' => 'DETACHED HEAD',
  'Lint does not currently support %s in SVN.' => 'Lint فی الوقت SVN اچ %s دی حمایت کوئنی کریندی۔',
  'Anonymous classes are not available before PHP 7.0.' => 'نامعلوم کلاسز PHP 7.0 توں پہلے دستیاب کوئنی۔',
  'Failed to open file \'%s\'.' => '\'%s\' فائل کھولݨ اچ ناکامی۔',
  'Load a library.' => 'لائبریری لوڈ کرو۔',
  'There are several revisions which match the working copy:

%s
Use \'%s\' to choose one, or \'%s\' to create a new revision.' => 'ورکنگ کاپی نال ملدیاں کئی نظرثانیاں ہن: %s ہک چݨݨ کیتے \'%s\' استعمال کرو، یا نویں نظرثانی بݨاوݨ کیتے \'%s\' استعمال کرو۔',
  'Failed to decompose multicopy changeset in order to generate diff.' => 'diff بݨاوݨ کیتے multicopy changeset کوں توڑݨ اچ ناکامی۔',
  'Saved uncommitted changes from working copy.' => 'ورکنگ کاپی توں غیر کمیٹ شدہ تبدیلیاں محفوظ تھی ڳیاں۔',
  'Unsound' => 'غیر محفوظ',
  'Patch %s \'%s\' to \'%s\', but source path does not exist in the working copy. Continue anyway?' => 'پیچ %s \'%s\' توں \'%s\'، لیکن سورس رستہ ورکنگ کاپی اچ موجود کوئنی۔ بہرحال جاری رکھو؟',
  'The URI of a server to connect to by default, if %s is run in a project without a configured URI or run outside of a project.' => 'ہک سرور دا URI جیڑھے نال ڈیفالٹ طور تے ڳالھ مہاڑ کیتی ونڄے، جے %s ہک اینجھے پروجیکٹ اچ چلایا ونڄے جیندے اچ URI دی تشکیل نہ تھی ہووے یا پروجیکٹ دے ٻاہر چلایا ونڄے۔',
  '**lock.php** __file__ [__options__]
    Acquire a lockfile and hold it until told to unlock it.
' => '**lock.php** __file__ [__options__]
    ہک لاک فائل حاصل کرو تے اینکوں اوں ویلے تائیں رکھی رکھو جڈاں تائیں ان لاک کرݨ دا حکم نہ مِلے۔',
  'Loading library from "%s"...' => '"%s" توں لائبریری لوڈ کریندی پئی ہے...',
  'Remote branch has multiple heads.' => 'ریموٹ برانچ دے کئی ہیڈز ہن۔',
  'Duplicate case in switch statement. PHP will ignore all but the first case.' => 'سوئچ بیان اچ ڈپلیکیٹ کیس۔ PHP پہلے کیس دے علاوہ ٻئے تمام کوں نظر انداز کریسی۔',
  'Unable to identify the revision in the working copy. Use \'%s\' to select a revision.' => 'ورکنگ کاپی اچ نظرثانی دی شناخت نہ تھی سڳی۔ ہک نظرثانی چݨݨ کیتے \'%s\' استعمال کرو۔',
  'IP address "%s" is not properly formatted: an address must contain exactly 8 segments, or omit a subsequence of segments with "::".' => 'IP ایڈریس "%s" ٹھیک طور تے فارمیٹ نہی: پتے اچ ٹھیک 8 حصے ہوݨے چاہیدن، یا "::" نال حصیاں دی ہک لڑی چھوڑ ݙتی ونڄے۔',
  'Binary integer literals are not available before PHP 5.4.' => 'بائنری انٹیجر لٹریلز PHP 5.4 توں پہلے دستیاب کوئنی۔',
  'Failed to match remote pattern against line "%s".' => 'لاین "%s" دے خلاف ریموٹ پیٹرن نال میل کھاوݨ اچ ناکامی۔',
  '%s is not a valid JSON object.' => '%s ہک درست JSON آبجیکٹ کوئنی۔',
  'Checking out bookmark "%s".' => 'بک مارک "%s" چیک آؤٹ کریندا پے۔',
  'Braces for an empty block statement shouldn\'t contain only whitespace.' => 'خالی بلاک بیان دے قوسین اچ صرف وائٹ اسپیس نہ ہوݨی چاہیدی۔',
  'Changes Planned' => 'تبدیلیاں منصوبہ بند',
  'Preparing merge into the empty state.' => 'خالی حالت اچ مرج دی تیاری۔',
  'Landing the active branch, "%s".' => 'فعال برانچ "%s" کوں لینڈ کریندا پے۔',
  'Closure Linter' => 'Closure لنٹر',
  '(... %s more revisions ...)' => array(
    '(... %s ٻيا نظرثانی ...)',
    '(... %s ٻيا نظرثانیاں ...)',
  ),
  'Server URI "%s" must include the "http" or "https" protocol. It should be in the form "%s".' => 'سرور URI "%s" اچ "http" یا "https" پروٹوکول شامل ہوݨا چاہیدا ہے۔ اینہہ دا فارم "%s" ہوݨا چاہیدا ہے۔',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates prior definition in file "%s" in library "%s".' => 'فائل "%3$s" اچ لائبریری "%4$s" اچ علامت "%s" دی تعریف (قسم "%s")، فائل "%5$s" اچ لائبریری "%6$s" اچ پچھلی تعریف کوں دہرائیندی ہے۔',
  'Invalid Executable' => 'ناجائز قابل عمل',
  'Set %s to file mode 600.' => '%s کوں فائل موڈ 600 تے سیٹ کرو۔',
  'Use "!" after a response to save it in working copy configuration.' => 'ورکنگ کاپی ترتیب اچ محفوظ کرݨ کیتے جواب دے بعد "!" استعمال کرو۔',
  'Will merge into remote "%s" by default, because this is the remote the change is landing onto.' => 'ڈیفالٹ طور تے ریموٹ "%s" اچ مرج کریسی، کیوں جو ایہو اوہ ریموٹ ہے جیندے تے تبدیلی لینڈ تھیندی پئی ہے۔',
  'Option \'%s\' requires a parameter.' => 'آپشن \'%s\' کوں ہک پیرامیٹر دی ضرورت ہے۔',
  'Two objects (of classes "%s" and "%s", descendants of ancestor class "%s") returned the same key from "%s" ("%s"), but each object in this class map must be identified by a unique key.' => 'ݙو آبجیکٹس (کلاسز "%s" تے "%s"، آبائی کلاس "%s" دے اولاد) "%s" توں ہکو جہیا کلید ("%s") واپس کیتی، لیکن ایں کلاس میپ اچ ہر آبجیکٹ کوں ہک منفرد کلید نال شناخت تھیݨا چاہیدا ہے۔',
  'Asymetric property visibility for static properties is not available before PHP 8.5.' => 'اسٹاٹک پراپرٹیز کیتے غیر متناسب پراپرٹی ویزیبیلٹی PHP 8.5 توں پہلے دستیاب کوئنی۔',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Refusing to inspect file %s. See %s' => '%s توں پراݨے PHP ورژنز اچ PHAR فائلیں ݙیکھدے ویلے سیکیورٹی کمزوریاں ہن؛ فائل %s دی جانچ کرݨ توں انکار۔ %s ݙیکھو۔',
  'Unable to determine the remote URI for this repository.' => 'ایں ریپازٹری کیتے ریموٹ URI دا تعین نہ تھی سڳیا۔',
  'Set key "%s" = %s in %s config.' => '%3$s ترتیب اچ کلید "%s" = %s سیٹ کرو۔',
  'This workflow has not yet been updated to Toolsets and can not retrieve a modern WorkingCopy object. Use "getWorkingCopyIdentity()" to retrieve a previous-generation object.' => 'ایہ ورک فلو ہݨے تائیں Toolsets تے اپڈیٹ کوئنی تھیا تے جدید WorkingCopy آبجیکٹ حاصل کوئنی کر سڳدا۔ پچھلی نسل دا آبجیکٹ حاصل کرݨ کیتے "getWorkingCopyIdentity()" استعمال کرو۔',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there until PHP %s.' => 'ایہ کوڈ بیس Windows تے PHP %s کوں ہدف بݨیندی ہے، لیکن `%s()` اوتھے PHP %s توں پہلے دستیاب کوئنی۔',
  'Deleted key "%s" from %s config (was %s).' => '%2$s ترتیب توں کلید "%s" مٹا ݙتی (ہائی %3$s)۔',
  'Invalid Modifiers' => 'ناجائز موڈیفائرز',
  'The pipe operator is not available before PHP 8.5.' => 'پائپ آپریٹر PHP 8.5 توں پہلے دستیاب کوئنی۔',
  'List of command aliases.' => 'کمانڈ عرفاں دی فہرست۔',
  'Working Copy State' => 'ورکنگ کاپی دی حالت',
  'Space found before semicolon.' => 'سیمی کولن توں پہلے خالی جاہ ملی۔',
  'Use `%s` for checking if the string contains something.' => 'ایہ ݙیکھݨ کیتے جو سٹرنگ اچ کجھ موجود ہے، `%s` استعمال کرو۔',
  'Perforce mode does not support the "merge" land strategy. Use the "squash" land strategy when landing to a Perforce remote (you can use "--squash" to select this strategy).' => 'Perforce موڈ "merge" لینڈ حکمت عملی دی حمایت کوئنی کریندا۔ جڈاں تساں Perforce ریموٹ تے لینڈ کرو، "squash" لینڈ حکمت عملی استعمال کرو (ایں حکمت عملی کوں چݨݨ کیتے تساں "--squash" استعمال کر سڳدو)۔',
  'Method Spacing' => 'طریقہ وقفہ',
  'Use "--types" to select between alternatives.' => 'متبادلاں اچوں چݨݨ کیتے "--types" استعمال کرو۔',
  'Revision "%s" does not exist, or you do not have permission to see it.' => 'نظرثانی "%s" موجود کوئنی، یا اینکوں ݙیکھݨ دی تساں کوں اجازت کوئنی۔',
  'Build Symbol "%s"' => 'بلڈ علامت "%s"',
  'Landing the active bookmark, "%s".' => 'فعال بک مارک "%s" کوں لینڈ کریندا پے۔',
  'Release lock?' => 'لاک چھوڑو؟',
  'Copied Here' => 'اِتھ کاپی تھی ڳیا',
  'Array item with key \'%s\' must be an instance of %s, %s given.' => 'کلید \'%s\' آلی ارے آئٹم %s دی ہک مثال ہوݨی چاہیدی ہے، %s ݙتا ڳیا۔',
  'Aborted generation of gigantic diff.' => 'بہوں وݙے diff دی پیداوار ختم کر ݙتی۔',
  'This line will be added:' => 'ایہ لائن شامل کیتی ویسی:',
  'Multiple "abstract" modifiers are not allowed.' => 'ہک توں ودھ "abstract" modifiers دی اجازت کوئنی۔',
  'Expected value to be a list, got "%s".' => 'قدر دا لسٹ ہوݨا متوقع ہا، "%s" ملیا۔',
  'Array style to prefer.' => 'ترجیحی ارے طرز۔',
  'No lexer rule matched input at char %d.' => 'کوئی lexer اصول ان پٹ نال %d حرف تے میل کوئنی کھادا۔',
  'Unhandled parser rule \'%s\'!' => 'غیر ہینڈل شدہ parser اصول \'%s\'!',
  'HTTP Status Code: %d' => 'HTTP سٹیٹس کوڈ: %d۔',
  'You are amending the working copy using information from a revision you are not the author of.' => 'تساں ورکنگ کاپی وچ ایسی نظرثانی دی معلومات نال ترمیم کر رہے ہو جیندے مصنف تساں کوئنی۔',
  'Apply patches suggested by lint to the working copy without prompting.' => 'ورکنگ کاپی تے lint دیاں تجویز کردہ پیچاں بغیر پچھے لگاؤ۔',
  'After merging, push changes onto a specified branch.' => 'مرج کرݨ دے بعد، تبدیلیاں کوں ہک متعین برانچ تے پش کرو۔',
  'Commit message for \'%s\' has explicit \'Differential Revision\'.' => '\'%s\' کیتے کمیٹ پیغام اچ واضح \'Differential Revision\' موجود ہے۔',
  'The token "%s" is not formatted correctly. API tokens should be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'ٹوکن "%s" ٹھیک طور تے فارمیٹ کوئنی تھیا۔ API ٹوکن 32 حرفاں دے ہوݨے چاہیدن۔ یقینی بݨاؤ کہ تساں درست URI تے گئے تے ٹوکن کوں ٹھیک طرح نال کاپی/پیسٹ کیتے۔',
  '`%s` methods cannot contain a body. This construct will cause a fatal error.' => '`%s` طریقیاں اچ کوئی باڈی کوئنی ہو سڳدی۔ ایہ تعمیر ہک مہلک نقص پیدا کریسی۔',
  'Install shell completion so you can use the "tab" key to autocomplete
commands and flags in your shell for toolsets and workflows.

The **bash** shell is supported.

**Installing Completion**

To install shell completion, run the command:

  $ arc shell-complete

This will install shell completion into your current shell. After installing,
you may need to start a new shell (or open a new terminal window) to pick up
the updated configuration.

Once installed, completion should work across all toolsets.

**Using Completion**

After completion is installed, use the "tab" key to automatically complete
workflows and flags. For example, if you type:

  $ arc diff --draf<tab>

...your shell should automatically expand the flag to:

  $ arc diff --draft

**Updating Completion**

To update shell completion, run the same command:

  $ arc shell-complete

You can update shell completion without reinstalling it by running:

  $ arc shell-complete --generate

You may need to update shell completion if:

  - you install new toolsets; or
  - you move this software on disk; or
  - you upgrade this software and the new version fixes shell completion bugs.' => 'شیل تکمیل انسٹال کرو تاکہ تساں اپنے شیل اچ ٹولسیٹس تے ورک فلوز کیتے کمانڈاں تے فلیگز آٹوکمپلیٹ کرݨ کیتے "tab" کی استعمال کر سکو۔

**bash** شیل دی حمایت ہے۔

**تکمیل انسٹال کرݨ**

شیل تکمیل انسٹال کرݨ کیتے، ایہ کمانڈ چلاؤ:

  $ arc shell-complete

ایہ تہاݙے موجودہ شیل اچ شیل تکمیل انسٹال کریسی۔ انسٹال کرݨ دے بعد، تساں کوں اپڈیٹ شدہ ترتیب حاصل کرݨ کیتے ہک نواں شیل شروع کرݨ دی ضرورت ہو سڳدی ہے (یا ہک نویں ٹرمینل ونڈو کھولو)۔

انسٹال تھیݨ دے بعد، تکمیل کوں تمام ٹولسیٹس تے کم کرݨا چاہیدا ہے۔

**تکمیل استعمال کرݨ**

تکمیل انسٹال تھیݨ دے بعد، ورک فلوز تے فلیگز کوں خودکار طور تے مکمل کرݨ کیتے "tab" کی استعمال کرو۔ مثال دے طور تے، جے تساں لکھو:

  $ arc diff --draf<tab>

...تہاݙا شیل خودکار طور تے فلیگ کوں ایں طرح پھیلا ݙیسی:

  $ arc diff --draft

**تکمیل اپڈیٹ کرݨ**

شیل تکمیل اپڈیٹ کرݨ کیتے، وہو کمانڈ چلاؤ:

  $ arc shell-complete

تساں اینہہ کوں چلا کے شیل تکمیل کوں بغیر دوبارہ انسٹال کیتے اپڈیٹ کر سڳدو:

  $ arc shell-complete --generate

تساں کوں شیل تکمیل اپڈیٹ کرݨ دی ضرورت ہو سڳدی ہے جے:

- تساں نویں ٹولسیٹس انسٹال کرو؛ یا
- تساں ایں سافٹ ویئر کوں ڈسک تے منتقل کرو؛ یا
- تساں ایں سافٹ ویئر کوں اپگریڈ کرو تے نواں ورژن شیل تکمیل دے بگز ٹھیک کرے۔',
  'The version control system ("%s") in the current working copy does not support bookmarks.' => 'موجودہ ورکنگ کاپی اچ ورژن کنٹرول سسٹم ("%s") بک مارکس دی حمایت کوئنی کریندا۔',
  'Aborted workflow to fix UTF-8.' => 'UTF-8 ٹھیک کرݨ آلا ورک فلو روک ݙتا۔',
  'Extension ("%s") defines invalid configuration with key "%s". This key is reserved.' => 'ایکسٹینشن ("%s") کلید "%s" نال ناجائز ترتیب بیان کریندی ہے۔ ایہ کلید محفوظ ہے۔',
  'Missing required parameters: %s' => 'لازمی پیرامیٹرز غائب ہن: %s',
  'Interrupted by SIGINT (^C).' => 'SIGINT (^C) ولوں رکاوٹ پئی۔',
  'This codebase targets PHP %s, but `%s()` was removed in PHP %s.' => 'ایہ کوڈ بیس PHP %s کوں ہدف بݨیندی ہے، لیکن `%s()` کوں PHP %s اچ ہٹا ݙتا ڳیا ہا۔',
  'Command-Line Input' => 'کمانڈ لائن ان پٹ',
  'NOT REVISION AUTHOR' => 'نظرثانی دا مصنف کوئنی',
  'Normally, you should update these %s revision(s), submit them for review, and wait for reviewers to accept them before you continue. To resubmit a revision for review, either: update the revision with revised changes; or use "Request Review" from the web interface.' => array(
    'عام طور تے، تساں کوں ایہ نظرثانی اپڈیٹ کرݨی چاہیدی ہے، اینکوں جائزے کیتے پیش کرو، تے جائزہ کنندگان دے قبول کرݨ دا انتظار کرو اینہہ توں پہلے کہ تساں جاری رکھو۔ جائزے کیتے ہک نظرثانی دوبارہ پیش کرݨ کیتے، یا: نظرثانی کوں نظرثانی شدہ تبدیلیاں نال اپڈیٹ کرو؛ یا ویب انٹرفیس توں "Request Review" استعمال کرو۔',
    'عام طور تے، تساں کوں ایہ %s نظرثانیاں اپڈیٹ کرݨیاں چاہیدن، انہاں کوں جائزے کیتے پیش کرو، تے جائزہ کنندگان دے قبول کرݨ دا انتظار کرو اینہہ توں پہلے کہ تساں جاری رکھو۔ جائزے کیتے ہک نظرثانی دوبارہ پیش کرݨ کیتے، یا: نظرثانی کوں نظرثانی شدہ تبدیلیاں نال اپڈیٹ کرو؛ یا ویب انٹرفیس توں "Request Review" استعمال کرو۔',
  ),
  'Encountered two "%s" lines ("%s", "%s") while parsing raw commit blob, expected at most one: %s' => 'خام کمیٹ بلاب دا تجزیہ کریندے ویلے "%s" دیاں ݙو لائناں ("%s"، "%s") ملیاں، زیادہ توں زیادہ ہک دی توقع ہائی: %s',
  'Two subclasses of "%s" ("%s" and "%s") define locales with the same locale code ("%s"). Each locale must have a unique locale code.' => '"%s" دیاں ݙو ذیلی کلاساں ("%s" تے "%s") ہکو جہیے لوکیل کوڈ ("%s") نال لوکیلز بیان کریندیاں ہن۔ ہر لوکیل دا ہک منفرد لوکیل کوڈ ہوݨا چاہیدا ہے۔',
  'Specify only one paste to retrieve.' => 'صرف ہک پیسٹ حاصل کرݨ کیتے متعین کرو۔',
  'Argument "%s" conflicts with itself!' => 'دلیل "%s" اپݨے آپ نال ٹکراؤ کھاندا ہے!',
  'Normally, a new branch (git) or bookmark (hg) is created and then the patch is applied and committed in the new branch/bookmark. This flag cherry-picks the resultant commit onto the original branch and deletes the temporary branch.' => 'عام طور تے، ہک نویں برانچ (git) یا بک مارک (hg) بݨایا ویندا ہے تے ول پیچ نویں برانچ/بک مارک اچ لگا تے کمیٹ کیتا ویندا ہے۔ ایہ جھنڈا نتیجے آلی کمیٹ کوں اصل برانچ تے cherry-picks کریندا ہے تے عارضی برانچ کوں مٹا ݙیندا ہے۔',
  'Saving local state (at "%s" on branch "%s").' => 'مقامی حالت محفوظ کریندا پے (برانچ "%2$s" تے "%s" تے)۔',
  'Stash these changes and continue?' => 'ایہ تبدیلیاں stash کرو تے جاری رکھو؟',
  'Push to a remote other than the default.' => 'ڈیفالٹ توں علاوہ ہک ریموٹ تے پش کرو۔',
  'Shift/reduce conflict: from state \'%s\', when a \'%s\' is encountered, shifting conflicts with reducing \'%s\'.' => 'Shift/reduce ٹکراؤ: حالت \'%s\' توں، جڈاں \'%s\' ملدا ہے، shifting \'%s\' کوں reduce کرݨ نال ٹکراؤ کھاندی ہے۔',
  'Expected hunk header \'%s\'.' => '\'%s\' hunk ہیڈر دی توقع ہائی۔',
  'Unexpected node of type \'%s\'!' => 'قسم \'%s\' دا غیر متوقع نوڈ!',
  '    %s %s
' => ' %s %s',
  'Install flake8 using `%s`.' => '`%s` استعمال کر کے flake8 انسٹال کرو۔',
  '%s: configuration captured a \'%s\' named capturing group, \'%s\'. Script output:
%s' => '%s: ترتیب نے \'%s\' ناں دا capturing گروپ، \'%s\' پکڑیا۔ اسکرپٹ آؤٹ پٹ: %s',
  'Argument short aliases must be exactly one character long. \'%s\' is invalid.' => 'دلیل دے مختصر عرف ٹھیک ہک حرف دے ہوݨے چاہیدن۔ \'%s\' ناجائز ہے۔',
  'Block for up to __n__ seconds waiting for the lock.' => 'لاک دی انتظار اچ زیادہ توں زیادہ __n__ سیکنڈ تائیں رکو۔',
  'Updating working copy...' => 'ورکنگ کاپی اپڈیٹ کریندا پے...',
  'The "HOME" environment variable is not defined, so this workflow can not identify where to install shell completion.' => '"HOME" ماحول متغیر متعین کوئنی، ایس واسطے ایہ ورک فلو نہیں ڄاݨ سڳدا کہ shell completion کتھے انسٹال کرݨا ہے۔',
  'Language constructs do not require parentheses.' => 'زبان دی تعمیرات کوں قوسین دی ضرورت کوئنی۔',
  'Failed to read from %s' => '%s توں پڑھݨ اچ ناکامی۔',
  'Future already has a key ("%s") assigned.' => 'Future کوں پہلے ہی ہک کلید ("%s") تفویض کیتی ڳئی ہے۔',
  'Failed to set configured locale %s, using en_US locale' => 'ترتیب شدہ لوکیل %s سیٹ کرݨ اچ ناکامی، en_US لوکیل استعمال کریندا پے',
  'URI \'%s\' must be fully qualified with \'%s\' scheme.' => 'URI \'%s\' کوں \'%s\' اسکیم نال مکمل اہل ہوݨا چاہیدا ہے۔',
  'command' => 'کمانڈ',
  'Detects common misspellings of English words.' => 'انگریزی الفاظ دیاں عام غلط املا دا پتہ لیندا ہے۔',
  'Inspect internal object properties.' => 'اندرونی آبجیکٹ خصوصیات دا معائنہ کرو۔',
  'Unknown raw diff source.' => 'نامعلوم خام ڈف ذریعہ۔',
  'No linters to run.' => 'چلاوݨ کیتے کوئی لنٹرز کوئنی۔',
  'Modified' => 'تبدیل تھی ڳیا',
  'TODO Comment' => 'TODO تبصرہ',
  'Failed to parse %s output!' => '%s آؤٹ پٹ دی پارس کرݨ اچ ناکامی!',
  'Some reviewers are currently away:' => 'کجھ جائزہ کنندے فی الوقت دور ہن:',
  'Do you want to edit the message?' => 'کیا تساں پیغام کوں ایڈٹ کرݨا چاہندے ہو؟',
  'Use of Product Name Literal' => 'مصنوعات دے ناں دے لفظی استعمال',
  'Merging with "%s" strategy, the default strategy.' => '"%s" حکمت عملی نال ضم کریندا پے، ڈیفالٹ حکمت عملی۔',
  'Override configured lint engine for this project.' => 'ایں پروجیکٹ کیتے ترتیب شدہ lint انجن کوں اووررائیڈ کرو۔',
  '%s can not load additional nodes at runtime. Tried to load: %s' => '%s رن ٹائم تے اضافی نوڈز لوڈ کوئنی کر سڳدا۔ لوڈ کرݨ دی کوشش کیتی: %s',
  'Updating commit message...' => 'کمیٹ پیغام اپڈیٹ تھیندا پے۔',
  'Failed to open filesystem path "%s" for writing.' => 'لکھݨ کیتے فائل سسٹم رستہ "%s" کھولݨ اچ ناکامی۔',
  'Config: Reading user configuration file "%s"...' => 'ترتیب: صارف دی ترتیب فائل "%s" پڑھیندا پے...',
  'This client version does not support staging this repository.' => 'ایں کلائنٹ ورژن کوں ایں ریپوزٹری دی سٹیجنگ دی حمایت کوئنی۔',
  'Run an external script, then parse its output with a regular expression. This is a generic binding that can be used to run custom lint scripts.' => 'ہک بیرونی اسکرپٹ چلاؤ، ول اینہہ دے آؤٹ پٹ دی ریگولر ایکسپریشن نال پارس کرو۔ ایہ ہک عام بائنڈنگ ہے جیڑھی اپنی مرضی دے lint اسکرپٹاں چلاوݨ کیتے استعمال تھی سڳدی ہے۔',
  'Unable to detect any supported shell, so autocompletion rules can not be installed. Use "--shell" to select a shell.' => 'کوئی حمایت یافتہ shell ڳولھݨ اچ ناکامی، ایس واسطے autocompletion اصول انسٹال کوئنی تھی سڳدے۔ shell چݨݨ کیتے "--shell" استعمال کرو۔',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision has already been published for review. You can not turn a revision back into a draft once it has been published.' => 'تساں ہک نظرثانی ("%s") کوں "--draft" جھنڈے نال اپڈیٹ کریندے پئے ہو، لیکن ایہ نظرثانی پہلے ہی جائزہ کیتے شائع تھی چکی ہے۔ ہک نظرثانی شائع تھیوݨ توں بعد اینکوں واپس ڈرافٹ اچ کوئنی بدلا سڳدے۔',
  'Future graph is stalled: some futures are held, but no futures are waiting or working. The graph can never resolve.' => 'Future گراف رک ڳیا ہے: کجھ futures پکڑے ڳئے ہن، لیکن کوئی futures انتظار یا کم کوئنی کر رہیے۔ گراف کݙاہیں حل کوئنی تھی سڳدا۔',
  'Workflow ("%s") generates two prompts with the same key ("%s"). Each prompt a workflow generates must have a unique key.' => 'ورک فلو ("%s") ہکو جہی کلید ("%s") نال ݙو پرامپٹ بݨیندی ہے۔ ورک فلو جتنے پرامپٹ بݨیندا ہے ہر ہک دی ہک منفرد کلید ہوݨی چاہیدی ہے۔',
  'Constants should be uppercase.' => 'Constants وڈے اکھراں اچ ہوݨے چاہیدن۔',
  'Named arguments are not available before PHP 8.0.' => 'نام یافتہ arguments PHP 8.0 توں پہلے دستیاب کوئنی۔',
  'Create a draft revision so you can look over your changes before involving anyone else. Other users will not be notified about the revision until you later use "Request Review" to publish it. You can still share the draft by giving someone the link.' => 'ہک ڈرافٹ نظرثانی بݨاؤ تاں جو تساں ٻئے کہیں کوں شامل کرݨ توں پہلے اپݨیاں تبدیلیاں ݙیکھ سڳو۔ ٻئے صارفیں کوں نظرثانی بارے کݙاہیں اطلاع کوئنی ملدی جڈاں تائیں تساں اینکوں شائع کرݨ کیتے "Request Review" استعمال نہ کرو۔ تساں ڈرافٹ کوں کہیں کوں لنک ݙے کے ٻیا وی شیئر کر سڳدے ہو۔',
  'Convention: spell keyword `%s` as `%s`.' => 'اصول: کلیدی لفظ `%s` کوں `%s` لکھو۔',
  '%3dms' => '%3dms',
  'Octal notation prefixes are not available before PHP 8.1.' => 'آکٹل نوٹیشن سابقے PHP 8.1 توں پہلے دستیاب کوئنی۔',
  'Expected JSON response from GitHub.' => 'GitHub توں JSON جواب دی توقع ہائی۔',
  'Print symbol map to stdout instead of writing it to the map file.' => 'علامت نقشے کوں نقشہ فائل اچ لکھݨ دی بجائے stdout تے چھاپو۔',
  'No type ID for node type name \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST اچ نوڈ قسم دے ناں \'%s\' کیتے کوئی type ID کوئنی۔',
  'Update the revision comments, then save and exit.' => 'نظرثانی تبصرے اپڈیٹ کرو، ول محفوظ کرو تے باہر نکلو۔',
  'Function Call Should Be Type Cast' => 'فنکشن کال کوں Type Cast ہوݨا چاہیدا ہے۔',
  '`%s` Unreliable' => '\'%s\' غیر معتبر',
  'Workflow has no name!' => 'ورک فلو دا کوئی ناں کوئنی!',
  'The "arc anoid" workflow requires "python3" to be available in your $PATH.' => '"arc anoid" ورک فلو کوں تہاݙے $PATH اچ "python3" دی دستیابی دی ضرورت ہے۔',
  'Confused by empty line' => 'خالی لائن توں پریشان',
  'Follow naming conventions: parameters should be named using `%s`' => 'نمیں دیاں اصولاں دی پابندی کرو: پیرامیٹرز کوں `%s` استعمال کر کے ناں ݙیو۔',
  'Argument "%s" conflicts with argument "%s"%s' => 'دلیل "%s" دلیل "%s"%s نال ٹکراؤ کھاندا ہے۔',
  'FETCHED' => 'حاصل کیتا ڳیا',
  '%s may only write strings!' => '%s صرف سٹرنگز لکھ سڳدا ہے!',
  'Show the command which would be issued, but do not actually commit anything.' => 'اوہ کمانڈ ݙکھاؤ جیڑھی جاری تھیسی، لیکن اصل اچ کجھ وی کمیٹ نہ کرو۔',
  'Found %d matching paths for linter \'%s\'.' => 'لنٹر \'%2$s\' کیتے %d میل کھاندے رستے ملے۔',
  'Could not parse URI \'%s\'.' => 'URI \'%s\' دا تجزیہ کوئنی تھی سڳیا۔',
  'LOAD STATE' => 'حالت لوڈ کرو',
  'PHP Source file to analyze.' => 'تجزیہ کرݨ کیتے PHP ماخذ فائل۔',
  '(Run `%s` for more details.)' => '(ٻیا تفصیل کیتے `%s` چلاؤ۔)',
  'Use "arc alias" to configure aliases, not "arc set-config".' => 'عرف ترتیب ݙیوݨ کیتے "arc set-config" دی بجائے "arc alias" استعمال کرو۔',
  'Desired merge strategy is ambiguous, choose an explicit strategy.' => 'مرج دی مطلوبہ حکمت عملی مبہم ہے، کوئی واضح حکمت عملی چݨو۔',
  'Expected \'%s\' to start git binary patch.' => 'توقع ہائی کہ \'%s\' توں git بائنری پیچ شروع تھیسی۔',
  'Diff URI:' => 'فرق یوآرایل:',
  'MERGE' => 'ضم کرو',
  'Revision %s' => 'دہرائی %s',
  'Unknown signature method \'%s\'!' => 'دستخط دا نامعلوم طریقہ \'%s\'!',
  'Working Copy: Path "%s" is not in any working copy.' => 'ورکنگ کاپی: رستہ "%s" کہیں وی ورکنگ کاپی اچ کوئنی۔',
  'This codebase targets PHP %s, but anonymous functions were not introduced until PHP 5.3.' => 'ایہ کوڈ بیس PHP %s کوں ہدف بݨیندی ہے، لیکن گمنام فنکشنز PHP 5.3 توں پہلے متعارف کوئنی تھئے ہن۔',
  'rebuild the library map file' => 'لائبریری نقشے دی فائل دوبارہ بݨاؤ',
  'Bookmark "%s"' => 'نشانی "%s"',
  'Use of Removed Function "each()"' => 'ہٹائے ڳئے فنکشن "each()" دا استعمال',
  'Land %s revision(s) anyway, despite ongoing and failed builds?' => array(
    'جاری تے ناکام بلڈز دے باوجود %s نظرثانی کوں بہرحال لینڈ کرو؟',
    'جاری تے ناکام بلڈز دے باوجود %s نظرثانیاں کوں بہرحال لینڈ کرو؟',
  ),
  'Uploaded binary data for "%s".' => '"%s" کیتے بائنری ڈیٹا اپلوڈ کیتا ڳیا۔',
  'The symbol map for library \'%s\' (at \'%s\') claims this %s is defined in \'%s\', but loading that source file did not cause the %s to become defined.' => 'لائبریری \'%s\' (\'%s\' تے) کیتے علامت نقشہ دعویٰ کریندا ہے کہ ایہ %s \'%s\' اچ متعین ہے، لیکن اوہ سورس فائل لوڈ کرݨ نال %s متعین کوئنی تھیا۔',
  'Future has already started; futures can not start more than once.' => 'Future پہلے ہی شروع تھی چکیا ہے؛ futures ہک واری توں ودھ شروع کوئنی تھی سڳدے۔',
  'Unable to upload file: the server refused to accept file "%s". This usually means it is too large.' => 'فائل اپلوڈ کوئنی کر سڳی: سرور نے فائل "%s" قبول کرݨ توں انکار کیتا۔ اینہہ دا عام طور تے مطلب ایہ ہے کہ ایہ ٻہوں وݙی ہے۔',
  '%s requires the %s algorithm but %s disables %s by default. Consider setting %s or export %s.' => '%s کوں %s الگوردم دی ضرورت ہے لیکن %s %s کوں ڈیفالٹ طور تے غیر فعال کریندا ہے۔ %s سیٹ کرݨ یا %s ایکسپورٹ کرݨ تے غور کرو۔',
  'Configuration option "%s" is not valid. Configuration options passed with command line flags must be in the form "name=value".' => 'ترتیب اختیار "%s" درست کوئنی۔ کمانڈ لائن جھنڈیاں نال ݙتے ڳئے ترتیب اختیار "name=value" دی صورت اچ ہوݨے چاہیدن۔',
  'Language for the paste.' => 'پیسٹ کیتے زبان۔',
  'Profile script execution and write results to a file.' => 'اسکرپٹ تے عملدرآمد دا پروفائل بݨاؤ تے نتائج ہک فائل اچ لکھو۔',
  'The name of a default unit test engine to use, if no unit test engine is specified by the current project.' => 'ہک ڈیفالٹ یونٹ ٹیسٹ انجن دا ناں، جے موجودہ پروجیکٹ ولوں کوئی یونٹ ٹیسٹ انجن متعین کوئنی کیتا ڳیا۔',
  'You can not use "--current" when installing support.' => 'سپورٹ انسٹال کرݨ ویلے تساں "--current" استعمال کوئنی کر سڳدے۔',
  'You do not see "%s" anywhere.' => 'تساں "%s" کتھے وی کوئنی ݙیکھدے۔',
  'Marker "%s"' => 'مارکر "%s"',
  'NOTE: commit %s could not be completely parsed:' => 'نوٹ: کمیٹ %s مکمل طور تے تجزیہ کوئنی کیتا ڳیا:',
  'Updating library: %s' => 'لائبریری اپڈیٹ کریندی پئی ہے: %s',
  'Importing `%s` with `%s` is unnecessary because the aliased name is identical to the imported symbol name.' => '\'%s\' کوں \'%s\' نال امپورٹ کرݨ غیر ضروری ہے کیوں جو عرفی ناں امپورٹ شدہ علامت دے ناں دے ہکو جہیا ہے۔',
  'Combining union and intersection types is not supported before PHP 8.2.' => 'یونین تے انٹرسیکشن قسماں دا امتزاج PHP 8.2 توں پہلے حمایت شدہ کوئنی۔',
  '%s OPEN PARENT REVISION(S)' => array(
    '%s کھلا والد نظرثانی',
    '%s کھلا والد نظرثانیاں',
  ),
  'Since more than one revision in Differential matches this working copy, you will be asked which revision you want to update if you run \'%s\'.' => 'کیوں جو Differential اچ ہک توں ودھ نظرثانی ایں ورکنگ کاپی نال میل کھاندی ہے، جے تساں \'%s\' چلاؤ تاں تساں کوں پچھیا ویسی کہ تساں کیڑھی نظرثانی اپڈیٹ کرݨ چاہندے ہو۔',
  'Argument "--force" for "arc browse" is deprecated. Use "--type %s" instead.' => '"arc browse" کیتے دلیل "--force" مستعمل کوئنی۔ ایندے دی بجائے "--type %s" استعمال کرو۔',
  'CHECKOUT' => 'چیک آؤٹ',
  'There should be no whitespace before the object operator.' => 'آبجیکٹ آپریٹر توں پہلے کوئی خالی جاہ نہ ہوݨی چاہیدی۔',
  'Failed to update library: %s' => 'لائبریری اپڈیٹ کرݨ اچ ناکامی: %s',
  'Land %s revision(s) with changes planned?' => array(
    '%s نظرثانی لینڈ کرو جیندے اچ تبدیلیاں منصوبہ بند ہن؟',
    '%s نظرثانیاں لینڈ کرو جیندے اچ تبدیلیاں منصوبہ بند ہن؟',
  ),
  'When linting git repositories, amend HEAD with autofix patches suggested by lint without prompting.' => 'جڈاں git رپوزٹریز دی lint کیتی ونڄے، lint ولوں تجویز کردہ آٹو فکس پیچاں نال HEAD کوں بغیر پچھے amend کرو۔',
  'Base commit is not in local repository; trying to fetch.' => 'بیس کمیٹ مقامی رپوزٹری اچ کوئنی؛ فیچ کرݨ دی کوشش کریندا پے۔',
  'File Error' => 'فائل رپھڑ',
  'Specify a runtime configuration value.' => 'رن ٹائم ترتیب قدر متعین کرو۔',
  'Avoid the use of inner functions.' => 'اندرونی فنکشنز دے استعمال توں بچو۔',
  'None of the configured binaries can be located.' => 'ترتیب ݙتے ڳئے بائنریز اچوں کوئی وی نئیں لبھ سڳیا۔',
  'Generators are not available before PHP 5.5.' => 'Generators PHP 5.5 توں پہلے دستیاب کوئنی۔',
  'Start rule \'%s\' does not appear in the rules for the grammar. Use %s to choose a different start rule, or add a rule named \'%s\'.' => 'اسٹارٹ اصول \'%s\' گرامر دے اصولیں اچ نظر کوئنی آندا۔ کوئی ٻیا اسٹارٹ اصول چݨݨ کیتے %s استعمال کرو، یا \'%s\' ناں دا اصول شامل کرو۔',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s".' => 'IP ایڈریس "%s" ٹھیک طور تے فارمیٹ کوئنی۔ توقع ہائی کہ IPv4 پتہ "%s" وانگر ہوسی۔',
  'Merge into the empty state instead of an existing state. This mode is primarily useful when creating a new repository, and selected automatically if the "onto" ref does not exist and the "into" state is not specified.' => 'موجودہ حالت دی بجائے خالی حالت اچ ضم کرو۔ ایہ موڈ خاص طور تے ہک نویں رپوزٹری بݨیندے ویلے مفید ہے، تے خود بخود چݨیا ویندا ہے جے "onto" ref موجود نئیں تے "into" حالت متعین کوئنی۔',
  'Install PHPCS with `%s`.' => '`%s` نال PHPCS انسٹال کرو۔',
  'Value passed to "phutil_string_cast()" is an array; arrays can not be sensibly cast to strings.' => '"phutil_string_cast()" کوں ݙتی ڳئی قدر ہک ارے ہے؛ ارے کوں معقول طور تے strings اچ cast کوئنی کیتا ونڄ سڳدا۔',
  'Install Golint using `%s`.' => '`%s` نال Golint انسٹال کرو۔',
  'Command %s failed: %s' => 'کمانڈ %s ناکام تھیا: %s',
  'Holding changes locally, they have not been submitted.' => 'تبدیلیاں مقامی طور تے روک کے رکھی ڳئیاں ہن، ایہ جمع کوئنی تھئیاں۔',
  'These %s path(s) will NOT be committed. Commit this revision anyway?' => array(
    'ایہ رستہ کمیٹ کوئنی تھیسن۔ کیا بہرحال ایں نظرثانی کوں کمیٹ کرو؟',
    'ایہ رستے کمیٹ کوئنی تھیسن۔ کیا بہرحال ایں نظرثانی کوں کمیٹ کرو؟',
  ),
  'Needs Revision' => 'دہرائی دی لوڑ ہے',
  '<bytes = %s>' => '<بائٹس = %s>',
  'Branch "%s"' => 'شاخ "%s"',
  'Alias resolved to "%s", but this is not a valid workflow or alias name. This alias or workflow might have previously existed and been removed.' => 'عرف "%s" تائیں حل تھی ڳیا، لیکن ایہ ہک درست ورک فلو یا عرف ناں کوئنی۔ ایہ عرف یا ورک فلو شائد پہلے موجود ہا تے ہٹا ݙتا ڳیا ہا۔',
  'Expected exception (in class(es): %s), got exception of class "%s".' => 'توقع ہائی کہ استثناء (کلاس(ز) اچ: %s) ملے گا، لیکن کلاس "%s" دا استثناء ملیا۔',
  'Argument "%s" requires a parameter.' => 'دلیل "%s" کوں ہک پیرامیٹر درکار ہے۔',
  'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Git توں نہ پہچانی ونڄݨ آلی upstream فارمیٹ ("%s") ملی، "refs/heads/..." یا "refs/remotes/..." دی توقع ہائی۔',
  'LIBRARY ERROR' => 'لائبریری نقص',
  'Enter a brief description of the changes included in this update.' => 'ایں اپڈیٹ اچ شامل تبدیلیاں دی ہک مختصر تفصیل لکھو۔',
  'Failed to explode line "%s".' => 'لائن "%s" کوں explode کرݨ اچ ناکامی۔',
  'Unknown library version \'%s\'!' => 'نامعلوم لائبریری ورژن \'%s\'!',
  'Set a default URI with `arc set-config phabricator.uri <uri>`.' => '`arc set-config phabricator.uri <uri>` نال ہک ڈیفالٹ URI سیٹ کرو۔',
  '%s y, %s m, %s d' => '%s س، %s م، %s ݙ',
  'Saving response "%s" to prompt "%s".' => 'جواب "%s" کوں پرامپٹ "%s" اچ محفوظ کریندا پے۔',
  'Expected method "%s->%s()" to return a unique key, got "%s" from %s objects at indexes: %s.' => 'توقع ہائی کہ میتھڈ "%s->%s()" ہک منفرد کلید واپس کرے گا، %4$s آبجیکٹس توں انڈیکساں: %5$s تے "%s" ملی۔',
  'Unrecognized property status \'%s\'.' => 'غیر پہچانی ڳئی پراپرٹی حیثیت \'%s\'۔',
  'REPOSITORY' => 'مخزن',
  'No pushable remote "%s" exists. Use the "--onto-remote" flag to choose a valid, pushable remote to land changes onto.' => 'کوئی pushable ریموٹ "%s" موجود کوئنی۔ تبدیلیاں land کرݨ کیتے ہک درست، pushable ریموٹ چݨݨ کیتے "--onto-remote" جھنڈا استعمال کرو۔',
  'Workflow "%s" is unknown. Supported workflows are: %s.' => 'ورک فلو "%s" نامعلوم ہے۔ حمایت یافتہ ورک فلو ہن: %s۔',
  'Configuration value "%s" is set to "%s".' => 'ترتیب قدر "%s" کوں "%s" تے سیٹ کیتا ڳیا ہے۔',
  'Describe the changes in this new revision.' => 'ایں نویں نظرثانی اچ تبدیلیاں بیان کرو۔',
  'NEW BOOKMARK' => 'نویں نشانی',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Mercurial commit symbol.' => 'کمیٹ سمبول "%s" اچ ہک نئی لائن موجود ہے۔ ایہ Mercurial کمیٹ سمبول اچ ہک درست حرف کوئنی۔',
  'Install JSCS using `%s`.' => '`%s` نال JSCS انسٹال کرو۔',
  'Invalid Octal Numeric Scalar' => 'ناجائز آکٹل عددی اسکیلر',
  '%s failed to parse file data %d: %s' => '%s فائل ڈیٹا %d کوں تجزیہ کرݨ اچ ناکام رہیا: %s',
  'LOCK ACQUIRED' => 'لاک حاصل تھی ڳیا',
  'Configuration value "%s" is empty.' => 'ترتیب قدر "%s" خالی ہے۔',
  'Invalid command "%s". Did you mean:' => 'ناجائز کمانڈ "%s"۔ تہاݙا مطلب ہائی:',
  'Deleted key "%s" from %s config.' => 'کلید "%s" کوں %s ترتیب توں مٹا ݙتا۔',
  'Unable to verify request signature, signature format is not known.' => 'درخواست دستخط دی تصدیق کرݨ اچ ناکامی، دستخط فارمیٹ معلوم کوئنی۔',
  'Follow naming conventions: class constants should be named using `%s`' => 'نئیں دیاں اصولاں دی پابندی کرو: کلاس مستقل کوں `%s` استعمال کر کے ناں ݙیو۔',
  'Emit machine-readable JSON. EXPERIMENTAL! Probably does not work!' => 'مشین دے پڑھݨ آلا JSON خارج کرو۔ تجرباتی! غالباً کم کوئنی کریندا!',
  'UNIT OKAY' => 'یونٹ ٹھیک ہے',
  'TO INSTALL: %s' => 'انسٹال کرݨ کیتے: %s',
  'Reuse of Iterator References' => 'اٹریٹر حوالے دا مڑ استعمال',
  'Choose a workflow!' => 'ہک ورک فلو چݨو!',
  '`%s` Operator' => '`%s` آپریٹر',
  '%s %s' => '%s %s',
  'No working copy to write config into!' => 'ترتیب لکھݨ کیتے کوئی ورکنگ کاپی کوئنی!',
  'Specify available reviewers and retry.' => 'دستیاب جائزہ گھن آلیں کوں مخصوص کرو تے مڑ کوشش کرو۔',
  'PHP version to target on Windows.' => 'Windows تے ہدف بݨاوݨ آلا PHP ورژن۔',
  'Working Copy: No candidate locations for %s from this working directory.' => 'ورکنگ کاپی: ایں ورکنگ ڈائریکٹری توں %s کیتے کوئی امیدوار جاہیں کوئنی۔',
  'Option \'%s\' is not supported under %s.' => 'آپشن \'%s\' %s دے تحت حمایت شدہ کوئنی۔',
  'The coding standard(s) to apply.' => 'لاگو کرݨ آلا کوڈنگ معیار (معیارات)۔',
  'Fail' => 'فیل',
  'Expected no exception, got exception of class "%s".' => 'کوئی استثناء دی توقع کوئنی ہائی، کلاس "%s" دا استثناء ملیا۔',
  'Subversion does not use base commits.' => 'Subversion base commits استعمال کوئنی کریندا۔',
  'Do not use the PHP closing tag, `%s`.' => 'PHP دا بند کرݨ آلا ٹیگ، `%s`، استعمال نہ کرو۔',
  'it is the first ancestor of %s that either has a bookmark, or is already in the remote and it matched the rule %s in your %s \'base\' configuration' => 'ایہ %s دا پہلا آباؤ ہے جیندے کول یا تاں ہک بک مارک ہے، یا اوہ پہلے ہی ریموٹ اچ موجود ہے تے اینہہ نے تہاݙی %3$s \'base\' ترتیب اچ اصول %s نال میل کھادا۔',
  'Found unexpected surplus key "%s" where no such key was expected.' => 'اے عجب اضافی کلید "%s" ملی جتھے اینجھی کوئی کلید دی توقع کوئنی ہائی۔',
  'You specified %s but %s is not available, so coverage can not be enabled for %s.' => 'تساں %s متعین کیتا لیکن %s دستیاب کوئنی، ایس واسطے %s کیتے coverage فعال کوئنی کیتی ونڄ سڳدی۔',
  'Classes which should not be used because they represent the unsafe usage of dynamic strings.' => 'اینجھیاں کلاساں استعمال کوئنی کرݨیاں چاہیدن کیوں جو اوہ dynamic strings دے غیر محفوظ استعمال دی نمائندگی کریندیاں ہن۔',
  'No viewer!' => 'کوئی ویور کوئنی!',
  'Failed to match SimpleCommitGraph directive "%s".' => 'SimpleCommitGraph directive "%s" نال میل کوئنی کھادا۔',
  'No lint messages.' => 'کوئی lint پیغامات کوئنی۔',
  'Error in parsing \'%s\' file, for linter \'%s\'.' => 'لنٹر \'%2$s\' کیتے، \'%s\' فائل دے تجزیے اچ نقص۔',
  'ONGOING BUILDS' => 'جاری بِلڈز',
  'UNABLE TO ACQUIRE LOCK:' => 'لاک حاصل کرݨ اچ ناکامی:',
  'REBASE CONFLICT' => 'ری بیس ٹکراؤ',
  'Follow naming conventions: enums should be named using `%s`.' => 'ناں رکھݨ دے اصولاں دی پابندی کرو: enums کوں `%s` استعمال کر کے ناں ݙیو۔',
  'Raw input file was written to: %s' => 'خام ان پٹ فائل %s تے لکھی ڳئی۔',
  'Default value for parameters with a false type hint can only be false.' => 'غلیط type hint آلے پیرامیٹرز دی ڈیفالٹ قدر صرف غلیط تھی سڳدی ہے۔',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with the alias of another configuration option ("%s"). The key and aliases of each option must be unique.' => 'ایکسٹینشن "%2$s" ولوں متعین configuration option ("%s") دا ہک عرف ("%3$s") ہے جیڑھا ٻئے configuration option ("%4$s") دے عرف نال ٹکراؤ کھاندا ہے۔ ہر اختیار دی کلید تے عرف منفرد ہوݨے چاہیدن۔',
  'Enter a commit message.' => 'ہک کمیٹ پیغام داخل کرو۔',
  'Cover changes since a specific revision.' => 'ہک مخصوص نظرثانی توں تبدیلیاں دا احاطہ کرو۔',
  'Implicit Constructor' => 'غیر واضح کنسٹرکٹر',
  'Read diff from stdin, not from the working copy. This disables many features which depend on having access to the working copy.' => 'diff کوں stdin توں پڑھو، ورکنگ کاپی توں نہ۔ ایہ ٻہوں ساریاں اینجھیاں خصوصیات کوں غیر فعال کر ݙیندا ہے جیڑھیاں ورکنگ کاپی تائیں رسائی تے منحصر ہن۔',
  'Command to use to invoke a web browser.' => 'ویب براؤزر چلاوݨ کیتے استعمال کرݨ آلا کمانڈ۔',
  'Value "%s" is not valid, specify a JSON list: %s' => 'قدر "%s" درست کوئنی، ہک JSON لسٹ متعین کرو: %s',
  'Specify at most one revision name.' => 'زیادہ توں زیادہ ہک نظرثانی دا ناں متعین کرو۔',
  'Two argument specifications have the same short alias ("%s").' => 'ݙو دلیل تصریحاں دا ہکو جہیا مختصر عرف ("%s") ہے۔',
  'In multi-line function or method calls, each argument should be on a separate line.' => 'multi-line function یا method کالز اچ، ہر دلیل ہک انجھی لائن تے ہوݨی چاہیدی ہے۔',
  'Open a file or object (like a task or revision) in a local web browser.

  $ arc browse README   # Open a file in Diffusion.
  $ arc browse T123     # View a task.
  $ arc browse HEAD     # View a symbolic commit.

To choose a browser binary to invoke, use:

  $ arc set-config browser __browser-binary__

If no browser is set, the command will try to guess which browser to use.' => 'ہک فائل یا آبجیکٹ (جیویں کوئی ٹاسک یا نظرثانی) کوں مقامی ویب براؤزر اچ کھولو۔

$ arc browse README  # Open a file in Diffusion.
$ arc browse T123    # View a task.
$ arc browse HEAD    # View a symbolic commit.

چلاوݨ کیتے براؤزر بائنری چݨݨ کیتے، استعمال کرو:

$ arc set-config browser __browser-binary__

جے کوئی براؤزر سیٹ کوئنی، تاں کمانڈ اندازہ لاوݨ دی کوشش کریسی کہ کیڑھا براؤزر استعمال کیتا ونڄے۔',
  'Call to "assertCaught(..., <junk>, ...)" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => '"assertCaught(..., <junk>, ...)" دی کال نے test result کیتے غلط قدر ݙتی۔ توقع ہائی: null، Exception یا Throwable؛ ملی: %s۔',
  'You may land one branches and any number of bookmarks in a single operation.' => 'تساں ہک واحد کارروائی اچ ہک برانچ تے کوئی وی تعداد اچ بک مارکز land کر سڳدے ہو۔',
  'Unknown lint severity "%s". Valid severities are: %s.' => 'نامعلوم lint severity "%s"۔ درست severities ہن: %s۔',
  'You have untracked files in this working copy.' => 'ایں ورکنگ کاپی اچ تساں کول untracked فائلیں ہن۔',
  'JSON Lint' => 'JSON Lint',
  'Expected alias definition (with key "%s") to be a dictionary.' => 'توقع ہائی کہ alias دی تعریف (کلید "%s" نال) ہک dictionary ہوسی۔',
  'Arguments with default values must be at the end of the argument list.' => 'ڈیفالٹ قدریں آلیاں دلیلاں دلیل لسٹ دے آخر تے ہوݨیاں چاہیدیاں ہن۔',
  'Select an output format.' => 'ہک آؤٹ پٹ فارمیٹ چݨو۔',
  'Unable to close file!' => 'فائل بند کرݨ اچ ناکامی!',
  'The `%s` and `%s` statements no longer accept variable arguments.' => '`%s` تے `%s` statements ہݨ متغیر arguments قبول کوئنی کریندے۔',
  'No analyzer is available for binary "%s".' => 'بائنری "%s" کیتے کوئی analyzer دستیاب کوئنی۔',
  'Objects passed to "%s" must return sort vectors (objects of class "%s") from the specified method ("%s"). One object (with key "%s") did not.' => '"%s" کوں ݙتے ڳئے آبجیکٹس متعین کردہ میتھڈ ("%3$s") توں sort vectors (کلاس "%s" دے آبجیکٹس) واپس کرݨے چاہیدن۔ ہک آبجیکٹ (کلید "%4$s" نال) نہ کیتا۔',
  'Alias functions should be avoided.' => 'عرف فنکشنز توں پرہیز کرݨا چاہیدا ہے۔',
  'Unit test results included failures, but all failing tests are known to be unsound. Ignore unsound test failures?' => 'یونٹ ٹیسٹ نتائج اچ ناکامیاں شامل ہن، لیکن تمام ناکام ٹیسٹ نامعتبر قرار ݙتے ڳئے ہن۔ نامعتبر ٹیسٹ ناکامیاں کوں نظرانداز کرو؟',
  'Resolve merge conflicts before proceeding.' => 'اگاں ودھݨ توں پہلے merge دے ٹکراؤ کوں حل کرو۔',
  'The proxied future has not been provided yet.' => 'پراکسی کردہ future ہݨے تائیں فراہم کوئنی کیتا ڳیا۔',
  'No ref "%s" exists in remote "%s".' => 'ریموت "%2$s" اچ کوئی ref "%s" موجود کوئنی۔',
  'Expected JSON response from Postmark.' => 'Postmark توں JSON جواب دی توقع ہائی۔',
  'Failed to convert a hunk from \'%s\' to UTF-8. Check that the specified encoding is correct.' => '\'%s\' توں ہک hunk کوں UTF-8 اچ بدلݨ اچ ناکامی۔ یقینی بݨاؤ کہ متعین کردہ انکوڈنگ درست ہے۔',
  'Bad Charset' => 'غلط Charset',
  'Wrote PHP definition.' => 'PHP تعریف لکھی۔',
  'Throwing an `%s` from within the `%s` method is not allowed before PHP 7.4.' => 'PHP 7.4 توں پہلے `%2$s` میتھڈ دے اندر توں `%s` سٹݨ دی اجازت کوئنی۔',
  'Version' => 'ورژن',
  'REVISION' => 'نظرثانی',
  'Use `%s` to detect issues with Javascript source files.' => 'Javascript سورس فائلیں اچ مسئلیں ڳولھݨ کیتے `%s` استعمال کرو۔',
  'COMMITTED' => 'کمیٹ تھیا',
  'Confirms that revisions that are already published should land.' => 'تصدیق کریندا ہے کہ اوہ نظرثانیاں جیڑھیاں پہلے ہی شائع تھی چکیاں ہن land ہوݨیاں چاہیدن۔',
  'Executing \'%s\' failed!' => '\'%s\' چلاوݨ اچ ناکامی!',
  'Which URI do you want to open?' => 'تساں کیڑھا URI کھولݨا چاہندے ہو؟',
  'Cherry Pick Failed!' => 'Cherry Pick ناکام تھیا!',
  'What default do you want to use? [origin/master]' => 'تساں کیڑھا ڈیفالٹ استعمال کرݨا چاہندے ہو؟ [origin/master]',
  'Matching working copy directory path.' => 'ورکنگ کاپی ڈائریکٹری رستے نال میل کھاندا۔',
  'Restoring local state (to detached commit "%s").' => 'مقامی حالت بحال کریندا پے (ڈیٹیچڈ کمیٹ "%s" تے)۔',
  'Unknown version control system.' => 'نامعلوم ورژن کنٹرول سسٹم۔',
  'Mark the file as temporary. Temporary files will be deleted after 24 hours.' => 'فائل کوں عارضی نشان زد کرو۔ عارضی فائلیں 24 گھنٹیاں بعد حذف تھی ویسن۔',
  'Hardpoint (at index "%s") has the same key ("%s") as an earlier hardpoint. Each hardpoint must have a key that is unique among hardpoints on the object.' => 'Hardpoint (انڈیکس "%s" تے) دی اوہو key ("%s") ہے جیڑھی پہلے آلے hardpoint دی ہے۔ ہر hardpoint دی object تے hardpoints اچوں ہک منفرد key ہوݨی چاہیدی ہے۔',
  'Accept/shift conflict!' => 'قبول/shift تنازع!',
  'Dynamic `%s`' => 'متحرک `%s`',
  'Expected %s rules to define rules for state \'%s\'.' => 'حالت \'%2$s\' کیتے قاعدے طے کرݨ کیتے %s قاعدیاں دی توقع ہائی۔',
  'These %s symbol(s) do not exist in the remote. They will be created as new branches:' => array(
    'ایہ سمبل ریموت اچ موجود کوئنی۔ ایہ ہک نویں برانچ دے طور تے بݨایا ویسی:',
    'ایہ سمبل ریموت اچ موجود کوئنی۔ ایہ نویاں برانچاں دے طور تے بݨائے ویسن:',
  ),
  'Incomplete implementation: %s!' => 'نامکمل عملدرآمد: %s!',
  'Argument names may only contain a-z, 0-9 and -, and must be at least one character long. \'%s\' is invalid.' => 'Argument دے ناں صرف a-z، 0-9 تے - رکھ سگدن، تے گھٹ توں گھٹ ہک اکھر دے ہوݨے چاہیدن۔ \'%s\' غلط ہے۔',
  'Array Separator' => 'Array جدا کنندہ',
  'If true, %s will never change repository history (e.g., through amending or rebasing). Defaults to true in Mercurial and false in Git. This setting has no effect in Subversion.' => 'اگر true ہووے تاں %s کݙاہیں repository دی history نئیں بدلیندا (مثلاً، amending یا rebasing نال)۔ Mercurial اچ ڈیفالٹ true تے Git اچ false ہے۔ ایہ ترتیب Subversion اچ کوئی اثر نئیں رکھدی۔',
  'Binary Integer Casing' => 'بائنری Integer کیسنگ',
  'Unrecognized argument "%s".' => 'نامعلوم argument "%s"۔',
  'Unable to upload file: path "%s" is not a file.' => 'فائل اپلوڈ نئیں کر سڳیے: رستہ "%s" ہک فائل کوئنی۔',
  'Space After Control Statement' => 'کنٹرول بیان توں بعد سپیس',
  'Patch deletes file \'%s\', but the file does not exist in the working copy. Continue anyway?' => 'پیچ \'%s\' فائل حذف کریندے، لیکن ایہ فائل ورکنگ کاپی اچ موجود کوئنی۔ بہرحال جاری رکھو؟',
  'Property hooks are not available before PHP 8.4.' => 'Property hooks PHP 8.4 توں پہلے دستیاب کوئنی۔',
  'Unit testing raised errors, but all failing tests are unsound.' => 'یونٹ ٹیسٹنگ اچ غلطیاں سامھݨے آیاں، لیکن سارے ناکام ٹیسٹ بے بنیاد ہن۔',
  'Global Variables' => 'عالمی متغیرات',
  'IMMUTABLE WORKING COPY' => 'ناقابلِ تبدیل ورکنگ کاپی',
  'Show information about prompts a workflow may execute, and review saved
responses.

**Show Prompts**

To show possible prompts a workflow may execute, run:

  $ arc prompts __workflow__

**Saving Responses**

If you always want to answer a particular prompt in a certain way, you can
save your response to the prompt. When you encounter the prompt again, your
saved response will be used automatically.

To save a response, add "*" or "!" to the end of the response you want to save
when you answer the prompt:

  - Using "*" will save the response in user configuration. In the future,
    the saved answer will be used any time you encounter the prompt (in any
    project).
  - Using "!" will save the response in working copy configuration. In the
    future, the saved answer will be used when you encounter the prompt in
    the current working copy.

For example, if you would like to always answer "y" to a particular prompt,
respond with "y*" or "y!" to save your response.
' => 'اوہ prompts بارے معلومات ݙکھاؤ جیڑھے ہک workflow چلا سگدی ہے، تے محفوظ کیتے ڳئے جواباں دا جائزہ گھنو۔

**Show Prompts**

ممکنہ prompts ݙیکھݨ کیتے جیڑھے ہک workflow چلا سگدی ہے، چلاؤ:

    $ arc prompts __workflow__

**Saving Responses**

اگر تساں ہمیشہ کہیں خاص prompt دا ہک خاص طریقے نال جواب ݙیوݨا چاہندے ہو تاں تساں اپݨا جواب prompt کیتے محفوظ کر سگدے ہو۔ جڈاں تساں دوبارہ prompt تے ملدے ہو تاں تہاݙا محفوظ کیتا ڳیا جواب خودکار طور تے استعمال تھیسی۔

جواب محفوظ کرݨ کیتے، prompt دا جواب ݙیندے ہوئیں اوہ جواب دے آخر اچ "**" یا "!" ودھاؤ جیڑھا تساں محفوظ کرݨا چاہندے ہو:

  - "**" استعمال کرݨ نال جواب صارف دی configuration اچ محفوظ تھیسی۔ مستقبل اچ، محفوظ کیتا ڳیا جواب ہر واری استعمال تھیسی جڈاں تساں prompt تے ملدے ہو (کہیں وی project اچ)۔
  - "!" استعمال کرݨ نال جواب ورکنگ کاپی دی configuration اچ محفوظ تھیسی۔ مستقبل اچ، محفوظ کیتا ڳیا جواب استعمال تھیسی جڈاں تساں موجودہ ورکنگ کاپی اچ prompt تے ملدے ہو۔

مثلاً، اگر تساں کہیں خاص prompt دا ہمیشہ "y" جواب ݙیوݨا چاہندے ہو تاں اپݨا جواب محفوظ کرݨ کیتے "y*" یا "y!" نال جواب ݙیوو۔',
  'Files must end in a newline.' => 'فائلیں نویں لائن تے ختم ہوݨیاں چاہیدن۔',
  'You may need to open a new terminal window or launch a new shell before the changes take effect.' => 'تہاکوں نویں ٹرمینل ونڈو کھولݨ یا تبدیلیاں لاڳو ہوݨ توں پہلے نواں شیل شروع کرݨ دی لوڑ تھی سگدی ہے۔',
  'The regex to process output with.' => 'آؤٹ پٹ پروسیس کرݨ کیتے regex۔',
  'Lint changes since a specific revision.' => 'ہک مخصوص نظرثانی توں تبدیلیاں دی Lint کرو۔',
  'Do you want to use this message?' => 'کیا تساں ایہ پیغام استعمال کرݨا چاہندے ہو؟',
  '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(ایہ configuration قیمت arc پچھاݨدا کوئنی۔ ممکن ہے کہ ایندا ہجے غلط ہووے یا ایہ پرانی ہووے۔)',
  'Custom preset.' => 'حسبِ ضرورت پیش سیٹ۔',
  'The use of `%s` in an anonymous closure is not available before PHP 5.4.' => 'PHP 5.4 توں پہلے گمنام closure اچ `%s` دا استعمال دستیاب کوئنی۔',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results, but value with key "%s" is not valid.' => 'یونٹ ٹیسٹ انجن (کلاس "%s" دا) چلن تے غلط نتائج واپس کیتے (میتھڈ "%s" نال)۔ نتائج دے طور تے "%s" آبجیکٹاں دی فہرست دی توقع ہائی، لیکن key "%s" آلی قیمت درست کوئنی۔',
  'Prior to PHP 5.4, `%s` fails when given empty arrays. Prefer to write `%s` as `%s`.' => 'PHP 5.4 توں پہلے، `%s` خالی arrays ملݨ تے ناکام تھیندے۔ `%s` کوں `%s` دے طور تے لکھݨ کوں ترجیح ݙیوو۔',
  'Match expressions are not available before PHP 8.0.' => 'Match expressions PHP 8.0 توں پہلے دستیاب کوئنی۔',
  'You have uncommitted changes in this working copy. Commit or revert them before proceeding.' => 'ایں ورکنگ کاپی اچ تہاݙیاں غیر کمٹڈ تبدیلیاں موجود ہن۔ اڳے ودھݨ توں پہلے انہاں کوں کمٹ کرو یا واپس کرو۔',
  'In module `%s`, declaration `%s`.' => 'module `%s` اچ، declaration `%s`۔',
  'Space After Unary Prefix Operator' => 'یونری پریفکس آپریٹر توں بعد سپیس',
  'Stashing uncommitted changes. (You can restore them with `%s`).' => 'غیر کمٹڈ تبدیلیاں stash کریندا پے۔ (تساں انہاں کوں `%s` نال بحال کر سگدے ہو۔)',
  'Call %s to build the graph out before calling %s.' => '%2$s کوں کال کرݨ توں پہلے گراف بݨاؤݨ کیتے %s کوں کال کرو۔',
  'These changes will land:' => 'ایہ تبدیلیاں لاڳو تھیسن:',
  'Unrecognized symbol name.' => 'نامعلوم symbol دا ناں۔',
  'Support for arbitrary expressions in the `%s` construct was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP.' => '`%s` construct اچ arbitrary expressions دی سپورٹ PHP 5.5 توں پہلے متعارف نئیں تھائی، لیکن ایہ codebase PHP دے پہلے آلے ورژن کوں نشانہ بݨیندی ہے۔',
  'Attempting to convert a string encoding from \'%s\' to \'%s\', but the \'%s\' PHP extension is not available. Install %s to work with encodings other than UTF-8.' => '\'%s\' توں \'%s\' تے سٹرنگ انکوڈنگ بدلݨ دی کوشش کریندا پے، لیکن \'%s\' PHP extension دستیاب کوئنی۔ UTF-8 توں علاوہ انکوڈنگز نال کم کرݨ کیتے %s انسٹال کرو۔',
  'Expected a regular expression, but value is not valid: %s' => 'ہک regular expression دی توقع ہائی، لیکن قیمت درست کوئنی: %s',
  'INSTALLED' => 'انسٹال تھیا',
  'Restored stashed changes to the working directory.' => 'ورکنگ ڈائریکٹری اچ stash کیتیاں تبدیلیاں بحال کر ݙتیاں۔',
  'Default list of "onto" remote for "arc land".' => '"arc land" کیتے "onto" ریموت دی ڈیفالٹ فہرست۔',
  'Fuse two or more files together, absolutely without any involvement of animals,
unlike the competitor unix tool __cat__.
Please do not expect deterministic results because the printed output
is generated by stick electrodes.
Please still consider the environment before printing the result.' => 'ݙو یا ودھیک فائلاں ہکٹھیاں جوڑو، باٖلکل کہیں جانور دی مداخلت بغیر،
مقابل unix ٹول __cat__ دے برعکس۔
براہ کرم deterministic نتائج دی توقع نہ کرو کیوں کہ پرنٹڈ آؤٹ پٹ
لکڑی دے الیکٹروڈاں نال بݨایا ڳیا ہے۔
براہ کرم نتیجہ پرنٹ کرݨ توں پہلے ماحول دا خیال رکھو۔',
  'Land these changes?' => 'ایہ تبدیلیاں لاڳو کرو؟',
  'Future graphs can not be rewound.' => 'مستقبل دے گرافاں کوں پچھے نئیں کیتا ونڄ سگدا۔',
  'IP address "%s" is not properly formatted. Address segments should be between 0 and 255, inclusive, but segment "%s" has a value outside of this range.' => 'IP address "%s" درست فارمیٹ اچ کوئنی۔ Address دے حصے 0 توں 255 تئیں، شمول، ہوݨے چاہیدن، لیکن حصے "%s" دی قیمت ایں حد توں ٻاہر ہے۔',
  'BOOKMARK' => 'نشانی',
  'Local branch "%s" tracks an upstream but following it leads to a local cycle, ignoring branch.' => 'مقامی برانچ "%s" ہک upstream کوں ٹریک کریندی ہے، لیکن ایندی پیروی مقامی cycle دی طرف ویندی ہے، برانچ کوں نظرانداز کیتا ویندا ہے۔',
  'Continue Inside Switch' => 'سوئچ دے اندر جاری رکھو',
  'Expected exactly one argument to "browse(...)" with a token.' => '"browse(...)" کوں token نال بالکل ہک argument دی توقع ہائی۔',
  'CONFIGURED' => 'CONFIGURED',
  'Unable to run a command in directory "%s".' => 'ڈائریکٹری "%s" اچ command چلاؤݨ اچ ناکامی۔',
  'Return type hints are not available before PHP 7.0.' => 'Return type hints PHP 7.0 توں پہلے دستیاب کوئنی۔',
  'When updating a revision under git, edit revision information before updating.' => 'جڈاں git اچ revision کوں اپ ڈیٹ کریندے پے ہوو، اپ ڈیٹ کرݨ توں پہلے revision دی معلومات اچ ترمیم کرو۔',
  'LOCAL CHANGES' => 'مقامی تبدیلیاں',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP 5.3.' => 'ایہ codebase PHP %s کوں ہدف بݨیندی ہے، لیکن `%s` PHP 5.3 توں پہلے متعارف کوئنی تھیا ہئی۔',
  'UNIT UNSOUND' => 'UNIT UNSOUND',
  'Invalid value for `%s`: %s.' => '`%s` کیتے غلط قیمت: %s۔',
  '    **extract-symbols.php** [__options__] __path.php__
        Identify the symbols (clases, functions and interfaces) in a PHP
        source file. Symbols are divided into "have" symbols (symbols the file
        declares) and "need" symbols (symbols the file depends on). For example,
        class declarations are "have" symbols, while object instantiations
        with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.

        It would be nice to eventually implement this as a C++ xhpast binary,
        as it\'s relatively stable and performance is currently awful
        (500ms+ for moderately large files).
' => '**extract-symbols.php** [__options__] __path.php__ ہک PHP سورس فائل اچ symbols (clases، functions تے interfaces) دی پچھاݨ کرو۔ Symbols کوں "have" symbols (اوہ symbols جیڑھے فائل declare کریندی ہے) تے "need" symbols (اوہ symbols جن تے فائل انحصار کریندی ہے) اچ ونڈیا ویندا ہے۔ مثلاً،
class declarations "have" symbols ہن، جݙاں کہ "new X()" نال object instantiations "need" symbols ہن۔

built-ins تے \'@phutil-external-symbol\' دے طور تے نشان زدہ symbols تے انحصار، docblocks اچ، __--all__ بغیر چھوڑ ݙتے ویندن۔

Symbols JSON اچ stdout تے رپورٹ کیتے ویندن۔

ایہ script اندرونی طور تے library دے symbols دے نقشے بݨاؤݨ کیتے استعمال تھیندی ہے۔

آخرکار ایں کوں C ++ xhpast binary دے طور تے لاڳو کرݨا چنگا ہوسی، کیوں کہ ایہ نسبتاً stable ہے تے performance فی الحال ٻہوں خراب ہے (500ms+ درمیانے وݙے فائلیں کیتے)۔',
  'Make sure all the symbols used in an %s library are defined and known.  This linter is specific to PHP source in %s libraries.' => 'یقینی بݨاؤ کہ %s library اچ استعمال تھیوݨ آلے تمام symbols متعین تے معلوم ہن۔ ایہ linter %s libraries اچ PHP سورس کیتے مخصوص ہے۔',
  'Argument position specified with "--current" ("%s") is greater than the number of arguments provided ("%s").' => array(
    '"--current" ("%s") نال متعین کردہ argument دی position، فراہم کیتے ڳئے arguments دی تعداد ("%s") توں وݙی ہے۔',
    '"--current" ("%s") نال متعین کردہ argument دی position، فراہم کیتے ڳئے arguments دی تعداد ("%s") توں وݙے ہن۔',
  ),
  'Generator (for query "%s") returned an "ArcanistHardpointTaskResult" object, which is not a valid thing to return from a generator.

This almost always means the generator implementation has a "return $this->yield..." statement which should be a "yield $this->yield..." instead.' => 'Generator (query "%s" کیتے) نے "ArcanistHardpointTaskResult" object واپس کیتا، جیڑھا generator توں واپس کرݨ آلی چیز کوئنی۔ ایندا مطلب تقریباً ہمیشہ ایہ ہوندے کہ generator دے implementation اچ "return $this->yield..." statement ہے جیڑھا "yield $this->yield..." ہوݨا چاہیدا ہے۔',
  'COMMIT RANGE' => 'COMMIT RANGE',
  'Specifies the remote to fetch the "into" ref from. By default, this is the same as the "onto" remote.' => 'اوہ remote متعین کرو جتھوں "into" ref گھنݨا ہے۔ ڈیفالٹ طور تے، ایہ "onto" remote دے برابر ہے۔',
  'No tasks found.' => 'کوئی کم کائنی لبھیا۔',
  '%s' => '%s',
  'No child with index \'%d\'.' => 'index \'%d\' نال کوئی child کوئنی۔',
  'Choose an object to inspect:' => 'معائنہ کرݨ کیتے ہک object چݨو:',
  '%s REVISION(S) ARE ALREADY PUBLISHED' => array(
    '%s REVISION پہلے ہی شائع ہے',
    '%s REVISIONS پہلے ہی شائع ہن',
  ),
  'Invalid EditorConfig property.' => 'غلط EditorConfig property۔',
  'List of event listener classes to install at startup.' => 'startup تے install کرݨ آلے event listener classes دی فہرست۔',
  'Provide a branch, bookmark, task, or revision name to begin or resume work on.' => 'کم شروع کرݨ یا ٻاہر جاری رکھݨ کیتے ہک branch، bookmark، task، یا revision دا ناں ݙیوو۔',
  'Use **%s** __command__ for a detailed command reference.' => 'تفصیلی command دے حوالے کیتے **%s** __command__ استعمال کرو۔',
  'At the far edge of the grove, you see remotes:' => 'باغ دے پرے آلے کنارے تے، تساں remotes ݙیکھدے ہو:',
  'It is nearly dusk. The wind has picked up and the trees around you sway and rustle.' => 'سماں ݙھلا ڳیا ہے۔ ہوا چل پئی ہے تے تہاݙے دُہرے درخت ہلدے تے سرسردے ہن۔',
  'The test failed.' => 'ٹیسٹ فیل تھیا۔',
  'Install shell completion.' => 'shell دی completion install کرو۔',
  '%s revision(s) have build failures:' => array(
    '%s revision دی build failures:',
    '%s revisions دیاں build failures:',
  ),
  'Failed to upload binary "%s".' => 'binary "%s" اپ لوڈ کرݨ اچ ناکامی۔',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Git commit symbol.' => 'Commit symbol "%s" اچ ہک نئی لائن موجود ہے۔ ایہ Git commit symbol اچ ہک درست حرف کوئنی۔',
  'ARGV' => 'ARGV',
  'Both sides of this expression are identical, so it always evaluates to a constant.' => 'ایہ expression دے ݙوہیں پاسے ہک جئے ہن، تاں ایہ ہمیشہ ہک constant تے evaluate تھیندا ہے۔',
  'Conflicts in working copy:' => 'ورکنگ کاپی اچ تضادات:',
  'Revision \'%s: %s\' has not been accepted. Commit this revision anyway?' => 'Revision \'%s: %s\' قبول نئیں تھائی۔ کیا تے وی ایہ revision commit کروں؟',
  'Commit "%s"' => '"%s" commit کرو',
  'Commit a specific revision. If you do not specify a revision, arc will look for committable revisions.' => 'ہک مخصوص revision commit کرو۔ اگر تساں کوئی revision متعین نئیں کریندے تاں arc committable revisions ڳولیسی۔',
  'Lint all tracked files in the working copy. Ignored files and untracked files will not be linted.' => 'ورکنگ کاپی اچ تمام tracked فائلاں کوں lint کرو۔ نظرانداز شدہ فائلاں تے untracked فائلاں lint نئیں تھیسیاں۔',
  'Instead of exporting changes from the working copy, export them from a Differential revision.' => 'ورکنگ کاپی توں تبدیلیاں export کرݨ دی بجائے، انہاں کوں ہک Differential revision توں export کرو۔',
  '%s submodule(s) have uncommitted or untracked changes:' => array(
    'ہک submodule دے uncommitted یا untracked تبدیلیاں:',
    'Submodules دے uncommitted یا untracked تبدیلیاں:',
  ),
  'Normally under git/hg, if the patch is successful, the changes are committed to the working copy. This flag prevents the commit.' => 'عام طور تے git/hg اچ، اگر patch کامیاب ہووے تاں تبدیلیاں ورکنگ کاپی اچ commit تھی ویندیاں ہن۔ ایہ flag commit کوں روکیندا ہے۔',
  'The null coalescing operator is not available before PHP 7.0.' => 'null coalescing operator PHP 7.0 توں پہلے دستیاب کوئنی۔',
  'Updating local branch "%s"...' => 'مقامی برانچ "%s" اپ ڈیٹ کریندا پے...',
  'Unable to identify the current branch in the working copy.' => 'ورکنگ کاپی اچ موجودہ برانچ دی شناخت نئیں کیتی گئی۔',
  'Type of setting \'%s\' must be boolean.' => 'setting \'%s\' دی قسم boolean ہوݨی چاہیدی۔',
  'No type name for node type ID \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST اچ node type ID \'%s\' کیتے کوئی type name کوئنی۔',
  'Search for linters. Search is case-insensitive, and is performed against name and description of each linter.' => 'linters ڳولو۔ Search case-insensitive ہے، تے ہر linter دے ناں تے تفصیل دے خلاف کیتی ویندی ہے۔',
  'Call-time pass-by-reference calls are prohibited.' => 'Call-time pass-by-reference calls ممنوع ہن۔',
  'For consistency, use `%s` (a type cast) instead of `%s` (a function call). Function calls impose additional overhead.' => 'مطابقت کیتے، `%2$s` (function call) دی بجائے `%s` (type cast) استعمال کرو۔ Function calls اضافی overhead لگھیندے ہن۔',
  'Expected file \'%s\' to begin `%s`.' => 'فائل \'%s\' دے `%s` نال شروع تھیوݨ دی توقع ہائی۔',
  'Array elements should each occupy a single line.' => 'Array دے ہر element کوں ہک لائن تے ہوݨا چاہیدا ہے۔',
  'identify symbols in a PHP source file' => 'ہک PHP سورس فائل اچ symbols دی شناخت کرو',
  'Filesystem path "%s" can not be accessed because a parent directory ("%s") is not executable (the current process does not have "+x" permission).' => 'Filesystem path "%s" تک رسائی نئیں کیتی گئی کیونکہ ہک parent directory ("%s") executable کوئنی (موجودہ process کول "+x" دی اجازت کوئنی)۔',
  'File "%s" does not exist, or you do not have permission to view it.' => 'فائل "%s" موجود کوئنی، یا تساں کوں اینکوں ݙیکھݨ دی اجازت کوئنی۔',
  'Included commits in branch %s:' => 'branch %s اچ شامل commits:',
  '  NOTE: Failed to load the commit message from Differential (for revision "%s".)' => 'نوٹ: Differential توں commit message (revision "%s" کیتے) load کرݨ اچ ناکامی۔',
  'Spaces Inside Parentheses' => 'Parentheses دے اندر خالی تھاں',
  'Configuration (%s)' => 'Configuration (%s)',
  'This file contains a syntax error: %s' => 'ایہ فائل اچ syntax error موجود ہے: %s',
  'Create new library?' => 'نئی library بݨاؤں؟',
  'Provide a nonempty symbol to begin or resume work on.' => 'کم شروع کرݨ یا ٻاہر جاری رکھݨ کیتے ہک nonempty symbol ݙیوو۔',
  'Remote "%s", specified with "--into", is not a valid fetchable remote.' => 'ریموت "%s"، جیڑھا "--into" نال متعین کیتا ڳئے، کوئی درست fetchable ریموت کوئنی۔',
  'Name of a concrete subclass of `%s` which tunes the analysis of `%s` statements for this linter.' => '`%s` دے concrete subclass دا ناں جیڑھا ایہ linter کیتے `%s` statements دی analysis کوں ٹیون کریندا ہے۔',
  'Single lined arrays should not have a trailing comma.' => 'ہک لائن آلے arrays اچ trailing comma نئیں ہوݨا چاہیدا۔',
  'Generator has never rewound, but has a value to send. This is invalid.' => 'Generator کݙاہیں rewind نئیں تھیا، لیکن بھیجݨ کیتے ہک قیمت رکھدا ہے۔ ایہ غلط ہے۔',
  'Remote "%s" has multiple bookmarks with name "%s". This is unexpected.' => 'ریموت "%s" اچ "%s" ناں دے متعدد bookmarks ہن۔ ایہ غیر متوقع ہے۔',
  'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => 'Base commit rule \'%s\' (source \'%s\' توں) کوئی پہچاݨا ڳیا rule کوئنی۔',
  'Unsafe Usage of Dynamic String' => 'Dynamic String دا غیر محفوظ استعمال',
  'it is what you typed when prompted.' => 'ایہ اوہو ہے جیڑھا تساں prompt ملݨ تے ٹائپ کیتا۔',
  '%s can not be used with %s.' => '%s کوں %s نال استعمال نئیں کیتا ویندا۔',
  'Merge conflicts in working copy:' => 'ورکنگ کاپی اچ merge conflicts:',
  'Expected to find key "%s", but it is not present.' => 'key "%s" ڳولھݨ دی توقع ہائی، لیکن ایہ موجود کوئنی۔',
  'Night has fallen, and the thin sliver of moon overhead offers no comfort. It is almost pitch black. The night is bitter cold. It will be difficult to look around in these conditions.' => 'رات ڈھل گئی ہے، تے سر تے چمکݨ آلا چندر دا پتلا ٹوٹا کوئی سکون نئیں ݙیندا۔ ایہ تقریباً گھپ اندھارا ہے۔ رات سخت ٹھنڈی ہے۔ انہاں حالتاں اچ آلے دوالے ݙیکھݨ اوکھا تھیسی۔',
  'Future has already resolved. Futures may not resolve more than once.' => 'Future پہلے ہی resolve تھی چکیا ہے۔ Futures ہک واری توں ودھ resolve کوئنی تھی سڳدے۔',
  '**version**' => '**ورژن**',
  'Broken' => 'ترُٹا ہویا',
  'Length must be larger than 0!' => 'لمبائی 0 توں وݙی ہوݨی چاہیدی!',
  'The "SHELL" environment variable does not match any recognized shell.' => '"SHELL" environment variable کہیں پہچاݨے ڳئے shell نال نئیں ملدا۔',
  'All reviewers are away until %s:' => 'سارے reviewers %s تئیں غیر حاضر ہن:',
  'Server to connect to.' => 'Connect کرݨ آلا server۔',
  'Created a new Differential revision:' => 'ہک نئی Differential revision بݨائی ڳئی:',
  'The name of this file differs from the name of the class, interface, trait or enum it declares. Rename the file to `%s`.' => 'ایہ فائل دا ناں اوں class، interface، trait یا enum دے ناں توں وکھرا ہے جیندا ایہ اعلان کریندی ہے۔ فائل دا ناں \'%s\' رکھو۔',
  'When creating a revision, try to use the working copy commit message verbatim, without prompting to edit it. When updating a revision, update some fields from the local commit message.' => 'جڈاں revision بݨیندے پے ہوو، بغیر کہیں ترمیم دے prompt دے ورکنگ کاپی دے commit message کوں بالکل ایسے طرح استعمال کرݨ دی کوشش کرو۔ جڈاں revision کوں اپ ڈیٹ کریندے پے ہوو، مقامی commit message توں کجھ fields اپ ڈیٹ کرو۔',
  'LOAD STASH' => 'LOAD STASH',
  'Put space after comment start.' => 'comment دے شروع ہوݨ توں بعد space رکھو۔',
  'class, interface, trait or enum' => 'class، interface، trait یا enum',
  'Failed to write file \'%s\'.' => 'فائل \'%s\' لکھݨ اچ ناکامی۔',
  'Path \'%s\' does not exist!' => 'Path \'%s\' موجود کوئنی!',
  'Config: Reading system configuration file "%s"...' => 'Config: سسٹم configuration فائل "%s" پڑھݨ لڳے...',
  'Continue even though reviewers are unavailable?' => 'بھانویں reviewers دستیاب کوئنی، تے وی اڳے ودھو؟',
  'Config: Reading local configuration file "%s"...' => 'Config: مقامی configuration فائل "%s" پڑھݨ لڳے...',
  'Use of `%s`' => '`%s` دا ورتاوا',
  'Unable to parse \'%s\' file \'%s\'.' => '\'%s\' فائل \'%s\' کوں parse کرݨ اچ ناکامی۔',
  'Too few arguments to %s.' => '%s کیتے arguments گھٹ ہن۔',
  'Unknown Mercurial feature "%s".' => 'نامعلوم Mercurial خصوصیت "%s"۔',
  'They river bubbles peacefully.' => 'اوہ ندی آرام نال بلبلے کریندی ہے۔',
  'PHP files must only contain PHP code.' => 'PHP فائلاں اچ صرف PHP code ہوݨا چاہیدا۔',
  'Exit after serving __limit__ clients.' => '__limit__ clients کوں serve کرݨ توں بعد باہر نکلو۔',
  '<Process was terminated by signal %s (%d).>

' => '<Process کوں signal %s (%d) نال ختم کیتا ڳیا۔>',
  'Line Too Long' => 'سطر ٻہوں لمبی ہے',
  'Skip' => 'چھوڑو',
  'Confirms that the correct changes have been selected to land.' => 'تصدیق کریندی ہے کہ land کرݨ کیتے درست تبدیلیاں چنیاں ڳئیاں ہن۔',
  'Source code should contain only ASCII bytes with ordinal decimal values between 32 and 126 inclusive, plus linefeed. Do not use UTF-8 or other multibyte charsets.' => 'سورس code اچ صرف ASCII bytes ہوݨے چاہیدن جیناں دیاں ordinal decimal قدراں 32 توں 126 تئیں شمول ہوون، علاوہ linefeed دے۔ UTF-8 یا ٻئے multibyte charsets استعمال نہ کرو۔',
  'There are no changes to generate a diff from!' => 'diff بݨاؤݨ کیتے کوئی تبدیلیاں کوئنی!',
  'Type' => 'قسم',
  'Toolset "%s" is unknown. The binary should be executed so that "argv[0]" identifies a supported toolset. Rename the binary or install the library that provides the desired toolset. Current available toolsets: %s.' => 'Toolset "%s" نامعلوم ہے۔ binary ایویں execute تھیوݨا چاہیدا کہ "argv[0]" ہک supported toolset دی نشاندہی کرے۔ binary دا ناں بدلو یا اوہ library install کرو جیڑھی مطلوبہ toolset فراہم کریندی ہے۔ موجودہ دستیاب toolsets: %s۔',
  'Rule \'%s\' can never be reduced: it recurses indefinitely and reaches no production of terminals.' => 'Rule \'%s\' کݙاہیں reduce نئیں تھی سگدا: ایہ لاانتہا recursion کریندا ہے تے terminals دی کہیں production تئیں نئیں پہنچدا۔',
  'Specifying keys when destructuring arrays is not available before PHP 7.1.' => 'arrays کوں destructure کریندے ہوئے keys متعین کرݨ PHP 7.1 توں پہلے دستیاب کوئنی۔',
  'Translating legacy name \'%s\' to \'%s\'' => 'legacy ناں \'%s\' کوں \'%s\' اچ بدلݨ لڳے',
  'Could not encode repository versions!' => 'repository دے versions کوں encode نئیں کیتا ڳیا!',
  'Set minimum message severity. One of: %s. Defaults to \'%s\'.' => 'message دی گھٹ توں گھٹ severity متعین کرو۔ ایہناں اچوں ہک: %s۔ ڈیفالٹ \'%s\' ہے۔',
  'Paamayim Nekudotayim Spacing' => 'Paamayim Nekudotayim فاصلہ',
  'Command-Line Flags' => 'Command-Line فلیگس',
  'Expected JSON response from Asana.' => 'Asana توں JSON جواب دی توقع ہائی۔',
  'The name or path of the coding standard to use.' => 'استعمال کرݨ آلے coding standard دا ناں یا path۔',
  'Space Around Comma' => 'Comma دے آسے پاسے فاصلہ',
  'Unable to parse path as PHAR file. PHAR file paths must be prefixed with `%s` and include a segment with one of these extensions (case-sensitive): %s' => 'path کوں PHAR فائل دے طور تے parse کرݨ اچ ناکامی۔ PHAR فائل paths دے شروع اچ `%s` ہوݨا چاہیدا تے انہاں اچ انہاں extensions اچوں ہک آلا حصہ (case-sensitive): %s',
  'Enabled verbose mode.' => 'verbose mode فعال کیتا ڳئے۔',
  'PHP Syntax Error!' => 'PHP دی Syntax Error!',
  'INVALID CREDENTIALS' => 'غلط اسناد',
  'Attempting to rebase changes.' => 'تبدیلیاں rebase کرݨ دی کوشش کریندا پے۔',
  'Hold indefinitely without prompting.' => 'بغیر کہیں prompt دے غیر معینہ مدت تئیں رکو۔',
  'Cannot access `%s` when current class scope has no parent.' => 'جڈاں موجودہ class scope دا کوئی parent نہ ہووے تاں `%s` تک رسائی نئیں کیتی گئی۔',
  '"%s" is being run noninteractively, but the argument list is missing "--" to indicate end of flags.' => '"%s" غیر تعاملی طور تے چلائی گئی پئی ہے، لیکن flags دے ختم ہوݨ دی نشاندہی کیتے argument فہرست اچ "--" موجود کوئنی۔',
  'Configuration option ("%s") defined by extension "%s" conflicts with an existing option. Each option must have a unique key.' => 'extension "%2$s" نال متعین کردہ configuration option ("%s") ہک موجودہ option نال متصادم ہے۔ ہر option دی ہک منفرد key ہوݨی چاہیدی۔',
  '%s called with no messages!' => '%s کوں بغیر کہیں messages دے بلایا ڳئے!',
  'Two files were added with identical explicit keys ("%s"); each explicit key must be unique.' => 'ݙو فائلاں ہک جئیاں explicit keys ("%s") نال شامل کیتیاں ڳئیاں؛ ہر explicit key منفرد ہوݨی چاہیدی۔',
  'Specify exactly one base commit. The end of the commit range is always the working copy state.' => 'بالکل ہک base commit متعین کرو۔ commit range دا خاتمہ ہمیشہ working copy دی حالت ہے۔',
  'The remote URI for this working copy is "%s".' => 'ایہ working copy دا remote URI "%s" ہے۔',
  'Unable to launch an interactive text editor. Set the %s environment variable to an appropriate editor.' => 'ہک interactive text editor شروع کرݨ اچ ناکامی۔ %s environment variable کوں ہک مناسب editor تے متعین کرو۔',
  'URI \'%s\' must be fully qualified and include host name.' => 'URI \'%s\' مکمل qualified ہوݨی چاہیدی تے host دا ناں شامل ہوݨا چاہیدا۔',
  'Command exited with error code %d.' => 'Command error code %d نال باہر نکلیا۔',
  'Landing the current HEAD, "%s".' => 'موجودہ HEAD، "%s" کوں land کریندا پے۔',
  'CoffeeLint is a style checker that helps keep CoffeeScript code clean and consistent.' => 'CoffeeLint ہک style checker ہے جیڑھا CoffeeScript code کوں صاف تے مطابقت آلا رکھݨ اچ مدد کریندے۔',
  'Requested path \'%s\' is not a directory.' => 'درخواست کردہ path \'%s\' ہک ڈائریکٹری کوئنی۔',
  'Command failed with error #%d!' => 'Command error #%d نال ناکام تھیئی!',
  'You can\'t get local commit information for a repository with no commits.' => 'تساں بغیر commits آلے repository کیتے مقامی commit دی معلومات نئیں گھن سگدے۔',
  'Unable to find Mono and you are not on Windows!' => 'Mono نئیں لبا تے تساں Windows تے کوئنی!',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\' or by printing and faxing it).' => 'تساں ایہ commit ہݨ مناسب طور تے upstream push کر سگدے ہو (مثلاً \'%s\' نال یا ایندا print کرکے تے fax کرکے)۔',
  'Trying to pop an empty workflow stack!' => 'ہک خالی workflow stack کوں pop کرݨ دی کوشش کریندا پے!',
  'MULTIPLE BRANCH HEADS' => 'متعدد BRANCH HEADS',
  'SimpleXML Linter' => 'SimpleXML Linter',
  'Load one or more configuration files. If this flag is provided, the system and user configuration files are ignored.' => 'ہک یا ودھیک configuration فائلاں load کرو۔ اگر ایہ flag ݙتا ڳئے تاں system تے user دیاں configuration فائلاں نظرانداز کیتیاں ویندیاں ہن۔',
  'Can\'t parse an empty diff!' => 'ہک خالی diff کوں parse نئیں کیتا ڳیا!',
  'Unexpected data type in request data: %s.' => 'request data اچ غیر متوقع data دی قسم: %s۔',
  'You are trying to construct an ambiguous URI: query parameter "%s" is present in both the string argument ("%s") and the map argument.' => 'تساں ہک ambiguous URI بݨاؤݨ دی کوشش کریندے پے ہو: query parameter "%s" string argument ("%s") تے map argument ݙوہاں اچ موجود ہے۔',
  'Convention: no spaces around string concatenation operator.' => 'Convention: string concatenation operator دے چڑدے پاسے spaces نہ ہوون۔',
  'Unnecessary Final Modifier' => 'غیر ضروری Final Modifier',
  'INVALID LOCALE' => 'غلط LOCALE',
  'DOS Newlines' => 'DOS Newlines',
  'Support for grouped use statements was not introduced until PHP 7.0 but this codebase targets an earlier version of PHP.' => 'grouped use statements دی سپورٹ PHP 7.0 توں پہلے متعارف نئیں تھائی، لیکن ایہ codebase PHP دے پرانے ورژن کوں ہدف بݨیندی ہے۔',
  'There was an error resolving the server hostname. Check that you are connected to the internet and that DNS is correctly configured. (Did you add the domain to `%s` on some other machine, but not this one?)' => 'server دا hostname resolve کرݨ اچ ہک غلطی تھائی۔ یقینی بݨاؤ کہ تساں internet نال منسلک ہوو تے DNS درست configure ہے۔ (کیا تساں \'%s\' اچ domain کہیں ٻئی مشین تے شامل کیتا ہئی، لیکن ایہ مشین تے نئیں؟)',
  'Usage Exception:' => 'استعمال استثنا:',
  'Pushing changes to "%s".' => 'تبدیلیاں "%s" تے push کیتیاں پئیاں ہن۔',
  'Argument was \'%s\', but must be \'%s\'. For example, %s' => 'Argument \'%s\' ہئی، لیکن \'%s\' ہوݨا چاہیدا۔ مثلاً، %s',
  'User "%s"' => 'ورتݨ آلا "%s"',
  'You are passing an integer to %s which is so large it can not be represented without loss of precision by Javascript\'s native %s class. Use %%# instead.' => 'تساں %s کوں ہک integer ݙیندے پے ہو جیڑھا ایتنا وݙا ہے کہ Javascript دی native %s class precision دے نقصان بغیر ایندی نمائندگی نئیں کر سگدی۔ %%# استعمال کرو۔',
  'Config: Did not find local configuration at "%s".' => 'Config: "%s" تے مقامی configuration نئیں لبھی۔',
  'Symbol \'%s\' in production \'%s\' (\'%s\') of rule \'%s\' does not name a rule or terminal. Did you misspell a symbol, fail to specify a terminal, or forget a rule?' => 'rule \'%4$s\' دی production \'%2$s\' (\'%3$s\') اچ Symbol \'%s\' کہیں rule یا terminal دا ناں نئیں رکھدا۔ کیا تساں symbol غلط لکھے، terminal متعین کرݨ بھُل ڳئے، یا rule بھُل ڳئے؟',
  'To update shell completion support for "%s", your existing "%s" file will be modified. This line will be removed:' => '"%s" کیتے shell completion دی سپورٹ اپ ڈیٹ کرݨ کیتے، تہاݙی موجودہ "%s" فائل اچ ترمیم کیتی ویسی۔ ایہ لائن کڈھ ݙتی ویسی:',
  'Confirms that local commits which are not associated with a revision have been associated correctly and should land.' => 'ایہ تصدیق کریندا ہے کہ اوہ مقامی commits جیڑھے کہیں revision نال منسلک نئیں، درست طور تے منسلک کیتے ڳئے ہن تے انہاں کوں land ہوݨا چاہیدا۔',
  'Class' => 'جماعت',
  'Specify either "true" or "false".' => 'کہیں "true" یا "false" متعین کرو۔',
  'Rules are already up to date for "%s" in: %s' => '"%s" کیتے rules پہلے ہی %s اچ up to date ہن۔',
  'Installing shell completion support for "%s" into "%s".' => '"%s" کیتے shell completion دی سپورٹ "%s" اچ install کریندا پے۔',
  'Export change as a git patch. This format is more complete than unified, but less complete than arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'تبدیلی کوں git patch دے طور تے export کرو۔ ایہ فارمیٹ unified توں ودھیک مکمل ہے، لیکن arc bundles توں گھٹ مکمل ہے۔ ایہ patches \'%s\' یا \'%s\' نال apply کیتے گئی سگدن۔',
  'Expected to find meminfo key "%s" in meminfo source "%s".' => 'meminfo source "%2$s" اچ meminfo key "%s" ملݨ دی توقع ہائی۔',
  'Will merge into empty state, selected with the "--into-empty" flag.' => '"--into-empty" flag نال منتخب، خالی حالت اچ merge تھیسی۔',
  'Use parentheses when invoking a constructor.' => 'جڈاں constructor کوں invoke کریندے پے ہوو تاں parentheses استعمال کرو۔',
  'Automatically amending HEAD with lint patches.' => 'lint patches نال HEAD کوں خودکار طور تے amend کریندا پے۔',
  'Failed to remove directory \'%s\'!' => 'ڈائریکٹری \'%s\' کوں ہٹاؤݨ اچ ناکامی!',
  'Prepare the changes to be pushed, but do not actually push them.' => 'push تھیوݨ آلے تبدیلیاں کوں تیار کرو، لیکن دراصل انہاں کوں push نہ کرو۔',
  'This test is expected to fail.' => 'ایہ test ناکام ہووݨ دی توقع ہے۔',
  'SKIP' => 'چھوڑو',
  'Unexpected type %s.' => 'غیر متوقع قسم %s۔',
  'Execution of "git cat-file --batch-check" emitted an unexpected line ("%s").' => '"git cat-file --batch-check" چلاؤݨ نال ہک غیر متوقع لائن ("%s") سامݨے آئی۔',
  'Do not print status messages to stdout.' => 'status دے پیغامات stdout تے نہ چھاپو۔',
  'Typed constants are not available before PHP 8.3.' => 'Typed constants PHP 8.3 توں پہلے دستیاب کوئنی۔',
  'AMBIGUOUS MARKER' => 'مبہم MARKER',
  'Revision Symbol "%s"' => 'Revision دا Symbol "%s"',
  'Unable to open stdout temporary file ("%s") for writing.' => 'لکھݨ کیتے stdout عارضی فائل ("%s") کھولی نئیں ڳئی۔',
  'Class member access on instantiation was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => 'instantiation تے class member دی access PHP 5.4 توں پہلے متعارف نئیں تھائی، لیکن ایہ codebase PHP دے پرانے version کوں ہدف بݨیندی ہے۔ تساں ایہ expression کوں `%s` استعمال کرکے ٻاہر لکھ سگدے ہو۔',
  'The name of this file differs from the name of the class or interface it declares. Rename the file to `%s`.' => 'ایہ فائل دا ناں اوں class یا interface دے ناں توں وکھرا ہے جیندا ایہ اعلان کریندی ہے۔ فائل دا ناں `%s` رکھو۔',
  'Deleted' => 'مٹا ݙتے',
  'Configuration value ("%s") defined in source "%s" is not valid.' => 'source "%2$s" اچ متعین کردہ configuration دی قیمت ("%s") درست کوئنی۔',
  'MULTIPLE "ONTO" BRANCHES' => 'متعدد "ONTO" BRANCHES',
  'The HTTP method \'%s\' is not supported. Supported HTTP methods are: %s.' => 'HTTP method \'%s\' supported کوئنی۔ Supported HTTP methods ہن: %s۔',
  'Some hunks could not be applied cleanly by the unix \'%s\' utility. Your working copy may be different from the revision\'s base, or you may be in the wrong subdirectory. You can export the raw patch file using \'%s\', and then try to apply it by fiddling with options to \'%s\' (particularly, %s), or manually. The output above, from \'%s\', may be helpful in figuring out what went wrong.' => 'کجھ hunks unix دی \'%s\' utility نال صاف طور تے apply نئیں تھی سڳے۔ تہاݙی ورکنگ کاپی revision دے base توں وکھری تھی سگدی ہے، یا تساں غلط subdirectory اچ تھی سگدے ہو۔ تساں \'%s\' استعمال کرکے raw patch فائل export کر سگدے ہو، تے پھر \'%s\' دے options (خاص طور تے، %s) نال گݙوڑ کرکے، یا manually، ایندا apply کرݨ دی کوشش کرو۔ اوپروں ݙتا ڳیا output، \'%s\' توں، ایہ ڄاݨݨ اچ مددگار تھی سگدا ہے کہ کیا غلط تھیا۔',
  'Show the changes that will land. Does not modify the working copy or the remote.' => 'اوہ تبدیلیاں ݙکھاؤ جیڑھیاں land تھیوݨ آلیاں ہن۔ ورکنگ کاپی یا ریموت اچ ترمیم نئیں کریندا۔',
  'PUSH STAGING' => 'PUSH STAGING',
  'SUBMITTING' => 'SUBMITTING',
  'Associate the working copy with a specific repository. Normally, %s can figure this association out on its own, but if your setup is unusual you can use this option to tell it what the desired value is.' => 'ورکنگ کاپی کوں ہک مخصوص repository نال منسلک کرو۔ عام طور تے، %s ایہ منسلکی آپے ڳولھ گھندا ہے، لیکن اگر تہاݙا setup غیر معمولی ہے تاں تساں ایندا مطلوبہ قیمت ݙسݨ کیتے ایہ option استعمال کر سگدے ہو۔',
  'Fetch URI: %s' => 'Fetch URI: %s',
  'Default value for parameters with a true type hint can only be true.' => 'true type hint آلے parameters دی default value صرف true تھی سگدی ہے۔',
  'Remote "%s" was selected with the "--onto-remote" flag.' => 'ریموت "%s" کوں "--onto-remote" flag نال منتخب کیتا ڳئے۔',
  'it is the greatest common ancestor of the working directory and the commit you specified explicitly.' => 'ایہ ورکنگ ڈائریکٹری تے اوہ commit جیڑھی تساں واضح طور تے متعین کیتی ہائی، دا عظیم ترین common ancestor ہے۔',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s", or an IPv6 address like "%s".' => 'IP address "%s" درست فارمیٹ اچ کوئنی۔ ہک IPv4 address جیویں "%s"، یا ہک IPv6 address جیویں "%s" دی توقع ہائی۔',
  'Response Body: %s' => 'جواب دی Body: %s',
  'Default branch name to view on server. Defaults to "%s".' => 'server تے ݙیکھݨ کیتے default branch دا ناں۔ ڈیفالٹ "%s" ہے۔',
  'Do not print a success message.' => 'کامیابی دا پیغام نہ چھاپو۔',
  'The shift operators no longer accept negative shifts in PHP 7.0.' => 'shift operators PHP 7.0 اچ negative shifts کوں ہݨ قبول نئیں کریندے۔',
  'Failed to read socket.' => 'socket پڑھݨ اچ ناکامی۔',
  'Start in remote console mode.' => 'remote console mode اچ شروع کرو۔',
  'Landing onto target "%s", selected by following tracking branches upstream to the closest remote branch.' => 'target "%s" تے land کریندا پے، جیڑھا tracking branches کوں upstream قریب ترین remote branch تئیں follow کرکے منتخب کیتا ڳئے۔',
  'In a "switch" statement, "continue;" is equivalent to "break;" but causes compile errors beginning with PHP 7.0.0.' => '"switch" statement اچ، "continue;" دے برابر "break;" ہے، لیکن PHP 7.0.0 توں شروع ہوکے compile errors دا سبب بݨدی ہے۔',
  'Specifies the default behavior when "arc land" is run with no "--onto-remote" flag.' => 'اوہ default رویہ متعین کرو جݙاں "arc land" کوں بغیر "--onto-remote" flag دے چلایا ویندا ہے۔',
  'Copied Away' => 'کاپی تھی ڳئی',
  'Expected to find "%s" in `%s` output, but did not.' => '`%2$s` دے output اچ "%s" ملݨ دی توقع ہائی، لیکن نہ ملیا۔',
  'you specified \'%s\' in your %s \'base\' configuration.' => 'تساں اپݨی %2$s \'base\' configuration اچ \'%s\' متعین کیتا ہئی۔',
  '%s revision(s) have ongoing builds:' => array(
    '%s revision دی جاری builds:',
    '%s revisions دیاں جاری builds:',
  ),
  'MERGE CONFLICTS' => 'MERGE CONFLICTS',
  'You must set PayPal API credentials!' => 'تساں کوں PayPal API credentials ضرور متعین کرݨیاں پوسن!',
  '%s y, %s m' => '%s س، %s م',
  'Failed to create directory \'%s\'.' => 'directory \'%s\' بݨاؤݨ اچ ناکامی۔',
  'Symbol "%s" is ambiguous: it matches multiple markers (of type "%s"). Use an unambiguous identifier.' => 'Symbol "%s" ambiguous ہے: ایہ متعدد markers (قسم "%s" دے) نال ملدا ہے۔ ہک غیر ambiguous identifier استعمال کرو۔',
  'Default Parameters' => 'ڈیفالٹ Parameters',
  'copies' => 'نقلاں',
  'File \'%s\' mixes function (%s) and class/interface (%s) definitions in the same file. A file which declares a class or an interface MUST declare nothing else.' => 'File \'%s\' ہک ہی file اچ function (%s) تے class/interface (%s) دیاں definitions ملاندی ہے۔ ہک file جیڑھی class یا interface declare کریندی ہے، اوں کوں ٻیا کجھ declare نئیں کرݨا چاہیدا۔',
  'Local commit "%s" (reachable from: %s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Local commit "%s" (reachable from: %s) "%s" اچ صاف طور تے merge نئیں تھیندا۔ local تبدیلیاں کوں rebase یا merge کرو تاکہ اوہ صاف طور تے merge تھی سگن۔',
  'Configuration option ("%s") defined by extension "%s" conflicts with an alias for another option ("%s"). The key and aliases of each option must be unique.' => 'Configuration option ("%s") جیڑھی extension "%s" نال متعین کیتی ڳئی، ٻئے option ("%s") دے ہک alias نال متصادم ہے۔ ہر option دی key تے aliases منفرد ہوݨے چاہیدن۔',
  'Unable to determine repository for this change.' => 'ایہ تبدیلی کیتے repository دا تعین نئیں کیتا ڳیا۔',
  'Provided path \'%s\' is not a %s library.' => 'فراہم کیتا ڳیا path \'%s\' کوئی %s library کوئنی۔',
  'Downloading binary data...' => 'binary data download کریندا پے...',
  'Unable to access %s or `%s` on this system to get system memory information.' => 'system memory دی معلومات گھنݨ کیتے ایہ system تے %s یا `%s` تک رسائی نئیں کیتی ڳئی۔',
  'This working copy is configured to have an immutable local history, using the "history.immutable" configuration option. Amending the working copy will mutate local history.' => 'ایہ working copy "history.immutable" configuration option نال immutable local history رکھݨ کیتے configure کیتی ڳئی ہے۔ working copy کوں amend کرݨ local history کوں mutate کر ݙیسی۔',
  'You have uncommitted changes in the working copy ("%s") for this library ("%s"):' => 'تہاݙے کول ایہ library ("%2$s") کیتے working copy ("%s") اچ uncommitted تبدیلیاں ہن:',
  'Set key "%s" = %s in %s config (was %s).' => '%3$s config اچ key "%s" = %s سیٹ کیتی ڳئی (پہلے %4$s ہئی۔)',
  'Function %s is not implemented!' => 'Function %s implement نئیں تھائی!',
  'Revision \'%s: %s\' was generated from \'%s\', but current working copy root is \'%s\'. Commit this revision anyway?' => 'Revision \'%s: %s\' \'%s\' توں generate تھائی ہئی، لیکن موجودہ working copy دا root \'%s\' ہے۔ کیا ایہ revision بہرحال commit کروں؟',
  'Unable to write configuration: more than one writable source exists in the "%s" scope.' => '"%s" scope اچ ہک توں ودھ writable sources موجود ہن، ایں کیتے configuration لکھی نئیں ڳئی۔',
  'Emit all symbols, including built-ins and declared externals.' => 'built-ins تے declared externals سمیت تمام symbols emit کرو۔',
  'Convention: space before opening parenthesis in anonymous function declarations.' => 'Convention: anonymous function declarations اچ کھلݨ آلے parenthesis توں پہلے space۔',
  'Reference assignments in array destructuring is not available before PHP 7.3.' => 'array destructuring اچ reference assignments PHP 7.3 توں پہلے دستیاب کوئنی۔',
  'The token "%s" is not formatted correctly. Valid API tokens should begin "cli-" and be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => 'ٹوکن "%s" ٹھیک طرح فارمیٹ نئیں تھیا۔ API ٹوکن "cli-" نال شروع تھیوݨے چاہیدن تے 32 حرفاں دے ہوݨے چاہیدن۔ یقینی بݨاؤ کہ تساں درست URI تے ڳئے ہو تے ٹوکن درست طرح copy/paste کیتا ہووے۔',
  'You follow a wide, straight path to the north and arrive in a grove of fruit trees after a few minutes of walking. The grass underfoot is thick and small insects flit through the air.' => 'تساں شمال دی طرف ہک چوڑا، سِدھا رستہ ڳھندے پے ہو تے کجھ منٹ پیدل چلݨ توں بعد پھلاں آلے درختاں دے ہک باغ اچ پہنچدے ہو۔ پیریں تلے گھاہ گھاٹا ہے تے ہوا اچ نکے نکے کیڑے اݙدے پئین۔',
  'Specifies the default behavior when "arc land" is run with no "--onto" flag.' => 'متعین کرو کہ جݙاں "arc land" کوں بغیر "--onto" flag دے چلایا ویندا ہے تاں default رویہ کیا ہوسی۔',
  'Anonymous readonly classes are not available before PHP 8.3.' => 'Anonymous readonly classes PHP 8.3 توں پہلے دستیاب کوئنی۔',
  'Functions which should not be used because they represent the unsafe usage of dynamic strings.' => 'اینجھیاں functions استعمال نئیں کرݨے چاہیدن کیونکہ اوہ dynamic strings دے غیر محفوظ استعمال دی نمائندگی کریندن۔',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the library is up to date.' => '"%s" مقام تے library load نئیں تھائی۔ ایہ library "%s" نال متعین کیتی ڳئی ہے۔ یقینی بݨاؤ کہ library up to date ہے۔',
  'Use of Close Tag `%s`' => '`%s` close tag دا استعمال',
  'TO UPGRADE: %s' => 'اپ گریڈ کرݨ کیتے: %s',
  'No type ID for token type name \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST اچ token type دے ناں \'%s\' کیتے کوئی type ID کوئنی۔',
  'Ruleset for selecting commit ranges.' => 'commit ranges منتخب کرݨ دا ruleset۔',
  'Alias definitions form an unreasonably deep stack. A chain of aliases may not resolve more than %s times.' => 'Alias دیاں definitions ہک غیر معمولی طور تے ڈوہنگا stack بݨیندیاں ہن۔ aliases دی ہک chain %s دفعہ توں ودھ resolve نئیں تھی سگدی۔',
  'Default pager command.' => 'ڈیفالٹ pager command۔',
  'Expected exactly one argument to "remote(...)" with a remote name.' => '"remote(...)" کوں remote دے ناں نال بالکل ہک argument دی توقع ہائی۔',
  'Unable to find \'%s\' file to configure linters. Create an \'%s\' file in the root directory of the working copy.' => '\'%s\' فائل linters configure کرݨ کیتے نئیں لبھی۔ ورکنگ کاپی دی root ڈائریکٹری اچ ہک \'%s\' فائل بݨاؤ۔',
  'HTTP extension "%s" (of class "%s") returned an invalid result from "%s": expected null, or an object of class "%s".' => 'HTTP extension "%s" (class "%s" دی) نے "%s" توں ہک غلط result واپس کیتا: توقع null یا class "%s" دے ہک object دی ہائی۔',
  'Unable to find any git commit named \'%s\' in this repository.' => 'ایہ repository اچ \'%s\' ناں دا کوئی git commit نئیں لبا۔',
  'Lists bookmarks in the working copy, annotated with additional information
about review status.' => 'ورکنگ کاپی اچ bookmarks دی فہرست ݙیندا ہے، review status بارے ودھیک معلومات نال annotation۔',
  'Use `%s` to instantiate the current class.' => 'موجودہ class کوں instantiate کرݨ کیتے `%s` استعمال کرو۔',
  'Specify a key and a value.' => 'ہک key تے ہک value متعین کرو۔',
  'Options \'%s\', \'%s\' and \'%s\' are not compatible. Choose exactly one export format.' => 'Options \'%s\'، \'%s\' تے \'%s\' ہک ٻئے نال مطابقت نئیں رکھدے۔ بالکل ہک export format منتخب کرو۔',
  'Fetching "%s" from remote "%s"...' => '"%s" کوں remote "%s" توں fetch کریندا پے...',
  'Limit the amount of tasks outputted, default is all.' => 'output تھیوݨ آلے tasks دی مقدار کوں محدود کرو، ڈیفالٹ تمام ہن۔',
  'Amend HEAD with lint patches?' => 'HEAD کوں lint patches نال amend کروں؟',
  'Using `%s` as the only type hint is not allowed before PHP 8.2.' => 'PHP 8.2 توں پہلے صرف `%s` کوں type hint دے طور تے استعمال کرݨ دی اجازت کوئنی۔',
  'Connecting to "%s"...' => '"%s" نال connect کریندا پے...',
  'Disable ANSI terminal codes, printing plain text with no color or style.' => 'ANSI terminal codes کوں غیر فعال کرو، بغیر کہیں رنگ یا انداز دے سادا متن چھاپو۔',
  'Two workflows with name \'%s!\'' => '\'%s\' ناں دے ݙو workflows!',
  'Unrecognized argument \'%s\'. Try \'%s\'.' => 'غیر پہچاݨا ڳیا argument \'%s\'۔ \'%s\' آزماؤ۔',
  'Library name should contain only lowercase letters and hyphens.' => 'Library دے ناں اچ صرف چھوٹے اکھر تے hyphens ہوݨے چاہیدن۔',
  'Land %s commit(s)?' => array(
    '%s commit land کرو؟',
    '%s commits land کرو؟',
  ),
  '%s does not update any revision.' => '%s کہیں revision کوں اپ ڈیٹ نئیں کریندا۔',
  'Unable to find any libraries under the current working directory. To create a library, provide a path.' => 'موجودہ ورکنگ ڈائریکٹری اچ کوئی libraries نئیں لبھیاں۔ ہک library بݨاؤݨ کیتے، ہک path ݙیوو۔',
  '<default>' => '<پہلے کنوں طے تھیا ہویا>',
  'Do not run lint.' => 'lint نہ چلاؤ۔',
  'If you intended to update an existing revision, use:' => 'اگر تہاݙا ارادہ کہیں موجودہ revision کوں اپ ڈیٹ کرݨ دا ہئی، تاں استعمال کرو:',
  'Override configured unit engine for this project.' => 'ایہ project کیتے configured unit engine کوں override کرو۔',
  'Expected \'%s\' in unified diff.' => 'unified diff اچ \'%s\' دی توقع ہائی۔',
  'Unable to upload file: failed to determine filesize of path "%s".' => 'فائل upload نئیں تھائی: path "%s" دا filesize طے کرݨ اچ ناکامی۔',
  'String does not require double quotes. For consistency, prefer single quotes.' => 'String کوں double quotes دی لوڑ کوئنی۔ مطابقت کیتے، single quotes کوں ترجیح ݙیوو۔',
  'Methods should have their visibility declared explicitly.' => 'Methods دی visibility واضح طور تے اعلان کیتی وݨی چاہیدی۔',
  'Merge strategy "%s" specified in "%s" configuration is unknown. Supported merge strategies are: %s.' => 'Merge strategy "%s" جیڑھی "%s" configuration اچ متعین کیتی ڳئی ہے، نامعلوم ہے۔ Supported merge strategies ہن: %s۔',
  'Relative commit \'%s\' is not the name of a commit!' => 'Relative commit \'%s\' کہیں commit دا ناں کوئنی!',
  'Associates this working copy with a specific server.' => 'ایہ working copy کوں ہک مخصوص server نال منسلک کریندا ہے۔',
  'You must configure \'%s\' with the name of a linter in order to use %s.' => '\'%s\' کوں ہک linter دے ناں نال configure کرو تاں جو %s استعمال کر سگھو۔',
  'Projects to assign to the task.' => 'اوہ projects جیڑھے ایہ task کوں assign تھیݨے ہن۔',
  'Unknown event %s' => 'نامعلوم event %s',
  'Not installing API token.' => 'API ٹوکن install نئیں کیتا ویندا۔',
  'Config: Did not find system configuration at "%s".' => 'Config: "%s" تے سسٹم configuration نئیں لبھی۔',
  'Continue?' => 'جاری رکھوں؟',
  'Failed to push changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => 'staging area اچ تبدیلیاں push کرݨ اچ ناکامی۔ مسئلہ درست کرو، یا ایہ قدم skip کرݨ کیتے --skip-staging استعمال کرو۔',
  'Execution of "hg log" emitted an unexpected line ("%s").' => '"hg log" چلاؤݨ نال ہک غیر متوقع لائن ("%s") سامݨے آئی۔',
  '%dm%02ds' => '%d منٹ %02d سیکنڈ',
  'you explicitly specified the empty tree.' => 'تساں واضح طور تے خالی tree متعین کیتی ہئی۔',
  'Apply this patch to %s?' => 'کیا ایہ patch %s تے لاگو کروں؟',
  'Commit Message' => 'Commit پیغام',
  'Unrecognized lint message code "%s".' => 'غیر پہچاݨا ڳیا lint پیغام code "%s"۔',
  'Lists branches in the working copy, annotated with additional information
about review status.' => 'ورکنگ کاپی اچ branches دی فہرست ݙیندا ہے، review status بارے ودھیک معلومات نال annotation۔',
  'List statements should use the `%s` statement syntax.' => 'List statements کوں `%s` statement syntax استعمال کرݨی چاہیدی۔',
  'Constants on traits are not available before PHP 8.2.' => 'Traits تے constants PHP 8.2 توں پہلے دستیاب کوئنی۔',
  'Updating %s: %s' => 'تازہ کریندا پئے %s:%s',
  'Current Value' => 'موجودہ قدر',
  'Install jsonlint using `%s`.' => '`%s` نال jsonlint انسٹال کرو۔',
  'Create %s new remote bookmark(s)?' => array(
    '%s نئے remote bookmark? بݨاؤ',
    '%s نئے remote bookmarks? بݨاؤ',
  ),
  'identify symbols in PHP source files' => 'PHP سورس فائلاں اچ symbols دی شناخت کرو',
  '%s does not support the "%s" modifier.' => '%s "%s" modifier دی سپورٹ نئیں کریندا۔',
  'This `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => 'ایں `%s` اچ ہک خالی نہ ہوݨ آلا بلاک ہے جیڑھا `%s`، `%s`، `%s`، `%s` یا `%s` تے ختم نئیں تھیندا۔ کیا تساں انہاں اچوں ہک شامل کرݨ بھل ڳئے؟ اگر تساں دا ارادہ fall through کرݨ ہے تاں ایں warning کوں خاموش کرݨ کیتے ہک `%s` تبصرہ شامل کرو۔',
  'Push URI: %s' => 'پش URI: %s',
  'Found the wrong number of hunk lines.' => 'hunk لائناں دی غلط تعداد ملی۔',
  'Land only the changes directly named by arguments, instead of all reachable ancestors.' => 'صرف اوہ تبدیلیاں land کرو جیڑھیاں arguments نال براہِ راست متعین کیتیاں ڳئیاں ہن، نہ کہ تمام reachable ancestors۔',
  'A mercurial commit hash in the commit range is already attached to the Differential revision.' => 'commit range اچ ہک mercurial commit hash پہلے ہی Differential revision نال منسلک ہے۔',
  'Install this token anyway?' => 'کیا ایہ token ویسے وی install کروں؟',
  'The remote host closed the connection before the request completed.' => 'request مکمل تھیوݨ توں پہلے remote host نے connection بند کر ݙتا۔',
  '(Assuming \'%s\' is the British spelling of \'%s\'.)' => '(\'%s\' \'%s\' دی برطانوی spelling ہے، ایہ سمجھدے ہوئے۔)',
  'You stand in the middle of a small clearing in the woods.' => 'تساں جنگل اچ ہک چھوٹی کلیئرنگ دے وچکار کھڑے ہو۔',
  'Expected JSON response from WordPress.com.' => 'WordPress.com توں JSON جواب دی توقع ہائی۔',
  'Oct' => 'اکتوبر',
  '`%s` expects an object instance, constant given.' => '`%s` کوں object instance دی توقع ہائی، constant ݙتی گئی۔',
  'Launching editor "%s"...' => 'editor "%s" شروع کریندا پے...',
  'Language Construct Parentheses' => 'Language Construct Parentheses',
  'Force targets to be interpreted as naming particular types of resources.' => 'targets کوں کہیں مخصوص قسماں دے resources دے ناں طور تے سمجھاؤݨ کیتے مجبور کرو۔',
  'Blacklisted functions which should not be used.' => 'Blacklisted functions جیڑھیاں استعمال نئیں کرݨے چاہیدن۔',
  'Show every option, including standard options like this one.' => 'ہر option ݙکھاؤ، بشمول ایہنے جئے standard options۔',
  'Uploading chunks (%s chunks to upload).' => array(
    'chunks upload کریندا پے (%s chunk upload کرݨ کیتے)۔',
    'chunks upload کریندا پے (%s chunks upload کرݨ کیتے)۔',
  ),
  'Specify at most one URI.' => 'ودھ توں ودھ ہک URI متعین کرو۔',
  'Shows the current version.' => 'موجودہ version ݙکھائیندی ہے۔',
  'Enforces basic text rules like line length, character encoding, and trailing whitespace.' => 'line length، character encoding، تے trailing whitespace ورڳے بنیادی text rules کوں نافذ کریندی ہے۔',
  'Too many arguments: provide exactly one argument.' => 'Arguments ودھیک ہن: بالکل ہک argument ݙیوو۔',
  'Close only if the repository is untracked and the revision is accepted. Continue even if the close can\'t happen. This is a soft version of \'close-revision\' used by other workflows.' => 'صرف ایں صورت اچ بند کرو جݙاں repository untracked ہووے تے revision قبول تھیا ہویا ہووے۔ جاری رکھو بھانویں close نہ وی تھی سڳے۔ ایہ \'close-revision\' دا ہک نرم version ہے جیڑھا ٻئے workflows استعمال کریندن۔',
  'Automatic branch naming from tasks is not supported yet for %s.' => 'tasks توں Automatic branch naming %s کیتے ہݨ تئیں supported کوئنی۔',
  'Object specification "%s" is unknown, expected a specification like "commit(HEAD)".' => 'Object specification "%s" نامعلوم ہے، "commit(HEAD)" ورڳے specification دی توقع ہائی۔',
  'Successfully committed patch.' => 'کامیابی نال patch commit تھی ڳیا۔',
  '`%s` class `%s` has an invalid ID constant. ID must be an integer.' => '`%s` class `%s` دا ID constant غلط ہے۔ ID لازمی طور تے ہک integer ہوݨا چاہیدا۔',
  'Use `%s` to detect issues with CSS source files.' => 'CSS سورس فائلاں اچ مسئلیں ڳولھݨ کیتے `%s` استعمال کرو۔',
  'UPDATE' => 'تازہ',
  'Unable to determine current system locale (call to "setlocale(LC_ALL, 0)" failed).' => 'موجودہ system locale دا تعین نئیں تھی سڳا ("setlocale(LC_ALL, 0)" کال ناکام تھائی)۔',
  'Downloaded hash does not match: expected any of %s, got %s.' => 'Download کیتا ڳیا hash نئیں ملدا: %s اچوں کہیں ہک دی توقع ہائی، %s ملیا۔',
  'You may not set new credentials after authenticating conduit.' => 'conduit authenticate کرݨ توں بعد تساں نویاں credentials سیٹ نئیں کر سگدے۔',
  'With %s, use uglier (but more efficient) formatting.' => '%s نال، ودھیک بدصورت (لیکن ودھیک کارآمد) formatting استعمال کرو۔',
  'OPTION REFERENCE' => 'OPTION دا حوالہ',
  'Message begins:' => 'سنیہا شروع تھیندے:',
  'Use the "alias" workflow to review aliases.' => 'aliases دا جائزہ گھنݨ کیتے "alias" workflow استعمال کرو۔',
  'This codebase targets PHP %s, but `%s` was removed in PHP %s.' => 'ایہ codebase PHP %s کوں ہدف بݨیندی ہے، لیکن `%s` کوں PHP %s اچ ہٹا ݙتا ڳیا ہا۔',
  'Additional rules for determining base revision.' => 'base revision دا تعین کرݨ کیتے ودھیک rules۔',
  'Rule \'%s\' discarded empty context!' => 'Rule \'%s\' نے خالی context رد کر ݙتا!',
  'Usage of `%s` is preferred over `%s`.' => '`%2$s` دی بجائے `%s` دے استعمال کوں ترجیح ݙتی ویندی ہے۔',
  'PHPUnit configuration file was not found in %s' => 'PHPUnit configuration فائل %s اچ نئیں لبھی۔',
  'Not String Concatenation' => 'String Concatenation نئیں',
  'STAGING FAILED' => 'STAGING ناکام تھائی',
  'Name of a concrete subclass of `%s` which enforces more granular naming convention rules for symbols.' => '`%s` دے ہک concrete subclass دا ناں جیڑھا symbols کیتے ودھیک granular naming convention rules نافذ کریندا ہے۔',
  'Convention: logical and arithmetic operators should be surrounded by whitespace.' => 'Convention: logical تے arithmetic operators دے چڑدے پاسے whitespace ہوݨی چاہیدی۔',
  'Space Before Unary Postfix Operator' => 'Unary postfix operator توں پہلے Space',
  'Expected any exception, got no exception.' => 'کہیں وی exception دی توقع ہائی، کوئی exception نئیں ملیا۔',
  'Discard these changes before running "arc upgrade".' => '"arc upgrade" چلاؤݨ توں پہلے ایہ تبدیلیاں رد کر ݙیوو۔',
  'Failed to copy file from "%s" to "%s": %s' => 'فائل "%s" توں "%s" تئیں copy کرݨ اچ ناکامی: %s',
  'The test failed, but this change is probably not what broke it. For example, it might have already been failing.' => 'ٹیسٹ ناکام تھیا، لیکن ایہ تبدیلی شاید اوہ نہ ہووے جیڑھی ایندا سبب بݨی۔ مثلاً، ایہ پہلے ہی ناکام تھیݨا شروع ہو چکیا ہوسی۔',
  'Invalid Default Parameter' => 'غلط Default Parameter',
  'Class constants cannot be marked as final before PHP 8.1.' => 'Class constants کوں PHP 8.1 توں پہلے final دے طور تے نشان زد نئیں کیتا ڳیا۔',
  'String components of a sort vector must not contain NULL bytes.' => 'sort vector دے string components اچ NULL bytes نئیں ہوݨے چاہیدن۔',
  'Using saved response to prompt "%s".' => 'prompt "%s" کیتے محفوظ شدہ جواب استعمال کریندا پے۔',
  'The `%s` syntax was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => '`%s` syntax PHP 5.4 توں پہلے متعارف نئیں تھائی، لیکن ایہ codebase PHP دے پرانے version کوں ہدف بݨیندی ہے۔ تساں ایہ expression `%s` استعمال کرکے ٻاہر لکھ سگدے ہو۔',
  'Prompts the user to stash changes and continue when the working copy has untracked, uncommitted, or unstaged changes.' => 'جڈاں working copy اچ untracked، uncommitted یا unstaged تبدیلیاں ہوون تاں user کوں تبدیلیاں stash کرݨ تے جاری رکھݨ کیتے prompt کریندا ہے۔',
  'This file contains unnecessary trailing whitespace.' => 'ایہ فائل اچ غیر ضروری trailing whitespace موجود ہے۔',
  'Not a symlink!' => 'symlink نئیں!',
  'Halting all rule processing.' => 'تمام rule دی processing روک ݙیتی ڳئی۔',
  'Default value for parameters with a float type hint can only be an integer or a floating point number.' => 'float type hint آلے parameters دی default value صرف integer یا floating point number تھی سگدی ہے۔',
  'Configured lint engine "%s" is not a subclass of "%s", but must be.' => 'Configured lint engine "%s" "%s" دا subclass کوئنی، لیکن ہوݨا چاہیدا ہے۔',
  'This repository API (\'%s\') does not support the requested capability.' => 'ایہ repository API (\'%s\') درخواست کردہ capability دی سپورٹ نئیں کریندی۔',
  'Land %s revision(s) that are already published?' => array(
    '%s اوہ revision جیڑھی پہلے ہی شائع ہے land کروں؟',
    '%s اوہ revisions جیڑھیاں پہلے ہی شائع ہن land کروں؟',
  ),
  'Expected to find "%s" in "%s" output, but did not.' => '`%2$s` دے output اچ "%s" ملݨ دی توقع ہائی، لیکن نہ ملیا۔',
  'Golint is a linter for Go source code.' => 'Golint Go source code کیتے ہک linter ہے۔',
  '%s is broken.' => '%s بھنوکڑ ہے۔',
  '"%s" class "%s" has an invalid "%s" property. Field constants must be strings and no more than %s bytes in length.' => '"%s" class "%s" دی "%s" property غلط ہے۔ Field constants لازمی طور تے strings ہوݨے چاہیدن تے %s bytes توں ودھیک لمبے نئیں۔',
  'GENERATE' => 'بݨاؤ',
  'Empty Block Statement' => 'خالی Block Statement',
  'Properties cannot be declared "abstract".' => 'Properties کوں "abstract" declare نئیں کیتا ڳیا۔',
  'Working copy' => 'ورکنگ کاپی',
  'Unknown Hardpoint request specification (of type "%s").' => 'نامعلوم Hardpoint request specification (قسم "%s" دی)۔',
  'Undefined Lint Message' => 'غیر متعین Lint Message',
  'Unknown Command' => 'نامعلوم Command',
  'Submitting changes to "%s".' => 'تبدیلیاں "%s" کوں submit کریندا پے۔',
  'Configure a default merge strategy for "arc land".' => '"arc land" کیتے default merge strategy متعین کرو۔',
  'Downloading binary data for \'%s\'...' => '\'%s\' کیتے binary data download کریندا پے...',
  '**upload** [__options__] -- __file__ [__file__ ...]' => '**upload** [__options__] -- __file__ [__file__ ...]',
  'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => 'غیر پہچاݨی ڳئی key \'%s\' argument specification اچ۔ Recognized keys ہن: %s۔',
  'The SSL CA Bundles that we tried to use could not be read or are not formatted correctly.' => 'اوہ SSL CA Bundles جنہاں کوں اساں استعمال کرݨ دی کوشش کیتی، انہاں کوں پڑھیا نئیں ڳیا یا اوہ ٹھیک فارمیٹ اچ کوئنی۔',
  'DATA' => 'ڈیٹا',
  'Unary prefix operators should not be followed by whitespace.' => 'Unary prefix operators دے بعد whitespace نئیں آوݨا چاہیدا۔',
  'You can not use "--current" when generating rules.' => 'تساں rules بݨیندے ہوئے "--current" استعمال نئیں کر سگدے۔',
  'Unable to fork!' => 'fork کرݨ اچ ناکامی!',
  'This workflow (\'%s\') requires a working copy, override %s to return true.' => 'ایں workflow (\'%s\') کوں ہک working copy دی لوڑ ہے، true واپس کرݨ کیتے %s کوں override کرو۔',
  'No revision specified with "--revision", and no revisions found that match the current working copy state. Use "--revision <id>" to specify which revision you want to amend.' => '"--revision" نال کوئی revision متعین نئیں کیتی گئی، تے موجودہ working copy دی حالت نال ملݨ آلیاں کوئی revisions نئیں لبھیاں۔ اوہ revision متعین کرݨ کیتے "--revision <id>" استعمال کرو جیندا تساں amend کرݨ چاہندے ہو۔',
  'Call to "curl_setopt(...) failed for option key "%s".' => '"curl_setopt(...)" کوں option key "%s" کیتے کال ناکام تھائی۔',
  'EXCEPTION' => 'EXCEPTION',
  'Failed to split line "%s" from "git log".' => '"git log" توں لائن "%s" کوں split کرݨ اچ ناکامی۔',
  '---' => '---',
  'Failed to write %d bytes to \'%s\'.' => '\'%2$s\' اچ %d bytes لکھݨ اچ ناکامی۔',
  'The "merge" strategy generates a merge commit when publishing that retains local checkpoint commits (but produces a nonlinear published history). Select this strategy if you do not want "arc land" to discard checkpoint commits.' => '"merge" strategy publishing ویلھے ہک merge commit بݨیندی ہے جیڑھی مقامی checkpoint commits کوں برقرار رکھیندی ہے (لیکن ہک nonlinear published history بݨیندی ہے)۔ ایہ strategy منتخب کرو اگر تساں نئیں چاہندے کہ "arc land" checkpoint commits ضائع کرے۔',
  'Will merge into remote "%s", selected with the "--into" flag.' => '"--into" flag نال منتخب remote "%s" اچ merge تھیسی۔',
  'When running noninteractively, you MUST provide "--" to all commands (even if they take no arguments).' => 'جݙاں noninteractively چلایا ویندا پے تاں تساں تمام commands کوں "--" ضرور ݙیوو (چاہے اوہ کوئی arguments نہ وی گھندے ہوون)۔',
  'Parse error on line %d at column %d: %s' => 'لائن %d دے کالم %d تے parse error: %s',
  'No viable means to download llaville/compatinfo-db is available.' => 'llaville/compatinfo-db کوں download کرݨ دا کوئی درست ذریعہ دستیاب کوئنی۔',
  'Contents Modified' => 'JSON format اچ aliases دا output۔',
  'Output aliases in JSON format.' => 'JSON format اچ aliases دا output۔',
  'Flag --skip-staging was specified.' => '--skip-staging flag متعین کیتا ڳئے۔',
  'Child in position \'%d\' is not of type \'%s\': %s' => 'position \'%d\' اچ child \'%s\' قسم دا کوئنی: %s',
  'Parameter to %s must be a Differential Revision number.' => '%s دا parameter ہک Differential Revision number ہوݨا چاہیدا۔',
  '%s currently supports only one file attachment for each parameter name. You are trying to attach two different files with the same parameter, "%s".' => '%s ہر parameter دے ناں کیتے فی الحال صرف ہک file attachment دی سپورٹ کریندا ہے۔ تساں ہک ہی parameter ("%s") نال ݙو وکھریاں فائلاں attach کرݨ دی کوشش کریندے پے ہو۔',
  'Arguments "--into-local", "--into-remote", and "--into-empty" are mutually exclusive.' => 'Arguments "--into-local" ،"--into-remote" تے "--into-empty" ہک ٻئے نال mutually exclusive ہن۔',
  'Use `%s` for local static member references.' => 'مقامی static member دے حوالے کیتے `%s` استعمال کرو۔',
  'Wrote updated completion rules for "%s" to: %s.' => '"%s" کیتے اپ ڈیٹ شدہ completion دے rules %s تئیں لکھ ݙتے۔',
  '`%s` Methods Cannot Be Marked `%s`' => '`%s` دے میتھڈز کوں `%s` نشان زد نئیں کیتا ڳیا۔',
  'Leading Whitespace at BOF' => 'BOF تے شروع آلے خالی حرف',
  'No library currently exists at the path "%s"...' => 'فی الحال "%s" مقام تے کوئی library موجود کوئنی...',
  'Show committed and abandoned revisions.' => 'commit شدہ تے ترک کیتے ڳئے revisions ݙکھاؤ۔',
  'Unable to locate %s.' => '%s کوں locate نئیں کیتا ڳیا۔',
  'The `%s` operator is not available before PHP 5.6.' => '\'%s\' operator PHP 5.6 توں پہلے دستیاب کوئنی۔',
  'SAVE STASH' => 'STASH محفوظ کرو',
  'Wildcard arguments may not specify a parameter.' => 'Wildcard arguments کہیں parameter کوں specify نئیں کر سگدے۔',
  'After creating a paste, open it in a web browser.' => 'paste بݨاؤݨ توں بعد، ایندا ویب براؤزر اچ کھولو۔',
  'The node \'%s\' is not known. Call %s to seed the graph with nodes.' => 'node \'%s\' معلوم کوئنی۔ graph کوں nodes نال seed کرݨ کیتے %s کوں کال کرو۔',
  'Do not run any sanity checks.' => 'کہیں sanity check نئیں چلاوݨے۔',
  'Execution of "git cat-file --batch-check" emitted an unexpected number of lines, expected %s but got %s.' => '"git cat-file --batch-check" چلاؤݨ نال لائناں دی غیر متوقع تعداد سامݨے آئی، توقع %s ہائی، لیکن %s ملیاں۔',
  'Classes should extend from `%s` or from some other class. All classes (except for `%s` itself) should have a base class.' => 'Classes کوں `%s` توں یا کہیں ٻئی class توں extend کرݨا چاہیدا۔ تمام classes (سوائے `%s` دے آپے دے) دا ہک base class ہوݨا چاہیدا۔',
  'Missing VCS support.' => 'VCS دی سپورٹ گھٹ ہے۔',
  'Bookmark name %s already exists; trying a new name.' => 'Bookmark دا ناں %s پہلے ہی موجود ہے؛ ہک نواں ناں آزمایا ویندا پے۔',
  'Alias definitions form a cycle which can not be resolved: %s.' => 'Alias دیاں definitions ہک cycle بݨیندیاں ہن جیڑھا حل نئیں تھی سڳدا: %s۔',
  'Arc unit does not currently support %s in SVN.' => 'Arc unit فی الحال SVN اچ %s دی حمایت نئیں کریندی۔',
  'Argument Error' => 'Argument اچ غلطی',
  'Multiple "final" modifiers are not allowed.' => 'ہک توں ودھ "final" modifiers دی اجازت کوئنی۔',
  'Flag "--lang" is not supported when reading pastes.' => 'Flag "--lang" دی سپورٹ کوئنی جڈاں pastes پڑھے ویندے ہن۔',
  'Allows you to make a raw Conduit method call:

  - Run this command from a working directory.
  - Call parameters are required, and read as a JSON blob from stdin.
  - Results are written to stdout as a JSON blob.

This workflow is primarily useful for writing scripts. Examples:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --' => 'تساں کوں ہک raw Conduit method call کرݨ دی اجازت ݙیندا ہے:

- ایہ command ہک working directory توں چلاؤ۔
- Call parameters ضروری ہن، تے stdin توں JSON blob دے طور تے پڑھے ویندے ہن۔
- Results stdout تے JSON blob دے طور تے لکھے ویندے ہن۔

ایہ workflow بنیادی طور تے scripts لکھݨ کیتے کارآمد ہے۔
Examples:

$ echo \'{}\' | arc call-conduit conduit.ping --
$ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --',
  'Two argument specifications have the same name ("%s").' => 'ݙو argument specifications دا ہک جیہا ناں ("%s") ہے۔',
  '(No commits.)' => '(کوئی commits کوئنی۔)',
  'This working copy has no metadata directory, so you can not resolve metadata paths within it.' => 'ایں working copy اچ کوئی metadata directory کوئنی، ایں کیتے تساں ایندے اندر metadata paths resolve نئیں کر سگدے۔',
  'Export change as a unified patch. This format is less complete than git patches or arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => 'تبدیلی کوں ہک unified patch دے طور تے export کرو۔ ایہ فارمیٹ git patches یا arc bundles توں گھٹ مکمل ہے۔ ایہ patches \'%s\' یا \'%s\' نال apply کیتے ونڄ سگدن۔',
  'Perforce sync failed! Fix the error and run "arc land" again.' => 'Perforce sync ناکام تھائی! غلطی درست کرو تے "arc land" ٻاہر چلاؤ۔',
  'Failed to close file handle.' => 'file handle بند کرݨ اچ ناکامی۔',
  'Name files using only letters, numbers, period, hyphen and underscore.' => 'فائلاں دے ناں صرف اکھر، numbers، period، hyphen تے underscore نال رکھو۔',
  'Call to "curl_setopt(...)" returned "false".' => '"curl_setopt(...)" کوں کال تے "false" واپس ملیا۔',
  'Unable to set socket nonblocking!' => 'socket کوں nonblocking سیٹ کرݨ اچ ناکامی!',
  'Generator delegation (`%s`) is not available before PHP 7.0.' => 'Generator delegation (`%s`) PHP 7.0 توں پہلے دستیاب کوئنی۔',
  'Unable to upload file chunks: %s' => 'file دے chunks upload کرݨ اچ ناکامی: %s',
  'it is the first ancestor of %s that has a diff and is the gca or a descendant of the gca with \'%s\', specified by \'%s\' in your %s \'base\' configuration.' => 'ایہ %s دا پہلا ancestor ہے جیناں کول ہک diff ہے تے جیڑھا gca ہے یا gca دا descendant ہے \'%s\' نال، جیڑھا تہاݙے %4$s \'base\' configuration اچ \'%s\' نال متعین کیتا ڳیا ہے۔',
  'Unsupported base85 encoding mode "%s".' => 'غیر سپورٹ شدہ base85 encoding mode "%s"۔',
  'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => 'configuration دی key "%s" arc پچھاݨدا کوئنی۔ ممکن ہے کہ ایندا ہجے غلط ہووے یا ایہ پرانی ہووے۔',
  'Failed to read patch from stdin!' => 'stdin توں patch پڑھݨ اچ ناکامی!',
  'Server URI "%s" must include a protocol and domain. It should be in the form "%s".' => 'Server URI "%s" اچ protocol تے domain شامل ہوݨا چاہیدا۔ ایہ "%s" دی صورت اچ ہوݨا چاہیدا۔',
  'PHP Coding Standards for Phutil libraries.' => 'Phutil libraries کیتے PHP Coding Standards۔',
  'Specify a string (or list of strings) identifying the interpreter which should be used to invoke the linter binary. If you provide a list of possible interpreters, the first one that exists will be used.' => 'ہک string (یا strings دی فہرست) متعین کرو جیڑھی interpreter دی نشاندہی کرے جینوں linter binary کوں invoke کرݨ کیتے استعمال کیتا ونڄے۔ اگر تساں possible interpreters دی ہک فہرست ݙیندے ہو تاں پہلا جیڑھا موجود ہووے، اوہ استعمال تھیسی۔',
  'Channel closed while flushing output!' => 'output flush کریندے ہوئے channel بند تھی ڳیا!',
  'Install CoffeeLint using `%s`.' => '`%s` نال CoffeeLint انسٹال کرو۔',
  'Multi-lined arrays should have trailing commas.' => 'Multi-lined arrays اچ trailing commas ہوݨے چاہیدن۔',
  'Configuration source ("%s") defines an invalid alias, which will be ignored: %s' => 'Configuration source ("%s") ہک غلط alias متعین کریندا ہے، جیڑھا نظرانداز کیتا ویسی: %s',
  'Your \'%s\' file is not a valid JSON file.' => 'تہاݙی \'%s\' فائل کوئی درست JSON فائل کوئنی۔',
  'it is specified by \'%s\' in your %s \'base\' configuration.' => 'ایہ تہاݙی %2$s \'base\' configuration اچ \'%s\' نال متعین کیتا ڳیا ہے۔',
  'These %s revision(s) have changes planned:' => array(
    'ایہ revision اچ changes planned ہن:',
    'ایہ %s revisions اچ changes planned ہن:',
  ),
  'Use __%s__ to show additional options.' => '__%s__ کوں ودھیک options ݙکھاؤݨ کیتے استعمال کرو۔',
  'No repositories matched the query. Check that your configuration is correct, or use "%s" to select a repository explicitly.' => 'کوئی repositories query نال نئیں ملیاں۔ یقینی بݨاؤ کہ تہاݙی configuration درست ہے، یا repository کوں واضح طور تے منتخب کرݨ کیتے "%s" استعمال کرو۔',
  'Unable to upload file: path "%s" is not readable.' => 'فائل upload نئیں تھائی: path "%s" readable کوئنی۔',
  'Examining paths for linter \'%s\'.' => 'linter \'%s\' کیتے paths دا جائزہ گھندا پے۔',
  'Expected to find an integer value for meminfo key "%s" in meminfo source "%s", found "%s".' => 'meminfo source "%2$s" اچ meminfo key "%s" کیتے ہک integer قیمت ملݨ دی توقع ہائی، "%3$s" ملیا۔',
  'Unable to list contents of directory \'%s\'.' => 'directory \'%s\' دے مندرجات دی فہرست نئیں ݙتی ڳئی۔',
  'You can not read the result buffer while streaming results to disk: there is no in-memory buffer to read.' => 'تساں نتائج کوں ڈسک تے stream کریندے ہوئے result buffer نئیں پڑھ سگدے: پڑھݨ کیتے کوئی in-memory buffer موجود کوئنی۔',
  'File \'%s\' declares more than one class or interface (%s). A file which declares a class or interface MUST declare nothing else.' => 'فائل \'%s\' ہک توں ودھیک class یا interface (%s) دا اعلان کریندی ہے۔ اوہ فائل جیڑھی class یا interface دا اعلان کرے، MUST کجھ ٻیا اعلان نہ کرے۔',
  'NEW LIBRARY' => 'نویں لائبریری',
  'Show the amended commit message, without modifying the working copy.' => 'amended commit message ݙکھاؤ، ورکنگ کاپی اچ تبدیلی کیتیے بغیر۔',
  'Downloading "%s" (%s byte(s)) to "%s"...' => array(
    
    array(
      '"%s" download کریندا پے (%s byte) توں "%s" تئیں...',
      '"%s" download کریندا پے (%s bytes) توں "%s" تئیں...',
    ),
  ),
  'Type of setting \'%s\' must be list.' => 'setting \'%s\' دی قسم list ہوݨی چاہیدی۔',
  'When creating a revision, add CCs.' => 'جڈاں revision بݨیندے پے ہوو، CCs شامل کرو۔',
  'Specify a string (or list of strings) identifying the binary which should be invoked to execute this linter. This overrides the default binary. If you provide a list of possible binaries, the first one which exists will be used.' => 'ہک string (یا strings دی فہرست) متعین کرو جیڑھی اوہ binary دی نشاندہی کرے جیڑھی ایہ linter چلاؤݨ کیتے invoke تھیوݨی چاہیدی ہے۔ ایہ default binary کوں override کریندی ہے۔ اگر تساں ممکنہ binaries دی ہک فہرست ݙیوو تاں، اوہ پہلی binary جیڑھی موجود ہوسی، اوہ استعمال تھیسی۔',
  'Failed to open file!' => 'فائل کھولݨ اچ ناکامی!',
  'Confirms that revisions with ongoing builds should land.' => 'ایہ تصدیق کریندا ہے کہ اوہ revisions جیناں دے builds جاری ہن، انہاں کوں land تھیوݨا چاہیدا ہے۔',
  'Expected JSON response from Twitch.' => 'Twitch توں JSON جواب دی توقع ہائی۔',
  'No specification exists for argument "%s"!' => 'argument "%s" کیتے کوئی specification موجود کوئنی!',
  'Class symbol "%s" should be written as "%s".' => 'Class symbol "%s" کوں "%s" دے طور تے لکھݨا چاہیدا۔',
  'Accepted' => 'منظور تھیا',
  'Append to this file?' => 'ایں فائل اچ append کروں؟',
  'Empty files usually don\'t serve any useful purpose.' => 'خالی فائلاں عام طور تے کہیں کم دیاں نئیں ہوندیاں۔',
  'Specify two or more files to weld together.' => 'ݙو یا ودھیک فائلاں weld کرݨ کیتے متعین کرو۔',
  'Magic constants should be uppercase.' => 'Magic constants وݙے اکھراں اچ ہوݨے چاہیدن۔',
  'CASCADE' => 'CASCADE',
  '%s REVISION(S) HAVE CHANGES PLANNED' => array(
    '%s revision اچ changes planned ہن',
    '%s revisions اچ changes planned ہن',
  ),
  'You are not the author of \'%s: %s\'. Commit this revision anyway?' => 'تساں \'%s: %s\' دے لکھݨ آلے کوئنی۔ کیا تے وی ایہ revision commit کروں؟',
  'Lookup of encoding in project failed: %s' => 'project اچ encoding دی lookup ناکام تھائی: %s',
  'Concatenation Spacing' => 'Concatenation اچ Spacing',
  'Array item with key \'%s\' must be of type array, %s given.' => '\'%s\' key آلا array item array قسم دا ہوݨا چاہیدا، %s ݙتا ڳئے۔',
  'No mode provided for path "%s".' => 'path "%s" کیتے کوئی mode نئیں ݙتا ڳئے۔',
  'PHP-Parser Lint' => 'PHP-Parser Lint',
  'LOG IN' => 'لاگ اِن',
  'Final property promotion is not available before PHP 8.5.' => 'PHP 8.5 توں پہلے final property promotion دستیاب کوئنی۔',
  'Ignore the changes to these %s submodule(s) and continue?' => array(
    'ایہ submodule وچ تبدیلیاں کوں نظرانداز کرو تے اڳوں جاری رکھو؟',
    'ایہ submodules وچ تبدیلیاں کوں نظرانداز کرو تے اڳوں جاری رکھو؟',
  ),
  'Variable Reused As Iterator' => 'Iterator دے طور تے ٻاہر استعمال شدہ Variable',
  '(regenerate projects for %s)' => '(%s کیتے projects regenerate کرو)',
  'Always update a specific revision.' => 'ہمیشہ ہک مخصوص revision کوں اپ ڈیٹ کرو۔',
  'In multi-line use declarations, each variable should be on a separate line.' => 'multi-line use declarations اچ، ہر variable ہک وکھری لائن تے ہوݨا چاہیدا۔',
  'Partial Catch' => 'Partial Catch',
  'Call to "assertCaught(<junk>, ...)" passed bad expected value. expected result. Expected null, Exception, or Throwable; got: %s.' => '"assertCaught(<junk>, ...)" دی کال نے test result کیتے غلط قدر ݙتی۔ توقع ہائی: null، Exception یا Throwable؛ ملی: %s۔',
  'Example Value' => 'مثالی قیمت',
  'Dynamic expressions cannot be used as initializers for static variables before PHP 8.3.' => 'PHP 8.3 توں پہلے static variables کیتے initializers دے طور تے dynamic expressions استعمال نئیں کیتے ڳئے۔',
  'You have saved the response "%s" to this prompt.' => 'تساں ایہ جواب "%s" ایہ prompt تے save کر گھدا ہے۔',
  'This workflow (\'%s\') requires a Conduit, override %s to return true.' => 'ایں workflow (\'%s\') کوں ہک Conduit دی لوڑ ہے، true واپس کرݨ کیتے %s کوں override کرو۔',
  'BRANCH' => 'شاخ',
  'Moved Here' => 'ایتھے منتقل کیتا ڳیا',
  'A cast statement must not be followed by a space.' => 'cast statement دے بعد space نئیں ہوݨی چاہیدی۔',
  'Run unit tests covering changes since a specific revision.' => 'ہک مخصوص revision توں تبدیلیاں ڳولھݨ آلے unit tests چلاؤ۔',
  'Expected an object, string, or list of objects for "object" context, got "%s".' => '"object" context کیتے ہک object، string، یا objects دی فہرست دی توقع ہائی، "%s" ملیا۔',
  'Run "arc help prompts" for detailed help on configuring responses.' => '"arc help prompts" کوں configuring responses بارے تفصیلی مدد کیتے چلاؤ۔',
  'Unexpected output from %s: no author for commit %s' => '%s توں غیر متوقع output: commit %s دا کوئی author کوئنی۔',
  'Confirms that revisions with failed builds should land.' => 'ایہ تصدیق کریندا ہے کہ اوہ revisions جیناں دے builds ناکام تھئے، انہاں کوں land تھیوݨا چاہیدا ہے۔',
  'Did not reach every wait node??' => 'کیا ہر wait node تئیں نئیں پڄیا؟؟',
  'Unknown escaping mode!' => 'نامعلوم escaping mode!',
  'The river bubbles quietly, but you do not see any published commits anywhere.' => 'دریا خاموشی نال چھلکدا پے، لیکن تساں کتھائیں وی کوئی شائع شدہ commits نئیں ݙیکھدے۔',
  'Unable to parse SVN info.' => 'SVN info parse کرݨ اچ ناکامی۔',
  'Logical Operators' => 'منطقی Operators',
  'Keep local branches around after changes are pushed. By default, local branches are deleted after the changes they contain are published.' => 'تبدیلیاں push تھیوݨ توں بعد مقامی branches کوں رکھو۔ ڈیفالٹ طور تے، اوہ مقامی branches جیناں دیاں تبدیلیاں شائع تھی ویندیاں ہن، حذف کر ݙتیاں ویندیاں ہن۔',
  'Repository API is not supported.' => 'Repository API supported کوئنی۔',
  'HTTP parameter pair (with key "%s") is not valid: each pair must be an array with exactly two elements.' => 'HTTP parameter pair (key "%s" نال) درست کوئنی: ہر pair لازمی طور تے بالکل ݙو elements آلا array ہوݨا چاہیدا۔',
  'Working Copy: Project root is at "%s".' => 'Working Copy: Project root "%s" تے ہے۔',
  '(DEPRECATED) Obsolete, use "--types path" instead.' => '(DEPRECATED) Obsolete، "--types path" دی بجائے استعمال کرو۔',
  '    %s (%s) %s
' => ' %s (%s) %s',
  'Follow naming conventions: variables should be named using `%s`.' => 'ناں رکھݨ دے اصولاں دی پابندی کرو: variables کوں `%s` استعمال کر کے ناں ݙیو۔',
  'This is just an example function!' => 'ایہ صرف ہک مثال function ہے!',
  'Warning - legacy default value ignored' => 'Warning - legacy default value ignore تھی ڳئی',
  'Use the local "into" ref state instead of fetching it from a remote.' => 'remote توں fetch کرݨ دی بجائے مقامی "into" ref state استعمال کرو۔',
  'Phutil PHPAST' => 'Phutil PHPAST',
  'Specifies the default behavior when "arc land" is run with no "--strategy" flag.' => 'متعین کرو کہ جݙاں "arc land" کوں بغیر "--strategy" flag دے چلایا ویندا ہے تاں default رویہ کیا ہوسی۔',
  'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => 'Configuration دا option ("%s") پہچاݨا نئیں ڳیا۔ تساں صرف پہچاݨے ڳئے configuration options پڑھ سگدے ہو۔',
  'IP address "%s" is not properly formated: it has too few parts. Expected a minimum of 2 colons, like "%s".' => 'IP address "%s" ٹھیک طرح فارمیٹ نئیں تھیا: ایندے حصے گھٹ ہن۔ گھٹ توں گھٹ ݙو colons دی توقع ہائی، جیویں "%s"۔',
  'You can not specify paths with %s. The %s flag runs every test associated with a tracked file in the working copy.' => 'تساں %s نال paths متعین نئیں کر سگدے۔ %s flag working copy اچ tracked فائل نال منسلک ہر test چلیندا ہے۔',
  'Enums are not available before PHP 8.1.' => 'Enums PHP 8.1 توں پہلے دستیاب کوئنی۔',
  'Invalid UTF-8 string passed to %s.' => '%s کوں غلط UTF-8 string ݙتی ڳئی۔',
  'Creating new branch "%s" from "%s".' => '"%2$s" توں نویں branch "%s" بݨائی ویندی پئی ہے۔',
  'Use the full form of the PHP open tag, `%s`.' => 'PHP open tag دی full form استعمال کرو، `%s`۔',
  'Merge succeeded.' => 'Merge کامیابی نال تھی ڳئے۔',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates builtin definition of the same symbol.' => 'فائل "%3$s" اچ library "%4$s" اچ symbol "%s" دی definition (قسم "%s" دی) اوہو symbol دی builtin definition نال دوہری ہے۔',
  'Amending commit message to reflect revision:' => 'revision دی عکاسی کیتے commit message اچ ترمیم کریندا پے:',
  'Unknown URI type "%s"!' => 'نامعلوم URI قسم "%s"!',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\'.' => 'ایہ \'%2$s\' اچ متعین کردہ مطابق \'%s\' تے HEAD دا merge-base ہے۔',
  'Specify a file to download.' => 'download کرݨ آلی فائل متعین کرو۔',
  'Parameter provided to argument "--%s" is too large to parse as an integer.' => 'argument "--%s" کوں ݙتا ڳیا parameter ایتنا وݙا ہے کہ integer دے طور تے parse نئیں تھی سگدا۔',
  'Expected a list or dictionary!' => 'ہک list یا dictionary دی توقع ہائی!',
  'Invalid Content Encoding (Non-UTF8)' => 'غلط Content Encoding (Non-UTF8)',
  'Yielding processing of rules from \'%s\'.' => '\'%s\' توں rules دی processing کوں راہ ݙیندا پے۔',
  'IP address "%s" is not properly formatted. Address segments should have no leading zeroes, but segment "%s" has a leading zero.' => 'IP address "%s" درست فارمیٹ اچ کوئنی۔ Address دے segments اچ کوئی leading zeroes نئیں ہوݨے چاہیدن، لیکن segment "%s" اچ leading zero ہے۔',
  'For consistency, write hexadecimals integers in uppercase with a leading `%s`.' => 'مطابقت کیتے، hexadecimal integers کوں uppercase اچ لکھو، جیندا شروع اچ `%s` ہووے۔',
  'Use `%s` single-line comments, not `%s`.' => 'ہک لائن آلے comments کیتے `%s` استعمال کرو، `%s` نئیں۔',
  'Definition of %s \'%s\' in file \'%s\' duplicates prior definition in file \'%s\'. You can not declare the same symbol twice.' => 'فائل \'%3$s\' اچ %s \'%s\' دی definition، فائل \'%4$s\' اچ پہلے آلی definition دی duplicate ہے۔ تساں ہک ہی symbol کوں ݙو واری declare نئیں کر سگدے۔',
  '(No revisions match.)' => '(کوئی revisions نئیں ملدی۔)',
  'Unrecognized lint message code: "%s"' => 'غیر پہچاݨا ڳیا lint پیغام code "%s"۔',
  'No lint engine configured for this project.' => 'ایہ project کیتے کوئی lint engine configure نئیں تھیا۔',
  'Lint can not be output into "%s" format because the PHP "%s" extension is not installed. Install the extension or choose a different output format.' => 'Lint کوں "%s" فارمیٹ اچ output نئیں کیتا ڳیا کیونکہ PHP دی "%s" extension انسٹال کوئنی۔ extension انسٹال کرو یا کہیں ٻئے output format کوں منتخب کرو۔',
  'Call to phutil_nonempty_string() expected null or a string, got: %s.' => 'phutil_nonempty_string() دی کال تے null یا string دی توقع ہائی، %s ملیا۔',
  'Your version of \'%s\' is unbuilt or out of date. Run this script to build it.' => 'تہاݙی \'%s\' دی version بنائی کوئنی ڳئی یا پرانی ہے۔ ایندا build کرݨ کیتے ایہ script چلاؤ۔',
  'Failed to copy file from "%s" to "%s".' => 'فائل "%s" توں "%s" تئیں copy کرݨ اچ ناکامی۔',
  'CoffeeLint does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => 'CoffeeLint فی الحال custom severity levels دی سپورٹ نئیں کریندا، کیونکہ rules کوں output اچ messages توں پہچاݨیا نئیں ڳیا۔',
  'Attempt to read from undeclared property %s.' => 'غیر متعین کردہ property %s توں پڑھݨ دی کوشش۔',
  'Select a Default Commit Range' => 'ہک ڈیفالٹ Commit Range منتخب کرو۔',
  'Unable to start socket! Error #%d: %s' => 'socket شروع کرݨ اچ ناکامی! Error #%d: %s',
  'Failed to read modified time for %s.' => '%s دا modified time پڑھݨ اچ ناکامی۔',
  'Hexadecimal Integer Casing' => 'ہیکساڈیسیمل Integer دی Casing',
  'Calls to built-in PHP functions should be lowercase.' => 'Built-in PHP functions دے کال lowercase اچ ہوݨے چاہیدن۔',
  'Status: %s' => 'حیثیت: %s',
  'Follow naming conventions: functions should be named using `%s`.' => 'ناں رکھݨ دے اصولاں دی پابندی کرو: functions کوں `%s` استعمال کر کے ناں ݙیو۔',
  'Unexpected value type provided for an HREF field - %s. Please share this stack trace as comment in Task %s' => 'HREF field کیتے غیر متوقع value دی قسم ݙتی ڳئی - %s۔ مہربانی کرکے ایہ stack trace کوں Task %s اچ comment دے طور تے ونڈو۔',
  'Argument index is not a scalar.' => 'Argument index ہک scalar کوئنی۔',
  'Vigorously fuse files together, without using a cat.' => 'فائلاں کوں زور نال جوڑو، cat استعمال کیتے بغیر۔',
  'The test passed.' => 'ٹیسٹ پاس تھیا۔',
  'Received error from Twitch: %s' => 'Twitch توں غلطی ملی: %s',
  'Rewrite this code to use an array. Variable variables are unclear and hinder static analysis.' => 'ایہ code کوں array استعمال کرݨ کیتے ٻاہر لکھو۔ Variable variables غیر واضح ہن تے static analysis اچ رکاوٹ بݨدے ہن۔',
  'Missing files in working copy:' => 'working copy اچ گمشدہ فائلاں:',
  'Preparing to run a command in directory "%s", but that directory is not readable (the current process does not have "+r" permission).' => 'ڈائریکٹری "%s" اچ command چلاؤݨ دی تیاری کریندا پے، لیکن اوہ ڈائریکٹری readable کوئنی (موجودہ process کول "+r" permission کوئنی)۔',
  '**anoid**' => '**anoid**',
  'This workflow isn\'t executable!' => 'ایہ workflow executable کوئنی!',
  'Unknown command \'%s\'. Try \'%s\'.' => 'نامعلوم command \'%s\'۔ \'%s\' آزماؤ۔',
  'This function can not convert into the unit "%s".' => 'ایہ function "%s" unit اچ convert نئیں کر سگدی۔',
  'Runtime "--config" Flags' => 'Runtime "--config" Flags',
  'SUCCESS!' => 'کامیاب!',
  'No "%s %s" alias is defined, did you mean "%s %s"?' => '"%s %s" alias متعین کوئنی، کیا تساں "%s %s" دا مطلب گھدا ہئی؟',
  'Cannot display current version without "%s" installed.' => '"%s" install کیتیے بغیر موجودہ version ݙکھائی نئیں ڳئی۔',
  'Flag "--title" is not supported when reading pastes.' => 'Flag "--title" دی سپورٹ کوئنی جڈاں pastes پڑھے ویندے ہن۔',
  'Expected exactly one argument to "%s(...)" with a symbol.' => '"%s(...)" کوں symbol نال بالکل ہک argument دی توقع ہائی۔',
  'In remote "%s", the name "%s" identifies one or more branch heads and one or more bookmarks. Close, rename, or delete all but one of these markers, or pull the state you want to merge into and use "--into-local --into <hash>" to disambiguate the desired merge target.' => 'ریموت "%s" اچ، ناں "%s" ہک یا ودھیک branch heads تے ہک یا ودھیک bookmarks دی شناخت کریندا ہے۔ انہاں markers اچوں ہک توں سوا سب کوں بند کرو، ناں بدلو یا مٹاؤ، یا اوہ state pull کرو جیڑھی تساں merge کرݨا چاہندے ہو تے مطلوبہ merge target کوں disambiguate کرݨ کیتے "--into-local --into <hash>" استعمال کرو۔',
  'System Config File' => 'سسٹم Config فائل',
  'Show an enhanced view of bookmarks in the working copy.' => 'ورکنگ کاپی اچ bookmarks دا ہک بہتر منظر ݙکھاؤ۔',
  'A git commit or tree hash in the commit range is already attached to the Differential revision.' => 'commit range اچ ہک git commit یا tree hash پہلے ہی Differential revision نال منسلک ہے۔',
  'Use braces to surround a statement block.' => 'ہک statement block کوں گھیرݨ کیتے braces استعمال کرو۔',
  '"arc land" must be run in a Git or Mercurial working copy.' => '"arc land" کوں لازمی طور تے ہک Git یا Mercurial دی working copy اچ چلاؤݨا چاہیدا۔',
  'Begin or resume work.' => 'کم شروع کرو یا ٻاہر جاری رکھو۔',
  'Saving local state (at detached commit "%s").' => 'مقامی حالت save کریندا پے (detached commit "%s" تے).',
  'Properties can not be declared "final".' => 'Properties کوں "final" declare نئیں کیتا ڳیا۔',
  'Landing onto remote "%s", the default remote under Mercurial.' => 'ریموت "%s" تے land کریندا پے، جیڑھا Mercurial دے تحت default ریموت ہے۔',
  'Create a paste using the content in a file.' => 'ہک فائل اچ موجود مواد نال ہک paste بݨاؤ۔',
  'Jun' => 'جون',
  '%s failed: %s' => '%s ناکام تھئی: %s',
  'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => 'غیر پہچاݨا ڳیا lint پیغام code "%s"۔ درست JSHint lint code ورڳے "%s" یا "%s" دی توقع ہائی۔',
  'This patch has binary data. The PHP zlib extension is required to apply patches with binary data to git. Install the PHP zlib extension to continue.' => 'ایہ patch اچ binary data ہے۔ git تے binary data آلے patches لاگو کرݨ کیتے PHP zlib extension دی لوڑ ہے۔ جاری رکھݨ کیتے PHP zlib extension انسٹال کرو۔',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => 'lint پیغام بݨاوݨ ویلے "%2$s" کوں ݙتا ڳیا پیرامیٹر ("%s") ہک تار ہووݨا چاہیدا ہے جیندی ودھ توں ودھ لمبائی %3$s (bytes) ہے، لیکن او %4$s (bytes) لمبی ہے۔',
  'CONNECT' => 'کنیکٹ',
  'Unable to parse unit specification (expected a specification in the form "%s"): %s' => 'unit specification parse نئیں تھائی ("%s" دی صورت اچ specification دی توقع ہائی): %s',
  'Follow naming conventions: traits should be named using `%s`.' => 'ناں رکھݨ دے اصولاں دی پابندی کرو: traits کوں `%s` استعمال کر کے ناں ݙیو۔',
  'The shell "%s" is not supported. Supported shells are: %s.' => 'shell "%s" supported کوئنی۔ Supported shells ہن: %s۔',
  'Confirms use of a revision that does not appear to be present in the working copy.' => 'اوہ revision دے استعمال دی تصدیق کریندا ہے جیڑھی working copy اچ موجود نئیں لڳدی۔',
  'INTO COMMIT' => 'COMMIT وچ',
  '...' => '۔۔۔',
  'Dictionary key "%s" is not valid UTF8, and cannot be JSON encoded.' => 'Dictionary key "%s" درست UTF8 کوئنی، تے JSON اچ encode نئیں تھی سگدی۔',
  'Unsupported escape sequence "%s" found in pattern: %s' => 'pattern: %2$s اچ غیر معاون escape sequence "%s" ملیا',
  'Upgrading "%s" (on branch "%s").' => '"%s" کوں اپ گریڈ کریندا پے (برانچ "%s" تے)۔',
  'The request took too long to complete.' => 'درخواست مکمل تھیوݨ اچ ودھیک وقت گھدی ڳئی۔',
  '"arc amend" must be run from inside a working copy of a repository using a version control system that supports amending commits, like Git or Mercurial.' => '"arc amend" کوں ہک repository دی ورکنگ کاپی دے اندر توں چلاؤݨا چاہیدا، اوہو version control system استعمال کر کے جیڑھا commits amend کرݨ دی سپورٹ رکھدا ہووے، جیویں Git یا Mercurial۔',
  'Possible Spelling Mistake' => 'ممکنہ سپیلنگ دی غلطی',
  'Moved Away' => 'ٻئی جاہ تے منتقل تھی ڳیا',
  'Found no state ref for hash "%s".' => 'hash "%s" کیتے کوئی state ref نئیں ملیا۔',
  'Invalid glob pattern.' => 'غلط glob pattern۔',
  '%s is not compatible with the installed version of pylint. Minimum version: %s; installed version: %s.' => '%s انسٹال شدہ pylint ورژن نال مطابقت نئیں رکھدا۔ گھٹ توں گھٹ ورژن: %s؛ انسٹال شدہ ورژن: %s۔',
  'These Differential revisions match the changes in this working copy:' => 'ایہ Differential revisions ایہ ورکنگ کاپی اچ تبدیلیاں نال ملدیاں ہن:',
  'Pass in a custom jshintignore file path.' => 'ہک custom jshintignore فائل دا path ݙیوو۔',
  'Use of Undeclared Variable' => 'غیر اعلان شدہ Variable دا استعمال',
  'Expected value to be a list of objects to support calling "%s" to generate unique keys, but item with index "%s" is "%s".' => 'توقع ہے کہ unique keys بݨاؤݨ کیتے "%s" کوں call کرݨ دی سپورٹ کیتے قیمت objects دی ہک فہرست ہوسی، لیکن index "%s" آلا item "%s" ہے۔',
  'This working copy has no remote named "%s".' => 'ایں working copy اچ "%s" ناں دا کوئی remote کوئنی۔',
  'Hardpoint data (for hardpoint "%s") is not attached.' => 'Hardpoint data (hardpoint "%s" دا) منسلک کوئنی۔',
  'Type of setting \'%s\' must be string.' => 'setting \'%s\' دی قسم string ہوݨی چاہیدی۔',
  'Received error from Postmark: (%s) %s' => 'Postmark توں error ملیا: (%s) %s',
  '"arc upgrade" can only upgrade clean working copies.' => '"arc upgrade" صرف صاف working copies کوں upgrade کر سگدی ہے۔',
  'Call to phutil_nonempty_stringlike() expected a string or stringlike object, got: %s.' => 'phutil_nonempty_stringlike() دی کال تے ہک string یا stringlike object دی توقع ہائی، %s ملیا۔',
  'Name' => 'ناں',
  'Promoted properties are not available before PHP 8.0.' => 'Promoted properties PHP 8.0 توں پہلے دستیاب کوئنی۔',
  'Unit testing raised errors!' => 'Unit testing اچ errors آئن!',
  '... (%s more byte(s)) ...' => array(
    '... (%s ہور byte)) ...',
    '... (%s ہور bytes)) ...',
  ),
  'Install %s using `%s`.' => '`%2$s` نال %s انسٹال کرو۔',
  'Unexpected output to stderr on exec channel: %s' => 'exec channel تے stderr اچ غیر متوقع output: %s',
  'The name of a default lint engine to use, if no lint engine is specified by the current project.' => 'ہک default lint engine دا ناں جیڑھا استعمال تھیسی، اگر موجودہ project کوئی lint engine متعین نہ کرے۔',
  'Writing bundle to \'%s\'...' => '\'%s\' تے bundle لکھݨ لڳے...',
  'Configuration option "%s" was provided multiple times with "--config" flags. Specify each option no more than once.' => 'Configuration دا option "%s" "--config" flags نال ہک توں ودھ واری ݙتا ڳئے۔ ہر option صرف ہک واری متعین کرو۔',
  'Cannot find the %s equivalent of %s.' => '%2$s دا %s برابر نئیں لبا۔',
  'Saving local state (on ref "%s" at commit "%s").' => 'مقامی حالت save کریندا پے (ref "%s" تے commit "%s" تے)۔',
  'The `%s` type hint is not available before PHP 7.0.' => '\'%s\' type hint PHP 7.0 توں پہلے دستیاب کوئنی۔',
  'Maximum value must be an integer.' => 'Maximum value لازمی طور تے ہک integer ہوݨی چاہیدی۔',
  'Commit message has errors:' => 'Commit message اچ errors ہن:',
  'Adjust the maximum line length before a warning is raised. By default, a warning is raised on lines exceeding 80 characters.' => 'خط دی ودھ توں ودھ لمبائی کوں warning آوݨ توں پہلے متعین کرو۔ ڈیفالٹ طور تے، 80 حرفاں توں ودھ لائناں تے warning آندی ہے۔',
  'Enter a commit message for this patch. If you just want to apply the patch to the working copy without committing, re-run arc patch with the %s flag.' => 'ایہ patch کیتے ہک commit message ݙیوو۔ اگر تساں صرف patch کوں commit کیتے بغیر working copy تے لاگو کرݨا چاہندے ہوو، تاں arc patch کوں %s flag نال ٻاہر چلاؤ۔',
  'Failed to chmod \'%s\' to \'%s\'.' => '\'%s\' کوں \'%s\' تے chmod کرݨ اچ ناکامی۔',
  'Operating in Git/Perforce mode after selecting a Perforce remote.' => 'ہک Perforce remote منتخب کرݨ توں بعد Git/Perforce mode اچ کم کریندا پے۔',
  'IP address "%s" is not properly formatted: an address may only contain a maximum of one subsequence omitted with "::".' => 'IP address "%s" درست فارمیٹ اچ کوئنی: ہک address اچ "::" نال ختم شدہ ودھ توں ودھ ہک subsequence ہو سگدی ہے۔',
  'Report results in JSON format.' => 'نتائج JSON format اچ report کرو۔',
  'Failed to match "ls-remote" pattern against line "%s".' => '"ls-remote" pattern لائن "%s" نال نئیں ملیا۔',
  'Attempt to write to undeclared property %s.' => 'غیر متعین کردہ property %s اچ لکھݨ دی کوشش۔',
  'Provide a workflow to list prompts for.' => 'prompts دی فہرست ݙیکھݨ کیتے ہک workflow ݙیوو۔',
  'Raw changes can not be pushed to a staging area.' => 'کچی تبدیلیاں staging area تے push نئیں کیتیاں ڳئیاں۔',
  'Operation Error' => 'Operation Error',
  'Template not edited.' => 'Template اچ ترمیم نئیں تھائی۔',
  'runtime --library flag' => 'runtime --library flag',
  'Convention: no spaces before opening parenthesis in function and method declarations.' => 'Convention: function تے method declarations اچ کھلݨ آلے parenthesis توں پہلے spaces نہ ہوون۔',
  'Publish reviewed changes.' => 'جائزہ گھدی ڳئیاں تبدیلیاں publish کرو۔',
  'fread() from stdin failed with an error.' => 'fread() stdin توں ہک error نال ناکام تھیائی۔',
  'You must either provide a signing key with setSigningKey(), or provide a secret key with setSecretKey().' => 'تساں کوں setSigningKey() نال ہک signing key ݙیوݨی چاہیدی، یا setSecretKey() نال ہک secret key ݙیوݨی چاہیدی۔',
  'Omitting the variable in a catch clause is not allowed before PHP 8.0.' => 'PHP 8.0 توں پہلے catch clause اچ variable چھݙݨ دی اجازت کوئنی۔',
  'SAVE STATE' => 'SAVE STATE',
  '<placeholder>' => '<placeholder>',
  '%s failed!' => '%s ناکام تھیئی!',
  'Preparing to run a command in directory "%s", but that path is not a directory.' => 'ڈائریکٹری "%s" اچ command چلاؤݨ دی تیاری کریندا پے، لیکن اوہ path ڈائریکٹری کوئنی۔',
  'Expected %s to return array, got %s.' => '%s توں array واپس کرݨ دی توقع ہائی، %s ملیا۔',
  'Assertion of caught exception failed (at %s:%d in test case "%s").' => 'پکڑی ڳئی exception دی تصدیق ناکام تھائی (test case "%3$s" اچ %s:%d تے)۔',
  'The dependencies for this patch have a cycle. Applying them is not guaranteed to work. Continue anyway?' => 'ایہ patch دیاں dependencies اچ ہک cycle ہے۔ انہاں کوں لاگو کرݨ دے کامیاب ہوݨ دی ضمانت کوئنی۔ کیا تے وی جاری رکھو؟',
  'Local commit "%s" (%s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => 'Local commit "%s" (%s) "%s" اچ صاف طور تے merge نئیں تھیندا۔ local تبدیلیاں کوں rebase یا merge کرو تاکہ اوہ صاف طور تے merge تھی سڳن۔',
  '<%s> %s' => '<%s> %s',
  '%s requires exactly one revision.' => '%s کوں بالکل ہک revision دی لوڑ ہے۔',
  'Unable to read file permissions for "%s"!' => '"%s" دیاں فائل permissions پڑھݨ اچ ناکامی!',
  'Override default binary.' => 'default binary کوں override کرو۔',
  'Parameter %d of `%s` should be a scalar string, otherwise it\'s not safe.' => '%d دا `%s` parameter ہک scalar string ہوݨا چاہیدا، ورنہ ایہ محفوظ کوئنی۔',
  'Just ahead to the north, you can see **remotes**.
' => 'شمال دے پاسے ذرا اڳوں، تساں **remotes** ݙیکھ سگدے ہو۔',
  'Unable to verify request signature, specified "%s" ("%s") is unknown.' => 'request دی signature دی تصدیق نئیں تھی سڳی، متعین "%s" ("%s") نامعلوم ہے۔',
  'Commit \'%s\' is not a valid Mercurial commit identifier.' => 'Commit \'%s\' کوئی درست Mercurial commit identifier کوئنی۔',
  'Self Class Reference' => 'Self Class Reference',
  'Host returned HTTP/200, but invalid JSON data in response to a Conduit method call.' => 'Host نے HTTP/200 واپس کیتا، لیکن Conduit method کال دے جواب اچ غلط JSON data ہائی۔',
  'Czech (Czech Republic)' => 'چیکی (čeština)',
  'Constructor Parentheses' => 'Constructor Parentheses',
  'Paste Symbol "%s"' => 'Paste Symbol "%s"',
  'Reviewers: %s' => 'Reviewers: %s',
  'Convention: no spaces before closing parenthesis in function and method declarations.' => 'Convention: function تے method اچ declarations کھلݨ آلے parenthesis توں پہلے spaces نہ ہوون۔',
  'The "SHELL" environment variable has value "%s", so the target shell was detected as "%s".' => 'ہک "SHELL" environment variable دی قیمت "%s" ہے، ایں کیتے target shell "%s" دے طور تے پچھاݨی ڳئی۔',
  'Unable to overwrite path \'%s\', patched version was left at \'%s\'.' => 'path \'%s\' کوں overwrite نئیں کیتا ڳیا، patched version \'%s\' تے رہ ڳیا۔',
  'Aug' => 'اگست',
  'Future has already ended; futures can not end more than once.' => 'Future پہلے ہی ختم تھی چکیا ہے؛ futures ہک واری توں ودھ ختم کوئنی تھی سڳدے۔',
  'Method %s in class %s is not implemented!' => 'class %2$s اچ method %s implement نئیں تھایا!',
  'Convention: double arrow should be surrounded by whitespace.' => 'Convention: double arrow دے چڑدے پاسے whitespace ہوݨا چاہیدا۔',
  'Prefer "__CLASS__" or "__TRAIT__" over hard-coded class or trait names.' => '"__CLASS__" یا "__TRAIT__" کوں hard-coded class یا trait دے ناواں تے ترجیح ݙیوو۔',
  '%s disables lint.' => '%s lint کوں بند کریندا ہے۔',
  'If you provide an alter cost with %s, you must enable type computation with %s.' => 'اگر تساں %s نال ہک alter cost ݙیندے ہو تاں تساں کوں %s نال type computation فعال کرݨی چاہیدی۔',
  'Test case \'%s\' was expected to succeed, but it raised an exception of class %s with message: %s' => 'Test case \'%s\' توں کامیاب تھیوݨ دی توقع ہائی، لیکن ایندے class %s دے exception نال ایہ پیغام ݙتا: %s',
  'Title' => 'عنوان',
  'Stage 1 bootloader is too large!' => 'Stage 1 bootloader ودھیک وݙا ہے!',
  'Comment Spaces' => 'رائے جاہیں',
  'More than one revision was found in the working copy:' => 'working copy اچ ہک توں ودھیک revision ملیا:',
  'Rule \'%s\' in state \'%s\' in %s has unknown context rule \'%s\', expected \'%s\', \'%s\' or \'%s\'.' => '\'%2$s\' state اچ %3$s اچ rule \'%s\' دا نامعلوم context rule \'%4$s\' ہے، توقع ہائی \'%5$s\'، \'%6$s\' یا \'%7$s\'۔',
  '**work** [--start __start__] __symbol__' => '**work** [--start __start__] __symbol__',
  'No unit test engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => 'ایہ project کیتے کوئی unit test engine configure نئیں تھیا۔ ہک \'%s\' فائل بݨاؤ، یا \'%3$s\' اچ \'%s\' نال ہک advanced engine configure کرو۔',
  'Enable strict handling of units in expressions.' => 'expressions اچ units دا strict handling فعال کرو۔',
  'Unexpected `%s` value in `%s` method.' => '`%2$s` method اچ `%s` دی غیر متوقع قیمت۔',
  'Lock file out-of-date' => 'Lock file پرانی تھی ڳئی ہے۔',
  'Disconnected' => 'کنکشن منقطع ہے۔',
  'Unresolved merge conflict' => 'غیر حل شدہ merge conflict',
  'English (Very Wow)' => 'انگریزی (Very Wow)',
  'Look around, or look at a specific __thing__.' => 'چاروں پاسے ݙیکھو، یا ہک مخصوص __thing__ کوں ݙیکھو۔',
  'Call Formatting' => 'Call Formatting',
  'Encountered a merge conflict.' => 'ہک merge conflict دا سامݨا تھیا۔',
  'Always enable coverage information.' => 'ہمیشہ coverage دی معلومات فعال کرو۔',
  'PHP Compatibility' => 'PHP Compatibility',
  'it is the greatest common ancestor of \'%s\' and %s, as specified by \'%s\' in your %s \'base\' configuration.' => 'ایہ \'%s\' تے %s دا عظیم ترین common ancestor ہے، جیویں تہاݙی %4$s \'base\' configuration اچ \'%s\' نال متعین کیتا ڳیا ہے۔',
  'Use `%s` to detect issues with JavaScript source files.' => 'JavaScript سورس فائلاں اچ مسئلیں ڳولھݨ کیتے `%s` استعمال کرو۔',
  'Attempting to convert a string encoding, but no target encoding was provided. Explicitly provide the target encoding.' => 'سٹرنگ انکوڈنگ بدلݨ دی کوشش کریندا پے، لیکن کوئی target encoding نئیں ݙتی گئی۔ Explicitly target encoding فراہم کرو۔',
  'Landed changes.' => 'Landed تبدیلیاں۔',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP %s.' => 'ایہ codebase PHP %s کوں ہدف بݨیندی ہے، لیکن `%s` PHP %s توں پہلے متعارف کوئنی تھیا ہئی۔',
  'Use of `%s` Properties' => '`%s` properties دا استعمال',
  'INTO TARGET' => 'INTO TARGET',
  'Chinese (Simplified)' => 'چینی (简体中文)',
  'Begin or resume work on a branch, bookmark, task, or revision.

The __symbol__ may be a branch or bookmark name, a revision name (like "D123"),
a task name (like "T123"), or a new symbol.

If you provide a symbol which currently does not identify any ongoing work,
a new branch or bookmark will be created with the name you provide.

If you provide the name of an existing branch or bookmark, the working copy
will be switched to that branch or bookmark.

If you provide the name of a revision or task, the workflow will look for a
related branch or bookmark that already exists in the working copy. If one is
found, it will switch to it. If it does not find one, it will attempt to create
a new branch or bookmark.

When "arc work" creates a branch or bookmark, it will use **--start** as the
branchpoint if it is provided. Otherwise, the current working copy state will
serve as the starting point.' => 'ہک branch، bookmark، task یا revision تے کم شروع کرو یا جاری رکھو۔

__symbol__ ہک branch یا bookmark دا ناں، ہک revision دا ناں (جیویں "D123")، ہک task دا ناں (جیویں "T123")، یا ہک نواں symbol تھی سگدا ہے۔

اگر تساں ہک اینجھا symbol ݙیندے ہو جیڑھا فی الحال کہیں جاری کم دی نشاندہی نئیں کریندا، تاں تہاݙے ݙتے ڳئے ناں نال ہک نواں branch یا bookmark بݨایا ویسی۔

اگر تساں کہیں موجودہ branch یا bookmark دا ناں ݙیندے ہو، تاں working copy کوں اوں branch یا bookmark تے بدل ݙتا ویسی۔

اگر تساں ہک revision یا task دا ناں ݙیندے ہو، تاں workflow working copy اچ پہلے توں موجود کہیں متعلقہ branch یا bookmark کوں ڳولیسی۔ اگر ہک مل ویندا ہے، تاں ایہ اوندے تے بدل ویسی۔ اگر کوئی نئیں ملدا، تاں ایہ ہک نواں branch یا bookmark بݨاؤݨ دی کوشش کریسی۔

جڈاں "arc work" ہک branch یا bookmark بݨیندا ہے، تاں اگر **--start** ݙتا ڳیا ہووے تاں ایہ ایندا branchpoint دے طور تے استعمال کریسی۔ ورنہ، working copy دی موجودہ حالت شروع آلی جاہ دے طور تے کم کریسی۔',
  'Unknown patch type \'%s\'!' => 'نامعلوم patch قسم \'%s\'!',
  'Expected list of rules for state \'%s\' in %s, got %s.' => 'state \'%s\' کیتے %s اچ rules دی فہرست دی توقع ہائی، %s ملیا۔',
  'Rebasing "%s" onto landed state...' => 'Rebasing "%s" onto landed state...',
  'Open a file or object in a local web browser.' => 'ہک فائل یا object کوں مقامی web browser اچ کھولو۔',
  'This codebase targets PHP %s, but short ternary was not introduced until PHP 5.3.' => 'ایہ codebase PHP %s کوں ہدف بݨیندی ہے، لیکن short ternary PHP 5.3 توں پہلے متعارف کوئنی تھیا ہئی۔',
  'Paste "%s" does not exist, or you do not have access to see it.' => 'Paste "%s" موجود کوئنی، یا تساں کوں ایندا ݙیکھݨ دی اجازت کوئنی۔',
  'Arrays should use the long array syntax.' => 'Arrays کوں long array syntax استعمال کرݨی چاہیدی ہے۔',
  'You have no open Differential revisions.' => 'تہاݙے کول کوئی کھلی Differential revisions کوئنی۔',
  'You are landing %s revision(s) which are already in the state "%s", indicating that they have previously landed:' => array(
    'تساں اوہ revision land کریندے پے ہو جیڑھی پہلے ہی "%s" حالت اچ ہے، جیندا مطلب ہے کہ ایندا پہلے ہی landing تھیا ہویا:',
    'تساں اوہیاں %s revisions land کریندے پے ہو جیڑھیاں پہلے ہی "%s" حالت اچ ہن، جیندا مطلب ہے کہ انہاں دا پہلے ہی landing تھیا ہویا:',
  ),
  'Local branches and bookmarks have not been changed, and are still in the same state as before.' => 'مقامی branches تے bookmarks اچ کوئی تبدیلی نئیں کیتی ڳئی، تے اوہ ہݨ وی پہلے آلی حالت اچ ہن۔',
  'Nested `%s` Statements' => 'Nested `%s` Statements',
  'Two workflows ("%s" and "%s") both have the same name ("%s") and both support the current toolset ("%s", "%s"). Each workflow in a given toolset must have a unique name.' => 'ݙو workflows ("%s" تے "%s") دا ہک جیہا ناں ("%s") ہے تے ݙوہیں موجودہ toolset ("%s"، "%s") دی سپورٹ کریندن۔ ہک ݙتے ڳئے toolset اچ ہر workflow دا ناں منفرد ہوݨا چاہیدا ہے۔',
  'Linter Rules' => 'Linter Rules',
  'Void casts (`%s`) are not available before PHP 8.4.' => 'PHP 8.4 توں پہلے void casts (`%s`) دستیاب کوئنی۔',
  'Preparing to run a command in directory "%s", but that directory is not executable (the current process does not have "+x" permission).' => 'ڈائریکٹری "%s" اچ command چلاؤݨ دی تیاری کریندا پے، لیکن اوہ ڈائریکٹری executable کوئنی (موجودہ process کول "+x" permission کوئنی)۔',
  'It is late in the evening. The air is cool and still, and filled with the sound of crickets.' => 'رات ݙھل چکی ہے۔ ہوا ٹھنڈی تے ساکت ہے، تے جھینگروں دی آواز نال بھری ہوئی ہے۔',
  '(The Empty Tree)' => '(خالی درخت)',
  'VERY META' => 'VERY META',
  'Shelving uncommitted changes from working copy.' => 'ورکنگ کاپی توں غیر کمٹڈ تبدیلیاں کوں shelve کریندا پے۔',
  'OKAY' => 'ٹھیک ہے',
  '%s locally modified path(s) are not included in this revision:' => array(
    'ہک مقامی طور تے بدلا ڳیا path ایہ revision اچ شامل کوئنی:',
    'مقامی طور تے بدلے ڳئے paths ایہ revision اچ شامل کوئنی:',
  ),
  'Implicitly marking parameters as nullable is deprecated beginning with PHP 8.4.0.' => 'parameters کوں implicitly nullable نشان زد کرݨا PHP 8.4.0 توں شروع ہوکے deprecated ہے۔',
  'Failed to JSON encode value (%s): %s.' => 'JSON encode کرݨ اچ ناکامی (%s): %s۔',
  'Landing the active commit, "%s".' => 'فعال کمٹ، "%s" کوں لینڈ کریندا پے۔',
  'IP address "%s" is not properly formatted: the segments of an address must be hexadecimal values between "0000" and "ffff", inclusive. Segment "%s" is not.' => 'IP address "%s" درست فارمیٹ اچ کوئنی: address دے حصے لازمی طور تے "0000" توں "ffff" تئیں، شمول، hexadecimal قدراں ہوݨے چاہیدن۔ حصہ "%s" نئیں۔',
  '          Supports: cli
          List the available and configured linters, with information about
          what they do and which versions are installed.

          if __name__ is provided, the linter with that name will be displayed.' => 'Supports: cli
    دستیاب تے configure کیتے ڳئے linters دی فہرست، اوہ کیا کریندن تے کہیں versions نصب ہن، دی معلومات نال۔

    اگر __name__ ݙتا ڳئے تاں اوہ ناں آلا linter ݙکھایا ویسی۔',
  'Unable to move %s to %s.' => '%s کوں %s تے منتقل کرݨ اچ ناکامی۔',
  'Local branch "%s" tracks an upstream, but there is no path to a remote; ignoring branch upstream.' => 'مقامی برانچ "%s" ہک upstream کوں ٹریک کریندی ہے، لیکن کہیں remote دا کوئی رستہ کوئنی؛ branch دے upstream کوں نظرانداز کیتا ویندا پے۔',
  'Prompt ("%s") is executing, but it is not properly bound to the invoking workflow. You may have called "newPrompt()" to execute a prompt instead of "getPrompt()". Use "newPrompt()" when defining prompts and "getPrompt()" when executing them.' => 'Prompt ("%s") چلݨ لڳا ہے، لیکن ایہ invoke کرݨ آلے workflow نال درست طور تے bound کوئنی۔ ہو سگدا ہے کہ تساں prompt چلاؤݨ کیتے "getPrompt()" دی بجائے "newPrompt()" کال کیتا ہووے۔ prompts متعین کریندے ویلھے "newPrompt()" استعمال کرو تے انہاں کوں چلاوݨ ویلھے "getPrompt()"۔',
  'BROKEN' => 'تَرُٹا ہویا',
  'Unparsable Mercurial status line \'%s\'.' => '\'%s\' Mercurial status line parse نئیں تھائی۔',
  'Private methods in traits are not available before PHP 8.0.' => 'Traits اچ private methods PHP 8.0 توں پہلے دستیاب کوئنی۔',
  'You\'re running a command which operates on a range of revisions (usually, from some revision to HEAD) but have not specified the revision that should determine the start of the range.

Previously, arc assumed you meant \'%s\' when you did not specify a start revision, but this behavior does not make much sense in most workflows outside of Facebook\'s historic %s workflow.

arc no longer assumes \'%s\'. You must specify a relative commit explicitly when you invoke a command (e.g., `%s`, not just `%s`) or select a default for this working copy.

In most cases, the best default is \'%s\'. You can also select \'%s\' to preserve the old behavior, or some other remote or branch. But you almost certainly want to select \'origin/master\'.

(Technically: the merge-base of the selected revision and HEAD is used to determine the start of the commit range.)' => 'تساں ہک command چلیندے پے ہو جیڑھا revisions دی range تے کم کریندا ہے (عام طور تے، کہیں revision توں HEAD تئیں) لیکن تساں اوہ revision متعین نئیں کیتی جیڑھی range دے شروع دا تعین کرے۔

پہلے، arc ایہ سمجھدا ہا کہ تساں \'%s\' دا مطلب گھدا ہئی جڈاں تساں start revision متعین نئیں کریندے، لیکن ایہ رویہ Facebook دے تاریخی %s workflow توں باہر اکثر workflows اچ کوئی سمجھ نئیں بݨیندا۔

arc ہݨ \'%s\' نئیں سمجھدا۔ تساں کوں ہک relative commit واضح طور تے متعین کرݨا چاہیدا جڈاں تساں ہک command invoke کریندے پے ہو (مثلاً، \'%s\'، نہ کہ صرف \'%s\') یا ایہ working copy کیتے ہک default منتخب کرو۔

اکثر cases اچ، بہترین default \'%s\' ہے۔ تساں پرانے رویے کوں برقرار رکھݨ کیتے \'%s\' وی منتخب کر سگدے ہو، یا کہیں ٻئے remote یا branch کوں۔ لیکن تقریباً یقینی طور تے تساں \'origin/master\' منتخب کرݨا چاہسو۔

(Technically: منتخب revision تے HEAD دا merge-base commit range دے شروع دا تعین کرݨ کیتے استعمال تھیندا ہے۔)',
  'Show this help, or workflow help for __command__.' => 'ایہ مدد ݙکھاؤ، یا workflow دی مدد __command__ کیتے۔',
  'Trailing commas in function or method calls are not available before PHP 7.3.' => 'function یا method calls اچ trailing commas PHP 7.3 توں پہلے دستیاب کوئنی۔',
  'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => '"--config" flag نال متعین کردہ configuration دا option ("%s") کوئی پہچاݨا ڳیا option کوئنی۔',
  'Other locations: %s' => 'ٻئے مقام: %s',
  'UNIT ERRORS' => 'یونٹ دیاں غلطیاں',
  'Associates this working copy with a specific installation of %s (or compatible software).' => 'ایہ working copy کوں %s (یا compatible software) دی ہک مخصوص installation نال منسلک کریندا ہے۔',
  'Upload complete.' => 'اپ لوڈ مکمل ہے۔',
  'When using \'%s\' to update a revision, specify an update message with \'%s\'. (Normally, we\'d launch an editor to ask you for a message, but can not do that because stdin is the diff source.)' => 'جڈاں revision کوں اپ ڈیٹ کرݨ کیتے \'%s\' استعمال کریندے پے ہوو، \'%s\' نال ہک update message متعین کرو۔ (عام طور تے، تہاݙے کولوں message گھنݨ کیتے اساں ہک editor شروع کریندے، لیکن ایہ نئیں کر سگدے کیونکہ stdin ہی diff دا source ہے۔)',
  'Remote "%s" was selected by reading "%s" configuration.' => 'ریموت "%s" "%s" configuration پڑھݨ نال منتخب کیتا ڳئے۔',
  'Unable to open stderr temporary file ("%s") for reading.' => 'پڑھݨ کیتے stderr دی عارضی فائل ("%s") کھولی نئیں ڳئی۔',
  'Unable to locate interpreter "%s" to run linter %s. You may need to install the interpreter, or adjust your linter configuration.' => 'linter %2$s چلاؤݨ کیتے "%s" interpreter locate نئیں کیتا ڳیا۔ تساں کوں interpreter install کرݨ یا اپݨی linter configuration کوں adjust کرݨ دی لوڑ ہو سگدی ہے۔',
  'Landing onto remote "%s", the default remote under Git.' => 'ریموت "%s" تے land کریندا پے، جیڑھا Git دے تحت default ریموت ہے۔',
  'Did you mean:' => 'بھلا تہاݙا مطلب ہائی:',
  'Error' => 'خرابی',
  'Learn More:' => 'ٻیا سِکھو:',
  'File "%s"' => 'فائل "%s"',
  'Advice' => 'نصیحت',
  'Priority' => 'ترجیح',
  'Closed' => 'بند تھیا',
  'ID' => 'آئی ڈی',
  'MERGING' => 'ضم کرݨ',
  'Upload files.' => 'فائلاں اپ لوڈ کرو',
  'Name Error' => 'ناں دی خرابی',
  'Revision %s, %s' => 'دہرائی %s، %s',
  '%s %s -> %s %s %s' => '%s %s -> %s %s %s',
  'LOAD' => 'لوڈ',
  'Dec' => 'دسمبر',
  'Resolve these errors:' => 'ایہ خرابیاں دور کرو:',
  'German (Germany)' => 'جرمن (جرمنی)',
  'INFO' => 'معلومات',
  '<none>' => '<کوئی وی کائنی>',
  'CHOOSE' => 'چݨو',
  'Filename' => 'فائل دا ناں',
  'Client %s' => 'کلائنٹ %s',
  'NOTE' => 'نوٹ',
  'NAME' => 'ناں',
  '< %sus' => '< %sus',
  'ALIAS' => 'عرفی ناں',
  'Spanish (Spain)' => 'سپینی (سپین)',
  'STRATEGY' => 'حکمت عملی',
  'Added' => 'جمع تھی ڳئے',
  'Jul' => 'جولائی',
  'Syntax Error' => 'نحوی غلطی',
  'D, M j' => 'D, M j',
  'Status' => 'حیثیت',
  'INPUT' => 'ان پُٹ',
  'Nov' => 'نومبر',
  'Unable to locate xUnit console runner. Configure it with the \'%s\' option in %s.' => 'xUnit console runner locate نئیں کیتا ڳیا۔ ایندا `%s\' option %s اچ configure کرو۔',
  'Unknown' => 'اݨ سونہاں',
  'Channel closed!' => 'چینل بند تھی ڳیا!',
  'PASS' => 'پاس',
  'Apr' => 'اپریل',
  'function' => 'فنکشن',
  'INSTALL' => 'انسٹال',
  'Mar' => 'مارچ',
  'New Version Available!' => 'نواں ورژن دستیاب ہے!',
  'SCAN' => 'سکین کرو',
  ' <%dms' => ' <%dms',
  'Server' => 'سرور',
  '%s Value' => '%s قدر',
  'URI' => 'یو آر آئی',
  'Argument' => 'دلیل',
  '%s line(s)' => array(
    '%s لائن',
    '%s لائناں',
  ),
  'USAGE' => 'ورتاوا',
  'LOGIN REQUIRED' => 'لاگ ان ضروری ہے',
  'Empty File' => 'خالی فائل',
  '%s (%s)' => '%s (%s)',
  'Changes:' => 'تبدیلیاں:',
  'Pass' => 'پاس',
  '%s: %s' => '%s: %s',
  'CLOSE' => 'بند',
  'Create this file?' => 'ایہ ورقہ بݨاؤں؟',
  'Listening' => 'سݨدا پئے',
  'Feb' => 'فروری',
  '%s WORKFLOW' => '%s کم دی چال',
  'M j Y' => 'M j Y',
  'Done.' => 'تھی ڳیا۔',
  'DONE' => 'تھی ڳیا',
  'SOURCE' => 'ماخذ',
  'Warning' => 'ݙراوا',
  'With \'full\', show full pretty report (Default). With \'json\', report results in JSON format. With \'ugly\', use uglier (but more efficient) JSON formatting. with \'fail\', only print results of failed tests. With \'none\', don\'t print results.' => '\'full\' نال، full pretty report ݙکھاؤ (Default)۔ \'json\' نال، JSON format اچ نتائج report کرو۔ \'ugly\' نال، ودھیک بدصورت (لیکن ودھیک کارآمد) JSON formatting استعمال کرو۔ \'none\' نال، نتائج print نہ کرو۔',
  'Jan' => 'جنوری',
  'English (US)' => 'انگریزی (امریکہ)',
  'Reason' => 'سبب',
  'WARNING' => 'ݙراوا',
  'FAIL' => 'ناکام',
  'Sep' => 'ستمبر',
  'AVAILABLE' => 'دستیاب ہے',
);
  }

}
