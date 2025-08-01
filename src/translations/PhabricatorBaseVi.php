<?php

final class PhabricatorBaseVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Không có ứng dụng \'%s\'!',
      'This application is required, so all users must have access to it.' => 'Ứng dụng này là bắt buộc nên tất cả người dùng phải có quyền truy cập vào nó.',
      'Can Configure Application' => 'Có thể cấu hình ứng dụng',
      'Can Use Application' => 'Có thể sử dụng ứng dụng',
      'Core Applications' => 'Ứng dụng cốt lõi',
      'No application!' => 'Không có ứng dụng!',
      '%s Application' => '%s Ứng dụng',
      'Developer Tools' => 'Công cụ dành cho nhà phát triển',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Yêu cầu bao gồm tham số bị hạn chế "%s", nhưng bộ điều khiển ("%s") không đưa nó vào danh sách cho phép. Từ chối xử lý yêu cầu này vì có thể đây là một phần của cuộc tấn công chuyển hướng.',
      'Unknown capability \'%s\'!' => 'Không rõ khả năng \'%s\'!',
    );
  }

}
