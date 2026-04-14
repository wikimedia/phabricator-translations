<?php

final class PhabricatorSettingsVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
  '12 Hour, 2:34 PM' => '12 giờ, 2:34 CH',
  'Default (%s)' => 'Mặc định (%s)',
  'You haven\'t added any contact numbers to your account.' => 'Bạn chưa thêm số liên lạc nào vào tài khoản.',
  'Conpherence Column Visible' => 'Hiển thị Cột Conpherence',
  'External Editor' => 'Trình biên tập bên ngoài',
  'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Trình duyệt này không hỗ trợ thông báo trên màn hình. Bạn chỉ nhận được thông báo trong ứng dụng, dù có thay đổi tùy chọn.',
  'Choose Factor Type' => 'Chọn loại yếu tố',
  'Page Titles' => 'Tiêu đề trang',
  'Personal Account Settings' => 'Cài đặt tài khoản cá nhân',
  'Global Default Settings' => 'Cài đặt mặc định toàn cục',
  'Self Actions' => 'Hành động tự thực hiện',
  'Unlink' => 'Hủy liên kết',
  'If you have difficulty reading the UI, this setting may help.' => 'Nếu bạn gặp khó khăn khi đọc giao diện người dùng, cài đặt này có thể hữu ích.',
  'Email Notifications' => 'Thông báo qua email',
  'Show Unified Diffs' => 'Hiển thị khác biệt thống nhất (Unified Diffs)',
  'Diff Preferences' => 'Tùy chọn so sánh (Diff)',
  'Saturday' => 'Thứ Bảy',
  'Change Primary Address' => 'Thay đổi địa chỉ chính',
  'Send Stamps' => 'Gửi tem (Stamps)',
  'Show Older Inlines' => 'Hiển thị bình luận trực tiếp cũ hơn',
  'Select the format you prefer for editing dates.' => 'Chọn định dạng bạn muốn sử dụng khi chỉnh sửa ngày tháng.',
  'On Small Screens' => 'Trên màn hình nhỏ',
  'A verification email has been sent. Click the link in the email to verify your address.' => 'Email xác minh đã được gửi. Nhấp vào liên kết trong email để xác minh địa chỉ của bạn.',
  'Enable Email Notifications' => 'Bật thông báo qua email',
  'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Các khác biệt (diff) thường được hiển thị theo bố cục song song trên màn hình lớn và tự động chuyển sang chế độ xem thống nhất trên màn hình nhỏ (như điện thoại di động). Nếu bạn thích xem khác biệt thống nhất ngay cả trên màn hình lớn, bạn có thể chọn sử dụng chúng trên mọi thiết bị hiển thị.',
  'Generic Editor' => 'Trình biên tập chung',
  'Edit global default settings for all users.' => 'Chỉnh sửa cài đặt mặc định toàn cục cho tất cả người dùng.',
  'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.

| Setting                | Example Mail Subject
|------------------------|----------------
| Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
| Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'Cài đặt **Thêm tiền tố "Re:"** sẽ thêm "Re:" vào trước tất cả tin nhắn, ngay cả khi chúng không phải là trả lời. Nếu bạn sử dụng **Mail.app** trên Mac OS X, điều này có thể cải thiện việc sắp xếp chuỗi thư.

| Cài đặt                | Ví dụ chủ đề thư
|------------------------|----------------
| Bật tiền tố "Re:"  | `Re: [Differential] [Accepted] D123: Example Revision`
| Tắt tiền tố "Re:" | `[Differential] [Accepted] D123: Example Revision`',
  'No settings panels are available.' => 'Không có bảng cài đặt nào khả dụng.',
  'Empty string is not a valid setting for "%s".' => 'Chuỗi rỗng không phải là cài đặt hợp lệ cho "%s".',
  'Adjust Timezone' => 'Điều chỉnh múi giờ',
  'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.

//You will still receive some administrative email, like password reset email.//' => 'Nếu bạn tắt **Thông báo qua email**, máy chủ này sẽ không bao giờ gửi email thông báo về các sự kiện cho bạn. Tùy chọn này ghi đè tất cả các cài đặt khác của bạn.

//Bạn vẫn sẽ nhận được một số email quản trị, như email đặt lại mật khẩu.//',
  '%s updated her profile' => '%s đã cập nhật hồ sơ của cô ấy',
  'Add Contact Number' => 'Thêm số liên lạc',
  'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.

| Setting              | Example Mail Subject
|----------------------|----------------
| Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
| Do Not Vary Subjects | `[Maniphest] T123: Example Task`

This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'Khi bật **Thay đổi chủ đề**, hầu hết các dòng chủ đề thư sẽ bao gồm mô tả ngắn gọn về nội dung, như `[Closed]` cho thông báo về việc ai đó đóng tác vụ.

| Cài đặt              | Ví dụ chủ đề thư
|----------------------|----------------
| Thay đổi chủ đề        | `[Maniphest] [Closed] T123: Example Task`
| Không thay đổi chủ đề | `[Maniphest] T123: Example Task`

Điều này có thể làm cho thư hữu ích hơn, nhưng một số ứng dụng khách gặp khó khăn khi sắp xếp chuỗi các tin nhắn này. Tắt tùy chọn này có thể cải thiện việc sắp xếp chuỗi nhưng làm dòng chủ đề kém hữu ích hơn.',
  'Value "%s" is not valid for setting "%s": valid values are %s.' => 'Giá trị "%s" không hợp lệ cho cài đặt "%s": các giá trị hợp lệ là %s.',
  'Extra Settings' => 'Cài đặt bổ sung',
  'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Bạn có chắc chắn muốn xóa địa chỉ này không? Bạn sẽ không còn có thể sử dụng nó để đăng nhập.',
  'If you change your primary address, %s will send all email to %s.' => 'Nếu bạn thay đổi địa chỉ chính, %s sẽ gửi tất cả email đến %s.',
  'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Bạn có thể tùy chỉnh phông chữ được sử dụng khi hiển thị văn bản đơn cách (monospaced), bao gồm mã nguồn. Bạn nên nhập khai báo phông chữ CSS hợp lệ như: `13px Consolas`',
  'Enable Self Action Mail' => 'Bật email hành động tự thực hiện',
  'You haven\'t added any SSH Public Keys.' => 'Bạn chưa thêm Khóa công khai SSH nào.',
  'All Messages' => 'Tất cả tin nhắn',
  'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole là bảng điều khiển gỡ lỗi để phát triển và khắc phục sự cố ứng dụng. Sau khi bật DarkConsole, nhấn phím {nav `} trên bàn phím của bạn để bật hoặc tắt nó.',
  'Save Preference' => 'Lưu tùy chọn',
  'Email Format' => 'Định dạng email',
  'Your browser timezone and profile timezone are now in agreement (%s).' => 'Múi giờ trình duyệt và múi giờ hồ sơ của bạn hiện đã khớp (%s).',
  'Edit Authentication Factor' => 'Chỉnh sửa phương thức xác thực',
  'Changing your password will terminate any other outstanding login sessions.' => 'Thay đổi mật khẩu sẽ chấm dứt mọi phiên đăng nhập đang hoạt động khác.',
  'You have no linked accounts.' => 'Bạn không có tài khoản liên kết nào.',
  'Active Login Sessions' => 'Phiên đăng nhập đang hoạt động',
  'Edit Global Settings' => 'Chỉnh sửa cài đặt toàn cục',
  'Ignore Conflict' => 'Bỏ qua xung đột',
  'Vary Subjects' => 'Thay đổi chủ đề',
  'Delete Authentication Factor' => 'Xóa phương thức xác thực',
  '%s updated their profile' => '%s đã cập nhật hồ sơ của họ',
  'Current Setting' => 'Cài đặt hiện tại',
  'Visual Studio Code' => 'Visual Studio Code',
  'Provider: %s' => 'Nhà cung cấp: %s',
  'Use Variable-Width Font' => 'Sử dụng phông chữ có độ rộng thay đổi',
  'Use Plain Text: [Differential]' => 'Sử dụng văn bản thuần túy: [Differential]',
  '⚪ Ignore' => '⚪ Bỏ qua',
  'Date Format' => 'Định dạng ngày',
  'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Bản cài đặt này chưa được cấu hình bất kỳ nhà cung cấp MFA nào đang hoạt động. Cần cấu hình và kích hoạt ít nhất một nhà cung cấp trước khi bạn có thể thêm các yếu tố MFA mới.',
  'Select the format you prefer for editing and displaying time.' => 'Chọn định dạng bạn muốn sử dụng để chỉnh sửa và hiển thị thời gian.',
  'The conflict between your browser and profile timezone settings will be ignored.' => 'Xung đột giữa cài đặt múi giờ của trình duyệt và hồ sơ sẽ bị bỏ qua.',
  'Terminate All Sessions' => 'Chấm dứt tất cả các phiên',
  'Your account is linked with all available providers.' => 'Tài khoản của bạn đã được liên kết với tất cả các nhà cung cấp khả dụng.',
  'Timezone Ignored Offset' => 'Độ lệch múi giờ bị bỏ qua',
  'External Accounts' => 'Tài khoản bên ngoài',
  'Verification Email Sent' => 'Đã gửi email xác minh',
  'Add External Account' => 'Thêm tài khoản bên ngoài',
  'Mail Headers and Body' => 'Tiêu đề và nội dung thư',
  'You haven\'t added any authentication factors to your account yet.' => 'Bạn chưa thêm bất kỳ phương thức xác thực nào vào tài khoản của mình.',
  'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Để đặt mật khẩu mới, hãy yêu cầu liên kết đặt lại mật khẩu từ màn hình đăng nhập và làm theo hướng dẫn.',
  'Multi-Factor Auth' => 'Xác thực đa yếu tố',
  'Refresh' => 'Làm mới',
  'No allowed editor protocols are configured.' => 'Không có giao thức biên tập nào được cho phép được cấu hình.',
  'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Bạn có thể chọn sử dụng phông chữ đơn cách hoặc phông chữ có độ rộng thay đổi trong các vùng văn bản (textarea) trên giao diện. Các vùng văn bản được sử dụng để chỉnh sửa mô tả và viết bình luận, cùng nhiều thứ khác.',
  'Disable Self Action Mail' => 'Tắt email hành động tự thực hiện',
  'Filetree Visible' => 'Hiển thị cây tập tin',
  'Edit Settings Configurations' => 'Chỉnh sửa cấu hình cài đặt',
  'Monospaced Textareas' => 'Vùng văn bản đơn cách',
  'Really remove the authentication factor %s from your account?' => 'Bạn có thực sự muốn xóa phương thức xác thực %s khỏi tài khoản của mình không?',
  'Mail Headers' => 'Tiêu đề thư',
  'Old Password' => 'Mật khẩu cũ',
  'Conpherence Column Minimize' => 'Thu nhỏ cột Conpherence',
  'Display Preferences' => 'Tùy chọn hiển thị',
  'Add Auth Factor' => 'Thêm phương thức xác thực',
  'You don\'t have any active sessions.' => 'Bạn không có phiên nào đang hoạt động.',
  'Changes saved.' => 'Đã lưu thay đổi.',
  'Authentication factors must have a name to identify them.' => 'Các phương thức xác thực phải có tên để nhận dạng.',
  'Choose the default behavior of the global search in the main menu.' => 'Chọn hành vi mặc định của tìm kiếm toàn cục trong menu chính.',
  'Hypertext Transfer Protocol' => 'Giao thức truyền tải siêu văn bản (HTTP)',
  'Choose which language you would like the UI to use.' => 'Chọn ngôn ngữ bạn muốn sử dụng cho giao diện.',
  'Outgoing mail is stamped with labels like `actor(alice)` which can be used to
write client mail rules to organize mail. By default, these stamps are sent
in an `X-Phabricator-Stamps` header.

If you use a client which can not use headers to route mail (like Gmail),
you can also include the stamps in the message body so mail rules based on
body content can route messages.' => 'Thư gửi đi được đóng dấu với các nhãn như `actor(alice)` có thể được sử dụng để viết quy tắc thư khách nhằm sắp xếp thư. Theo mặc định, các dấu này được gửi trong tiêu đề `X-Phabricator-Stamps`.

Nếu bạn sử dụng ứng dụng khách không thể sử dụng tiêu đề để định tuyến thư (như Gmail), bạn cũng có thể thêm các dấu trong nội dung tin nhắn để các quy tắc thư dựa trên nội dung có thể định tuyến tin nhắn.',
  'Your browser timezone (%s) differs from your profile timezone (%s). You can adjust your profile setting to match your browser, or ignore this conflict to keep your current profile setting.' => 'Múi giờ trình duyệt của bạn (%s) khác với múi giờ trong hồ sơ (%s). Bạn có thể điều chỉnh cài đặt hồ sơ để khớp với trình duyệt hoặc bỏ qua xung đột này để giữ cài đặt hồ sơ hiện tại.',
  'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'Hộp thoại yêu cầu quyền gửi thông báo trên màn hình đã bị đóng mà không cấp quyền. Chỉ các thông báo trong ứng dụng mới được gửi.',
  'Really delete address \'%s\'?' => 'Bạn có chắc chắn muốn xóa địa chỉ \'%s\'?',
  'Another user already has this email.' => 'Một người dùng khác đã có email này.',
  'Change primary email address?' => 'Thay đổi địa chỉ email chính?',
  'Monospaced Font' => 'Phông chữ đơn cách',
  'HTML Email' => 'Email HTML',
  'Global Defaults' => 'Mặc định toàn cục',
  'Conpherence Sound' => 'Âm thanh Conpherence',
  'Enable "Re:" Prefix' => 'Bật tiền tố "Re:"',
  'DarkConsole Visible' => 'Hiển thị DarkConsole',
  'Supported Protocol' => 'Giao thức được hỗ trợ',
  'Ignore new setting and keep %s' => 'Bỏ qua cài đặt mới và giữ %s',
  'If you disable **Self Actions**, this server will not notify you about actions you take.' => 'Nếu bạn tắt **Hành động tự thực hiện**, máy chủ này sẽ không thông báo cho bạn về các hành động bạn thực hiện.',
  'You are adding too many email addresses to your account too quickly.' => 'Bạn đang thêm quá nhiều địa chỉ email vào tài khoản của mình quá nhanh.',
  'Your browser has not yet granted this server permission to send desktop notifications.' => 'Trình duyệt của bạn chưa cấp quyền cho máy chủ này gửi thông báo trên màn hình.',
  'You can adjust **Application Settings** here to customize when you are emailed and notified.

| Setting | Effect
| ------- | -------
| Email | You will receive an email and a notification, but the notification will be marked "read".
| Notify | You will receive an unread notification only.
| Ignore | You will receive nothing.


If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.

These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Bạn có thể điều chỉnh **Cài đặt ứng dụng** tại đây để tùy chỉnh thời điểm bạn nhận được email và thông báo.

| Cài đặt | Tác dụng
| ------- | -------
| Email | Bạn sẽ nhận được email và thông báo, nhưng thông báo sẽ được đánh dấu là "đã đọc".
| Thông báo | Bạn sẽ chỉ nhận được thông báo chưa đọc.
| Bỏ qua | Bạn sẽ không nhận được gì.


Nếu một bản cập nhật thực hiện nhiều thay đổi (như thêm CC vào tác vụ, đóng nó và thêm bình luận), bạn sẽ nhận được thông báo mạnh nhất mà bất kỳ thay đổi nào được cấu hình để gửi.

Các tùy chọn này **chỉ** áp dụng cho các đối tượng bạn được kết nối (ví dụ: Các bản sửa đổi mà bạn là người đánh giá hoặc các tác vụ bạn được CC). Để nhận thông báo qua email khi các đối tượng khác được tạo, hãy cấu hình [[ /herald/ | Quy tắc Herald ]].',
  'You must enter your current password.' => 'Bạn phải nhập mật khẩu hiện tại của mình.',
  'Europe: 28-02-2000' => 'Châu Âu: 28-02-2000',
  'The old password you entered is incorrect.' => 'Mật khẩu cũ bạn đã nhập không chính xác.',
  '◐ Notify' => '◐ Thông báo',
  '%s updated his profile' => '%s đã cập nhật hồ sơ của anh ấy',
  'You can change your date and time preferences in Settings.' => 'Bạn có thể thay đổi tùy chọn ngày và giờ trong Cài đặt.',
  'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => 'Bạn có thể chọn nhận email văn bản thuần túy thay vì email HTML. Email văn bản thuần túy hoạt động tốt hơn với một số ứng dụng khách.',
  'Timezone Calibrated' => 'Đã hiệu chỉnh múi giờ',
  'Limited Translations' => 'Bản dịch hạn chế',
  'Email Delivery' => 'Gửi email',
  'Send Test Notification' => 'Gửi thông báo thử nghiệm',
  'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'Giá trị phông chữ đơn cách "%s" không an toàn. Bạn chỉ có thể nhập các chữ cái, số, dấu cách, dấu phẩy, dấu chấm, dấu gạch ngang, dấu gạch chéo tới và dấu ngoặc kép',
  'Edit settings for your personal account.' => 'Chỉnh sửa cài đặt cho tài khoản cá nhân của bạn.',
  'Create Settings' => 'Tạo cài đặt',
  'Use Unicode Glyphs: ⚙' => 'Sử dụng ký tự Unicode: ⚙',
  'Editor Link' => 'Liên kết trình biên tập',
  'Silly Translations' => 'Bản dịch ngớ ngẩn (Silly Translations)',
  'Send Plain Text Email' => 'Gửi email văn bản thuần túy',
  'Filetree Width' => 'Chiều rộng cây tập tin',
  'Hypertext Transfer Protocol over SSL' => 'Giao thức truyền tải siêu văn bản qua SSL (HTTPS)',
  'Search Scope' => 'Phạm vi tìm kiếm',
  'Email Preferences' => 'Tùy chọn email',
  'You don\'t have any active tokens.' => 'Bạn không có mã thông báo (token) nào đang hoạt động.',
  'Send another copy of the verification email to %s?' => 'Gửi một bản sao khác của email xác minh tới %s?',
  '24 Hour, 14:34' => '24 giờ, 14:34',
  'Disable "Re:" Prefix' => 'Tắt tiền tố "Re:"',
  'Sublime Text' => 'Sublime Text',
  'Conpherence Widget Pane Visible' => 'Hiển thị khung tiện ích Conpherence',
  'Disable Email Notifications' => 'Tắt thông báo qua email',
  'Expired' => 'Đã hết hạn',
  'No Notifications' => 'Không có thông báo',
  'Password Algorithms' => 'Thuật toán mật khẩu',
  'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Mật khẩu của bạn hiện được băm bằng thuật toán không còn khả dụng trên bản cài đặt này.',
  'Replaced With' => 'Được thay thế bằng',
  'Send HTML Email' => 'Gửi email HTML',
  'Translation' => 'Bản dịch',
  'Settings %d' => 'Cài đặt %d',
  'Time Format' => 'Định dạng thời gian',
  'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'Quyền thông báo trên màn hình đã bị từ chối. Chỉ các thông báo trong ứng dụng mới được gửi.',
  'Send Notifications' => 'Gửi thông báo',
  'Number' => 'Số điện thoại',
  'Permanently Linked' => 'Được liên kết vĩnh viễn',
  'Account Setup Issues' => 'Vấn đề thiết lập tài khoản',
  'Authentication Factors' => 'Các phương thức xác thực',
  'Web and Desktop' => 'Web và máy tính',
  'Sunday' => 'Chủ Nhật',
  'US: 2/28/2000' => 'Mỹ: 2/28/2000',
  'External Editor URI Variables' => 'Biến URI trình biên tập bên ngoài',
  'User Guide: Configuring an External Editor' => 'Hướng dẫn sử dụng: Cấu hình trình biên tập bên ngoài',
  'You have no account setup issues.' => 'Bạn không có vấn đề thiết lập tài khoản nào.',
  'NOTE: You already have an Auth Factor configured. Adding another factor will require you to always provide all Auth Factors instead of selecting one of your Auth Factors.' => 'LƯU Ý: Bạn đã cấu hình một phương thức xác thực. Việc thêm yếu tố khác sẽ yêu cầu bạn luôn cung cấp tất cả các phương thức xác thực thay vì chọn một trong số chúng.',
  'Personal Settings' => 'Cài đặt cá nhân',
  'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Một số ứng dụng sử dụng các ký tự unicode trong tiêu đề trang để cung cấp hình ảnh đại diện nhỏ gọn cho ứng dụng hiện tại. Bạn có thể thay thế bằng văn bản thuần túy nếu các ký tự này không hiển thị trên hệ thống của bạn.',
  'Web Only' => 'Chỉ trên web',
  'Disable Vary Subjects' => 'Tắt thay đổi chủ đề',
  'Developer/Test Translations' => 'Bản dịch cho nhà phát triển/thử nghiệm',
  'User Preferences' => 'Tùy chọn người dùng',
  'No Sounds' => 'Không có âm thanh',
  'Create Global Defaults' => 'Tạo mặc định toàn cục',
  'Enable Vary Subjects' => 'Bật thay đổi chủ đề',
  'TextMate' => 'TextMate',
  'No MFA Providers' => 'Không có nhà cung cấp MFA',
  'There is no known application setting with key "%s".' => 'Không có cài đặt ứng dụng nào được biết đến với khóa "%s".',
  'Choose the default sound behavior for new Conpherence rooms.' => 'Chọn hành vi âm thanh mặc định cho các phòng Conpherence mới.',
  'Policy Favorites' => 'Chính sách ưa thích',
  'Conpherence Notifications' => 'Thông báo Conpherence',
  'Friday' => 'Thứ Sáu',
  'Timezone "%s" is not a valid timezone identifier.' => 'Múi giờ "%s" không phải là mã định danh múi giờ hợp lệ.',
  'Select your local timezone.' => 'Chọn múi giờ địa phương của bạn.',
  'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Lưu ý: Việc xóa địa chỉ email khỏi tài khoản sẽ làm mất hiệu lực của bất kỳ liên kết đặt lại mật khẩu nào chưa được sử dụng.',
  'Click "Save Preference" to persist these changes.' => 'Nhấp vào "Lưu tùy chọn" để lưu các thay đổi này.',
  'Your browser has granted this server permission to send desktop notifications.' => 'Trình duyệt của bạn đã cấp quyền cho máy chủ này gửi thông báo trên máy tính.',
  'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Trình duyệt này đã từ chối cấp quyền gửi thông báo trên màn hình cho máy chủ này. Hãy tham khảo cài đặt / tài liệu trình duyệt của bạn để tìm cách xóa cài đặt này, thực hiện điều đó và sau đó truy cập lại trang này để cấp quyền.',
  'Week Starts On' => 'Tuần bắt đầu vào',
  'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Khi một bản sửa đổi được cập nhật, phần mềm này cố gắng đưa các bình luận trực tiếp trên phiên bản cũ sang các thay đổi mới. Bạn có thể tắt hành vi này nếu muốn các bình luận được giữ nguyên tại một chỗ.',
  'Remove Factor' => 'Xóa yếu tố',
  'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Tài khoản của bạn hiện chưa được đặt mật khẩu. Bạn có thể chọn mật khẩu bằng cách thực hiện đặt lại mật khẩu.',
  'Disabled (an administrator has disabled login for this account provider).' => 'Đã tắt (quản trị viên đã tắt đăng nhập cho nhà cung cấp tài khoản này).',
  'Send Another Verification Email?' => 'Gửi email xác minh khác?',
  'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Vì việc triển khai thuật toán bị thiếu, mật khẩu của bạn không thể được sử dụng hoặc cập nhật.',
  'Verify' => 'Xác minh',
  'Edit Settings: %s' => 'Chỉnh sửa cài đặt: %s',
  'Add "Re:" Prefix' => 'Thêm tiền tố "Re:"',
  'Desktop Only' => 'Chỉ trên máy tính',
  'Account Settings' => 'Cài đặt tài khoản',
  'View Configuration' => 'Xem cấu hình',
  'Supported Editor Protocols' => 'Các giao thức biên tập được hỗ trợ',
  'Add Authentication Factor' => 'Thêm phương thức xác thực',
  'Choose which day a calendar week should begin on.' => 'Chọn ngày bắt đầu của tuần trên lịch.',
  'Account Activity Logs' => 'Nhật trình hoạt động tài khoản',
  'Date and Time' => 'Ngày và giờ',
  'Use Monospaced Font' => 'Sử dụng phông chữ đơn cách',
  'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'Độ mạnh của băm mật khẩu đã lưu của bạn có thể được nâng cấp. Để nâng cấp, hãy: đăng xuất và đăng nhập lại bằng mật khẩu của bạn; hoặc thay đổi mật khẩu.',
  'Save Preferences' => 'Lưu tùy chọn',
  'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.

Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:

```name="Example: TextMate on macOS"
%s
```


For complete instructions on editor configuration, see **[[ %s | %s ]]**.

See the tables below for a list of supported variables and protocols.' => 'Nhiều trình biên tập văn bản có thể được cấu hình làm trình xử lý URI cho các giao thức đặc biệt như `editor://`. Nếu bạn đã cài đặt và cấu hình một trình biên tập như vậy, một số ứng dụng có thể tạo các liên kết mà bạn có thể nhấp vào để mở tệp cục bộ.

Cung cấp mẫu URI để xây dựng URI trình biên tập bên ngoài trong môi trường của bạn. Ví dụ: nếu bạn sử dụng TextMate trên macOS, mẫu cho máy của bạn có thể trông giống như sau:

```name="Ví dụ: TextMate trên macOS"
%s
```


Để biết hướng dẫn đầy đủ về cấu hình trình biên tập, xem **[[ %s | %s ]]**.

Xem các bảng bên dưới để biết danh sách các biến và giao thức được hỗ trợ.',
  '⚫ Email' => '⚫ Email',
  'New Setting' => 'Cài đặt mới',
  'Pronoun' => 'Đại từ',
  'Choose the default notification behavior for Conpherence rooms.' => 'Chọn hành vi thông báo mặc định cho các phòng Conpherence.',
  'DarkConsole Tab' => 'Thẻ DarkConsole',
  'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Lưu ý: Việc thay đổi địa chỉ email chính sẽ làm mất hiệu lực của bất kỳ liên kết đặt lại mật khẩu nào chưa được sử dụng.',
  'Sessions and Logs' => 'Phiên và nhật ký',
  'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Địa chỉ email chính của bạn chưa được xác minh. Bạn sẽ không thể nhận email cho đến khi xác minh nó.',
  'Pinned Applications' => 'Ứng dụng đã ghim',
  'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Máy chủ này có thể gửi thông báo thời gian thực đến trình duyệt web hoặc máy tính của bạn. Chọn nơi bạn muốn nhận các cập nhật thời gian thực này.',
  'Revoke All' => 'Thu hồi tất cả',
  'No settings panel group with key "%s" exists!' => 'Không tồn tại nhóm bảng cài đặt nào có khóa "%s"!',
  'Linked Accounts and Authentication' => 'Tài khoản liên kết và xác thực',
  'Choose the pronoun you prefer.' => 'Chọn đại từ bạn muốn.',
  'Conflict Ignored' => 'Đã bỏ qua xung đột',
  'This engine is used to edit settings.' => 'Công cụ này được sử dụng để chỉnh sửa cài đặt.',
  'Default (Unknown, "%s")' => 'Mặc định (Không xác định, "%s")',
  'Primary Email Unverified' => 'Email chính chưa được xác minh',
);
  }

}
