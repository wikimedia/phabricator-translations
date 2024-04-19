<?php

final class TranslatewikiCoreTh
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'th';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'ใส่ตำแหน่งไฟล์ที่ไปยังไลบรารีเพื่อส่งออกการแปล',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'ไม่สามารถแยกสตริงที่มีรูปแบบ "%%" ซึ่งไม่รู้จัก "%s": %s',
      'NONE' => 'NONE',
      'Provide a locale code with "--locale".' => 'ใส่รหัสของท้องถิ่นโดยใช้ "--locale"',
      'Ignoring string "%s"; not present in translation source file.' => 'ไม่สนใจสตริง "%s" เพราะไม่แสดงในไฟล์ข้อความต้นฉบับ',
      'Done.' => 'สำเร็จ',
    );
  }

}
