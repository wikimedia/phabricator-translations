<?php

final class ArcanistCoreFa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fa';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'به دلیل عدم موفقیت در بارگذاری درونده لغو شد. می‌توانید از %s برای رد شدن از بارگذاری‌های دودویی استفاده کنید.',
      'Lint Disabler' => 'غیرفعال‌کننده ابزار گردگیری',
      'A linter for Composer related files.' => 'ابزار گردگیری برای پرونده‌های مربوط به کامپوزر.',
      '(No messages.)' => '(پیغامی وجود ندارد.)',
      'Saved "%s" as "%s".' => '«%s» را به‌عنوان «%s» ذخیره کرد.',
      'Not parsing!' => 'واشکافی نمی‌شود!',
      'Portuguese (Portugal)' => 'پرتغالی (پرتغال)',
      'File Symbol "%s"' => 'نماد پرونده «%s»',
      'Try running your arc command again.' => 'برای اجرای دوبارهٔ فرمان آرک تلاش کنید.',
      'CC: %s' => 'کپی برای: %s',
      'Failed to write file data.' => 'نوشتن اطلاعات پرونده ناموفق بود.',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'اگر پرونده‌، متنی نیست، می‌توانید آن را به عنوان «باینری» علامت‌گذاری کنید‌. علامت‌گذاری کرده و ادامه داده شود؟',
      '%d <= %d' => '%s <= %s',
      'Pick' => 'انتخاب',
      'Browse URI "%s"' => 'مرور نشانی "%s"',
      'Nowhere to load blob \'%s\' from!' => 'هیچ جایی که باینری بزرگ \'%s\' از آن بارگذاری شود مشخص نشده است.',
      'Runtime Error' => 'خطای کارکرد',
      'Output upload information in JSON format.' => 'خروجی اطلاعات بارگذاری در قالب جی‌سان.',
      'Inline HTML' => 'اچ‌تی‌ام‌ال درون‌خطی',
      'Remote Repository' => 'مخزن راه‌دور',
      'Empty certificate in credentials.' => 'گواهی دیجیتال در اطلاعات اعتبارسنجی خالی است',
      'No tests to run.' => 'هیچ تستی برای اجرا وجود ندارد.',
      'Order: Global' => 'ترتیب:عمومی',
      '%s assertion(s) passed.' => '%s مورد انتظار برآورده شد(ند).',
      'Phutil Library Linter' => 'ابزار لینت کتابخانه پی‌اچ‌یوتیل',
      'Unknown Symbol' => 'نماد ناشناخته',
      'Against which commit?' => 'در مقابل کدام انتشار؟',
      'commit-message' => 'پیام حین انتشار',
      'HLint is a linter for Haskell code.' => 'HLint یک ابزار اینترنت برای کدهای Haskell است.',
      'No Parent Scope' => 'حوزهٔ پدر وجود ندارد',
      'Update the local working copy before applying the patch.' => 'نسخهٔ محلی را قبل از اعمال وصله روزآمدسازی کن.',
      '`%s` Statement Must Be The First Statement' => 'عبارت `%s` می‌بایست اولین عبارت باشد',
      'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'مورد انتظار برآورده نشد، انتظار %s (در %s:%s):%s',
      'Throwing Exception in `%s` Method' => 'وقوع خطای غیرمنتظره در متد  `%s`',
      'More than one revision exists in the working copy:
    %s
    Use \'%s\' to select a revision.' => 'بیش از یک نسخه در کپی درحال‌کار موجود است:
    %s
    استفاده از  `%s` برای انتخاب یک نسخه.',
      'Unknown VCS!' => 'سیستم کنترل ورژن ناشناخته!',
      'ERROR' => 'خطا',
      'Do not upload binaries (like images).' => 'پرونده‌های باینری را بارگذاری نکنید (مانند تصاویر).',
      'Use of Variable Variable' => 'استفاده از متغیر محلی',
      'Only one output format allowed' => 'فقط یک قالب خروجی مجاز است',
      'Install lessc using `%s`.' => 'نصب less با استفاده از `%s`',
      'Diff Parse Exception: %s' => 'خطای غیرمنتظره در واشکافی: %s',
      'Commit this revision anyway?' => 'به هر قیمتی این نسخه را منتشر کن',
      'After creating the task, open it in a web browser.' => 'بعد از ایجاد وطیفه، آن را در مرورگر وب باز کن.',
      'Lint does not currently support %s in SVN.' => 'لینت در حال حاضر %s را در ای‌وی‌ان پشتیبانی نمی‌کند',
      'Unsound' => 'نامعقول',
      'Changes Planned' => 'تغییرات برنامه‌ریزی‌شده',
      'Invalid Executable' => 'فایل اجرایی نامعتبر',
      'Set %s to file mode 600.' => 'تنظیم %s بر روی مد پرونده‌ای ۶۰۰',
      'Option \'%s\' requires a parameter.' => 'گزینهٔ \'%s\' به یک پارامتر نیاز دارند',
      'Working Copy State' => 'وضعیت کپی درحال‌کار',
      'Space found before semicolon.' => 'فاصلهٔ خالی قبل از سمیکالن یافت شد.',
      'Copied Here' => 'اینجا کپی شده',
      'Aborted generation of gigantic diff.' => 'تولید تفاوت غول‌آسا متوقف شد.',
      'Install PEP8 using `%s`.' => 'نصب PEP8 با استفاده از  `%s`.',
      'Aborted workflow to fix UTF-8.' => 'گردش کار برای ترمیم UTF-8 متوقف شد.',
      'Saturday' => 'شنبه',
      '    %s %s
    ' => '    %s %s',
      'Install flake8 using `%s`.' => 'نصب flake8 با استفاده از  `%s`.',
      'Updating working copy...' => 'روزآمدسازی کپی در حال کار...',
      'Detects common misspellings of English words.' => 'تشخیص اشتباه‌های نگارشی متداول کلمات انگلیسی',
      'Unknown raw diff source.' => 'منبع ناشناخته تفاوت خام',
      'No linters to run.' => 'هیچ ابزار لینت‌ی برای اجرا نیست',
      'Modified' => 'تغییریافته',
      'TODO Comment' => 'کامنت برای یادآوری کارهایی برای انجام',
      'Failed to parse %s output!' => 'واشکافی خروجی %s ناموفق بود!',
      'Do you want to edit the message?' => 'می‌خواهید پیام را ویرایش کنید؟',
      'Override configured lint engine for this project.' => 'موتور لیت تعریف‌شده در این پروژه را جایگزین کن.',
      'Updating commit message...' => 'روزآمدسازی پیام حین انتشار...',
      'Constants should be uppercase.' => 'محدودیت‌ها باید با الفبای بزرگ باشند',
      'Function Call Should Be Type Cast' => 'فراخوانی تابع باید مورد تبدیل نوع قرار گیرد',
      '`%s` Unreliable' => ' \'%s\' قابل اطمینان نیست',
      'Confused by empty line' => 'با سطر خالی اشتباه گرفته می‌شود',
      '(Run `%s` for more details.)' => '(برای اطلاعات بیشتر `%s` را اجرا کنید)',
      'Diff URI:' => 'نشانی اینترنتی تفاوت:',
      'Revision %s' => 'نسخه %s',
      'Jump' => 'پرش به',
      'Uploaded binary data for "%s".' => 'اطلاعات باینری برای  "%s" بارگذاری شد.',
      'Failed to parse version from command.' => 'واشکافی نسخه، از روی دستور ناموفق بود.',
      'CHECKOUT' => 'چک‌اوت',
      'File Error' => 'خطای فایل',
      'Avoid the use of inner functions.' => 'از به‌كارگیری توابع داخلی پرهیز نمایید.',
      'Command %s failed: %s' => 'خطای دستور %s:%s',
      'Needs Revision' => 'نیازمند بازبینی',
      'One test was expected to skip.' => 'انتظار می‌رفت از یک آزمایشی گذر شود.',
      'Unknown library version \'%s\'!' => 'نسخه ناشناخته کتابخانه \'%s\'!',
      'Unrecognized property status \'%s\'.' => 'وضعیت نامعلوم ویژگی \'%s\'.',
      'Expect linter to be stopped.' => 'انتظار می‌رود که خطای نحوی متوقف شده باشد.',
      'REPOSITORY' => 'مخزن',
      'Install JSCS using `%s`.' => 'نصب JSCS  با استفاده از  \'%s\'',
      'Invalid Octal Numeric Scalar' => 'مقدار عددی نامعتبر در مبنای هشت',
      'UNIT OKAY' => 'UNIT OKAY',
      'TO INSTALL: %s' => 'برای نصب:%s',
      '`%s` Operator' => 'اپراتور `%s`',
      'PHP version to target on Windows.' => 'نسخۀ پی‌اچ‌پی برای هدف‌گیری در ویندوز',
      'Fail' => 'شکست',
      'Enter a commit message.' => 'یک پیام حین انتشار وارد کنید',
      'Cover changes since a specific revision.' => 'تغییرات را از یک نسخۀ خاص به بعد تحت پوشش قرار بده',
      'Implicit Constructor' => 'سازندهٔ ضمنی',
      'Command to use to invoke a web browser.' => 'دستوری برای فراخوانی مرورگر وب',
      'Specify at most one revision name.' => 'حداکثر نام یک نسخه را مشخص کنید.',
      'Unknown lint severity "%s". Valid severities are: %s.' => 'درجهٔ وخامت ناشناختهٔ "%s" برای لینت. مقادیر معتبر عبارتند از: %s',
      'You have untracked files in this working copy.' => 'شما دارای پروند‌های خارج از پیگیری در کپی درحال‌کار خود هستید',
      'JSON Lint' => 'JSON Lint',
      'Arguments with default values must be at the end of the argument list.' => 'آرگومتن‌هایی که مقادیر پیش‌فرض دارند می‌بایست در انتهای لیست قرار گیرند.',
      'Expect one result returned by linter.' => 'انتظار بازگشت یک نتیجه از ابزار لینت',
      'Alias functions should be avoided.' => 'از بدل‌های توابع باید پرهیز نمود.',
      'Bad Charset' => 'مجموعه‌نویسه‌های بد',
      'Version' => 'نسخه',
      'Use `%s` to detect issues with Javascript source files.' => 'برای تشخیص مشکلات کدهای منبع جاوااسکریپت از `%s` استفاده کنید.',
      'Executing \'%s\' failed!' => 'اجرای \'%s\' ناموفق بود',
      'Which URI do you want to open?' => 'کدام نشانی را می‌خواهید باز کنید؟',
      'Array Separator' => 'جدا کننده آرایه',
      'Unit Test' => 'یونیت تست',
      'Global Variables' => 'متغیرهای سراسری',
      'Files must end in a newline.' => 'انتهای پرونده‌ها می‌بایست یک سطر خالی باشد.',
      'The regex to process output with.' => 'عبارت با‌قاعده‌ای برای پردازش خروجی.',
      'No tasks found.' => 'هیچ تسکی پیدا نشد.',
      'This is never reached.' => 'به داین قسمت هیچ وقت نمی‌رسد',
      'Type of setting \'%s\' must be boolean.' => 'نوع تنظیمات \'%s\' می‌بایست بولین باشد.',
      'Spaces Inside Parentheses' => 'فاصله خالی درون پرانتزها',
      'This file contains a syntax error: %s' => 'این پرونده یک خطای دستوری دارد:%s',
      'Unsafe Usage of Dynamic String' => 'استفادهٔ ناایمن از رشتهٔ پویا',
      'Broken' => 'شکسته',
      'Line Too Long' => 'سطر بیش از حد طولانی',
      'Skip' => 'انصراف',
      'Type' => 'نوع',
      'Command-Line Flags' => 'پرچم‌های خط فرمان',
      'The name or path of the coding standard to use.' => 'نام یا مسیر استاندارد کدنویسی مورد استفاده.',
      'Enabled verbose mode.' => 'حالت شرح مفصل فعال شده.',
      'PHP Syntax Error!' => 'خطای دستوری پی‌اچ‌پی!',
      'INVALID CREDENTIALS' => 'اطلاعات اعتبارسنجی نامعتبر',
      'Cannot access `%s` when current class scope has no parent.' => 'وقتی که حوزه کلاس فعلی هیچ اجدادی ندارد نمی‌توان به `%s` دسترسی پیدا کرد.',
      'Can\'t parse an empty diff!' => 'یک تفاوت خالی را نمی‌توان واشکافی کرد!',
      'DOS Newlines' => 'سرخط به شیوهٔ سیستم عامل داس',
      'Pushing changes to "%s".' => 'هل دادن تغییرات به داخل `%s`',
      'Installing certificate for \'%s\'...' => 'نصب گواهینامهٔ دیجیتال برای `%s` ...',
      'Config: Did not find local configuration at "%s".' => 'پیکربندی: تنظیمات محلی در "%s" یافت نشد.',
      'Class' => 'کلاس',
      'Deleted' => 'حذف شده',
      'One test was expected to fail.' => 'انتظار شکست یک تست می‌رفت.',
      'Default Parameters' => 'پارامترهایی پیش‌فرض',
      'copies' => 'کپی‌ها',
      'Downloading binary data...' => 'بارگیری داده‌های باینری...',
      'Continue?' => 'ادامه دادن؟',
      'Commit Message' => 'پیام حین انتشار',
      'Updating %s: %s' => 'در حال روزآمدسازی %s: %s',
      'UPDATE' => 'UPDATE',
      'Working copy' => 'کپی در حال کار',
      'Unable to fork!' => 'نمی‌توان فورک کرد!',
      '(No commits.)' => '(بدون انشار)',
      'Order: Project' => 'ترتیب‌: پروژه',
      'Failed to read patch from stdin!' => 'خواندن وصله از ورودی استاندارد ناموفق بود!',
      'Install CoffeeLint using `%s`.' => 'نصب کافی‌لینت با استفاده از `%s`.',
      'Multi-lined arrays should have trailing commas.' => 'آرایه‌های چند سطری باید در انتهایشان کاما داشته باشند.',
      'Your \'%s\' file is not a valid JSON file.' => 'پروندهٔ `%s` شما یک جی‌سان معتبر نیست',
      'Example Value' => 'مقدار تمثیلی',
      'Empty Rules' => 'قواعد خالی',
      'Moved Here' => 'به اینجا انتقال یافته',
      'A cast statement must not be followed by a space.' => 'عبارت تعبیر دهندهٔ نوع نباید با یک فاصلهٔ خالی دنبال شود',
      'Run unit tests covering changes since a specific revision.' => 'یونیت‌تست‌هایی را اجرا کن که تغییرات از یک نسخه خاص را پوشش می‌دهند',
      'Logical Operators' => 'عملگرهای منطقی',
      '    %s (%s) %s
    ' => '    %s (%s) %s',
      '(No revisions match.)' => '(هیچ نسخه‌ای تطابق ندارد)',
      '...' => '...',
      'Possible Spelling Mistake' => 'اشتباه نگارشی محتمل',
      'Name' => 'نام',
      'Self Class Reference' => 'ارجاع کلاس به خودش',
      'Constructor Parentheses' => 'سازنده بودن پرانتز',
      'Reviewers: %s' => 'بازبینی‌کنندگان:%s',
      'Title' => 'عنوان',
      'Comment Spaces' => 'فاصله‌‌های خالی در توضیحات',
      'Disconnected' => 'قطع شده',
      'Call Formatting' => 'قالب فراخوانی',
      'This is a negative test case!' => 'این یک تست کیس منفی است!',
      'Always enable coverage information.' => 'اطلاعات پوشایی کد همیشه فعال باشد',
      'PHP Compatibility' => 'سازگاری پی‌اچ‌پی',
      'BROKEN' => 'BROKEN',
      '\'%s\' vs \'%s\'' => '\'%s\' در برابر \'%s\'',
      'Other locations: %s' => 'سایر مکان‌ها،: %s',
      'Did you mean:' => 'آیا منظورتان این بود:',
      'Error' => 'خطا',
      'Priority' => 'اولویت',
      'Closed' => 'بسته‌شده',
      'ID' => 'شناسه',
      'Filename' => 'نام پرونده',
      'ALIAS' => 'نام مستعار',
      'Added' => 'افزوده شد',
      'Status' => 'وضعیت',
      'Unknown' => 'ناشناس',
      'Server' => 'کارساز',
      'Changes:' => 'تغییرات:',
      'Done.' => 'انجام شد.',
      'Warning' => 'هشدار',
      'PREVIEW' => 'پیش‌نمایش',
      'HTTPS Trusted Domains' => 'دامنه‌های مورد اعتماد اچ‌تی‌تی‌پی‌اس آرکانیست',
      'Reason' => 'دلیل',
      'Disabled' => 'غیرفعال',
    );
  }

}