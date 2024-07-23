<?php

final class PhabricatorCorePt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt';
  }

  protected function getTranslations() {
    return array(
      'Database "%s" is unknown. This script can only dump databases known to the current version of this software. Valid databases are: %s.' => '',
      'The callsign of the repository.' => '',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => '',
      'Upload Picture' => '',
      'Assigned to Me' => '',
      'This server is currently in read-only mode. Use --force to override this mode.' => '',
      'This server is configured as "%s", but you are using the domain name "%s" to access a page which is trying to set a cookie. Access this service on the configured primary domain or a configured alternate domain. Cookies will not be set on other domains for security reasons.' => '',
      'This server thinks you are using %s, but your client is convinced that it is using %s. This is a serious misconfiguration with subtle, but significant, consequences.' => 'Este servidor pensa que você está usando %s , mas seu cliente está convencido de que está usando %s . Esta é uma configuração errada',
      'September' => 'Setembro',
      'This server is in read-only mode.' => '',
      'This server is in read-only mode (major interruption).' => '',
      'Before running storage upgrades, you should take down the web interface and stop any running daemons (you can disable this warning with %s).' => '',
      'No permission to run "SHOW SLAVE STATUS". Grant this user "REPLICATION CLIENT" permission to allow this server to monitor replica health.' => '',
      'If you are developing %s, these errors usually indicate that your schema specifications do not agree with the schemata your code actually builds.' => 'Se você estiver desenvolvendo %s , esses erros geralmente indicam que as especificações do seu esquema não concordam com os esquemas que seu código realmente constrói.',
      'Set a \'%s\' in your configuration!' => 'Defina um \' %s \' na sua configuração!',
      'Flood the queue with test tasks. This command is intended for use during development and debugging.' => 'Inunde a fila com tarefas de teste. Este comando deve ser usado durante o desenvolvimento e a depuração.',
      'This server is not configured to serve cluster requests. Set `cluster.addresses` in the configuration to whitelist cluster hosts before sending requests that use a cluster authentication mechanism.' => 'Este servidor não está configurado para atender solicitações de cluster. Defina `cluster.addresses` na configuração para colocar hosts de cluster na lista de permissões antes de enviar solicitações que usam um mecanismo de autenticação de cluster.',
      'Unexpected object type provided as `action` - %s' => 'Tipo de objeto inesperado fornecido como `action` - %s',
      'Data can not be exported to Excel because the PHPExcel library is not
    installed. This software component is required to create Excel files.
    You can install PHPExcel from GitHub:
    > https://github.com/PHPOffice/PHPExcel
    Briefly:
      - Clone that repository somewhere on the sever
        (like `/path/to/example/PHPExcel`).
      - Update your PHP `%s` setting (in `php.ini`) to include the PHPExcel
        `Classes` directory (like `/path/to/example/PHPExcel/Classes`).' => '',
      'Welcome to %s' => 'Bem-vindo ao %s',
      'November' => 'Novembro',
      'Some of these errors are caused by access control problems. The user you are connecting with does not have permission to see all of the database or tables that this software uses. You need to GRANT the user more permission, or use a different user.' => '',
      'List databases.' => '',
      'This server is configured with multiple master databases, but master "%s" is missing a "partition" configuration key to define application partitioning.' => '',
      'March' => 'Março',
      'Query class ("%s") did not return the correct type of object from "newResultObject()" (expected a subclass of "PhabricatorLiskDAO", found "%s"). Return an object of the expected type (this is common), or implement a custom "loadPage()" method (this is unusual in modern code).' => '',
      'If you are not developing %s itself, report this issue to the upstream.' => '',
      'Grant Permission' => 'Conceder permissão',
      'S|M|T|W|T|F|S' => 'D|S|T|Q|Q|S|S',
      'February' => 'Fevereiro',
      'Remarkup text.' => 'Texto de observação.',
      'December' => 'Dezembro',
      'Extensions' => 'Extensões',
      'Content source type "%s" is unknown.' => 'O tipo de fonte de conteúdo " %s " é desconhecido.',
      'August' => 'Agosto',
      '%s changed the status of %s from %s to %s.' => '',
      'Unable to establish a write-mode connection (to application database "%s") because this server is in read-only mode. Whatever you are trying to do does not function correctly in read-only mode.' => '',
      'Assigned: %s' => 'Atribuída: %s',
      'Download File' => 'Descarregar Ficheiro',
      'Pause' => 'Pausar',
      'Configure' => 'Configurar',
      'January' => 'Janeiro',
      'All Tasks' => 'Todas as tarefas',
      'Welcome to %s!' => 'Bem-vindo ao %s!',
      'You have an old version of MySQL (older than 5.5) which does not support the utf8mb4 character set. We strongly recommend upgrading to 5.5 or newer.
    If you apply adjustments now and later update MySQL to 5.5 or newer, you\'ll need to apply adjustments again (and they will take a long time).
    You can exit this workflow, update MySQL now, and then run this workflow again. This is recommended, but may cause a lot of downtime right now.
    You can exit this workflow, continue using this software without applying adjustments, update MySQL at a later date, and then run this workflow again. This is also a good approach, and will let you delay downtime until later.
    You can proceed with this workflow, and then optionally update MySQL at a later date. After you do, you\'ll need to apply adjustments again.
    For more information, see "Managing Storage Adjustments" in the documentation.' => '',
      'SUCCESS' => 'SUCESSO',
      'October' => 'Outubro',
      'This server is in read-only mode (unreachable master).' => 'Este servidor está em modo de leitura (master inacessível).',
      'Attempting to compare a password saved with the "%s" hash. No such hasher is known.' => '',
      'The PHID of the repository.' => 'O PHID do repositório.',
      '[%s] %s' => '[ %s ] %s',
      'April' => 'Abril',
      'Download' => 'Download',
      'June' => 'Junho',
      'No Builds' => '',
      'Data can not be exported to Excel because the "zip" PHP extension is not
    installed. Consult the setup issue in the Config application for guidance on
    installing the extension.' => '',
      'Generate a new quickstart database dump. This command is mostly useful for internal development.' => '',
      'Database "%s" is specified more than once. Specify each database at most once.' => '',
      '%s has invited you to join %s.' => '%s convidou você para participar %s .',
      'This service is configured in cluster mode and the address this request was received on ("%s") is not whitelisted as a cluster address.' => 'Este serviço está configurado no modo cluster e o endereço em que esta solicitação foi recebida (" %s ") não está na lista de permissões como endereço de cluster.',
      'Dump only tables in the named database (or databases, if the flag is repeated). Specify database names without the namespace prefix (that is: use "differential", not "phabricator_differential").' => '',
      '%s attached %s file(s): %s.' => '%s anexado(s) %s arquivo(s): %s .',
      'You have surplus schemata (extra tables or columns which this software does not expect). For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => '',
      'May' => 'Maio',
      'This service is configured to operate in cluster mode, but %s is not defined in the request context. Your webserver configuration needs to forward %s to PHP so the software can reject requests received on external interfaces.' => 'Este serviço está configurado para operar em modo cluster, mas %s não está definido no contexto da solicitação. A configuração do seu servidor web precisa encaminhar %s para PHP para que o software possa rejeitar solicitações recebidas em interfaces externas.',
      'Download Data' => 'Descarregar Dados',
      'This server is configured in cluster mode, with multiple database hosts. Use "--host" to specify which host you want to operate on.' => '',
      'Upload New Picture' => 'Carregar Imagem Nova',
      'Nothing Uploaded' => 'Não Foi Carregado Nada',
      'Upload File' => 'Carregar Ficheiro',
      'July' => 'Julho',
      'You must choose a file when uploading a new profile picture.' => 'Tem de escolher um ficheiro ao carregar uma imagem de perfil nova.',
      'Are you completely sure you really want to permanently destroy all storage for %s data on host "%s"? This operation can not be undone and your data will not be recoverable if you proceed.' => 'Você tem certeza absoluta de que deseja destruir permanentemente todo o armazenamento de dados de %s no host " %s "? Esta operação não pode ser desfeita e seus dados não serão recuperáveis se você prosseguir.',
      'This server is in read-only mode (no writable database is configured).' => '',
      'Referenced' => 'Referenciadas',
      'Javelin Linter' => 'Analisador de Javelin',
      'A JSON-encoded object.' => 'Um objeto codificado em JSON.',
      'Advanced Search' => 'Pesquisa avançada',
      'Disabled' => 'Desativado',
      'Install' => 'Instalar',
      'Some of these errors are caused by surplus schemata (extra tables or columns which this software does not expect). These are not serious. For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'Alguns desses erros são causados por esquemas excedentes (tabelas ou colunas extras que este software não espera). Isso não é sério. Para obter informações sobre como resolver esses problemas, consulte a seção "Esquemas excedentes" no artigo "Gerenciando ajustes de armazenamento" na documentação.',
    );
  }

}
