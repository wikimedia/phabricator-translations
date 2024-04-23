<?php

final class PhabricatorSettingsZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12小时，下午2:34',
      'Default (%s)' => '默认（%s）',
      'You haven\'t added any contact numbers to your account.' => '您还没有向您的账户添加任何联系方式。',
      'Conpherence Column Visible' => 'Conpherence 列可见',
      'External Editor' => '外部编辑器',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => '此网页浏览器不支持桌面通知。无论该浏览器是否支持此设置，只为该浏览器发送应用程序通知。',
      'Choose Factor Type' => '选择因素类型',
      'Page Titles' => '页面标题',
      'Personal Account Settings' => '个人账户设置',
      'ISO 8601: 2000-02-28' => 'ISO 8601：2000-02-28',
      'Global Default Settings' => '全域默认设置',
      'Self Actions' => '自身操作',
      'If you have difficulty reading the UI, this setting may help.' => '如果您阅读用户界面有困难，此设置可能有帮助。',
      'Email Notifications' => '电子邮件通知',
      'Show Unified Diffs' => '显示统一化的差异',
      'Diff Preferences' => '差异参数设置',
      'Saturday' => '星期六',
      'Change Primary Address' => '更改主要地址',
      'Send Stamps' => '发送标记',
      'Show Older Inlines' => '显示较旧的行内',
      'Select the format you prefer for editing dates.' => '选择您喜欢的编辑日期格式。',
      'On Small Screens' => '在小屏幕上',
      'A verification email has been sent. Click the link in the email to verify your address.' => '一封验证邮件已经被发送。点击邮件中的链接以验证你的邮箱地址。',
      'Enable Email Notifications' => '启用电子邮件通知',
      'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => '差异通常在大屏幕上以并排布局显示，并自动在小屏幕（如手机）上切换到统一化视图。如果您即使在大屏幕上也更喜欢统一化的差异，您可以选择在所有显示器上使用它们。',
      'Generic Editor' => '通用编辑器',
      'Edit global default settings for all users.' => '编辑所有用户的全域默认设置。',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => '**添加“Re:”前缀** 设置在所有消息前添加“Re:”，即使它们不是回复。如果您在 Mac OS X 上使用 **邮件.app** ，这可以改善电子邮件线程处理。
    | 设置 | 示例邮件主题
    |------------------------|----------------
    | 启用“Re:”前缀  | `Re: [Differential] [已接受] D123：示例修订`
    | 禁用“Re:”前缀 | `[Differential] [已接受] D123：示例修订`',
      'No settings panels are available.' => '无可用设置面板。',
      'Empty string is not a valid setting for "%s".' => '空字符串不是一个对“%s”有效的设置。',
      'Adjust Timezone' => '调整时区',
      'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//' => '如果你禁用**邮件通知**，此服务器将永远不会发送提醒事件的邮件。这个设置会覆盖所有其他设置。',
      '%s updated her profile' => '%s 更新了她的个人资料',
      'Add Contact Number' => '添加联系人号码',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => '启用了**变换主题**后，大多数电子邮件主题行都会包含一个简短的内容描述，例如"[关闭]"，用于通知某人关闭任务。
    | 设置                                 | 邮件主题示例
    |----------------------|----------------
    | 变换主题        | `[Maniphest] [关闭] T123: 例子任务`
    | 未变换主题     | `[Maniphest] T123: 例子任务`
    这可以使邮件更有用，但有些客户端难以对这些邮件进行线程处理。禁用此选项可能会改善线程处理，但会降低主题行的实用性。',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => '值“%s”对设置“%s”无效：有效的值是 %s。',
      'Extra Settings' => '额外设置',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => '您确定要删除这个地址吗？您将不能再使用它登录。',
      'If you change your primary address, %s will send all email to %s.' => '如果您更改了您的主要地址，%s会把所有的电子邮件都发送到%s。',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => '您可以在显示等宽文字，包括源代码时自定义使用的字体。您应该输入一个有效的 CSS 字体修饰如：`13px Consolas`',
      'Enable Self Action Mail' => '启用自身操作邮件',
      'You haven\'t added any SSH Public Keys.' => '您并未添加任何 SSH 公钥。',
      'All Messages' => '所有消息',
      'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => '\'DarkConsole 是一个用来开发应用和排除应用故障的调试控制台。启用 DarkConsole 后，在您的键盘上按 {nav `} 键来切换开或关。',
      'Save Preference' => '保存参数设置',
      'Email Format' => '电子邮件格式',
      'Your browser timezone and profile timezone are now in agreement (%s).' => '您的浏览器时区和个人资料时区现在是一致的 (%s)。',
      'Edit Authentication Factor' => '编辑认证因素',
      'Changing your password will terminate any other outstanding login sessions.' => '更改密码将终止任何其他未完成的登录会话。',
      'You have no linked accounts.' => '您没有已关联的账户。',
      'Active Login Sessions' => '活跃的登录会话',
      'Edit Global Settings' => '编辑全域设置',
      'Ignore Conflict' => '忽略冲突',
      'Vary Subjects' => '变换主题',
      'Delete Authentication Factor' => '删除认证因素',
      '%s updated their profile' => '%s 更新了其个人资料',
      'Current Setting' => '当前设置',
      'Visual Studio Code' => 'Visual Studio Code',
      'Provider: %s' => '提供者：%s',
      'Use Variable-Width Font' => '使用变宽字体',
      'Use Plain Text: [Differential]' => '使用纯文本：[Differential]',
      '⚪ Ignore' => '⚪忽略',
      'Date Format' => '日期格式',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => '您的浏览器时区（%s）与您的个人资料时区（%s）不同。您可以忽略此冲突或者调整您的个人资料设置以匹配您的浏览器时区。',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => '此安装没有配置任何已激活的 MFA 提供者。在添加新的 MFA 因素之前，必须先配置并激活至少一个提供者。',
      'Select the format you prefer for editing and displaying time.' => '选择您喜欢的编辑和显示时间的格式。',
      'The conflict between your browser and profile timezone settings will be ignored.' => '您的浏览器和配置文件时区设置之间的冲突将被忽略。',
      'Terminate All Sessions' => '终止所有会话',
      'Your account is linked with all available providers.' => '你的帐户已被关联到所有可用的提供者上。',
      'Timezone Ignored Offset' => '时区忽略偏移',
      'External Accounts' => '外部账户',
      'Verification Email Sent' => '已发送验证邮件',
      'Add External Account' => '添加外部账户',
      'Mail Headers and Body' => '邮件标头与正文',
      'You haven\'t added any authentication factors to your account yet.' => '您还没有为您的账户添加任何认证因素。',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => '如要设置新密码，请从登录界面申请密码重置链接，然后按照提示操作。',
      'Multi-Factor Auth' => '多因素认证',
      'No allowed editor protocols are configured.' => '没有配置允许的编辑器协议。',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => '您可以在用户界面的文本框中选择使用等宽或者变宽字体。文本框用于编辑描述，撰写评论或其他事情。',
      'Disable Self Action Mail' => '禁用自身操作邮件',
      'Filetree Visible' => '文件树可见',
      'Edit Settings Configurations' => '编辑设置配置',
      'Monospaced Textareas' => '等宽文本区',
      'Really remove the authentication factor %s from your account?' => '确实要从你的账户移除认证因素 %s ？',
      'Mail Headers' => '邮件标题',
      'Old Password' => '旧密码',
      'Conpherence Column Minimize' => 'Conpherence 列最小化',
      'Display Preferences' => '显示参数设置',
      'Add Auth Factor' => '添加验证因素',
      'You don\'t have any active sessions.' => '您没有任何活跃会话。',
      'Changes saved.' => '已保存更改。',
      'Authentication factors must have a name to identify them.' => '认证因素必须有一个名称来识别它们。',
      'Choose the default behavior of the global search in the main menu.' => '在主菜单中选择全局搜索的默认行为。',
      'Hypertext Transfer Protocol' => 'HTTP',
      'Diffusion Blame' => 'Diffusion 追溯',
      'Choose which language you would like the UI to use.' => '选择您希望用户界面使用的语言。',
      'Outgoing mail is stamped with labels like `actor(alice)` which can be used to
    write client mail rules to organize mail. By default, these stamps are sent
    in an `X-Phabricator-Stamps` header.
    If you use a client which can not use headers to route mail (like Gmail),
    you can also include the stamps in the message body so mail rules based on
    body content can route messages.' => '发出的邮件会打上诸如`actor(alice)`的标签，可用于编写组织邮件的客户端邮件规则。
    默认情况下，这些被标签会在`X-Phabricator-Stamps`邮件头中发送。
    如果您使用的是不使用邮件头来路由邮件的客户端（例如Gmail），您也可以将这些标签
    包含在邮件正文中，以便基于正文内容的邮件规则可以路由邮件。',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => '由于在没有授予权限，已关闭询问发送桌面通知权限的对话框。将只会发送应用程序通知。',
      'Really delete address \'%s\'?' => '确定要删除地址“%s”？',
      'Another user already has this email.' => '另一个用户已经使用这个电子邮箱地址了。',
      'Change primary email address?' => '变更主电子邮箱地址？',
      'Monospaced Font' => '等宽字体',
      'HTML Email' => 'HTML 电子邮件',
      'Global Defaults' => '全域默认',
      'Conpherence Sound' => 'Conpherence 音频',
      'Enable "Re:" Prefix' => '启用“Re:”前缀',
      'Change Timezone' => '更改时区',
      'DarkConsole Visible' => 'DarkConsole 可见性',
      'Supported Protocol' => '支持的协议',
      'If you disable **Self Actions**, this server will not notify you about actions you take.' => '如果你禁用**自身操作**，此服务器不会把你自己执行的操作通知给你。',
      'You are adding too many email addresses to your account too quickly.' => '您过快地向您的账户添加了过多的电子邮箱地址。',
      'Your browser has not yet granted this server permission to send desktop notifications.' => '您的浏览器还没有授予此服务器发送桌面通知的权限。',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => '您可以在此调整**应用程序设置**以自定义您何时会收到电子邮件及通知。
    | 设置 | 影响
    | ------- | -------
    | 电子邮件 | 您将收到电子邮件和通知，但通知将被标记为“已读”。
    | 通知 | 您将只收到未读通知。
    | 忽略 | 您将不会收到任何通知。
    如果更新做出了多个更改（例如添加CC至任务、关闭它和添加一段评论），您将会收到任何更改配置中最强的通知。
    这些参数设置**只**应用到您连接的对象（例如，你是评审人的修订或 CC 您的任务））。要在其他对象创建时接收电子邮件通知，请配置[[ /herald/ | 传令规则 ]]。',
      'You must enter your current password.' => '您必须输入正确的密码。',
      'Europe: 28-02-2000' => '欧洲：28-02-2000',
      'The old password you entered is incorrect.' => '您输入的旧密码不正确。',
      '◐ Notify' => '◐通知',
      '%s updated his profile' => '%s 更新了他的个人资料',
      'You can change your date and time preferences in Settings.' => '您可以在设置中变更您的日期和时间参数设置。',
      'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => '你可以选择接收纯文本邮件而不是 HTML 邮件。纯文本邮件在某些客户端工作得更好。',
      'Timezone Calibrated' => '已校准时区',
      'Limited Translations' => '有限翻译',
      'Email Delivery' => '电子邮件投递',
      'Send Test Notification' => '发送测试通知',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => '等宽字体值 “%s” 不安全。您只能输入字母、数字、空格、逗号、逗号、句号、连字符、前斜线和双引号。',
      'Edit settings for your personal account.' => '编辑您的个人账户设置。',
      'Create Settings' => '创建设置',
      'Use Unicode Glyphs: ⚙' => '使用Unicode字形：⚙',
      'Editor Link' => '编辑器链接',
      'Silly Translations' => '愚蠢翻译',
      'Send Plain Text Email' => '发送纯文本邮件',
      'DarkConsole' => 'DarkConsole',
      'Filetree Width' => '文件树宽度',
      'Hypertext Transfer Protocol over SSL' => 'HTTPS',
      'Search Scope' => '搜索范围',
      'Email Preferences' => '电子邮件参数设置',
      'You don\'t have any active tokens.' => '你没有任何活跃令牌。',
      'Send another copy of the verification email to %s?' => '发送验证邮件的另一个副本到 %s？',
      '24 Hour, 14:34' => '24小时，14:34',
      'Disable "Re:" Prefix' => '禁用“Re:”前缀',
      'Sublime Text' => 'Sublime Text',
      'Conpherence Widget Pane Visible' => 'Conpherence 小工具面板可见',
      'Disable Email Notifications' => '禁用电子邮件通知',
      'Expired' => '已过期',
      'No Notifications' => '无通知',
      'Password Algorithms' => '密码算法',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => '你的密码当前使用了一个在当前安装中不再可用的算法进行了哈希。',
      'Replaced With' => '替换为',
      'Send HTML Email' => '发送 HTML 电子邮件',
      'Translation' => '翻译',
      'Settings %d' => '设置%s',
      'Time Format' => '时间格式',
      'Permission for desktop notifications was denied. Only application notifications will be sent.' => '桌面通知的权限被拒绝。只会发送应用程序通知。',
      'Send Notifications' => '发送通知',
      'Number' => '号码',
      'Permanently Linked' => '已永久关联',
      'Account Setup Issues' => '帐户安装设置问题',
      'Authentication Factors' => '认证因素',
      'Web and Desktop' => '网页与桌面',
      'Sunday' => '星期日',
      'US: 2/28/2000' => '美国：2/28/2000',
      'External Editor URI Variables' => '外部编辑器URI变量',
      'User Guide: Configuring an External Editor' => '用户指南：配置外部编辑器',
      'You have no account setup issues.' => '您没有帐户安装设置问题。',
      'Personal Settings' => '个人设置',
      'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => '某些应用程序在页面标题中使用unicode字形，以提供当前应用的紧凑实现。如果字形在您的系统不显示，您可以替换成纯文本。',
      'Web Only' => '仅限网页',
      'Disable Vary Subjects' => '禁用变换主题',
      'Developer/Test Translations' => '开发者/测试翻译',
      'User Preferences' => '用户参数设置',
      'No Sounds' => '无音频',
      'Create Global Defaults' => '创建全域默认值',
      'Enable Vary Subjects' => '启用变化主题',
      'TextMate' => 'TextMate',
      'No MFA Providers' => '无 MFA 提供者',
      'There is no known application setting with key "%s".' => '没有已知的关键字为“%s”的应用设置。',
      'Choose the default sound behavior for new Conpherence rooms.' => '选择新 Conpherence 房间的默认音频行为。',
      'Policy Favorites' => '策略收藏',
      'Conpherence Notifications' => 'Conpherence 通知',
      'Friday' => '星期五',
      'Timezone "%s" is not a valid timezone identifier.' => '时区“%s”不是一个有效的时区标识符。',
      'Select your local timezone.' => '选择您的本地时区。',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => '备注：从您的帐户移除一个邮件地址将使任何未完成的密码重置链接失效。',
      'Click "Save Preference" to persist these changes.' => '点击“保存设置”以持久化这些变更。',
      'Your browser has granted this server permission to send desktop notifications.' => '您的浏览器已授予此服务器发送桌面通知的权限。',
      'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => '此浏览器已拒绝授予此服务器发送桌面通知的权限。请参考您的浏览器设置/文档，了解如何清除此设置，然后重新访问此页面以获得许可。',
      'Week Starts On' => '周始于',
      'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => '当一个修订被更新后，此软件会尝试将旧版本的行内评论转发给新的变更。如果您希望将评论保留在一个位置则您可以禁用此行为。',
      'Remove Factor' => '移除因素',
      'Your account does not currently have a password set. You can choose a password by performing a password reset.' => '您的账户目前没有设置密码。您可以通过执行密码重置来选择密码。',
      'Disabled (an administrator has disabled login for this account provider).' => '已禁用 (管理员已经禁用了此帐户提供者的登录)。',
      'Send Another Verification Email?' => '发送另一封验证邮件？',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => '因为算法实现缺失，你的密码不能被使用或者更新。',
      'Verify' => '验证',
      'Edit Settings: %s' => '编辑设置：%s',
      'Add "Re:" Prefix' => '添加“Re:”前缀',
      'Desktop Only' => '仅限桌面端',
      'Account Settings' => '账户设置',
      'View Configuration' => '查看配置',
      'Supported Editor Protocols' => '支持的编辑器协议',
      'Add Authentication Factor' => '添加认证因素',
      'Choose which day a calendar week should begin on.' => '选择日历周应该从哪一天开始。',
      'Account Activity Logs' => '账户活动日志',
      'Date and Time' => '日期与时间',
      'Use Monospaced Font' => '使用等宽字体',
      'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => '可以升级存储的密码哈希的强度。要升级，请：注销并使用你的密码登录；或更改你的密码。',
      'Save Preferences' => '保存参数设置',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.
    Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:
    ```name="Example: TextMate on macOS"
    %s
    ```
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.
    See the tables below for a list of supported variables and protocols.' => '许多文本编辑器可以配置为`editor://`等特殊协议的URI处理程序。如果您已安装并配置了此类编辑器，一些应用程序可以生成链接，您可以点击此链接在本地打开文件。
    提供一个URI模式，用于在您的环境中构建外部编辑器URI。例如，如果您在macOS上使用TextMate，则以下模式可能适用于您的计算机：
    ```name="示例：在macOS上使用TextMate"
    %s
    ```
    有关编辑器配置的完整说明，请参阅**[[ %s | %s ]]**。
    请参阅下表了解受支持的变量和协议。',
      '⚫ Email' => '⚫电子邮件',
      'New Setting' => '新设置',
      'Pronoun' => '称谓',
      'Choose the default notification behavior for Conpherence rooms.' => '选择 Conpherence 房间的默认通知行为。',
      'DarkConsole Tab' => 'DarkConsole 选项卡',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => '备注：变更你的主要的邮件地址将使任何未完成的密码重置链接失效。',
      'Sessions and Logs' => '会话与日志',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => '您的主要电子邮件地址未经验证。您将无法收到电子邮件，直到您验证后才会收到电子邮件。',
      'Pinned Applications' => '固定的应用',
      'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => '此服务器可以将实时通知发送到您的互联网浏览器或桌面。选择您希望接收这些实时更新的地方。',
      'Revoke All' => '吊销所有',
      'No settings panel group with key "%s" exists!' => '不存在关键字为“%s”的设置面板组！',
      'Linked Accounts and Authentication' => '关联账户并认证',
      'Choose the pronoun you prefer.' => '选择您喜欢的称谓。',
      'Conflict Ignored' => '已忽略冲突',
      'This engine is used to edit settings.' => '此引擎是用来编辑设置的。',
      'Default (Unknown, "%s")' => '默认 (未知，“%s”)',
      'Primary Email Unverified' => '未验证主要电子邮件',
      'HiSec' => '高安全',
    );
  }

}
