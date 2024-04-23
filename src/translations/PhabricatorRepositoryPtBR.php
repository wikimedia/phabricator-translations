<?php

final class PhabricatorRepositoryPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'No importing commits found.' => 'Nenhum commiting de importação encontrado.',
      'The selected repository short name is already in use by another repository. Choose a unique short name.' => 'O nome abreviado do repositório selecionado já está sendo usado por outro repositório. Escolha um nome curto exclusivo.',
      '%s set the copy time limit for this repository to %s seconds.' => '%s definiu o limite de tempo de cópia deste repositório para %s segundos.',
      '%s set the filesize limit for this repository to %s bytes.' => '%s define o limite de tamanho do arquivo para este repositório em %s bytes.',
      'These repositories will be thawed:' => 'Esses repositórios serão descongelados:',
      '%s set the encoding for this repository to %s.' => '%s definiu a codificação deste repositório para %s.',
      'Specified version control system must be a VCS recognized by this software. Valid systems are: %s.' => 'O sistema de controle de versão especificado deve ser um VCS reconhecido pelo Phabricator. Os sistemas válidos são: %s.',
      'Oversized' => 'Superdimensionado',
      '%s changed the copy time limit for this repository from %s seconds to %s seconds.' => '%s alterou o limite de tempo de cópia para este repositório de %s segundos para %s segundos.',
      'Cluster repository ("%s") is out of sync on this node ("%s").' => 'O repositório de cluster ("%s") está fora de sincronia neste nó ("%s").',
      'TAGS' => 'ETIQUETAS',
      '%s removed %s as the default branch.' => '%s removeu %s como o ramo padrão.',
      '%s changed the filesize limit for this repository from %s bytes to %s bytes.' => '%s alterou o limite de tamanho de arquivo para este repositório de %s bytes para %s bytes.',
      '%s set the repository "Import Only" path to %s.' => '%s definiu o caminho do repositório "Importar apenas" para %s.',
      'Specify a list of repositories or "--all-repositories", but not both.' => 'Especifique uma lista de repositórios ou "--all-repositories", mas não ambos.',
      'Short Names' => 'Nomes curtos',
      '%s removed the touch limit (%s paths) for this repository.' => '%s removeu o limite de toque (%s caminhos) para este repositório.',
      '(This is a write request.)' => '(Este é um pedido de gravação.)',
      '%s changed the callsign for this repository from %s to %s.' => '%s mudou o indicativo deste repositório de %s para %s.',
      'Touches Too Many Paths' => 'Toca muitos caminhos',
      '%s changed the "Import Only" path from %s to %s.' => '%s mudou o caminho "Importar apenas" de %s para %s.',
      'CHANGES TO REPOSITORY DESCRIPTION' => 'MUDANÇAS À DESCRIÇÃO REPOSITORA',
      'Demote a device (or all devices in a service) discarding unsynchronized changes. Clears stuck write locks and recovers from lost leaders.' => 'Rebaixar um dispositivo (ou todos os dispositivos em um serviço) descartando alterações não sincronizadas. Limpa bloqueado bloqueios de gravação e recupera de líderes perdidos.',
      'Repositories must have a name.' => 'Repositórios devem ter um nome.',
      'COMMITS' => 'COMPONENTES',
      '%s removed %s as the staging area for this repository.' => '%s removeu %s como a área de preparação para este repositório.',
      '%s removed the callsign (%s) for this repository.' => '%s removeu o indicativo (%s) para este repositório.',
      'tag' => 'etiqueta',
      'Rewrite' => 'Reescrever',
      '%s changed the touch limit for this repository from %s paths to %s paths.' => '%s alterou o limite de toque para este repositório de %s para %s.',
      '%s set the callsign for this repository to %s.' => '%s definiu o indicativo deste repositório para %s.',
      '%s changed the repository encoding from %s to %s.' => '%s mudou a codificação do repositório de %s para %s.',
      '%s changed the assigned user for this identity from %s to %s.' => '%s mudou o usuário atribuído para essa identidade de %s para %s.',
      'Information about the commit author.' => 'Informações sobre o autor da submissão.',
      '%s set the default branch to %s.' => '%s definiu a ramificação padrão como %s.',
      'The commit message.' => 'A mensagem de validação.',
      '%s changed the default branch from %s to %s.' => '%s mudou o ramo padrão de %s para %s.',
      'No device or service named "%s" exists.' => 'Nenhum dispositivo ou serviço chamado "%s" existe.',
      '%s removed the filesize limit (%s bytes) for this repository.' => '%s removeu o limite do tamanho do arquivo (%s bytes) para este repositório.',
      'Hosted' => 'Hospedado',
      'A repository\'s sync events are visible to users who can see the repository.' => 'Os eventos de sincronização de um repositório são visíveis para os usuários que podem ver o repositório.',
      'The Almanac Service that hosts this repository, if the repository is clustered.' => 'O Serviço Almanaque que hospeda esse repositório, se o repositório estiver em cluster.',
      'All Repositories' => 'Todos os repositórios',
      '%s set the short name of this repository to %s.' => '%s definiu o nome abreviado deste repositório como %s.',
      '%s removed %s as the "Import Only" path.' => '%s removeu %s como o caminho "Importar apenas".',
      '%s renamed this repository from %s to %s.' => '%s renomeou este repositório de %s para %s.',
      'Apply the promotion or demotion to all repositories hosted on the device.' => 'Aplique a promoção ou rebaixamento a todos os repositórios hospedados no dispositivo.',
      '%s changed the push policy of this repository from %s to %s.' => '%s mudou a política de envio deste repositório de %s para %s.',
      'Repository "%s" has no active binding to device "%s". Only actively bound devices can be promoted.' => 'O repositório "%s" não tem ligação ativa para o dispositivo "%s". Somente dispositivos ativamente vinculados podem ser promovidos.',
      'Sync Event %d' => 'Evento de Sincronização %s',
      'Select repositories to affect by providing a list of repositories or using the "--all-repositories" flag.' => 'Selecione os repositórios a serem afetados, fornecendo uma lista de repositórios ou usando a marcação "--all-repositories".',
      'Service "%s" is not bound to any devices.' => 'O serviço "%s" não está vinculado a nenhum dispositivo.',
      'There are no repositories on the selected device or service.' => 'Não há repositórios no dispositivo ou serviço selecionado.',
      'Repository status "%s" is not valid. Valid statuses are: %s.' => 'O status do repositório "%s" não é válido. Os status válidos são: %s.',
      '%s changed the staging area for this repository from %s to %s.' => '%s mudou a área de preparação para este repositório de %s para %s.',
      '(This is a read request.)' => '(Este é um pedido de leitura.)',
      'Rejected: Touches Too Many Paths' => 'Rejeitado: Toca muitos caminhos',
      'Unable to parse touch limit, specify a positive number of paths.' => 'Não é possível analisar o limite de toque, especifique um número positivo de caminhos.',
      'Information about the current audit status.' => 'Informações sobre o status de auditoria atual.',
      'Sync Event' => 'Sincronizar evento',
      'tag:' => 'etiqueta:',
      'Unable to parse filesize limit: %s' => 'Não é possível analisar o limite de tamanho do arquivo: %s',
      'The repository this commit belongs to.' => 'O repositório a que essa validação pertence.',
      'You can not attach audit authority for a user with no PHID.' => 'Você não pode anexar autoridade de auditoria para um usuário sem PHID.',
      '%s removed the %s encoding configured for this repository.' => '%s removeu a codificação de %s configurada para este repositório.',
      'Changes to this URI will be observed and pulled.' => 'O Phabricator observará alterações neste URI e copiá-las.',
      'Callsigns' => 'Indicativos',
      'Repository "%s" has versions on inactive devices. Demote (or reactivate) these devices before promoting a new leader: %s.' => 'Repositório "%s" tem versões em dispositivos inativos. Rebaixe (ou reative) esses dispositivos antes de promover um novo líder: %s.',
      '%s updated the description for this repository.' => '%s atualizou a descrição deste repositório.',
      'Do not prompt for confirmation.' => 'Não solicite confirmação.',
      'Information about the committer.' => 'Informações sobre a validação.',
      'Rejected: Oversized File' => 'Rejeitado: arquivo superdimensionado',
      'This URI will be hidden from users.' => 'Este URI será oculto dos usuários.',
      'Unable to parse copy time limit, specify a positive number of seconds.' => 'Não é possível analisar o limite de tempo de cópia, especifique um número positivo de segundos.',
    );
  }

}