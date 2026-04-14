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
  'You cannot install an installed application.' => 'Bạn không thể cài đặt ứng dụng đã cài đặt.',
  'Show First-Party Applications' => 'Hiển thị các ứng dụng của bên thứ nhất',
  'Create Application' => 'Tạo ứng dụng',
  'Unknown order "%s"!' => 'Không biết lệnh "%s"!',
  'Really Uninstall Application?' => 'Thực sự gỡ bỏ ứng dụng?',
  'Prototypes Not Enabled' => 'Nguyên mẫu không được kích hoạt',
);
  }

}
