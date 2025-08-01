<?php

final class PhabricatorDashboardVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'Edit Panel' => 'Chỉnh sửa bảng điều khiển',
      'New dashboard icon.' => 'Biểu tượng bảng điều khiển mới.',
      'Edit Panel: %s' => 'Chỉnh sửa bảng điều khiển: %s',
      'Add to Project Menu' => 'Thêm vào Menu Dự án',
      'No dashboards found.' => 'Không tìm thấy bảng thông tin nào.',
      'Add to Personal Home Menu' => 'Thêm vào Home Menu Cá nhân',
      'This engine is used to modify dashboards.' => 'Công cụ này được sử dụng để sửa đổi bảng điều khiển.',
      'Archive Panel' => 'Bảng lưu trữ',
      'Use "Edit Menu" to add menu items to this portal.' => 'Sử dụng "Sửa đổi Menu" để thêm mục menu vào cổng này.',
      'Add Dashboard to Personal Favorites' => 'Thêm Bảng điều khiển vào Mục yêu thích cá nhân',
      'Two Columns: 50%%/50%%' => 'Hai cột: 50%%/50%%',
      'Remove tab?' => 'Dời thẻ:',
      'This dashboard will become active again.' => 'Bảng điều khiển này sẽ hoạt động trở lại.',
    );
  }

}
