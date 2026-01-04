<?php

final class PhabricatorCalendarVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'Không tìm thấy sự kiện nào.',
      'Weekly' => 'Hàng tuần',
      'Import %d' => 'Nhập %s',
      'Invitees' => 'Người được mời',
      '%s declined this event.' => '%s đã từ chối sự kiện này.',
      'Cancelled Events' => 'Sự kiện bị hủy',
      'New event name.' => 'Tên sự kiện mới.',
      '[Calendar]' => '[Lịch]',
      'You can not change your display availability for events you are not attending.' => 'Bạn không thể thay đổi trạng thái hiển thị của mình đối với các sự kiện mà bạn không tham dự.',
    );
  }

}
