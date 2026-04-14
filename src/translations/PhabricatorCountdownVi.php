<?php

final class PhabricatorCountdownVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  'COUNTDOWN DETAIL' => 'CHI TIẾT ĐẾM NGƯỢC',
  'Minutes' => 'Phút',
  'Date when the countdown ends.' => 'Ngày kết thúc đếm ngược.',
  'Change the end date of the countdown.' => 'Thay đổi ngày kết thúc đếm ngược.',
  'Default create policy for countdowns.' => 'Tạo chính sách mặc định cho đếm ngược.',
  'Edit Countdown: %s' => 'Chỉnh sửa Bộ Đếm ngược: %s',
  'Countdowns' => 'Bộ Đếm ngược',
  'Show only upcoming countdowns.' => 'Chỉ hiển thị các lần đếm ngược sắp tới.',
  'Default view policy for new countdowns.' => 'Chính sách xem mặc định cho bộ đếm ngược mới.',
  'Change the countdown description.' => 'Thay đổi mô tả bộ đếm ngược.',
  'Create a Countdown' => 'Tạo bộ đếm ngược',
  'Utilize the full capabilities of your ALU.' => 'Tận dụng tối đa khả năng của ALU.',
);
  }

}
