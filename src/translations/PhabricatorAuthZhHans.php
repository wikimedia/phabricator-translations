<?php

final class PhabricatorAuthZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '%s enabled login.' => '%s启用了登录。',
      'SSH Key Actions' => 'SSH公钥操作',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => '添加PKCS8公钥文件至缓存是非常危险的。如果PKCS8文件已经编码了与指定公钥不同的公钥，那么攻击者可以使用它获得未经授权的访问能力。
    一般情况下，您只应该在ssh注册机损坏，且不便修复的开发环境中，并且只在您确定理解风险的情况下使用此操作。您永远不能缓存不是您自己生成的PKCS8文件。',
      'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => '此提供者（“%s”）已存在，并且您不能添加多于一个它的示例。您可以编辑现有提供者，或者您可以选择不同的提供者。',
      'Algorithm' => '算法',
      'Revoke Tokens' => '撤除令牌',
      'Unlink "%s" Account?' => '取消链接“%s”账户？',
      'Setup Admin Account' => '配置管理员账户',
      'Must Verify Email' => '必须验证电子邮件',
      'SSH Key Type' => 'SSH公钥类型',
      '%s enabled auto login.' => '%s启用了自动登录。',
      'Invalid OAuth Access Token' => '无效的OAuth访问令牌',
      'Verify Email' => '验证电子邮件',
      'Account is already registered or linked.' => '账户已注册或链接。',
      'LDAP Port' => 'LDAP端口',
      'TOTP Code' => 'TOTP代码',
      'OAuth Consumer Key' => 'OAuth消费者密钥',
      'LDAP Username: ' => 'LDAP用户名：',
      'Allow Login:' => '允许登录：',
      'Wrong Account' => '错误账户',
      'SECURITY WARNING' => '安全警告',
      'Specify an OAuth client id with "--id".' => '用“--id”指定OAuth客户端id。',
      'Strength' => '优势',
      'Google' => 'Google',
      'Auth' => '验证',
      'Asana' => 'Asana',
      'No Account Linked' => '没有链接账户',
      'Slack' => '松弛',
      'Public SSH Key' => '公共SSH密钥',
      'Log In (%s)' => '登录（%s）',
      'Twitter' => '推特',
      'Not Installed' => '未安装',
      'OAuth App Secret' => 'OAuth应用密钥',
      'Link LDAP Account' => '链接LDAP账户',
      'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '要配置Slack OAuth，在此创建新的应用程序：
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    当创建您的应用程序时，请使用这些设置：
      - **重定向URI：**将此设置为：“%s”
    在完成配置后，复制**客户端ID**和**客户端密钥**至上方字段。（您也需要首先点击“新密钥”来配置客户端密钥。）',
      '"%s" Account' => '“%s”账户',
      'Log Out?' => '注销？',
      'OAuth App ID' => 'OAuth应用ID',
      'OAuth client "%s" is already trusted.' => 'OAuth客户端“%s”已被信任。',
      '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `%s`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `%s`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**第2步，共2步**：在此步骤中，您将会配置JIRA。
    **创建一个JIRA应用程序**：Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `%s`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `%s`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.',
      'Normal Security Restored' => '已恢复一般安全性',
      'Log In' => '登录',
      'The external service ("%s") you just authenticated with is not configured to allow logins on this server. An administrator may have recently disabled it.' => '您刚刚进行身份验证的外部服务（“%s”）未配置为允许在此服务器上登录。管理员最近可能禁用了它。',
      '**Step 2 of 2 - Configure OAuth Server**
    To configure OAuth, create a new application here:
    %s/oauthserver/client/create/
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**第2/2步——配置OAuth服务器**
    要配置OAuth，请在此创建新的应用程序：
    %s/oauthserver/client/create/
    当创建您的应用程序时，请使用这些设置：
      - **重定向URI：**将此设置为“%s”
    在完成配置后，复制**客户端ID**和**客户端密钥**至上方字段。（您也需要首先点击“新密钥”来生成客户端密钥。）',
      '%s Account' => '%s账户',
    );
  }

}
