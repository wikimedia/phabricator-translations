<?php

final class TranslatewikiCoreBn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bn';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'অনুবাদ রপ্তানি করার জন্য একটি লাইব্রেরির পথ প্রদান করুন।',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'অচেনা "%%" প্যাটার্ন সহ স্ট্রিং বের করতে অক্ষম, " %s ": %s ।',
      'NONE' => 'কোনটিই নয়',
      'Provide a locale code with "--locale".' => '"--locale" সহ একটি স্থানীয় কোড প্রদান করুন।',
      'Ignoring string "%s"; not present in translation source file.' => 'স্ট্রিং "%s" উপেক্ষা করা হচ্ছে; অনুবাদ উৎস ফাইলে উপস্থিত নয়।',
      'Provide the path to exactly one library to export translations from.' => 'অনুবাদ রপ্তানি করার জন্য ঠিক একটি লাইব্রেরি পথ প্রদান করুন।',
      'Name of the project that a translation file is being generated for.' => 'যে প্রকল্পের জন্য কোনও অনুবাদ ফাইল তৈরি করা হচ্ছে তার নাম৷',
      'Extracting library strings...' => 'লাইব্রেরি স্ট্রিং বের করা হচ্ছে...',
      'GENDER' => 'লিঙ্গ',
      'Read %s string(s).' => '%s স্ট্রিং(গুলি) পড়ুন।',
      'Class name to generate.' => 'কাঙ্খিত শ্রেণী নাম উৎপাদন।',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'রপ্তানিকৃত প্রকল্পের নাম। রপ্তানিকৃত ফাইল এই নাম ব্যবহার করে "projects/"-এ লেখা হবে।',
      'Used in:' => 'এখানে ব্যবহৃত:',
      'English strings' => 'ইংরেজি স্ট্রিং',
      'Context strings' => 'প্রসঙ্গ স্ট্রিং',
      'Done.' => 'সম্পন্ন।',
      'Location to write the generated translation file.' => 'উৎপাদিত অনুবাদ ফাইল লেখার অবস্থান।',
      'PLURAL' => 'বহুবচন',
    );
  }

}
