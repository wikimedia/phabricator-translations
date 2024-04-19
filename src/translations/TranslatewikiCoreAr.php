<?php

final class TranslatewikiCoreAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'وفر المسار إلى مكتبة لتصدير الترجمات منها.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'تعذر استخراج سلسلة بنمط "٪" غير معروف ، " %s ": %s .',
      'NONE' => 'لا شيء',
      'Provide a locale code with "--locale".' => 'قم بتوفير رمز محلي باستخدام "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'تجاهل السلسلة " %s " ؛ غير موجود في ملف مصدر الترجمة.',
      'Provide the path to exactly one library to export translations from.' => 'وفر المسار لمكتبة واحدة بالضبط لتصدير الترجمات منها.',
      'Provide a project name to export strings under with "--as".' => 'أدخل اسم مشروع لتصدير سلاسل تحته بـ "--as".',
      'Raw strings' => 'السلاسل الخام',
      'Name of the project that a translation file is being generated for.' => 'اسم المشروع الذي يتم إنشاء ملف الترجمة من أجله.',
      'Extracting library strings...' => 'جاري استخراج سلاسل المكتبة ...',
      'GENDER' => 'جنس',
      'Locale code for the generated source.' => 'رمز المنطقة للمصدر الذي تم إنشاؤه.',
      'Provide a classname with "--class".' => 'قم بتوفير اسم فئة مع "--class".',
      'Read %s string(s).' => 'اقرأ سلسلة (سلاسل) %s .',
      'Class name to generate.' => 'اسم الفئة المراد إنشاؤها.',
      'Frequency Data' => 'بيانات التردد',
      'Provide a JSON source file with "--source".' => 'قم بتوفير ملف مصدر JSON مع "--source".',
      'Generate a Phabricator translation classfile.' => 'إنشاء ملف فئة ترجمة فابريكاتور.',
      'JSON source file containing translation strings.' => 'يحتوي ملف مصدر JSON على سلاسل الترجمة.',
    );
  }

}
