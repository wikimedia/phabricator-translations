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
      'Page Titles' => '页面标题',
      'Personal Account Settings' => '个人账户设置',
      'ISO 8601: 2000-02-28' => 'ISO 8601：2000-02-28',
      'Global Default Settings' => '全域默认设置',
      'Self Actions' => '自我操作',
      'Choose which language you would like the Phabricator UI to use.' => '选择您想在Phabricator界面使用的语言。',
      'Email Notifications' => '电子邮件通知',
      'Diff Preferences' => '差异参数设置',
      'Saturday' => '星期六',
      'Change Primary Address' => '更改主要地址',
      'Show Older Inlines' => '行内显示更旧内容',
      'Select the format you prefer for editing dates.' => '选择您喜欢的编辑日期格式。',
      'On Small Screens' => '在小屏幕上',
      'Enable Email Notifications' => '启用电子邮件通知',
      'Edit Multiple Files' => '编辑多个文件',
      'Edit global default settings for all users.' => '编辑所有用户的全域默认设置。',
      'Adjust Timezone' => '调整时区',
      '%s updated her profile' => '%s更新了她的个人资料',
      'Extra Settings' => '附加设置',
      'Enable Self Action Mail' => '启动自我操作邮件',
      'You haven\'t added any SSH Public Keys.' => '您并未添加任何SSH公钥。',
      'All Messages' => '所有消息',
      'Save Preference' => '保存参数设置',
      'Email Format' => '电子邮件格式',
      'Edit Authentication Factor' => '编辑身份验证因素',
      'Edit Global Settings' => '编辑全域设置',
      'Ignore Conflict' => '忽略冲突',
      '%s updated their profile' => '%s更新了它的个人资料',
      'Current Setting' => '当前设置',
      '⚪ Ignore' => '⚪忽略',
      'Date Format' => '日期格式',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => '您的浏览器时区（%s）与您的个人资料时区（%s）不同。您可以忽略此冲突或者调整您的个人资料设置以匹配您的浏览器时区。',
      'Select the format you prefer for editing and displaying time.' => '选择您喜欢的编辑和显示时间格式。',
      'Timezone Ignored Offset' => '忽略偏移的时区',
      'External Accounts' => '外部账户',
      'Disable Self Action Mail' => '禁用自我操作邮件',
      'Edit Settings Configurations' => '编辑设置配置',
      'Old Password' => '旧密码',
      'Display Preferences' => '显示参数设置',
      'Add Auth Factor' => '添加验证因素',
      'Changes saved.' => '已保存更改。',
      'Diffusion Blame' => '传播责任',
      'Really delete address \'%s\'?' => '真的要删除地址“%s”么？',
      'HTML Email' => 'HTML电子邮件',
      'Global Defaults' => '全域默认值',
      'Enable "Re:" Prefix' => '启用“Re:”前缀',
      'Change Timezone' => '更改时区',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => '您可以在此调整**应用程序设置**以自动以您是否会收到电子邮件及通知。
    | 设置 | 影响
    | ------- | -------
    | 电子邮件 | 您将收到电子邮件和通知，但通知将标记为“已读”。
    | 通知 | 您将只收到未读通知。
    | 忽略 | 您将不会收到任何通知。
    如果更新做出了多个更改（例如添加CC至任务、关闭它和添加一段评论）您将收到最强通知，任何更改配置都会应用。
    这些参数设置**只**应用到您连接的对象（例如您作为修订者的修订，或将您CC到的任务）。要接收创建的其他对象的电子邮件提醒，请配置[[ /herald/ | 传令规则 ]]。',
      'Europe: 28-02-2000' => '欧洲：28-02-2000',
      'Enable Filetree' => '启用文件树',
      '◐ Notify' => '◐通知',
      '%s updated his profile' => '%s更新了他的个人资料',
      'Timezone Calibrated' => '时区已校准',
      'Edit Settings (%s)' => '编辑设置（%s）',
      'Edit settings for your personal account.' => '编辑您的个人账户设置。',
      'Create Settings' => '创建设置',
      'Use Unicode Glyphs: ⚙' => '使用Unicode字形：⚙',
      'Editor Link' => '编辑者链接',
      'Silly Translations' => '愚蠢的翻译',
      'Search Scope' => '搜索范围',
      'Email Preferences' => '电子邮件参数设置',
      '24 Hour, 14:34' => '24小时，14:34',
      'Disable "Re:" Prefix' => '禁用“Re:”前缀',
      'Disable Email Notifications' => '禁用电子邮件通知',
      'Phabricator uses unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator在页面标题中使用unicode字形，以提供当前应用的紧凑实现。如果字形在您的系统不显示，您可以替换成纯文本。',
      'Expired' => '已过期',
      'No Notifications' => '无通知',
      'Primary' => '主要',
      'Send HTML Email' => '发送HTML电子邮件',
      'Translation' => '翻译',
      'UTC+%d' => 'UTC+%s',
      'Settings %d' => '设置%s',
      'Time Format' => '时间格式',
      'Send Notifications' => '发送通知',
      'Permanently Linked' => '已永久链接',
      'Sunday' => '星期日',
      'US: 2/28/2000' => '美国：2/28/2000',
      'User Guide: Configuring an External Editor' => '用户知道：配置外部编辑器',
      'Personal Settings' => '个人设置',
      'Web Only' => '仅限Web',
      'Developer/Test Translations' => '开发者/测试翻译',
      'User Preferences' => '用户参数设置',
      'No Sounds' => '无声音',
      'Create Global Defaults' => '创建全域默认值',
      'Enable Vary Subjects' => '启用变化主题',
      'Unknown Account ("%s")' => '未知账户（“%s”）',
      'Policy Favorites' => '方针爱好',
      'Conpherence Notifications' => 'Conpherence通知',
      'Friday' => '星期五',
      'Select your local timezone.' => '选择您的本地时区。',
      'Week Starts On' => '星期开始日',
      'Verify' => '验证',
      'Add "Re:" Prefix' => '添加“Re:”前缀',
      'Desktop Only' => '仅限桌面端',
      'Account Settings' => '账户设置',
      'Choose which day a calendar week should begin on.' => '选择日历上一周应开始的日子。',
      'Account Activity Logs' => '账户活动日志',
      'Date and Time' => '日期和时间',
      'Save Preferences' => '保存参数设置',
      '⚫ Email' => '⚫电子邮件',
      'New Setting' => '新设置',
      'Pronoun' => '代词',
      'Sessions and Logs' => '会话和日志',
      'Revoke All' => '撤回全部',
      'No settings panel group with key "%s" exists!' => '不存在关键字为“%s”的设置面板组！',
      'UTC-%d' => 'UTC-%s',
      'Choose the pronoun you prefer.' => '选择您喜欢的代词。',
      'Conflict Ignored' => '冲突已忽略',
      'Default (Unknown, "%s")' => '默认（未知，“%s”）',
      'Primary Email Unverified' => '主要电子邮件未验证',
    );
  }

}
