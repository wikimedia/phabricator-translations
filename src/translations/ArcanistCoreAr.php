<?php

final class ArcanistCoreAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'تم إجهاض العملية نتيجةً لفشل في تحميل الملف. بإمكانك أن تستعمل %s لاختزال التحميلات المبنية على الشفرة الثنائية.',
  'Ref "%s" does not exist in remote "%s".' => 'المرجع " %s " غير موجود في " %s ".',
  'This working copy is associated with the %s repository.' => 'هذه النسخة العملية مقرونة بمستودع ال%s',
  'Lint Disabler' => 'ملغي تفعيل لينت',
  'Call to "posix_getpgid(...)" failed!' => 'فشل استدعاء "posix_getpgid (...)"!',
  'Call Conduit API methods.' => 'استدعاء طرق API Conduit.',
  'Symbol "%s" does not identify a valid revision.' => 'لا يحدد الرمز " %s " مراجعة صالحة.',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => 'لا تستدعي %s أو %s مباشرة على %s . بدلاً من ذلك، استدعي %s أو %s .',
  '"%s" (%s)' => '"%s" (%s)',
  'Saved "%s" as "%s".' => 'جرى حفظ "%s" كـ "%s".',
  '(This message was raised at line %s, but the file only has %s line(s).)' => array(
    
    array(
      '(تم طرح هذه الرسالة في السطر  %s , ولكن الملف يحتوي فقط على %s  line.)',
      '(تم طرح هذه الرسالة في السطر  %s , ولكن الملف يحتوي فقط على %s lines.)',
    ),
  ),
  'Portuguese (Portugal)' => 'البرتغالية (البرتغال)',
  'File Symbol "%s"' => 'رمز الملف "%s"',
  'Try running your arc command again.' => 'حاول تشغيل أمر arc مرة أخرى.',
  'CC: %s' => 'CC: %s',
  'Failed to write file data.' => 'فشل في كتابة بيانات الملف.',
  'Regenerate shell completion rules, without installing any configuration.' => 'إعادة إنشاء قواعد إكمال shell بدون تثبيت أي تكوين.',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'إذا لم يكن الملف ملفًا نصيًا، فيمكنك وضع علامة "ثنائي" عليه. ضع علامة "ثنائي" على هذا الملف وتابع؟',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'القاعدة "%s" غير صالحة، يجب أن يكون لها نوع واسم مثل "%s".',
  'Task Symbol "%s"' => 'رمز المهمة "%s"',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => 'يجب أن يكون المعامل (" %s ") الذي يتم تمريره إلى " %s " عند إنشاء رسالة اختبار الوحدة عبارة عن سلسلة نصية بحد أقصى طول %s  بايت، ولكن طوله %s  بايت .',
  'Executable files should either be binary or contain a shebang.' => 'يجب أن تكون الملفات القابلة للتنفيذ إما ثنائية أو تحتوي على shebang.',
  'Unknown argument \'%s\'. Try \'%s\'.' => '"%s" هو وسيطة غير معروف. جرب "%s".',
  'Path \'%s\' is not readable.' => 'المسار \'%s\' غير قابل للقراءة.',
  'No match found. Try `%s %s` to search for a linter.' => 'لا يوجد تطابق. جرب ``%s %s\'\' للبحث عن لينتر linter.',
  'English (Pirate)' => 'الإنجليزية (القراصنة)',
  'Pick' => 'اختر',
  'Browse URI "%s"' => 'تصفح URI "%s"',
  'The working copy includes changes to \'%s\' paths. These changes will not be included in the diff because SVN can not commit \'svn:externals\' changes alongside normal changes.' => 'نسخة العمل تتضمن تغييرات على مسارات "%s". لن يجري تضمين هذه التغييرات في الفرق لأن SVN لا يمكنه تنفيذ تغييرات \'svn:externals\' جنبًا إلى جنب مع التغييرات العادية.',
  '**bookmarks**' => '**إشارات مرجعية**',
  'Nowhere to load blob \'%s\' from!' => 'لا مكان لتحميل blob \'%s\' منه!',
  'Runtime Error' => 'خطا وقت التشغيل',
  'Argument "%s" does not take a parameter.' => 'الوسيط "%s" لا يأخذ معلمة.',
  'LARGE WORKING SET' => 'مجموعة عمل كبيرة',
  'Output upload information in JSON format.' => 'إخراج معلومات التحميل بتنسيق JSON.',
  'LANDING' => 'الهبوط',
  'Inline HTML' => 'مضمنة HTML',
  'Remote Repository' => 'مستودع عن بعد',
  'Conduit API login required.' => 'مطلوب تسجيل الدخول إلى Conduit API.',
  'Empty certificate in credentials.' => 'شهادة فارغة في بيانات الاعتماد.',
  'No tests to run.' => 'لا توجد اختبارات للتشغيل.',
  'Expected JSON response from Slack.' => 'استجابة JSON المتوقعة من Slack.',
  '%s assertion(s) passed.' => array(
    'تم اجتياز %s  assertion.',
    'تم اجتياز %s assertions.',
  ),
  'NOTHING TO LAND' => 'لا شيء للانزال',
  'Unknown Symbol' => 'رمز غير معروف',
  'ERROR' => 'خطأ',
  '    %s %s
' => '    %s %s',
  'Modified' => 'معدل',
  'File Error' => 'خطأ بالملف',
  'Needs Revision' => 'تحتاج مراجعة',
  'Unrecognized property status \'%s\'.' => 'حالة الخاصية غير متعرف عليها \'%s\'.',
  'REPOSITORY' => 'مستودع',
  'Fail' => 'فشل',
  'Implicit Constructor' => 'منشئ ضمني',
  'Select an output format.' => 'حدد تنسيق الإخراج.',
  'Unable to close file!' => 'لا يمكن إغلاق الملف!',
  'Version' => 'نسخة',
  'Use `%s` to detect issues with Javascript source files.' => 'استخدم `%s` لتعقب المشاكل في ملفات جافاسكربت المصدرية.',
  'Dynamic `%s`' => 'ديناميكي `%s`',
  'Global Variables' => 'متغيرات عالمية',
  'Files must end in a newline.' => 'الملفات يجب أن تنتهي في سطر جديد',
  'The test failed.' => 'فشل الاختبار.',
  'Broken' => 'مكسور',
  'Server to connect to.' => 'الخادم الذي سيتم الاتصال به.',
);
  }

}
