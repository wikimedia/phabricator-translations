<?php

final class PhabricatorConfigZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Array containing list of uninstalled applications.' => '包含未安装应用列表的数组。',
      'Client Server' => '客户端服务器',
      'Column/Key' => '列/关键字',
      '%s / %s' => '%s / %s',
      'Table' => '表格',
      'Ignore Setup Issue' => '忽略配置问题',
      'Applications application' => '应用程序应用',
      'No Email Preferences Link' => '没有电子邮件参数设置链接',
      'Marked activity "%s" as completed.' => '将活动“%s”标记为已完成。',
      'Usage' => '用法',
      '%s deleted %s (again?).' => '%s（再次？）删除了%s。',
      'Access log format.' => '访问日志格式。',
      'Access log location.' => '访问日志位置。',
      'Short' => '短',
      'Full' => '完整',
      'Use Normal HTTP Redirects' => '使用一般HTTP重定向',
      'Access Denied' => '访问被拒绝',
      '(%s%s) %s' => '（%s%s）%s',
      'Unknown \'%s\' Version' => '未知“%s”版本',
      'Purge Caches' => '刷新缓存',
      'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.
    If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.
    However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.
    In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.
    To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.
    You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => '此选项可以帮助调试花费太长时间（超过30秒）渲染的页面。
    如果一个页面渲染较慢（但少于30秒），最佳寻找慢速原因的工具通常则是黑暗控制台（DarkConsole）服务调用分析器和XHProf。
    然而，如果一个请求需要很长的时间来恢复，某些组件（如Apache，Nginx，或PHP本身）可能中止的请求之前完成。这可以防止您使用分析工具详细地了解页面性能。
    在这种情况下，您可以使用此选项强制页面在较小的秒数之后终止（例如，10），并转储有用的堆栈跟踪。这可以提供有关页面挂起的有用信息。
    若要使用此选项，请将其设置为一个小数目（如10），然后重新加载挂页。页面应该在10秒后退出，并给您一个堆栈跟踪。
    当您完成相关工作时，您应该将其关闭（设置为0）。将他保持打开会对所有请求产生小数量的花销，即便他们不会触发时间限制。',
      'MySQL May Run Slowly' => 'MySQL可能运行较慢',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => '此选项已移除，您可以使用控制面板来提供首页自定义。参见T11533获取更多详情。',
      'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => '要启用HTTP访问日志，请指定路径。此日志比普通HTTP访问日志更详细（例如它可以显示登录用户、控制者和其他应用数据）。
    如果未设置，那么将不会写入日志。',
      'Done. Migrated %d keys.' => '完成。已迁移%s个密钥。',
      'Disable access log.' => '禁用访问日志。',
      'Controls whether Phabricator allows the suppression of email from "maintenance" users.' => '控制Phabricator是否允许阻止来自“维护”用户的电子邮件。',
      'Activity "%s" is not currently marked as required, so there is no need to complete it.' => '活动“%s”当前并未标记为必需，因此不需要完成它。',
      'Determines whether Wikimedia Commons videos get embedded.' => '决定是否嵌入维基共享资源的视频。',
      'SSH log location.' => 'SSH日志位置。',
    );
  }

}
