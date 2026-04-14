<?php

final class PhabricatorNotificationVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  'Unread' => 'Chưa đọc',
  'Unable to load server status: this is not an admin server!' => 'Không thể tải trạng thái máy chủ: đây không phải là máy chủ quản trị!',
  'All Notifications' => 'Tất cả các thông báo',
  'Really mark all notifications as read?' => 'Bạn có thực sự muốn đánh dấu tất cả thông báo là đã đọc không?',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Cấu hình máy chủ thông báo không hợp lệ: không có máy chủ nào được bật với loại "admin". Hệ thống thông báo yêu cầu ít nhất một máy chủ "admin" đang hoạt động.',
  'Setting Up Client' => 'Thiết lập máy khách',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Cấu hình máy chủ thông báo không hợp lệ: không có máy chủ nào được bật với loại "client". Hệ thống thông báo yêu cầu ít nhất một máy chủ "client" đang hoạt động.',
  'All unread notifications will be marked as read. You can not undo this action.' => 'Tất cả thông báo chưa đọc sẽ được đánh dấu là đã đọc. Bạn không thể hoàn tác thao tác này.',
  'Unread Notifications' => 'Thông báo chưa đọc',
  'Unable to post message: this is not an admin server!' => 'Không thể đăng tải tin nhắn: đây không phải là máy chủ quản trị!',
  'Disconnected' => 'Đã ngắt kết nối',
  '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s thông báo về các mục không còn tồn tại hoặc bạn không còn được nhìn thấy nữa đã bị loại bỏ.',
  'No notifications to mark as read.' => 'Không có thông báo chưa đọc.',
  'Notification Server Down' => 'Máy chủ Thông báo tạm ngừng hoạt động',
  'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.

%s' => 'Máy chủ này được cấu hình để sử dụng máy chủ thông báo, nhưng không thể kết nối đến máy chủ đó. Bạn nên giải quyết vấn đề này hoặc tắt máy chủ thông báo. Có thể hữu ích nếu bạn kiểm tra lại cấu hình hoặc khởi động lại máy chủ bằng lệnh bên dưới.

%s',
  'Real-Time Updates and Alerts' => 'Cập nhật và Cảnh báo Thời gian thực',
  'You can\'t ignore your problems forever, you know.' => 'Bạn không thể phớt lờ vấn đề của mình mãi được, bạn biết đấy.',
  'Unable to Connect to Notification Server' => 'Không thể kết nối với máy chủ thông báo',
  'Notification server not enabled' => 'Máy chủ thông báo không được kích hoạt',
  'This is a test notification, sent at %s.' => 'Đây là thông báo thử nghiệm, được gửi vào %s.',
  '(To start the server, run this command.)
%s' => '(Để khởi động máy chủ, hãy chạy lệnh này.)
%s',
  'You have no unread notifications.' => 'Bạn không có thông báo nào chưa đọc.',
  'Connecting...' => 'Đang kết nối…',
  'Mark All Read' => 'Đánh dấu tất cả đã đọc',
  'Show only unread notifications.' => 'Chỉ hiển thị thông báo chưa đọc.',
  'You have no notifications.' => 'Bạn không có thông báo nào.',
);
  }

}
