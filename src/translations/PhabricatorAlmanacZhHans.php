<?php

final class PhabricatorAlmanacZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Specify a public key to trust with --id.' => '指定要信任的公钥，格式“--id”。',
      'Name of the service.' => '服务名称。',
      'Installing device %s...' => '安装设备%s...',
      'Namespace' => '命名空间',
      'Add Property' => '添加属性',
      'Builtin Property' => '内置属性',
      'Device %d' => '设备%s',
      'Add Interface' => '添加界面',
      'Create Service' => '创建服务',
      'Search for devices with given statuses.' => '通过以给信息状态来搜索设备。',
      'Device status information.' => '设备状态信息。',
      'Device Disabled' => '设备已禁用。',
      'Unknown Almanac Device Status ("%s")' => '位置年鉴设备状态（“%s”）',
      '%s changed the status of this device from %s to %s.' => '%s将设备的状态从%s改变成了%s',
      'True if device is disabled.' => '正确如果设备已经被禁用。',
      'Device status.' => '设备状态。',
      'Active Devices' => '开启的设备',
    );
  }

}
