<?php

final class PhabricatorSystemPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'O Phabricator está atualmente configurado com nenhum banco de dados gravável ("master"), portanto, não pode gravar novas informações em lugar algum. O Phabricator será executado no modo somente leitura até que um administrador reconfigure-o com um banco de dados gravável.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'Este sistema não possui a extensão "%s" instalada, portanto, as codificações de caracteres não são suportadas. Instale "%s" para ativar o suporte.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Este modo está ativo porque está ativado na opção de configuração "%s".',
      'Panic!' => 'Pânico!',
      'No Writable Database' => 'Nenhum banco de dados gravável',
      'Destroying %s **%s**...
    ' => 'Destruindo %s **%s**...',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'Objeto "%s" não pode ser destruído (não implementa %s).',
      'No Encoding Support' => 'Nenhum suporte de codificação',
      'No such object "%s" exists!' => 'Nenhum objeto desse tipo "%s" existe!',
      'Severed From Master' => 'Separado do mestre',
      'Engine: Destruction' => 'Motor: Destruição',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Essa solicitação foi atendida a partir de um banco de dados de réplica. Os bancos de dados de réplica podem ficar para trás do mestre, portanto, atividades muito recentes podem não se refletir na interface do usuário. Esses dados serão restaurados se o banco de dados mestre for restaurado, mas pode ter sido perdido se o banco de dados mestre tiver sido reduzido a uma pilha de cinzas.',
      'Permanently destroy objects.' => 'Destrua permanentemente objetos.',
      'Choose a syntax highlighting to use.' => 'Escolha um destaque de sintaxe para usar.',
      '%d / hour' => '%s / hora',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => 'Isso pode acontecer se houver uma anomalia de rede temporária no lado do servidor, como radiação cósmica ou fantasmas assustadores. Se essa falha foi causada por uma interrupção transitória de serviço, o Phabricator se recuperará momentaneamente.',
      'Rate Limiting Actions' => 'Ações limitadoras de taxa',
      'Highlighting' => 'Realçar',
      'Unable to Reach Master' => 'Não é possível alcançar o mestre',
      'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'O Phabricator não pôde se conectar ao banco de dados gravável ("master") ao manipular essa solicitação e se degradou automaticamente no modo somente leitura.',
      'Permanently destroyed %s object(s).' => 'Destruiu permanentemente %s objeto(s).',
      'Choose Encoding' => 'Escolha a codificação',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'A destruição de objetos pode fazer com que objetos relacionados parem de funcionar e pode deixar referências dispersas a objetos que não existem mais. Na maioria dos casos, é muito melhor desabilitar ou arquivar objetos em vez de destruí-los. Esse risco é maior ao excluir objetos complexos ou altamente conectados, como repositórios, projetos e usuários.
    Essas arestas esfarrapadas são uma conseqüência esperada da destruição de objetos, e o upstream do Phabricator não ajudará a consertá-los. É altamente recomendável desativar ou arquivar objetos.',
      'IMPORTANT' => 'IMPORTANTE',
      'Quite Unsettling' => 'Muito inquietante',
      'Destruction Logs' => 'Registro de Destruição',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Isso provavelmente indica uma configuração incorreta grave ou uma interrupção importante no serviço.',
      'Destroying objects...' => 'Destruindo objetos...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => 'O modo somente leitura foi ativado pela ação explícita de um administrador humano, para que você possa obter mais informações sobre o motivo de ter sido ativado, afastando sua cadeira da mesa e gritando "Ei! Por que o Phabricator está no modo somente leitura??!" usando sua voz externa mais alta.',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Este modo está ativo porque nenhum banco de dados tem uma função "%s" na opção de configuração "%s".',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Isso também pode indicar que uma falha mais séria ocorreu. Se essa interrupção não resolver por conta própria, o Phabricator detectará em breve a interrupção persistente e se degradará no modo somente leitura até que o problema seja resolvido.',
      'Select Character Encoding' => 'Selecionar a codificação de caracteres',
      'Select Syntax Highlighting' => 'Selecione realce de sintaxe',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'OS DADOS SERÃO DESTRUÍDOS PERMANENTEMENTE',
      'Choose Highlighting' => 'Escolha o destaque',
      'An administrator has placed Phabricator into read-only mode.' => 'Um administrador colocou o Phabricator no modo somente leitura.',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Objetos serão permanentemente destruídos. Não há como desfazer essa operação ou recuperar esses dados, a menos que você faça backups externos.',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'O Phabricator tem sido consistentemente incapaz de atingir o banco de dados gravável ("master") ao processar solicitações recentes.',
      'Aborted, your objects are safe.' => 'Abortado, seus objetos estão seguros.',
      'No Object URI' => 'Nenhum URI de objeto',
      'Show a log of permanently destroyed objects.' => 'Mostrar um registro de objetos destruídos permanentemente.',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'A extensão do mecanismo de cache "%s" retornou o objeto (da classe "%s") sem PHID.',
      'System' => 'Sistema',
      'You are performing too many actions too quickly.' => 'Você está realizando muitas ações muito rapidamente.',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'O Phabricator periodicamente tentará novamente a conexão e recuperará uma vez que o serviço seja restaurado. A maioria das causas de interrupção persistente do serviço exigirá intervenção administrativa para restaurar o serviço.',
      'Choose a text encoding to use.' => 'Escolha uma codificação de texto para usar.',
      'These %s object(s) will be destroyed forever:' => 'Estes %s objeto(s) serão destruídos para sempre:',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'No modo somente leitura, você pode ler informações existentes, mas não poderá editar objetos ou criar novos objetos até que esse modo seja desativado.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Este modo pode ser usado para executar manutenção temporária, configuração de teste ou arquivar uma instalação permanentemente.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'EXCLUINDO OBJETOS DE TEMPOS QUEBRAM COISAS',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'A extensão do mecanismo de cache "%s" não retornou uma lista de objetos vinculados.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Isso geralmente ocorre quando um administrador está trabalhando ativamente na correção de um problema de configuração ou implantação temporária.',
      '%d / minute' => '%s / minuto',
      'Destroy objects without prompting.' => 'Destrua objetos sem avisar.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'A taxa máxima permitida para esta ação é de %s. Você está realizando ações a uma taxa de %s.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Você tem certeza absoluta de que deseja destruir esses objetos de %s?',
      'Administrative Read-Only Mode' => 'Modo Somente Leitura Administrativo',
      '%d / second' => '%s / segundo',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Como administrador, você pode revisar as informações de status no painel de controle do %s. Isso pode fornecer mais informações sobre o estado atual das coisas.',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Embora isso possa ser o resultado de uma configuração incorreta ou erro operacional, esse também é o estado que você alcança se um meteoro apagou recentemente um centro de dados.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'O objeto "%s" existe, mas não tem um URI para redirecionar.',
      'Specify one or more objects to destroy.' => 'Especifique um ou mais objetos para destruir.',
    );
  }

}
