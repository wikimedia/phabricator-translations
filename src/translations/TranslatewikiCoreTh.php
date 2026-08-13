<?php

final class TranslatewikiCoreTh
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'th';
  }

  protected function getTranslations() {
    return array(
  'Provide the path to a library to export translations from.' => 'ใส่ตำแหน่งไฟล์ที่ไปยังไลบรารีเพื่อส่งออกการแปล',
  'Ignoring string "%s"; not present in translation source file.' => 'ไม่สนใจสตริง "%s" เพราะไม่แสดงในไฟล์ข้อความต้นฉบับ',
  'Done.' => 'สำเร็จ',
);
  }

}
