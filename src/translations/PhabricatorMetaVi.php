<?php

final class PhabricatorMetaVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  'Information' => 'Thông tin',
  'Syntax' => 'Cú pháp',
  'Show First-Party Applications' => 'Hiển thị các ứng dụng của bên thứ nhất',
  'Create Application' => 'Tạo ứng dụng',
  'Unknown order "%s"!' => 'Không biết lệnh "%s"!',
  'Prototypes Not Enabled' => 'Nguyên mẫu không được kích hoạt',
  'You cannot enable an enabled application.' => 'Bạn không thể cài đặt ứng dụng đã cài đặt.',
  'Really Disable Application?' => 'Thực sự gỡ bỏ ứng dụng?',
);
  }

}
