<?php

final class PhabricatorConfigPt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt';
  }

  protected function getTranslations() {
    return array(
      'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => '',
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => '',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => '',
      'The request body that was sent began:' => '',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing applications or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => '',
      'The best available MYSQL implementation is now selected automatically.' => '',
      'Alternative URIs that can access this service.' => '',
      'This server is not configured in cluster mode.' => '',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    This software will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => '',
      'The current configuration has these %d value(s):' => '',
      'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => '',
      'The way VCS activity is attributed %s user accounts has changed.' => '',
      'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
    prefixed with "Re:". If you enable this option, this software will add "Re:" to
    the subject line of all mail which is expected to thread. If you\'ve set
    \'metamta.one-mail-per-recipient\', users can override this setting in their
    preferences.' => '',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => '',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => '',
      'Use Pygments to highlight code?' => '',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => '',
      'The keyring stores master encryption keys. For help with configuring a keyring
    and encryption, see **[[ %s | Configuring Encryption ]]**.' => '',
      'When email is sent, what format should the software use for users\' email
    addresses? Valid values are:
     - `short`: \'gwashington <gwashington@example.com>\'
     - `real`:  \'George Washington <gwashington@example.com>\'
     - `full`: \'gwashington (George Washington) <gwashington@example.com>\'
    The default is `full`.' => '',
      'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'A versão mínima suportada do Mercurial é 2.4, lançada em 2012.',
      'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => '',
      'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => '',
      'The \'%s\' extension is not installed. Without \'%s\', support, this software may not be able to determine the MIME types of uploaded files.' => '',
      'Stop this software from sending any email, etc.' => '',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => '',
      'Define one or more mail transmission services. For help with configuring
    mailers, see **[[ %s | %s ]]** in the documentation.' => '',
      'Configure services to run on a cluster of hosts.' => '',
      'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => '',
      'URI where this software is installed.' => 'URI onde este software está instalado.',
      'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
    \'[Commented]\' in them. This makes subjects more useful, but might break
    threading on some clients. If you\'ve set \'%s\', users can override this setting
    in their preferences.' => '',
      'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'O esquema do Elasticsearch foi alterado ou o Elasticsearch criou o índice automaticamente. Use o seguinte comando para reconstruir o índice.',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow this server to interact better with the database.
    This software will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => '',
      'Configure the UI, including colors.' => 'Configure a interface, incluindo cores.',
      'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => '',
      'Control how user names are rendered in mail.' => '',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'A opção de configuração \' %s \' é inválida. O URI NÃO deve ter um caminho, por exemplo, \' %s \' está OK, mas \' %s \' não. Este software deve ser instalado em um domínio inteiro; ele não pode ser instalado em um caminho.',
      'Define one or more fulltext storage services. Here you can configure which
    hosts will handle fulltext search queries and indexing. For help with
    configuring fulltext search clusters, see **[[ %s | %s ]]** in the
    documentation.' => 'Defina um ou mais serviços de armazenamento de texto completo. Aqui você pode configurar quais
    hosts irão lidar com consultas de pesquisa de texto completo e indexação. Para obter ajuda com
    configuração de clusters de pesquisa de texto completo, consulte **[[ %s | %s ]]** na
    documentação.',
      'Manage extensions.' => 'Gerenciar extensões.',
      'Storage engines are now discovered automatically at runtime.' => 'Os mecanismos de armazenamento agora são descobertos automaticamente em tempo de execução.',
      'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Este software parece estar instalado em uma instância EC2 muito pequena (da classe " %s ") com CPU expansível. Isto é fortemente desencorajado. Este software precisa regularmente de CPU, e essas instâncias são frequentemente sufocadas até a morte pela limitação da CPU. Use uma instância com CPU normal.',
      'Daemons no longer use PID files.' => 'Daemons não usam mais arquivos PID.',
      'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.' => 'Para ativar o log SSH, especifique um caminho. Este log pode fornecer informações mais detalhadas sobre o acesso SSH do que um log SSH normal (por exemplo, ele pode mostrar usuários logados, comandos e outros dados do aplicativo).
    Se não for definido, nenhum log será gravado .',
      'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'Este software enviou a si mesmo uma solicitação de teste com um caminho incomum, para testar se o seu servidor web está reescrevendo os caminhos corretamente. O caminho não foi transmitido corretamente.
    Este software enviou uma solicitação para o caminho " %s " e esperava que o servidor web decodificasse e reescrevesse esse caminho para receber uma solicitação de " %s ". No entanto, ele recebeu uma solicitação de " %s ".
    Verifique se suas regras de reescrita estão configuradas corretamente, seguindo as instruções na documentação. Se a codificação do caminho não estiver funcionando corretamente, você não conseguirá acessar arquivos com nomes incomuns nos repositórios, entre outros problemas.
    (Esse problema pode ser causado pela falta de um "B" em seu RewriteRule.)',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Se esses comandos não funcionarem, tente o Google. O processo de instalação de extensões PHP não é específico deste software e qualquer instrução que você encontrar para instalá-las em seu sistema deve funcionar. No Mac OS X, você pode tentar o Homebrew.',
      'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
    smaller messages. The actions themselves will still work properly.' => 'Você pode desativar as dicas em "AÇÕES DO MANIPULADOR DE RESPOSTA" se os usuários preferirem mensagens
    menores. As próprias ações ainda funcionarão corretamente.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
                \'installed on an entire domain; it can not be installed on a path.' => 'A opção de configuração \'%s\' é inválida. O URI NÃO deve ter um caminho, por exemplo, \'%s\' é OK, mas \'%s\' não é. Este software deve estar "instalado em um domínio inteiro; não pode ser instalado em um caminho.',
      'When a message is sent to multiple recipients (for example, several reviewers on
    a code review), it can either be delieverd as one email to everyone (e.g., "To:
    alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
    alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
    of each approach are:
      - One mail to everyone:
        - This violates policy controls. The body of the mail is generated without
          respect for object policies.
        - Recipients can see To/Cc at a glance.
        - If you use mailing lists, you won\'t get duplicate mail if you\'re
          a normal recipient and also Cc\'d on a mailing list.
        - Getting threading to work properly is harder, and probably requires
          making mail less useful by turning off options.
        - Sometimes people will "Reply All", which can send mail to too many
          recipients. This software will try not to send mail to users who already
          received a similar message, but can not prevent all stray email arising
          from "Reply All".
        - Not supported with a private reply-to address.
        - Mail messages are sent in the server default translation.
        - Mail that must be delivered over secure channels will leak the recipient
          list in the "To" and "Cc" headers.
      - One mail to each user:
        - Policy controls work correctly and are enforced per-user.
        - Recipients need to look in the mail body to see To/Cc.
        - If you use mailing lists, recipients may sometimes get duplicate
          mail.
        - Getting threading to work properly is easier, and threading settings
          can be customized by each user.
        - "Reply All" will never send extra mail to other users involved in the
          thread.
        - Required if private reply-to addresses are configured.
        - Mail messages are sent in the language of user preference.
    ' => '',
      'Global access controls now exist, see `%s`.' => 'Agora existem controles de acesso global, veja ` %s `.',
      'Unable to connect to MySQL!
    %s
    Make sure databases connection information and MySQL are correctly configured.' => '',
      'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Os cookies definidos para x.com também são enviados para y.x.com. Supondo que as instâncias estejam em execução nos dois domínios, isso criará uma colisão impedindo você de fazer login.',
      'You can provide a custom highlighter engine by extending class %s.' => 'Você pode fornecer um mecanismo de realce personalizado estendendo a classe %s .',
      'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Controla se o e-mail para vários destinatários é enviado criando uma mensagem com todos na linha "Para:" ou várias mensagens, cada uma com um único Recipeint na linha "Para:".',
      'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.
    If not set, no log will be written.' => 'Para ativar o log de erros SSH, especifique um caminho. Erros que ocorrem em contextos onde este software está atendendo solicitações SSH serão gravados neste log.
    Se não for definido, nenhum log será gravado.',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Quando você carrega um arquivo por meio de arrastar e soltar ou da API, os pedaços devem ser armazenados em buffer na memória antes de serem gravados no armazenamento permanente. Este servidor precisa de memória disponível para armazenar esses pedaços enquanto eles são carregados, mas o PHP está atualmente configurado para limitar severamente a memória disponível.
    Os processos PHP atualmente têm muito pouca memória livre disponível ( %s ). Para funcionar bem, os processos devem ter pelo menos %s .
    (Observe que o próprio aplicativo também deve caber na memória disponível, portanto, nem toda a memória abaixo do limite de memória está disponível para executar cargas de trabalho.)
    A maneira mais fácil de resolver esse problema é definir %s a %s na configuração do PHP, para desabilitar o limite de memória. Geralmente há pouco ou nenhum valor em usar esta opção para limitar a memória do processo.
    Você também pode aumentar o limite ou ignorar esse problema e aceitar que poderá encontrar problemas ao carregar arquivos grandes e ao processar solicitações grandes.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => '',
      'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'Para ativar o log de acesso HTTP, especifique um caminho. Este log é mais detalhado que os logs de acesso HTTP normais (por exemplo, ele pode mostrar usuários logados, controladores e outros dados de aplicativos).
    Se não for definido, nenhum log será gravado.',
      'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Por padrão, este software vincula nomes de objetos em campos de marcação ao objeto correspondente. Este regex pode ser usado para modificar este comportamento; nomes de objetos que correspondam a esse regex não serão vinculados.',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects this software, see %s.' => 'A versão de %s neste sistema está desatualizada e contém uma vulnerabilidade importante e amplamente divulgada (a vulnerabilidade "Shellshock").
    Atualize %s para uma versão corrigida.
    Para saber mais sobre como esse problema afeta este software, consulte %s .',
      'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'As contas recém-registradas podem ser colocadas em uma fila de aprovação manual para revisão administrativa ou ativadas automaticamente imediatamente. A fila de aprovação é habilitada por padrão porque oferece maior controle sobre quem pode registrar uma conta e acessar o servidor.
    Se sua instalação for totalmente pública, ou em uma VPN, ou os usuários só puderem se registrar com um confiável provedor como LDAP, ou você configurou o servidor de outra forma para evitar registro não autorizado, você pode desabilitar a fila para reduzir a sobrecarga administrativa.
    NOTA: Antes de desabilitar a fila, certifique-se de @{config:auth.email -domains} está configurado corretamente para sua instalação!',
      'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => '',
      'Controls whether email is sent "From" users.' => 'Controla se o email é enviado "De" usuários.',
      'PHP 7 Compatibility Information' => 'Informações de compatibilidade do PHP 7',
      'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => '',
      'You can rebuild repository identities while the server is running.' => 'Você pode reconstruir identidades de repositório enquanto o servidor está em execução.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.
    ' => 'Personalize a imagem do logotipo e o texto que aparece no cabeçalho principal do site:
     - **Imagem do logotipo**: carregue uma nova imagem de 80 x 80px para substituir o logotipo no cabeçalho do site.
     - **Marca nominativa**: Escolha um novo texto para exibir ao lado do logotipo. Por padrão, o cabeçalho exibe // %s //.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Esta opção de configuração é desconhecida. Pode estar escrita incorretamente ou já existia em uma versão anterior do software.',
      'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.
    %s' => 'O Elasticsearch está configurado (com a configuração %s ), mas foi encontrada uma exceção ao tentar testar o índice.
     %s',
      'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'O aplicativo Multímetro coleta amostras de desempenho. Você pode usar esses dados para ajudá-lo a entender o que o software está gastando tempo e recursos e para identificar padrões de acesso problemáticos.
    Esta opção controla a frequência com que a amostragem é ativada. Defina-o como algum número inteiro positivo N para amostrar a cada 1/N páginas.
    Para a maioria das instalações, o valor padrão (1 amostra por 1.000 páginas) deve coletar dados suficientes para serem úteis sem exigir muito armazenamento ou impactar significativamente o desempenho . Se estiver investigando problemas de desempenho, você poderá ajustar a taxa para coletar mais dados.',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => '',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'O mecanismo "InnoDB" não está disponível no MySQL (no host " %s "). Habilite o InnoDB em sua configuração do MySQL.
    (Se você já criou tabelas, o MySQL usou incorretamente algum outro mecanismo para criá-las. Você precisa convertê-las ou descartá-las e reinicializá-las.)',
      'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Este software está atualmente configurado para servir uploads de usuários diretamente do mesmo domínio que outros conteúdos. Este é um risco de segurança.
    Configure um CDN (ou domínio de arquivo alternativo) para eliminar esse risco. Usar um CDN também melhorará o desempenho. Consulte o guia abaixo para obter instruções.',
      'Syntax highlighting a supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'O realce de sintaxe é compatível com alguns idiomas por padrão, mas você pode instalar o Pygments (uma ferramenta de realce de sintaxe de terceiros) para fornecer suporte para muitos outros idiomas.
    Para instalar o Pygments, visite [[ http:// pigmentos.org | pygments.org ]] e siga as instruções de download e instalação.
    Depois que o Pygments estiver instalado, ative esta opção (`pygments.enabled`) para usar o Pygments ao destacar o código-fonte.
     Depois de instalar e ativar o Pygments, o código-fonte recém-criado (como diffs e pastes) deve ser destacado corretamente. Pode ser necessário limpar os caches para destacar o código-fonte existente anteriormente. Para obter instruções sobre como gerenciar caches, consulte [[ %s | Gerenciando Caches ]].',
      'The namespace that databases should use.' => 'O espaço de nomes que as bases de dados devem usar.',
      'Constant' => 'Constante',
      'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'Este software enviou para si mesmo uma solicitação de teste que foi compactada com "Content-Encoding: gzip", mas recebeu bytes diferentes dos enviados.',
      'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'A opção de configuração " %s " não é reconhecida. Pode estar escrito incorretamente ou pode ter existido em uma versão mais antiga do software. Não tem efeito e deve ser corrigido ou excluído.',
      'You can rebuild the search index while the server is running.' => 'Você pode reconstruir o índice de pesquisa enquanto o servidor está em execução.',
      'Daemons Are Not Running' => 'Daemons não estão em execução',
      'The request body that was received began:' => 'O corpo da solicitação recebido começou:',
      'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalmente, este software emite redirecionamentos HTTP após um POST bem-sucedido. Isso pode dificultar a depuração de coisas que acontecem durante o processamento do POST, porque as informações de serviço e de criação de perfil são perdidas. Ao definir esta opção de configuração, uma página intersticial será mostrada em vez de redirecionar automaticamente, permitindo examinar informações de serviço e perfil. Isso também torna a UX péssima, então você só deve habilitá-la durante a depuração.',
      'By default, this software generates unique reply-to addresses and sends a
    separate email to each recipient when you enable reply handling. This is more
    secure than using "From" to establish user identity, but can mean users may
    receive multiple emails when they are on mailing lists. Instead, you can use a
    single, non-unique reply to address and authenticate users based on the "From"
    address by setting this to \'true\'. This trades away a little bit of security
    for convenience, but it\'s reasonable in many installs. Object interactions are
    still protected using hashes in the single public email address, so objects
    can not be replied to blindly.' => '',
      'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole é uma ferramenta de desenvolvimento e criação de perfil integrada à interface da web. Você deve deixá-lo desabilitado, a menos que esteja desenvolvendo ou depurando %s .
    Depois de ativar o DarkConsole para a instalação, **você precisa habilitá-lo para sua conta antes que ele realmente apareça nas páginas.** Você pode fazer isso em Configurações > Configurações do desenvolvedor.
    DarkConsole expõe dados potencialmente confidenciais (como consultas, rastreamentos de pilha e configuração), portanto, geralmente você não deve ativá-los na produção.',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Sua configuração não especifica um fuso horário do servidor. Você pode definir o valor de configuração do PHP \' %s \' ou o valor de configuração %s \' %s \' para especificar um.',
      'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Este servidor tem %s disponível em %s , mas o binário saiu com um código de erro quando executado como %s . Verifique se ele está instalado corretamente.',
      'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'O correio de transação agora é sempre enviado com "Precedência: em massa" para melhorar a capacidade de entrega.',
      'Without \'%s\', this software can not test for the availability of other binaries.' => 'Sem \' %s \', este software não pode testar a disponibilidade de outros binários.',
      'Do not install this software on an instance class with burstable CPU.' => 'Não instale este software em uma classe de instância com CPU expansível.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.
    If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Não foi possível determinar o número da versão de " %s ". Normalmente, isso significa que o programa alterou sua string de formato de versão recentemente e este software ainda não sabe como analisar a nova, mas pode indicar que você tem um binário muito antigo (ou quebrado).
    Porque podemos Se você não determinar o número da versão, as verificações das versões mínimas e sabidamente inválidas serão ignoradas, portanto, poderemos não conseguir detectar um binário incompatível.
    Você pode resolver esse problema atualizando este servidor, já que um mais recente A versão do software provavelmente será capaz de analisar a string da versão mais recente.
    Se a atualização do software não resolver o problema, você pode relatar o problema ao upstream para que possamos ajustar o analisador.
    ! N!Se você tem certeza de que possui uma versão recente do " %s " instalada e funcionando corretamente, geralmente é seguro ignorar este aviso.',
      'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Defina o URI onde este software está instalado. Definir isso melhora a segurança, evitando que cookies sejam definidos em outros domínios e permite que daemons enviem e-mails com links que possuem o domínio correto.',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => '',
      'Set a string this software should use to prefix cookie names.' => 'Defina uma string que este software deve usar para prefixar nomes de cookies.',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure clustering, note that this setting is ignored by intracluster requests.' => 'Se o servidor web responder a solicitações HTTP e HTTPS, mas você quiser que os usuários se conectem apenas com HTTPS, você pode definir isso como `true` para fazer com que este serviço redirecione solicitações HTTP para HTTPS.
    Normalmente, você deve apenas configure seu servidor para não aceitar tráfego HTTP, mas esta configuração pode ser útil se você usou HTTP originalmente e agora mudou para HTTPS, mas não deseja quebrar links antigos, ou se seu servidor web estiver atrás de um balanceador de carga que encerra conexões HTTPS e você não pode razoavelmente configurar um comportamento mais granular lá.
    IMPORTANTE: Uma solicitação é identificada como HTTP ou HTTPS examinando a variável ` %s ` do PHP. Se você executar Apache/mod_php, isso provavelmente será configurado corretamente para você automaticamente, mas se você executar como CGI/FCGI (por exemplo, através de nginx ou lighttpd), você precisará configurar seu servidor web para que ele passe o valor corretamente com base no tipo de conexão.
    Se você configurar o clustering, observe que essa configuração será ignorada pelas solicitações intracluster.',
      'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Este software enviou para si mesmo uma solicitação de teste com um parâmetro HTTP GET, mas o parâmetro não foi transmitido. Enviou " %s " com valor " %s ", recebeu " %s " com valor " %s ".
    Seu servidor web está configurado incorretamente e grande parte deste software não funcionará até que o problema seja corrigido.
    ! N!(Esse problema pode ser causado pela falta de um "QSA" em seu RewriteRule.)',
      'Enable the debugging console.' => 'Habilite o console de depuração.',
      'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'A versão mínima suportada do Git no servidor é %s , que foi lançada em %s . Em versões mais antigas, o servidor Git pode não conseguir escapar de argumentos com o operador "--". Observação: seus usuários não precisam de uma versão específica do Git.',
      'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Este software enviou para si mesmo uma solicitação de teste com o cabeçalho "X-Setup-SelfCheck" e esperava obter de volta uma resposta JSON válida. Em vez disso, a resposta começa:
     %s 
    Algo está configurado incorretamente ou distorcendo as respostas.',
      'The timezone this software should use by default.' => 'O fuso horário que este software deve usar por padrão.',
      'By default, this software allows users to add multi-factor authentication to
    their accounts, but does not require it. By enabling this option, you can
    force all users to add at least one authentication factor before they can use
    their accounts.
    Administrators can query a list of users who do not have MFA configured in
    {nav People}:
      - **[[ %s | %s ]]**' => 'Por padrão, este software permite que os usuários adicionem autenticação multifator ao
    suas contas, mas não exige isso. Ao ativar esta opção, você pode
    forçar todos os usuários a adicionar pelo menos um fator de autenticação antes de poderem usar
    suas contas.
    Os administradores podem consultar uma lista de usuários que não possuem MFA configurado no
    {nav People}:
      - **[[ %s | %s]]**',
      'The \'%s\' extension is not installed. Without \'%s\', support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'A extensão \' %s \' não está instalada. Sem suporte \' %s \', este servidor não será capaz de processar ou redimensionar imagens (por exemplo, para gerar miniaturas). Instale ou ative \' %s \'.',
      'Reply hints are no longer shown in mail.' => 'As indicações de resposta já não são apresentadas por correio.',
      'If you want to use a single mailbox for reply mail, you can use this
    and set a common prefix for generated reply addresses. It will
    make use of the fact that a mail-address such as
    `devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
    user\'s mailbox. Set this to the left part of the email address and it will be
    prepended to all generated reply addresses.
    For example, if you want to use `devtools@example.com`, this should be set
    to `devtools`.' => '',
      'Typeahead strategies are now managed automatically.' => 'As estratégias de digitação antecipada agora são gerenciadas automaticamente.',
      'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'Este software pode destacar alguns idiomas por padrão, mas instalar e ativar o Pygments (uma ferramenta de realce de terceiros) adicionará realce de sintaxe para muitos outros idiomas. 
    Para obter instruções sobre como instalar e ativar o Pygments, consulte a opção de configuração %s .
    Se não quiser instalar o Pygments, você pode ignorar esse problema.',
      'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.
    Use %s to start daemons. See %s for more information.' => 'Os daemons não estão em execução, o processamento em segundo plano (incluindo envio de e-mail, reconstrução de índices de pesquisa, importação de commits, limpeza de dados antigos e execução de compilações) não pode ser executado.
    Use %s para iniciar daemons. Consulte %s para obter mais informações.',
      'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".' => 'A opção "feed.http-hooks" é desaproveitada em favor de Webhooks. Esta opção será removida numa versão futura do software. Pode configurar os Webhooks no Herald.Para resolver este problema, remova todos os URIs do "feed.http-hooks".',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => '',
      'If you enable `%s`, this software uses "From" to authenticate users. You can
    additionally enable this setting to try to authenticate with \'Reply-To\'. Note
    that this is completely spoofable and insecure (any user can set any \'Reply-To\'
    address) but depending on the nature of your install or other deliverability
    conditions this might be okay. Generally, you can\'t do much more by spoofing
    Reply-To than be annoying (you can write but not read content). But this is
    still **COMPLETELY INSECURE**.' => '',
      'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Defina um cluster fornecendo uma lista de permissões de endereços de host que fazem parte do cluster.
    Os hosts nesta lista de permissões têm poderes especiais. Esses hosts têm permissão para violar as regras de segurança e a configuração incorreta dessa lista pode tornar sua instalação menos segura. Para obter mais informações, consulte **[[ %s | %s ]]**.
    Defina uma lista de blocos CIDR que colocam na lista de permissões todos os hosts no cluster e nenhum host adicional. Veja os exemplos abaixo para obter detalhes.
    Quando endereços de cluster são definidos, os hosts também rejeitarão solicitações para interfaces que não estejam na lista de permissões.',
      'Configure %s' => 'Configurar %s',
      'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normalmente, as páginas são perfiladas apenas quando explicitamente solicitadas através do DarkConsole. No entanto, pode ser útil fazer um perfil de algumas páginas automaticamente. O que é? Esta opção é definida como um número inteiro positivo N para perfil de 1 / N páginas automaticamente. Por exemplo, a configuração de 1 irá fazer a cada página um perfil, enquanto a configuração para 1000 irá fazer a 1 página por 1000 solicitações (ou seja, 0,1%% das solicitações). O que é? Como a elaboração de perfis é lenta e gera muitos dados, você deve definir isso em 0 na produção (para desativar) ou em um grande número (para coletar algumas amostras, se você estiver interessado em ter alguns dados para olhar eventualmente). No desenvolvimento, pode ser útil definir-o em 1 para depurar problemas de desempenho. O que é? NOTA: Deve instalar XHProf para que o perfil funcione.',
      'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Nenhum REMOTE_ADDR está disponível, portanto este servidor não pode determinar o endereço de origem das solicitações. Isso impedirá que o software execute verificações de segurança importantes. Na maioria das vezes, isso significa que você cometeu um erro no script do preâmbulo. Consulte a documentação ( %s ) e verifique se o script está escrito corretamente.',
      'Available search engines are now automatically discovered at runtime.' => 'Os mecanismos de pesquisa disponíveis agora são descobertos automaticamente em tempo de execução.',
      'When a user takes an action which generates an email notification (like
    commenting on a Differential revision), the "From" address can either be set
    to the user\'s email address (like "alincoln@logcabin.com") or the
    "metamta.defualt-address" address.
    The user experience is generally better if the user\'s real address is used as
    the "From" header value, since the messages are easier to organize when they
    appear in mail clients, but this will only work if the server is authorized to
    send email on behalf of the "From" domain. Practically, this means:
      - If you are doing an install for Example Corp and all the users will have
        corporate @corp.example.com addresses and any hosts this software is running
        on are authorized to send email from corp.example.com, you can enable this
        to make the user experience a little better.
      - If you are doing an install for an open source project and your users will
        be registering via third-party services and/or using personal email
        addresses, you probably should not enable this or all of your outgoing
        email might vanish into SFP blackholes.
      - If your install is anything else, you\'re safer leaving this off, at least
        initially, since the risk in turning it on is that your outgoing mail will
        never arrive.' => '',
      'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'A variável ambiental %s está vazia. Este servidor não será capaz de executar alguns comandos.',
      'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => '',
      'Partitioning and replication are now managed in primary configuration.' => 'O particionamento e a replicação agora são gerenciados na configuração primária.',
      'You have \'%s\' enabled in your PHP configuration, but this software will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'Você tem \'%s\' habilitado na configuração do PHP, mas este software não será executado no modo seguro. O modo seguro foi deprecado no PHP 5.3 e removido no PHP 5.4. O que é? Desativar o modo seguro para continuar.',
      'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Após instalar novas extensões PHP, <strong>reinicie tudo para que as alterações tenham efeito</strong> . Para obter ajuda para reiniciar tudo, consulte %s na documentação.',
      'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Por padrão, este software serve arquivos do mesmo domínio a partir do qual o aplicativo é servido. Isso é conveniente, mas apresenta um risco de segurança.
    Você deve configurar um CDN ou um domínio de arquivo alternativo para mitigar esse risco. Configurar um CDN também melhorará o desempenho. Veja [[ %s | %s ]] para obter instruções.',
      'Default address used as a "From" or "To" email address when an address is
    required but no meaningful address is available.
    If you configure inbound mail, you generally do not need to set this:
    the software will automatically generate and use a suitable mailbox on the
    inbound mail domain.
    Otherwise, this option should be configured to point at a valid mailbox which
    discards all mail sent to it. If you point it at an invalid mailbox, mail sent
    by the software and some mail sent by users will bounce. If you point it at a
    real user mailbox, that user will get a lot of mail they don\'t want.
    For further guidance, see **[[ %s | %s ]]** in the documentation.' => '',
      'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'Você deve iniciar os daemons para enviar e-mail, reconstruir índices de pesquisa e realizar outros processamentos de fundo.',
      'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Após editar a configuração do PHP, <strong>reinicie tudo para que as alterações tenham efeito</strong> . Para obter ajuda para reiniciar tudo, consulte %s na documentação.',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'O binário \' %s \' não foi encontrado. Defina a variável de ambiente %s do servidor web para incluir o diretório onde ele reside ou adicione esse diretório a \' %s \' na configuração.',
      'You can disable the email preference link in emails if users prefer smaller
    emails.' => 'Você pode desativar o link de preferência de e-mail em e-mails se os usuários preferirem e-mails menores
    .',
      'Global customization of monospaced fonts is no longer supported.' => 'A personalização global de fontes monoespaçadas não é mais suportada.',
      'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Os endereços de resposta podem ser privados (mais seguros) ou públicos (o que funciona melhor com listas de e-mail).',
      'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'Este servidor recebeu um cabeçalho HTTP "X-Mod-Pagespeed" ou "X-Page-Speed" nesta solicitação, o que indica que você ativou "mod_pagespeed" neste servidor. Este módulo não é compatível com este software. Você deve desabilitar o módulo.',
      'Customized settings for applications.' => 'Configurações personalizadas para aplicativos.',
      'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
    messages.' => 'Você pode desativar os rodapés "Para:" e "Cc:" no e-mail se os usuários preferirem mensagens
     menores.',
      'Allow a single mailbox to be used for all replies.' => 'Permita que uma única caixa de correio seja usada para todas as respostas.',
      'This option allows you to stop this service from sending data to most external
    services: it will disable email, SMS, repository mirroring, remote builds,
    Doorkeeper writes, and webhooks.
    This option is intended to allow an instance to be exported, copied, imported,
    and run in a test environment without impacting users. For example, if you are
    migrating to new hardware, you could perform a test migration first with this
    flag set, make sure things work, and then do a production cutover later with
    higher confidence and less disruption.
    Without making use of this flag to silence the temporary test environment,
    users would receive duplicate email during the time the test instance and old
    production instance were both in operation.' => 'Esta opção permite que você impeça que este serviço envie dados para a maioria dos
    serviços externos: desabilitará e-mail, SMS, espelhamento de repositório, compilações remotas,
    Doorkeeper writes e webhooks.
    Esta opção é destina-se a permitir que uma instância seja exportada, copiada, importada
    e executada em um ambiente de teste sem impactar os usuários. Por exemplo, se você estiver
    migrando para um novo hardware, poderá realizar uma migração de teste primeiro com este sinalizador
    definido, certificar-se de que tudo funciona e, em seguida, fazer uma transição de produção mais tarde com
    maior confiança e menos interrupções .
    Sem usar esse sinalizador para silenciar o ambiente de teste temporário,
    usuários receberiam e-mails duplicados durante o tempo em que a instância de teste e a antiga
    instância de produção estivessem em operação.',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access this server, like "http://devtools.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'O URI base para esta instalação não está configurado e os principais recursos não funcionarão corretamente até que você o configure.
    Você deve definir o URI base como o URI que usará para acessar este servidor, como "http:/ /devtools.example.com/".
    Inclua o protocolo (http ou https), nome de domínio e número da porta se você estiver usando uma porta diferente de 80 (http) ou 443 (https).!N !
    Com base nesta solicitação, parece que a configuração correta é:
     %s 
    Para configurar o URI base, execute o comando mostrado abaixo.',
      'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'O mapeamento dos usuários de VCS para os usuários de %s mudou e deve ser reconstruído.',
      'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => '',
      'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Este software enviou a si mesmo uma solicitação com "Accept-Encoding: gzip", mas recebeu uma resposta descompactada.
    Isso pode indicar que seu servidor web não está configurado para compactar respostas. Nesse caso, você deve ativar a compactação. A compactação pode melhorar drasticamente o desempenho, especialmente para clientes com menos largura de banda.',
      'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Se você tiver vários ambientes %s (como um ambiente de desenvolvimento/preparação e um ambiente de produção), defina o URI do ambiente de produção aqui para que e-mails e outros URIs duráveis sejam sempre gerados com links apontando para o ambiente de produção. Se não definido, o padrão é ` %s . A maioria das instalações não precisa definir esta opção.',
      'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Os usuários podem fazer solicitações a outros serviços a partir de hosts de serviço em algumas circunstâncias (por exemplo, criando um repositório com uma URL remota).
    Isso pode representar uma vulnerabilidade de segurança se os serviços na mesma sub-rede aceitarem comandos ou revelarem informações privadas por meio de HTTP GET não autenticado, com base no endereço IP de origem. Em particular, todos os hosts no EC2 têm acesso a tal serviço.
    Esta opção define uma lista de netblocks para os quais as solicitações nunca serão emitidas. Geralmente, você deve listar todo o espaço IP privado aqui.',
      'Adapter class to use to transmit mail to the MTA. The default uses
    PHPMailerLite, which will invoke "sendmail". This is appropriate if sendmail
    actually works on your host, but if you haven\'t configured mail it may not be so
    great. A number of other mailers are available (e.g., SES, SendGrid, SMTP,
    custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'Classe de adaptador para a transmissão de correio para a MTA. O padrão usa PHPMailerLite, que irá invocar "envio de correio". Isto é apropriado se o sendmail realmente funciona no seu host, mas se você não configurou o mail pode não ser tão bom. São disponíveis vários outros correio (por exemplo, SES, SendGrid, SMTP, correio personalizado). Esta opção é desaproveitada em favor dos "cluster.mailers".',
      'Provide a list of notification servers to enable real-time notifications.
    For help setting up notification servers, see **[[ %s | %s ]]** in the
    documentation.' => 'Forneça uma lista de servidores de notificação para ativar notificações em tempo real.
    Para obter ajuda na configuração de servidores de notificação, consulte **[[ %s | %s ]]** na
    documentação.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'O PHP está atualmente configurado para honrar solicitações de qualquer servidor MySQL ao qual ele se conecta para o conteúdo de qualquer arquivo local.
    Este recurso suporta consultas MySQL "LOAD DATA LOCAL INFILE", mas permite que um servidor MySQL malicioso tenha acesso de leitura ao disco local: o servidor pode pedir ao cliente para enviar o conteúdo de qualquer arquivo local, e o cliente obedecerá.
    Embora normalmente seja difícil para um invasor convencer este software a se conectar a um servidor MySQL malicioso, você deve desabilitar esta opção: esta capacidade é desnecessária e inerentemente perigosa.
    Para desabilitar esta opção, defina: %s',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => '',
      'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.
    Disable this setting to continue.' => 'Seu servidor está configurado com \' %s \', o que impede que este software abra arquivos aos quais requer acesso.
    Desative esta configuração para continuar.',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'Esta solicitação incluía um cabeçalho "Host" inválido, com valor " %s ". Os cabeçalhos do host devem conter um ponto ("."), como "example.com". Isso é necessário para que alguns navegadores possam definir cookies.
    Isso pode significar que o URI base está configurado incorretamente. Você deve fornecer este software a partir de um URI base com um ponto (como "https://devtools.example.com"), não de um domínio simples (como "https://devtools/"). Se você estiver tentando usar um domínio simples, altere sua configuração para usar um domínio completo com um ponto.
    Isso também pode significar que seu servidor web (ou algum outro dispositivo de rede, como um balanceador de carga) está deturpando o cabeçalho "Host" ou você está usando uma ferramenta ou biblioteca para emitir uma solicitação manualmente e definir o cabeçalho "Host" errado.
    As solicitações devem incluir um cabeçalho "Host" válido.',
      'Sets the default color scheme.' => 'Define o esquema de cores padrão.',
      'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => '',
      'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Este software enviou a si mesmo uma solicitação de teste e esperava receber de volta uma resposta JSON simples. Ele recebeu uma resposta JSON, mas a resposta tinha espaços em branco extras no início ou no final.
    Isso geralmente significa que você editou um arquivo e deixou caracteres de espaço em branco antes da tag de abertura %s ou após uma tag de fechamento %s . Remova qualquer espaço em branco inicial e prefira omitir tags de fechamento.',
      'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'Normalmente você pode instalar uma extensão PHP usando %s , %s ou %s . Um nome de pacote comum é %s . Experimente comandos como estes:',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'AVISO: Esta é uma opção muito avançada e útil apenas para provedores de hospedagem que executam clusters multilocatários.
    Se você fornecer um identificador de instância aqui (normalmente injetando nele um ` %s `), o servidor passará para subprocessos e commit hooks na variável ambiental ` %s `.',
      'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Sem \' %s \', este software não será capaz de gerar ou renderizar diferenças em múltiplas aplicações.',
      'Send as %s' => 'Enviar como %s',
      'Setup Error' => 'Erro de configuração',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'O diretório para repositórios locais ( %s ) não existe ou não pode ser lido pelo servidor web. Este software usa este diretório para armazenar informações sobre repositórios. Se este diretório não existir, crie-o:
     %s 
    Se este diretório existir, torne-o legível para o servidor web. Você também pode editar a configuração abaixo para usar outro diretório.',
      'These alternative URIs will be able to access \'normal\' pages on your this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Esses URIs alternativos poderão acessar páginas \'normais\' nesta instalação. Outros recursos como OAuth não funcionarão. O principal caso de uso para isso é mover instalações entre domínios.',
      'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => '',
    );
  }

}
