<?php

final class PhabricatorManiphestVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Tạo Nhiệm vụ',
      'Burnup Rate' => 'Tốc độ hoàn thành',
      'Triage' => 'Phân loại',
      'Define task subtypes.' => 'Xác định các loại tác vụ phụ.',
      '%s removed %s as the assignee of this task.' => '%s đã huỷ phân công nhiệm vụ này cho %s.',
      'Priority of the task.' => 'Mức độ ưu tiên của nhiệm vụ.',
      'Weigh In' => 'Cân nhắc',
      'Task Fields' => 'Trường thông tin',
      'Assignee' => 'Người được giao',
      'Open Parents' => 'Mở các nhiệm vụ mẹ',
      'Update an existing Maniphest task.' => 'Cập nhật nhiệm vụ Maniphest hiện có.',
      'List of columns to move the task to.' => 'Danh sách cột để chuyển nhiệm vụ tới.',
      'A task\'s subscribers change.' => 'Người theo dõi của nhiệm vụ đã thay đổi',
      'Change Points' => 'Thay đổi điểm',
      'Returns information about the possible statuses for Maniphest tasks.' => 'Trả về thông tin về các trạng thái có thể có của nhiệm vụ Maniphest.',
      '%s closed %s as %s.' => '%s đã đóng nhiệm vụ %s với trạng thái %s.',
      'This task has been locked.' => 'Nhiệm vụ này đã bị khóa.',
      '%s added %s commit(s) to %s: %s.' => '%s đã thêm %s commit (s) lên %s: %s.',
      'Edits Locked' => 'Chỉnh sửa đã bị khóa',
      '%s claimed %s.' => '%s đã nhận phụ trách %s.',
      'TASK DETAIL' => 'CHI TIẾT NHIỆM VỤ',
      'The task already has the selected owner.' => 'Nhiệm vụ đã có người phụ trách được chọn.',
      '%s closed this task as a duplicate by committing %s.' => '%s đã đóng nhiệm vụ này do trùng lặp, thông qua commit %s.',
      'Search Subtasks' => 'Tìm kiếm nhiệm vụ phụ',
      'Merged' => 'Đã hợp nhất',
      'Closed after %s' => 'Đã đóng sau %s',
      'Changed Task Priority' => 'Đã thay đổi mức độ ưu tiên của nhiệm vụ',
      'Retrieve Maniphest task transactions.' => 'Lấy danh sách các thay đổi của nhiệm vụ Maniphest.',
      'New task name.' => 'Tên nhiệm vụ mới.',
      '%s changed the point value for this task from %s to %s.' => '%s đã thay đổi giá trị điểm cho nhiệm vụ này từ %s thành %s .',
      'Changed task priority to "%s".' => 'Đã thay đổi mức độ ưu tiên của nhiệm vụ thành "%s".',
      'Tasks must have a title.' => 'Nhiệm vụ phải có tiêu đề.',
      'Retrieve information about possible Maniphest task status values.' => 'Lấy thông tin về các giá trị trạng thái có thể có của nhiệm vụ trong Maniphest.',
      'Oldest (Pri)' => 'Cũ nhất (Pri)',
      'Tasks with edits locked may only be edited by their owner.' => 'Các nhiệm vụ bị khóa chỉnh sửa chỉ có thể được chỉnh sửa bởi người sở hữu của chúng.',
      'Unblock' => 'Bỏ chặn',
      'Select and reorder task fields.' => 'Chọn và sắp xếp lại các trường nhiệm vụ.',
      'Description Preview' => 'Xem trước mô tả',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s đã thay đổi phân loại con của %s từ "%s" thành "%s".',
      'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => 'Cấu hình không định nghĩa bất kỳ trạng thái tác vụ nào có thuộc tính đặc biệt "%s", nhưng bạn phải chỉ định một trạng thái đảm nhiệm vai trò đặc biệt này.',
      'Oldest open task.' => 'Nhiệm vụ đang mở cũ nhất.',
      'Duplicates Merged Here' => 'Các nhiệm vụ trùng được gộp vào đây',
      'Change the parents of this task.' => 'Thay đổi nhiệm vụ mẹ của nhiệm vụ này.',
      'You can only select a parent task when creating a transaction for the first time.' => 'Bạn chỉ có thể chọn nhiệm vụ mẹ khi tạo thay đổi đầu tiên.',
      'Subtasks' => 'Nhiệm vụ con',
      'Update has no effect.' => 'Cập nhật không có hiệu lực.',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Báo cáo Maniphest',
      'This task is closed as a duplicate. Only comment if you think that this task is not a duplicate.' => 'Nhiệm vụ này đã bị đánh dấu là trùng lặp và đã bị đóng. Chỉ nên bình luận nếu bạn nghĩ rằng nhiệm vụ này không trùng lặp.',
      'Update the task description.' => 'Cập nhật mô tả nhiệm vụ.',
      'From Email' => 'Từ Email',
      'List of related commit PHIDs.' => 'Danh sách commit PHID liên quan.',
      'Show Only Tasks With Open Parents' => 'Chỉ hiển thị các nhiệm vụ có nhiệm vụ mẹ đang mở',
      'Needs Triage' => 'Cần phân loại',
      'Minimal Valid Config' => 'Cấu hình hợp lệ tối thiểu',
      'The source task is associated with the destination commit.' => 'Nhiệm vụ nguồn được liên kết với commit đích.',
      'Story Points' => 'Điểm ước lượng',
      'Closed, Spite' => 'Đã đóng, không rõ lý do',
      '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s đã thay đổi (các) tập tin, đã đính kèm %s: %s; gỡ bỏ %s: %s.',
      '%s closed this task as a duplicate of %s.' => '%s đã đóng nhiệm vụ này vì đây là nhiệm vụ trùng lặp của %s.',
      'Task IDs must be integer numbers.' => 'ID nhiệm vụ phải là số nguyên.',
      'Set Sail for Adventure' => 'Ra khơi phiêu lưu',
      'Allows you to edit, add, or remove the task statuses available in Maniphest,
    like "Open", "Resolved" and "Invalid". The configuration should contain a map
    of status constants to status specifications (see defaults below for examples).
    The constant for each status should be 1-12 characters long and  contain only
    lowercase letters and digits. Valid examples are "open", "closed", and
    "invalid". Users will not normally see these values.
    The keys you can provide in a specification are:
      - `name` //Required string.// Name of the status, like "Invalid".
      - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
        appears on the task detail view in the header.
      - `name.action` //Optional string.// Action name for email subjects, like
        "Marked Invalid".
      - `closed` //Optional bool.// Statuses are either "open" or "closed".
        Specifying `true` here will mark the status as closed (like "Resolved" or
        "Invalid"). By default, statuses are open.
      - `special` //Optional string.// Mark this status as special. The special
        statuses are:
        - `default` This is the default status for newly created tasks. You must
          designate one status as default, and it must be an open status.
        - `closed` This is the default status for closed tasks (for example, tasks
          closed via the "!close" action in email or via the quick close button in
          Maniphest). You must designate one status as the default closed status,
          and it must be a closed status.
        - `duplicate` This is the status used when tasks are merged into one
          another as duplicates. You must designate one status for duplicates,
          and it must be a closed status.
      - `transaction.icon` //Optional string.// Allows you to choose a different
        icon to use for this status when showing status changes in the transaction
        log. Please see UIExamples, Icons and Images for a list.
      - `transaction.color` //Optional string.// Allows you to choose a different
        color to use for this status when showing status changes in the transaction
        log.
      - `silly` //Optional bool.// Marks this status as silly, and thus wholly
        inappropriate for use by serious businesses.
      - `prefixes` //Optional list<string>.// Allows you to specify a list of
        text prefixes which will trigger a task transition into this status
        when mentioned in a commit message. For example, providing "closes" here
        will allow users to move tasks to this status by writing `Closes T123` in
        commit messages.
      - `suffixes` //Optional list<string>.// Allows you to specify a list of
        text suffixes which will trigger a task transition into this status
        when mentioned in a commit message, after a valid prefix. For example,
        providing "as invalid" here will allow users to move tasks
        to this status by writing `Closes T123 as invalid`, even if another status
        is selected by the "Closes" prefix.
      - `keywords` //Optional list<string>.// Allows you to specify a list
        of keywords which can be used with `!status` commands in email to select
        this status.
      - `disabled` //Optional bool.// Marks this status as no longer in use so
        tasks can not be created or edited to have this status. Existing tasks with
        this status will not be affected, but you can batch edit them or let them
        die out on their own.
      - `claim` //Optional bool.// By default, closing an unassigned task claims
        it. You can set this to `false` to disable this behavior for a particular
        status.
      - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
        to lock comments (users who can edit the task may override this lock).
        Specify "edits" to prevent anyone except the task owner from making edits.
      - `mfa` //Optional bool.// Require all edits to this task to be signed with
        multi-factor authentication.
    Statuses will appear in the UI in the order specified. Note the status marked
    `special` as `duplicate` is not settable directly and will not appear in UI
    elements, and that any status marked `silly` does not appear if the software
    is configured with `phabricator.serious-business` set to true.
    Examining the default configuration and examples below will probably be helpful
    in understanding these options.
    ' => 'Cho phép bạn chỉnh sửa, thêm hoặc xóa các trạng thái nhiệm vụ trong Maniphest,
    như "Open" (Đang mở), "Resolved" (Đã xử lý), và "Invalid" (Không hợp lệ).
    Cấu hình nên bao gồm một bản ánh xạ giữa **hằng số trạng thái** và **mô tả trạng thái**
    (xem các giá trị mặc định bên dưới để tham khảo).
    Hằng số cho mỗi trạng thái phải có độ dài từ **1–12 ký tự**, chỉ bao gồm **chữ thường và số**.  
    Ví dụ hợp lệ: `"open"`, `"closed"`, `"invalid"`. Người dùng thông thường sẽ không thấy các giá trị này.
    Bạn có thể cung cấp các khóa sau trong phần mô tả trạng thái:
    - `name` //Chuỗi, bắt buộc.// Tên hiển thị của trạng thái, ví dụ `"Invalid"`.
    - `name.full` //Chuỗi, tùy chọn.// Tên dài hơn, ví dụ `"Closed, Invalid"`. Hiển thị ở tiêu đề trang chi tiết nhiệm vụ.
    - `name.action` //Chuỗi, tùy chọn.// Tên hành động dùng trong tiêu đề email, như `"Marked Invalid"`.
    - `closed` //Boolean, tùy chọn.// Trạng thái là `"open"` hoặc `"closed"`. Gán `true` để đánh dấu là trạng thái đã đóng (ví dụ `"Resolved"` hoặc `"Invalid"`). Mặc định là mở.
    - `special` //Chuỗi, tùy chọn.// Đánh dấu trạng thái là đặc biệt. Các loại đặc biệt gồm:
      - `default`: Trạng thái mặc định khi tạo nhiệm vụ mới. Phải là trạng thái mở.
      - `closed`: Trạng thái mặc định khi nhiệm vụ bị đóng (ví dụ: qua hành động `!close` trong email hoặc nút đóng nhanh).
      - `duplicate`: Trạng thái dành cho nhiệm vụ bị gộp vào nhiệm vụ khác. Phải là trạng thái đã đóng.
    - `transaction.icon` //Chuỗi, tùy chọn.// Biểu tượng hiển thị trong nhật ký khi trạng thái thay đổi. (Tham khảo UIExamples).
    - `transaction.color` //Chuỗi, tùy chọn.// Màu hiển thị khi trạng thái thay đổi trong nhật ký giao dịch.
    - `silly` //Boolean, tùy chọn.// Đánh dấu trạng thái là "ngớ ngẩn", không phù hợp với các doanh nghiệp nghiêm túc.
    - `prefixes` //Danh sách chuỗi, tùy chọn.// Các tiền tố có thể kích hoạt chuyển trạng thái khi được dùng trong thông điệp commit. Ví dụ: `"closes"` cho phép ghi `Closes T123` để tự động chuyển trạng thái.
    - `suffixes` //Danh sách chuỗi, tùy chọn.// Các hậu tố có thể dùng cùng tiền tố để chuyển trạng thái. Ví dụ: `"as invalid"` sẽ cho phép `Closes T123 as invalid` để chọn đúng trạng thái dù tiền tố chung.
    - `keywords` //Danh sách chuỗi, tùy chọn.// Từ khóa có thể dùng với lệnh `!status` trong email để chọn trạng thái này.
    - `disabled` //Boolean, tùy chọn.// Đá',
      'Recently Closed' => 'Đã đóng gần đây',
      'One of a task\'s subtasks changes status.' => 'Một trong các nhiệm vụ con của nhiệm vụ này đã thay đổi trạng thái.',
      'Assigned Task' => 'Nhiệm vụ được giao',
      'File ("%s", with MIME type "%s") is not a viewable image file.' => 'Tập tin ("%s", có kiểu MIME là "%s") không phải là tập tin hình ảnh có thể xem được.',
      '%s updated the cover image for %s.' => '%s đã cập nhật ảnh bìa cho %s',
      '%s updated the task description for %s.' => '%s đã cập nhật mô tả nhiệm vụ cho %s.',
      'Activates a points field on tasks. You can use points for estimation or
    planning. If configured, points will appear on workboards.
    To activate points, set this value to a map with these keys:
      - `enabled` //Optional bool.// Use `true` to enable points, or
        `false` to disable them.
      - `label` //Optional string.// Label for points, like "Story Points" or
        "Estimated Hours". If omitted, points will be called "Points".
      - `action` //Optional string.// Label for the action which changes points
        in Maniphest, like "Change Estimate". If omitted, the action will
        be called "Change Points".
    See the example below for a starting point.' => 'Kích hoạt trường điểm cho các nhiệm vụ. Bạn có thể sử dụng điểm để ước lượng hoặc lên kế hoạch. Nếu được cấu hình, điểm sẽ hiển thị trên bảng công việc.
    Để kích hoạt điểm, hãy đặt giá trị này thành một bản đồ với các khóa sau:
      - `enabled` //Bool tùy chọn.// Dùng `true` để bật điểm, hoặc `false` để tắt.
      - `label` //Chuỗi tùy chọn.// Nhãn cho điểm, như "Điểm ước lượng" hoặc 
        "Giờ ước lượng". Nếu bỏ qua, hệ thống sẽ gọi là "Điểm".
      - `action` //Chuỗi tùy chọn.// Nhãn cho hành động thay đổi điểm trong Maniphest, 
        như "Thay đổi ước lượng". Nếu bỏ qua, hành động sẽ được gọi là "Thay đổi điểm".
    Xem ví dụ bên dưới để bắt đầu.',
      'Status set to invalid value.' => 'Trạng thái được đặt thành giá trị không hợp lệ.',
      'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => 'Trạng thái "%s" được đánh dấu là mặc định, nhưng thực chất là trạng thái đóng. Trạng thái mặc định phải là trạng thái mở.',
      '[Maniphest]' => '[Maniphest]',
      '%s lowered the priority of %s from %s to %s.' => '%s đã hạ mức độ ưu tiên của %s từ %s xuống %s.',
      'Parameter "fullText" is no longer supported. Use method "maniphest.search" with the "query" constraint instead.' => 'Tham số "fullText" không còn được hỗ trợ nữa. Thay vào đó, hãy sử dụng phương thức "maniphest.search" với ràng buộc "query".',
      'Search for tasks with given statuses.' => 'Tìm kiếm các nhiệm vụ theo trạng thái đã định.',
      'Task Has Revision' => 'Nhiệm vụ có phiên bản',
      'Unbreak Now!' => 'Gỡ rối ngay!',
      'Change Story Points' => 'Thay đổi Điểm ước lượng',
      'Configure point values for tasks.' => 'Cấu hình giá trị điểm cho nhiệm vụ.',
      'This task is locked. Edit it anyway?' => 'Nhiệm vụ này đã bị khóa. Bạn vẫn muốn sửa chứ?',
      'Create a task in a workboard column.' => 'Tạo một nhiệm vụ trong một cột của bảng công việc.',
      'Search for tasks with given priorities.' => 'Tìm kiếm các nhiệm vụ có mức độ ưu tiên được cho trước.',
      'Configure the cutoff for the "Recently Closed" column.' => 'Cấu hình giới hạn cho cột "Đã đóng gần đây".',
      'Original task author.' => 'Người khởi tạo nhiệm vụ ban đầu.',
      'Information about task priority.' => 'Thông tin về ưu tiên nhiệm vụ.',
      '%s detached %s file(s): %s.' => '%s đã gỡ %s tập tin: %s.',
      'Valid setting' => 'Thiết lập hợp lệ',
      'Open Subtasks' => 'Nhiệm vụ con đang mở',
      'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => 'Đóng một nhiệm vụ. Thao tác này sẽ thay đổi trạng thái của nhiệm vụ sang trạng thái đóng mặc định. Để có thể thay đổi trạng thái nhiệm vụ linh hoạt hơn, xem `%s`.',
      '%s removed %s parent task(s): %s.' => '%s đã xóa %s nhiệm vụ mẹ: %s.',
      '%s added %s subtask(s): %s.' => '%s đã thêm %s nhiệm vụ mẹ: %s.',
      'Assign a task to a specific user.' => 'Giao nhiệm vụ cho một người dùng cụ hể.',
      'Date Closed (Latest First)' => 'Ngày đóng (Mới nhất trước)',
      'Merged In' => 'Được gộp vào',
      '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s đã sửa đổi %s commit, đã thêm %s: %s; đã xóa %s: %s.',
      'Date Closed' => 'Ngày đóng',
      'Task title cannot exceed %d characters.' => 'Tiêu đề nhiệm vụ không được vượt quá %s ký tự.',
      'Edit Related Tasks...' => 'Sửa đổi các nhiệm vụ liên quan...',
      'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'Nhiệm vụ này được liên kết với nhiều hơn %s nhiệm vụ khác. Chỉ các nhiệm vụ mẹ và nhiệm vụ con trực tiếp được hiển thị tại đây. Sử dụng %s để hiển thị thêm phần còn lại của sơ đồ.',
      'A task\'s owner changes.' => 'Chủ sở hữu của nhiệm vụ đã thay đổi.',
      '%s updated the cover image to %s.' => '%s đã cập nhật ảnh bìa thành %s',
      '%s created subtask %s.' => '%s đã tạo nhiệm vụ con %s.',
      'Bulk Edit Selected »' => 'Sửa hàng loạt các mục đã chọn »',
      'No tasks found.' => 'Không tìm thấy nhiệm vụ nào.',
      'Can Bulk Edit Tasks' => 'Có thể sửa đổi hàng loạt nhiệm vụ',
      'Estimated number of hours this will take.' => 'Số giờ ước tính cần thiết để thực hiện việc này.',
      'Related commits.' => 'Commit có liên quan.',
      'Assign task to: %s.' => 'Giao nhiệm vụ cho: %s.',
      'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => 'Trạng thái "%s" được đánh dấu là trạng thái mặc định để đóng tác vụ, nhưng không phải là trạng thái đã đóng. Trạng thái mặc định phải là trạng thái đã đóng.',
      'Value for key "%s" should be a dictionary.' => 'Giá trị cho khóa "%s" nên là một từ điển.',
      'Assigned task to: %s.' => 'Đã giao nhiệm vụ cho: %s.',
      'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Khóa "%s" không phải là hằng trạng thái hợp lệ. Hằng trạng thái phải có từ 1–64 ký tự chữ và số, và không được chỉ bao gồm chữ số. Ví dụ, "%s" hoặc "%s" là những lựa chọn hợp lý.',
      'Current task owner, if task is assigned.' => 'Người phụ trách hiện tại của nhiệm vụ, nếu nhiệm vụ đã được giao.',
      'Empty withOwners() constraint is not valid.' => 'Ràng buộc withOwners() rỗng không hợp lệ.',
      'List of subtask PHIDs.' => 'Danh sách các PHID của các nhiệm vụ con.',
      'Default view policy for newly created tasks.' => 'Chính sách xem mặc định cho các nhiệm vụ mới được tạo.',
      'Show Only Tasks Without Open Parents' => 'Chỉ hiển thị các nhiệm vụ không có nhiệm vụ mẹ đang mở',
      '%s changed the task status from %s to %s by committing %s.' => '%s đã thay đổi trạng thái nhiệm vụ từ %s thành %s bằng cách commit %s.',
      'New task description.' => 'Mô tả nhiệm vụ mới.',
      '%s removed the point value for %s.' => '%s đã xóa giá trị điểm của %s.',
      'Mocks' => 'Mock',
      '%s removed the point value for this task.' => '%s đã xóa giá trị điểm của nhiệm vụ này.',
      'Closer' => 'Người đóng',
      '%s added %s parent task(s): %s.' => '%s đã thêm %s nhiệm vụ con: %s.',
      'Change the related commits for this task.' => 'Thay đổi các commit liên quan đến nhiệm vụ này.',
      'Subtask' => 'Nhiệm vụ con',
      'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => 'Cấu hình có hai trạng thái đều được gắn thuộc tính đặc biệt “%s” (“%s” và “%s”). Chỉ nên có một trạng thái như vậy thôi.',
      'Set priority to' => 'Đặt ưu tiên',
      'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => 'Cấu hình không hợp lệ. Cấu hình ưu tiên của Maniphest phải là từ điển.',
      'The task description.' => 'Mô tả nhiệm vụ.',
      'Filter By Project' => 'Lọc theo dự án',
      '%s claimed this task.' => '%s đã nhận nhiệm vụ này.',
      'Close This Task As a Duplicate Of' => 'Đóng nhiệm vụ này vì là nhiệm vụ trùng lặp của',
      '%s removed %s subtask(s) for %s: %s.' => '%s đã xóa %s nhiệm vụ phụ cho %s: %s.',
      'Untitled Task' => 'Nhiệm vụ chưa có tiêu đề',
      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s đã sửa đổi nhiệm vụ mẹ của %s, đã thêm %s: %s ; đã xóa %s: %s .',
      'Read information about task statuses.' => 'Đọc thông tin về trạng thái nhiệm vụ.',
      'Move a task to one or more workboard columns.' => 'Di chuyển một nhiệm vụ tới một hoặc nhiều cột trên bảng làm việc.',
      '%s added a cover image to %s.' => '%s đã thêm ảnh bìa cho %s.',
      'Edit Subtasks' => 'Sửa đổi nhiệm vụ con',
      '%s assigned this task to %s.' => '%s đã giao nhiệm vụ này cho %s .',
      '%s placed %s up for grabs.' => '%s đã nhường %s cho người khác.',
      'Change status to: %s.' => 'Thay đổi trạng thái thành: %s.',
      '%s raised the priority of this task from %s to %s.' => '%s đã nâng mức độ ưu tiên của nhiệm vụ này từ %s lên %s.',
      'No Forms' => 'Không có biểu mẫu',
      'Hours Config' => 'Cấu hình giờ',
      'Type a task subtype name...' => 'Nhập tên phân loại nhiệm vụ...',
      'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => 'Không thể tạo hình thu nhỏ cho tập tin "%s" (kiểu MIME: "%s"). Có thể máy chủ của bạn thiếu hỗ trợ định dạng này trong phần mở rộng GD.',
      'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.
    %s
    If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => 'Để thay đổi độ ưu tiên của một nhiệm vụ, hãy chỉ định mức độ ưu tiên mong muốn, chẳng hạn như `%s`. Bảng sau hiển thị các tên đã được cấu hình cho các mức độ ưu tiên:
    %s
    Nếu bạn chỉ định một mức độ ưu tiên không hợp lệ, lệnh sẽ bị bỏ qua. Lệnh này không có tác dụng nếu bạn không chỉ định độ ưu tiên.',
      '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s đã sửa đổi %s phiên bản, đã thêm %s: %s; đã loại bỏ %s: %s.',
      'Assign task to me' => 'Giao nhiệm vụ cho chính tôi',
      '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s đã thay đổi trạng thái của %s, một nhiệm vụ phụ của %s, từ %s thành %s.',
      'Tasks to Close and Merge' => 'Nhiệm vụ cần đóng và hợp nhất',
      '%s updated the task description.' => '%s đã cập nhật mô tả nhiệm vụ.',
      'Task to make this a subtask of.' => 'Chọn tác vụ mà bạn muốn đặt mục này làm tác vụ con.',
      '%s added %s revision(s) to %s: %s.' => '%s đã thêm %s phiên bản vào %s: %s.',
      'Owner PHID' => 'Chủ sở hữu PHID',
      'Closed, Duplicate' => 'Đã đóng, Trùng lặp',
      'Epoch timestamp when the task was closed.' => 'Dấu thời gian Epoch khi nhiệm vụ được đóng.',
      'task author' => 'người tạo nhiệm vụ',
      'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => 'Phương pháp này đã bị đóng băng và cuối cùng sẽ bị lỗi thời. Mã mới nên sử dụng "transaction.search" thay vào đó.',
      'Browse Assignees' => 'Duyệt người được giao',
      '%s attached %d file(s) of %s: %s' => '%s đã đính kèm %s tập tin của %s: %s',
      'Status of the task.' => 'Trạng thái của nhiệm vụ.',
      'Open Tasks by User and Priority (%s)' => 'Mở nhiệm vụ theo Người dùng và Độ ưu tiên (%s)',
      'You can not lock this task because it does not have an owner. No one would be able to edit the task. Assign the task to an owner before locking it.' => 'Bạn không thể khóa nhiệm vụ này vì nó không có chủ sở hữu. Không ai có thể chỉnh sửa nhiệm vụ. Hãy chỉ định tác vụ cho một người sở hữu trước khi khóa.',
      'Information about task status.' => 'Đọc thông tin về trạng thái nhiệm vụ.',
      'Set description to' => 'Đặt miêu tả thành',
      'Subtasks.' => 'Nhiệm vụ con',
      '%s closed this task as %s.' => '%s đã đóng nhiệm vụ này với trạng thái %s.',
      'Merge Into Selected Task' => 'Hợp nhất vào nhiệm vụ đã chọn',
      'Configure Maniphest.' => 'Cấu hình Maniphest.',
      '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s đã sửa đổi nhiệm vụ con của %s, đã thêm %s: %s ; đã xóa %s: %s.',
      'A task is moved between columns on a workboard.' => 'Một nhiệm vụ được di chuyển giữa các cột trên bảng làm việc.',
      'Updated Before' => 'Được cập nhật trước đây',
      'The source task has been closed as a duplicate of the destination task.' => 'Nhiệm vụ nguồn đã bị đóng vì trùng lặp với nhiệm vụ đích.',
      '%s changed the point value for %s from %s to %s.' => '%s đã thay đổi giá trị điểm cho %s từ %s thành %s.',
      '%s created this task.' => '%s đã tạo ra nhiệm vụ này.',
      'Search...' => 'Tìm kiếm...',
      'Task Graph' => 'Biểu đồ nhiệm vụ',
      'Wishlist' => 'Danh sách mong muốn',
    );
  }

}
