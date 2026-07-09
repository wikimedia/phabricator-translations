<?php

final class PhabricatorPeopleVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  '[%s] Welcome to %s' => '[%s] Chào mừng đến với %s',
  'You can not send this user welcome mail because they are not a normal user and can not log in to the web interface. Special users (like bots and mailing lists) are unable to establish web sessions.' => 'Bạn không thể gửi email chào mừng người dùng này vì họ không phải là người dùng bình thường và không thể đăng nhập vào giao diện web. Người dùng đặc biệt (như bot và danh sách gửi thư) không thể thiết lập phiên web.',
  'User Details' => 'Chi tiết người dùng',
  'Availability' => 'Trạng thái',
  'Get availability information for users.' => 'Xem thông tin trạng thái người dùng.',
  'User Availability' => 'Trạng thái người dùng',
  'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.' => 'Bạn không thể gửi thư chào mừng vì bạn không phải là quản trị viên. Chỉ quản trị viên mới có thể gửi thư chào mừng.',
  'User Since' => 'Tham gia vào',
);
  }

}
