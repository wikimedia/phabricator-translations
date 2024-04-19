<?php

final class PhabricatorAlmanacPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Manage public and private networks.' => 'Gerenciar redes públicas e privadas.',
      'Add Interface' => 'Adicionar interface',
      'Edit Namespace' => 'Editar espaço nominal',
      'This service has not been bound to any device interfaces yet.' => 'Este serviço ainda não foi vinculado a nenhuma interface de dispositivo.',
      'Browse Services' => 'Procurar serviços',
      'Control who can create new named services and devices.' => 'Controlar quem pode criar novos serviços e dispositivos nomeados.',
      'Edit Network' => 'Editar rede',
      'Edit Service' => 'Editar serviço',
      'Network' => 'Rede',
      'Create Network' => 'Criar rede',
      'Device Interfaces' => 'Interfaces de dispositivos',
      'Edit Device' => 'Editar dispositivo',
      'All Networks' => 'Todas as redes',
      '%s created this service.' => '%s criou este serviço.',
      '%s renamed this service from %s to %s.' => '%s renomeou esse serviço de %s para %s.',
      'Almanac Console' => 'Console Almanaque',
      'Type a service type name...' => 'Digite um nome de tipo de serviço...',
      'Can Create Services' => 'Pode criar serviços',
      'Service Directory' => 'Diretório de serviços',
      '%s removed the interface for this binding.' => '%s removeu a interface para essa ligação.',
      'Service Type' => 'Tipo de serviço',
      '%s created this network.' => '%s criou esta rede.',
      'All Namespaces' => 'Todos os espaços nominais',
      'Namespaces' => 'Espaços nominais',
      'Create and update services, and map them to interfaces on devices.' => 'Criar e atualizar serviços e mapear para interfaces em dispositivos.',
      'All Services' => 'Todos os serviços',
      '%s set the interface for this binding to %s.' => '%s define a interface para essa ligação como %s.',
      'All Devices' => 'Todos os dispositivos',
      '%s created this namespace.' => '%s criou este espaço nominal.',
      'Create an inventory of physical and virtual hosts and devices.' => 'Criar um inventário de hospedeiro e dispositivos físicos e virtuais.',
      'Service type.' => 'Tipo de serviço.',
    );
  }

}
