<?php

final class PhabricatorAlmanacFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Service PHID.' => 'PHID de service.',
      'Specify a public key to trust with --id.' => 'Spécifier une clé publique de confiance avec --id.',
      'Transaction value when setting Almanac properties must be a map with property names as keys.' => 'La valeur de transaction en fixant les propriétés de Almanac doit être une table associative avec les noms de propriété en clé.',
      'Name of the service.' => 'Nom du service.',
      'Service "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Le service « %s » n’est pas reconnu, est restreint, ou vous n’avez pas le droit de le modifier.',
      'Installing device %s...' => 'Installation de l’appareil %s…',
      'Namespace' => 'Espace de noms',
      'Add Property' => 'Ajouter la propriété',
      'Map of property names to values.' => 'Cartographie des noms de propriété et des valeurs.',
      'Builtin Property' => 'Propriété interne',
      'Enable this binding?' => 'Autoriser ce lien ?',
      'ID of the key to revoke trust for.' => 'ID de la clé pour laquelle révoquer la confiance.',
      'Name of the network.' => 'Nom du réseau.',
      'This is a cluster service.' => 'C’est un service de grappe.',
      'Manage public and private networks.' => 'Gestion des réseaux publics et privés.',
      'Apply transactions to create a new binding or edit an existing one.' => 'Appliquer les transactions pour créer une nouvelle liaison ou en modifier une existante.',
      'You can not bind a service which you do not have permission to edit.' => 'Vous ne pouvez pas lier un service que vous n’avez pas le droit de modifier.',
      'Network for the interface.' => 'Réseau pour l’interface.',
      'To view a binding, you must also be able to view its device and interface.' => 'Pour afficher un lien, vous devez aussi pouvoir afficher son appareil et son interface.',
      'This device is bound to a cluster service.' => 'Cet appareil est lié à un service de grappe.',
      'Device %d' => 'Appareil %s',
      'The bound service.' => 'Le service lié.',
      'Add Interface' => 'Ajouter l\'interface',
      'Almanac service, device, property, network and namespace names may not be more than 100 characters long.' => 'Les noms du service, de l’appareil, de la propriété, du réseau et de l’espace de noms Almanac ne peuvent pas dépasser 100 caractères.',
      'Almanac Namespace' => 'Espace de noms d’Almanac',
      'Reset property "%s" to its default value?' => 'Réinitialiser la propriété « %s » à sa valeur par défaut ?',
      'Bindings must specify an interface.' => 'Les liens doivent spécifier un interface.',
      'Cluster Device' => 'Appareil de grappe',
      'Disable this binding?' => 'Casser cette relation ?',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive periods.' => 'Les noms du service, de l’appareil, de la propriété, du réseau et de l’espace de noms Almanac ne peuvent pas contenir plusieurs points consécutifs.',
      'This device has no associated SSH public keys.' => 'Cet appareil n\'a aucune clé publique SSH associée.',
      'Create Service' => 'Créer un service',
      'You can only trust keys associated with Almanac devices.' => 'Vous ne pouvez faire confiance qu’aux clés associées avec les appareils Almanac.',
      'You do not have permission to create Almanac services.' => 'Vous n’avez pas le droit de créer des services Almanac.',
      'Almanac service, device, property, network and namespace names may not contain hyphens adjacent to periods.' => 'Les noms du service, de l’appareil, de la propriété, du réseau et de l’espace de noms Almanac ne peuvent pas contenir de tiret adjacent à un point.',
      'Public key with ID %s is already trusted.' => 'La clé publique avec l’ID %s est déjà fiable.',
      'You can not bind a nonexistent or restricted service.' => 'Vous ne pouvez pas lier un service inexistant ou restreint.',
      '%s enabled this binding.' => '%s a activé ce lien.',
      'Register this host even if keys already exist on disk.' => 'Enregistrer cet hôte même si les clés existent déjà sur le disque.',
      'Interface PHID.' => 'PHID d\'interface',
      'Path to a private key for the host.' => 'Chemin vers une clé privée pour l’hôte.',
      'Drydock: Resource Pool' => 'Cale sèche : Groupe de ressources',
      'Search for bindings on particular services.' => 'Rechercher des liaisons sur des services particuliers.',
      'Add Binding' => 'Ajouter un lien',
      'Mark a public key as trusted.' => 'Marquer une clé publique comme fiable.',
      'When creating a new Almanac interface via the Conduit API, you must provide a "device" transaction to select a device.' => 'En créant un nouvel interface d’Almanac via l’API Conduit, vous devez fournir une transaction « appareil » pour sélectionner un appareil.',
      'Almanac Devices' => 'Appareils de Almanac',
      'Custom Service' => 'Service personnalisé',
      'Phabricator Cluster: Database' => 'Grappe Phabricator : Base de données',
      'Almanac Networks' => 'Réseaux d’Almanac',
      'You must be able to view the network an interface resides on to view the interface.' => 'Vous devez pouvoir afficher le réseau sur lequel réside un interface, pour pouvoir afficher l’interface.',
      'Almanac service, device, property, network and namespace names must be at least 3 characters long.' => 'Les noms du service, de l’appareil, de la propriété, du réseau et de l’espace de noms d’Almanac doivent avoir au moins 3 caractères.',
      'Edit Namespace' => 'Éditer l\'espace de noms',
      'Network %d' => 'Réseau %s',
      'Properties inherit the policies of their object.' => 'Les propriétés héritent des politiques de leur objet.',
      'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.' => 'L’option de configuration « phd.user » n’est pas définie. Vous devez définir cette option afin que la clé privée puisse être stockée avec les bons droits.',
      'Select the service to bind.' => 'Sélectionner le service à lier.',
      'The address of the interface.' => 'Adresse de l\'interface.',
      'This service has not been bound to any device interfaces yet.' => 'Ce service n’a pas encore été lié à des interfaces d’appareil.',
      'Prevent Writes' => 'Empêcher les écritures',
      'The device for an interface can not be changed once it has been created.' => 'L’appareil pour un interface ne peut pas être modifié une fois qu’il a été créé.',
      'Search for interfaces on particular devices.' => 'Rechercher les interfaces sur des appareils particuliers.',
      'Namespace Name' => 'Nom de l’espace de noms',
      'Really trust this key?' => 'Vraiment faire confiance à cette clé ?',
      'Browse documentation for Almanac.' => 'Naviguer dans la documentation pour Almanac.',
      'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.' => 'Le service pour ce lien est un service de grappe. Vous n’avez pas le droit de gérer les services de grappe, donc ce lien ne peut pas être modifié.',
      'Browse Services' => 'Naviguer dans les services',
      'You can not bind a service to an invalid or restricted interface.' => 'Vous ne pouvez pas lier un service à un interface non valide ou restreint.',
      'Interfaces must have a device.' => 'Les interfaces doivent avoir un équipement.',
      'Read information about Almanac networks.' => 'Lire l’information sur les réseaux Almanac.',
      'Specify a private key with --private-key.' => 'Spécifier une clé privée avec --private-key.',
      'Remove interface %s on device %s?' => 'Supprimer l’interface %s de l’appareil %s ?',
      '%s updated the property %s.' => '%s a mis à jour la propriété %s.',
      'Edit Almanac Binding Configurations' => 'Modifier les configurations de liaison d’Almanac.',
      'Address of the service.' => 'Adresse du service.',
      'When creating a new Almanac service via the Conduit API, you must provide a "type" transaction to select a type.' => 'Lors de la création d’un nouveau service Almanac via l’API Conduit, vous devez fournir une transaction « type » pour sélectionner un type.',
      'Set the interface to bind.' => 'Définir l’interface à lier.',
      'Phabricator Cluster: Repository' => 'Grappe de Phabricator : Dépôt',
      'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.' => 'Spécifier une identité d’hôte alternative. C’est une fonctionnalité avancée qui permet à un groupe d’appareils de partager les certificats.',
      'Control who can create new named services and devices.' => 'Contrôler qui peut créer de nouveaux services nommés et appareils.',
      'Almanac services must have unique names.' => 'Les services d’Almanac doivent avoir des noms uniques.',
      'Another namespace with this name already exists. Each namespace must have a unique name.' => 'Un autre espace de noms avec ce nom existe déjà. Chaque espace de noms doit avoir un nom unique.',
      'Interfaces must have a port number.' => 'Les interfaces doivent avoir un numéro de port.',
      'This permission is very dangerous. %s' => 'Ce droit est très dangereux. %s',
      'Binding %d' => 'Liaison de %s',
      'An interface inherits the policies of the device it belongs to.' => 'Un interface hérite des politiques de l’appareil auquel elle appartient.',
      'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.' => 'Cet appareil est lié à un service de grappe. Vous n’avez pas le droit de gérer les services de grappe, donc l’appareil ne peut pas être modifié.',
      'Set the service type.' => 'Définir le type du service.',
      'Create Binding' => 'Créer la liaison',
      'Reset' => 'Réinitialiser',
      'Edit Network' => 'Éditer le réseau',
      'Allow New Repositories' => 'Autoriser les nouveaux dépôts',
      'Almanac Service' => 'Service d’Almanac',
      'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.' => 'Ce service est un service de grappe. Vous n’avez pas le droit de modifier les services de grappe, donc vous ne pouvez pas modifier ce service.',
      'Edit Service' => 'Éditer le service',
      'Create Namespace' => 'Créer l’espace de noms',
      'A binding inherits the policies of its service.' => 'Une liaison hérite des politiques de son service.',
      'No Almanac service type "%s" exists!' => 'Aucun type de service Almanac « %s » n’existe !',
      'Cluster Database' => 'Base de données de grappe',
      'No Almanac Devices found.' => 'Aucun appareil Almanac trouvé.',
      'Almanac property values must be representable in JSON. %s' => 'Les valeurs de propriété de Almanac doivent être représentables en JSON. %s',
      'Service type "%s" is unrecognized. Valid types are: %s.' => 'Le type de service « %s » n’est pas reconnu. Les types valides sont : %s.',
      'Interface %d' => 'Interface %s',
      'Network' => 'Réseau',
      'Almanac Interfaces' => 'Interfaces Almanac',
      'Create Network' => 'Créer le réseau',
      'Read information about Almanac devices.' => 'Lire les informations sur les appareils Almanac.',
      'The interface the service is bound to.' => 'L’interface auquel est lié le service.',
      'The name of the network.' => 'Nom du réseau.',
      'Device Interfaces' => 'Interfaces d’appareil',
      'Custom Property' => 'Propriété personnalisée',
      'Installing public key...' => 'Installation de la clé publique…',
      'Almanac networks must have unique names.' => 'Les réseaux Almanac doivent avoir des noms uniques.',
      'Search for services with specific names.' => 'Rechercher les services avec des noms particuliers.',
      'Service Name' => 'Nom du service',
      'Almanac Core Objects' => 'Objets cœur de Almanac',
      'Edit Device' => 'Éditer l’appareil',
      'The device the service is bound to.' => 'L’appareil auquel le service est lié.',
      'Public key with ID %s is not trusted.' => 'La clé publique avec l’ID %s n’est pas fiable.',
      'All Networks' => 'Tous les réseaux',
      'The name of the service.' => 'Le nom du service.',
      'Prevent New Repositories' => 'Empêcher les nouveaux dépôts',
      'This engine is used to edit Almanac interfaces.' => 'Ce moteur est utilisé pour modifier les interfaces d’Almanac.',
      'Public key "%s" is not an active key.' => 'La clé publique « %s » n’est pas une clé active.',
      '%s changed the network for this interface from %s to %s.' => '%s a modifié le réseau pour cet interface de %s en %s.',
      'Edit Network: %s' => 'Éditer le réseau : %s',
      'Delete Property' => 'Supprimer la propriété',
      'Edit Property' => 'Modifier la propriété',
      'Register this host as an Almanac device.' => 'Enregistrer cet hôte comme un appareil de Almanac.',
      'TRUSTED' => 'DE CONFIANCE',
      '%s created this service.' => '%s a créé ce service.',
      'You do not have permission to create Almanac networks.' => 'Vous n’avez pas le droit de créer de réseaux Almanac.',
      'Search for devices by name substring.' => 'Rechercher les appareils par partie du nom.',
      'Namespace name is required.' => 'Le nom de l’espace de noms est obligatoire.',
      'Search for services bound to particular devices.' => 'Rechercher des services liés à des appareils particuliers.',
      'No private key exists at path "%s"!' => 'Aucune clé privée n’existe dans le chemin « %s » !',
      'Disable or enable the binding.' => 'Désactiver ou activer cette liaison.',
      'Device name is required.' => 'Le nom de l’appareil est requis.',
      'Interfaces must have an address.' => 'Les interfaces doivent avoir une adresse.',
      'True to disable the binding.' => 'Vrai pour désactiver la liaison.',
      '%s renamed this service from %s to %s.' => '%s a renommé ce service de « %s » en « %s ».',
      'Drydock Pool' => 'Groupe de cale sèche',
      'You can not attach an interface to a nonexistent or restricted device.' => 'Vous ne pouvez pas attacher un interface à un appareil inexistant ou restreint.',
      'Almanac service, device, network, property and namespace names may not have any segments containing only digits.' => 'Les noms du service, de l’appareil, de la propriété, du réseau et de l’espace de noms de Almanac ne peuvent pas avoir de segment ne contenant que des chiffres.',
      'Namespace %d' => 'Espace de noms %s',
      'Edit Almanac Interface Configurations' => 'Modifier les configurations d’interface d’Almanac',
      'You can not delete this interface because it is currently in use. One or more services are bound to it.' => 'Vous ne pouvez pas supprimer cet interface parce qu’il est en cours d’utilisation. Au moins un service y est attaché.',
      'Edit Service: %s' => 'Modifier le service : %s',
      'Almanac Console' => 'Console de Almanac',
      'Browse Interfaces' => 'Naviguer dans les interfaces',
      'Namespace %s' => 'Espace de noms %s',
      'Almanac Binding' => 'Lien de Almanac',
      'Port numbers must be between 1 and 65535, inclusive.' => 'Les numéros de port doivent être entre 1 et 65535 inclusivement.',
      'List of property names.' => 'Liste des noms de propriété.',
      'Type a service type name...' => 'Entrer le nom d\'un type de service…',
      'Cluster Devices Only' => 'Appareils en grappe uniquement',
      'The service for a binding can not be changed once it has been created.' => 'Le service pour une liaison ne peut pas être modifié une fois qu’il a été créé.',
      'Can Create Networks' => 'Peut créer des réseaux',
      'Can Create Services' => 'Peut créer des services',
      'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.' => 'La clé publique correspondant à la clé privée fournie est déjà associée avec un objet (« %s ») autre que l’appareil spécifié (« %s »). Vous ne pouvez pas utiliser une même clé privée pour identifier plusieurs appareils ou utilisateurs.',
      'The network the interface is part of.' => 'Le réseau dont fait partie l’interface.',
      'When creating a service, set the type.' => 'Lors de la création d’un service, définir le type.',
      'Device PHID.' => 'PHID de l’appareil.',
      'Delete property "%s"?' => 'Supprimer la propriété « %s » ?',
      'The service for this binding is a cluster service.' => 'Le service pour ce lien est un service de grappe.',
      'Read information about Almanac namespaces.' => 'Lire les informations sur les espaces de nom d’Almanac.',
      'Binding %s' => 'Liaison de %s',
      'Network name is required.' => 'Le nom de réseau est obligatoire.',
      'Create Property' => 'Créer la propriété',
      'Port of the service.' => 'Port du service.',
      'You do not have permission to create Almanac devices within the "%s" namespace.' => 'Vous n’avez pas le droit de créer des appareils d’Almanac dans l’espace de noms « %s ».',
      'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Cet hôte a déjà enregistré une clé privée (« %s »). Supprimer cette clé avant d’enregistrer l’hôte, ou utiliser --force pour l’écraser.',
      'This key is associated with device "%s".' => 'Cette clé est associée à l’appareil « %s ».',
      'Key %s has been marked as trusted.' => 'La clé %s a été marquée comme fiable.',
      'Binding' => 'Liaison',
      'This engine is used to edit Almanac networks.' => 'Ce moteur est utilisé pour modifier les réseaux d’Almanac.',
      'You can not bind a service to the same interface multiple times.' => 'Vous ne pouvez pas lier un service plusieurs fois au même interface.',
      'Trust has been revoked for public key %s.' => 'La confiance a été révoquée pour la clé publique %s.',
      'Apply transactions to create a new network or edit an existing one.' => 'Appliquer les transactions pour créer un nouveau réseau ou en modifier un existant.',
      'Service Directory' => 'Annuaire du service',
      'To create a new service, you must select a service type.' => 'Pour créer un nouveau service, vous devez sélectionner un type de service.',
      'Read information about Almanac interfaces.' => 'Lire les informations sur les interfaces d’Almanac.',
      'Apply transactions to create a new namespace or edit an existing one.' => 'Appliquer les transactions pour créer un nouvel espace de noms ou en modifier un existant.',
      'Service Types' => 'Types de service',
      'Service type "%s" is not valid. Valid types are: %s.' => 'Le type de service « %s » n’est pas valide. Les types valides sont : %s.',
      '%s removed the interface for this binding.' => '%s a supprimé l\'interface pour ce lien.',
      'Almanac Bindings' => 'Liaison d’Almanac',
      'Service Type' => 'Type de service',
      'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Cet hôte a déjà une clé publique enregistrée (« %s »). Supprimer cette clé avant d’enregistrer l’hôte, ou utiliser --force pour l’écraser.',
      'Specify a device with --device.' => 'Spécifier un appareil avec --device.',
      'All Bindings' => 'Toutes les liaisons',
      'Edit Namespace: %s' => 'Modifier l’espace de noms : %s',
      'Service Bindings' => 'Liaisons du service',
      'Invalid Property' => 'Propriété non valide',
      'The service type constant.' => 'La constante du type de service.',
      'The property name "%s" is invalid. This property can not be edited.' => 'Le nom de propriété « %s » n’est pas valide. Cette propriété ne peut pas être modifiée.',
      'Almanac' => 'Almanac',
      'Can Manage Cluster Services' => 'Peut gérer des services de grappe',
      'No public key exists with ID "%s".' => 'Aucune clé publique n’existe avec l’ID « %s ».',
      'The name of the namespace.' => 'Nom de l’espace de noms.',
      'Type a service name...' => 'Entrez un nom de service…',
      'Almanac Namespaces' => 'Espaces de nom d’Almanac',
      'No Almanac Services found.' => 'Aucun service d’Almanac trouvé.',
      'IMPORTANT!' => 'IMPORTANT !',
      'Search for bindings on particular devices.' => 'Rechercher les liaisons sur des appareils particuliers.',
      '%s created this device.' => '%s a créé cet appareil.',
      'Almanac User Guide' => 'Guide utilisateur de Almanac',
      'You have permission to create cluster services.' => 'Vous avez le droit de créer des services de grappe.',
      'You do not have permission to create Almanac services within the "%s" namespace.' => 'Vous n’avez pas le droit de créer des services d’Almanac dans l’espace de noms « %s ».',
      'Edit Interface' => 'Modifier l’interface',
      'Specify a public key to revoke trust for with --id.' => 'Spécifier une clé publique pour laquelle révoquer la confiance avec --id.',
      'Interface to bind the service to.' => 'Interface auquel lier le service.',
      '%s removed the property %s.' => '%s a supprimé la propriété « %s ».',
      'Choose Service Type' => 'Choisir un type de service',
      '%s renamed this namespace from %s to %s.' => '%s a renommé cet espace de noms de « %s » en « %s ».',
      'Apply transactions to create a new interface or edit an existing one.' => 'Appliquer des transactions de création d’interface ou de modification d’interfaces existants.',
      'This engine is used to edit Almanac properties.' => 'Ce moteur est utilisé pour modifier les propriétés de Almanac.',
      'No services are bound to this device.' => 'Aucun service n’est couplé avec cet appareil.',
      'Interfaces must have a unique combination of network, device, address, and port.' => 'Les interfaces doivent être identifiés par une combinaison unique de réseau, appareil, adresse, et de port.',
      'Set the device.' => 'Sélectionner l’appareil.',
      'Name of the namespace.' => 'Nom de l’espace de noms.',
      'Network %s' => 'Réseau %s',
      'Bound Services' => 'Services liés',
      'Disable Binding' => 'Désactiver les liaisons',
      'Create Device' => 'Créer l’appareil',
      'All Interfaces' => 'Tous les interfaces',
      'This engine is used to edit Almanac services.' => 'Ce moteur est utilisé pour modifier les services de Almanac.',
      'Service %d' => 'Service %s',
      'Edit Almanac Namespace Configurations' => 'Modifier les configurations d’espace de noms de Almanac',
      'Almanac devices must have unique names.' => 'Les appareils Almanac doivent avoir des noms uniques.',
      'Edit Almanac Device Configurations' => 'Modifier les configurations d’appareil Almanac',
      'Edit Property: %s' => 'Modifier la propriété : %s',
      'Pass a list of property names to delete properties.' => 'Passer une liste de noms de propriétés pour supprimer ces propriétés.',
      'When creating an interface, set the device.' => 'Lors de la création d’un interface, précisez l’appareil.',
      'Service to create a binding for.' => 'Service pour lequel on veut créer une correspondance.',
      'Almanac service, device, property, network and namespace names must begin and end with a letter or number.' => 'Les noms de service Almanac, de l’appareil, de la propriété et de l’espace de nom doivent commencer et se terminer par une lettre ou un nombre.',
      'Name of the device.' => 'Nom de l’appareil.',
      'Enable Binding' => 'Activer les liaisons',
      'Can Create Namespaces' => 'Peut créer des espaces de noms',
      'Read information about Almanac services.' => 'Lire les informations sur les services d’Almanac.',
      'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.' => 'Faire confiance à une clé publique donne à n’importe qui détenant la clé privée correspondante un accès complet et sans restriction à toutes les données dans Phabricator. La clé privée pourra signer des requêtes qui sautent les contrôles de politique et de sécurité.',
      'The type of a service can not be changed once it has been created.' => 'Le type de service ne peut pas être modifié une fois qu’il a été créé.',
      'Interface status.' => 'État de l’interface.',
      'Edit Almanac Property Configurations' => 'Modifier les configurations de propriété de Almanac',
      '%s created this network.' => '%s a créé ce réseau.',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive hyphens.' => 'Les noms du service Almanac, de l’appareil, de la propriété et de l’espace de noms ne peuvent pas contenir plusieurs tirets consécutifs.',
      '%s renamed this network from %s to %s.' => '%s a renommé ce réseau de « %s » en « %s ».',
      'Defines a database service for use in a Phabricator cluster.' => 'Définit un service de base de données à utiliser dans une grappe Phabricator.',
      '%s changed the interface for this binding from %s to %s.' => '%s a modifié l’interface de cette correspondance de %s en %s.',
      'All Namespaces' => 'Tous les espaces de noms',
      'The name of the device.' => 'Le nom de l’appareil.',
      'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.' => 'La clé publique correspondant à la clé privée fournie est bien associée avec l’appareil, mais n’a pas encore été marquée fiable. Faire confiance à cette clé avant d’enregistrer des appareils avec.',
      '%s changed the device for this interface from %s to %s.' => '%s a modifié l’appareil de cet interface de %s en %s.',
      'Namespaces' => 'Espaces de noms',
      'Create and update services, and map them to interfaces on devices.' => 'Créer et mettre à jour des services, et les faire correspondre aux interfaces sur les appareils.',
      'All Services' => 'Tous les services',
      'Defines a pool of hosts which Drydock can allocate.' => 'Définit un groupe d’hôtes que Drydock peut allouer.',
      '%s set the interface for this binding to %s.' => '%s intialise l\'interface pour ce lien à %s.',
      'Defines a unstructured custom service.' => 'Définit un service personnalisé non structuré.',
      'Reset Property' => 'Réinitialiser la propriété',
      'Apply transactions to create a new device or edit an existing one.' => 'Appliquer les transactions pour créer un nouvel appareil ou en modifier un existant.',
      'You must select a service type when creating a service.' => 'Vous devez sélectionner un type de service lors de la création d’un service.',
      'Delete Interface' => 'Supprimer l’interface',
      'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.' => 'Le nom de l’espace de noms « %s » est déjà utilisé par un autre espace de noms. Chaque espace de noms doit avoir un nom unique.',
      'Almanac Interface' => 'Interface Almanac',
      'Installing private key...' => 'Installation de la clé privée…',
      'No Almanac Networks found.' => 'Aucun réseau Almanac trouvé.',
      'Almanac Network' => 'Réseau Almanac',
      'You do not have permission to manage cluster services.' => 'Vous n’avez pas le droit de gérer les services de grappe.',
      'You can not put an interface on a nonexistent or restricted network.' => 'Vous ne pouvez pas ajouter un interface vers un réseau inexistant ou restreint.',
      '%s:%s (%s on %s)' => '%s:%s (%s sur %s)',
      'Create Interface' => 'Créer l’interface',
      'Search for networks by name substring.' => 'Rechercher des réseaux par partie du nom.',
      'Almanac services must have a name.' => 'Les services d’Almanac doivent avoir un nom.',
      'TRUST REVOKED' => 'CONFIANCE RÉVOQUÉE',
      'Device Name' => 'Nom de l’appareil',
      'No properties.' => 'Aucune propriété.',
      '%s changed the port for this interface from %s to %s.' => '%s a modifié le port pour cet interface de %s en %s.',
      'All Devices' => 'Tous les appareils',
      'Almanac Properties' => 'Propriétés d’Almanac',
      'You do not have permission to create Almanac devices.' => 'Vous n’avez pas le droit de créer des appareils Almanac.',
      '%s disabled this binding.' => '%s a désactivé cette liaison.',
      'Edit Almanac Network Configurations' => 'Modifier les configurations de réseau d’Almanac',
      'You do not have permission to create Almanac namespaces.' => 'Vous n’avez pas le droit de créer des espaces de nom Almanac.',
      'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.' => 'C’est une fonctionnalité avancée qui devrait normalement n’être utilisée que lors de la construction d’une grappe Phabricator. Cette fonctionnalité est dangereuse si elle est mal utilisée.',
      'Type an interface name...' => 'Entrer un nom d’interface…',
      '%s created this namespace.' => '%s a créé cet espace de noms.',
      'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.' => 'La clé publique correspondant à la clé privée donnée n’est pas encore connue de Phabricator. Associer la clé publique avec un appareil Almanac dans l’interface web avant d’enregistrer des hôtes avec.',
      'The device the interface is on.' => 'L’appareil sur lequel est l’interface.',
      'Can Create Devices' => 'Peut créer des appareils',
      'Interfaces must have a network.' => 'Les interfaces doivent avoir un réseau.',
      'Browse Service Types' => 'Naviguer dans les types de service',
      'Almanac service, device, property, network and namespace names may only contain lowercase letters, numbers, hyphens, and periods.' => 'Les noms du service Almanac, de l’appareil, de la propriété, du réseau et de l’espace de noms ne peuvent contenir que des lettres minuscules, des nombres, des tirets et des points.',
      'Search for services by name substring.' => 'Rechercher les services par partie de nom.',
      'Get Almanac bindings for the service.' => 'Obtenir les liaisons d’Almanac pour le service.',
      'Get Almanac properties for the object.' => 'Obtenir les propriétés Almanac de l’objet.',
      'You do not have permission to create new cluster services.' => 'Vous n’avez pas le droit de créer de nouveaux services de grappe.',
      'Almanac Device' => 'Appareil Almanac',
      '%s changed the address for this interface from %s to %s.' => '%s a modifié l’adresse pour cet interface de %s en %s.',
      'This engine is used to edit Almanac bindings.' => 'Ce moteur est utilisé pour modifier les correspondances d’Almanac.',
      'Interface In Use' => 'Interface utilisé',
      'Almanac device name to register.' => 'Nom de l’appareil Almanac à enregistrer.',
      'Bindings must have a service.' => 'Les correspondances doivent avoir un service.',
      'Revoke trust of a public key.' => 'Révoquer la confiance d\'une clé publique.',
      'Edit Almanac Service Configurations' => 'Modifier les configurations du service Almanac',
      'This engine is used to edit Almanac namespaces.' => 'Ce moteur est utilisé pour modifier les espaces de noms d’Almanac.',
      'Create an inventory of physical and virtual hosts and devices.' => 'Créer un inventaire des hôtes et appareils physiques ou virtuels.',
      'Cluster Repository' => 'Dépôt de grappe',
      'Find services by type.' => 'Trouver les services par type.',
      'Networks' => 'Réseaux',
      'Allow Writes' => 'Autoriser les écritures.',
      'Defines a repository service for use in a Phabricator cluster.' => 'Définit un service de dépôt à utiliser dans la grappe Phabricator.',
      'This host has been registered as "%s" and a trusted keypair has been installed.' => 'Cet hôte a été enregistré comme « %s » et une paire de clés de confiance a été installée.',
      '%s renamed this device from %s to %s.' => '%s a renommé cet appareil de « %s » en « %s ».',
      'Service "%s" does not exist or could not be loaded!' => 'Le service « %s » n’existe pas ou n’a pas pu être chargé !',
      'Search for devices with specific names.' => 'Rechercher des appareils avec des noms spécifiques.',
      'When deleting Almanac properties, each property name must be a string. The value at index "%s" is not a string.' => 'Lors de la suppression de propriétés d’Almanac, chaque nom de propriété doit être une chaîne. La valeur à l’indice « %s » n’est pas une chaîne.',
      'Read information about Almanac bindings.' => 'Lire les informations sur les correspondances d’Almanac.',
      'Service %s' => 'Service %s',
      'Non-cluster Devices Only' => 'Uniquement les appareils qui ne sont pas des grappes.',
      'Edit Binding' => 'Modifier la liaison',
      'Apply transactions to create a new service or edit an existing one.' => 'Appliquer les transactions pour créer un nouveau service ou en modifier un existant.',
      'This host has device ID "%s", but there is no corresponding device record in Almanac.' => 'Cet hôte a l’ID d’appareil « %s », mais il n’y a pas d’enregistrement d’appareil correspondant dans Almanac.',
      'Both Cluster and Non-cluster Devices' => 'Un appareil, qu’il soit en grappe ou non.',
      'When creating a new Almanac binding via the Conduit API, you must provide a "service" transaction to select a service to bind.' => 'En créant une nouvelle correspondance d’Almanac via l’API Conduit, vous devez fournir une transaction « service » pour sélectionner un service à mettre en correspondance.',
      'Edit Device: %s' => 'Modifier l’appareil : %s',
      'Device %s' => 'Appareil %s',
      'HOST REGISTERED' => 'HÔTE ENREGISTRÉ',
      'The port number of the interface.' => 'Numéro de port de l\'interface.',
      '%s created this interface.' => '%s a créé cet interface.',
      'You can not attach an interface to a device which you do not have permission to edit.' => 'Vous ne pouvez pas attacher un interface à un service que vous n’avez pas le droit de modifier.',
      'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.' => 'Impossible de modifier la propriété d’un fichier d’identité pour l’utilisateur de démon « %s ». Lancez cette commande en tant que %s ou root.',
      'You do not have permission to create Almanac namespaces within the "%s" namespace.' => 'Vous n’avez pas le droit de créer des espaces de nom d’almanach avec l’espace de noms « %s ».',
      'Pass a map of values to set one or more properties.' => 'Passer un dictionnaire de valeurs pour affecter une ou plusieurs propriétés.',
      'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'L’appareil « %s » n’est pas reconnu, est restreint, ou vous n’avez pas le droit de le modifier.',
      'Service type.' => 'Type de service.',
      'You do not have permission to manage Almanac cluster services.' => 'Vous n’avez pas le droit de gérer des services de grappe d’Almanac.',
      '%s created this binding.' => '%s a créé cette liaison.',
      'This engine is used to edit Almanac devices.' => 'Ce moteur est utilisé pour modifier les appareils d’almanach.',
      'Transaction value when deleting Almanac properties must be a list of property names.' => 'La valeur de la transaction lors d\'une suppression de propriétés Almanac doit être une liste de noms de propriétés.',
      'ID of the key to trust.' => 'Id de la clé à laquelle faire confiance.',
      'No such device "%s" exists!' => 'Aucun appareil « %s » n’existe !',
      'No Almanac namespaces found.' => 'Aucun espace de noms d’Almanac trouvé.',
    );
  }

}
