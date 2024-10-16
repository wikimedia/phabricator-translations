<?php

final class PhabricatorConpherenceFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      '%s edited participant(s), added %d: %s; removed %d: %s.' => '%s participant(s) modifié(s) ; %s ajouté(s) : %s ; %s retiré(s) : %s.',
      'Show Newer Messages' => 'Afficher les messages plus récents',
      'Room name.' => 'Nom de la salle.',
      'Leave Room' => 'Quitter la salle',
      'Initial Participants' => 'Participants initiaux',
      'You must choose a file when uploading a new room picture.' => 'Vous devez choisir un fichier lorsque vous téléversez une nouvelle image de la salle.',
      '%s set the room topic to %s.' => '%s a défini le sujet de la pièce à %s.',
      'All Rooms' => 'Toutes les salles',
      'Room Picture' => 'Image de la pièce',
      'You must specify participant phids.' => 'Vous devez spécifier les PHID des participants.',
      'Edit Room: %s' => 'Modifier la salle : %s',
      'Remove %s from this room?' => 'Retirer %s de cette salle ?',
      'New Message' => 'Nouveau message',
      '%s renamed this room from %s to %s.' => '%s a renommé cette salle de %s en %s.',
      'Conpherence Threads' => 'Fils de Conpherence',
      'Log In to Participate' => 'Se connecter pour participer',
      'Query for Conpherence threads for the logged in user. You can query by IDs or PHIDs for specific Conpherence threads. Otherwise, specify limit and offset to query the most recently updated Conpherences for the logged in user.' => 'Requête des fils de Conpherence pour l’utilisateur connecté. Vous pouvez rechercher par ID ou PHID pour des fils de Conpherence spécifiques. Sinon, spécifiez la limite et le décalage pour interroger les Conpherences les plus récemment mises à jour pour l’utilisateur connecté.',
      'Create a Room' => 'Créer une salle',
      'Room Preferences' => 'Préférences de la pièce',
      '%s left the room.' => '%s a quitté la salle.',
      'Chat with Others' => 'Discuter avec les autres',
      'Room does not exist or logged in user can not see it.' => 'Soit la salle n’existe pas, soit l’utilisateur ou l’utilisatrice connecté(e) ne peut pas la voir.',
      'Joined Rooms' => 'Salles rejointes',
      'Room Participants' => 'Participants de la pièce',
      'Ting' => 'Tintement',
      'Find Rooms' => 'Trouver des salles',
      'Room Contains Words' => 'Pièce contenant des mots',
      'Rooms' => 'Salles',
      'Edit Room' => 'Modifier la salle',
      'No topic set' => 'Aucun sujet défini',
      'Add Participants' => 'Ajouter des participants',
      'Rooms must have a title.' => 'Les salles doivent avoir un titre.',
      'Send a message...' => 'Envoyer un message...',
      'Room participants.' => 'Participants de la salle.',
      'That was a non-update. Try cancel.' => 'Ce n’était pas une mise à jour. Essayez d’annuler.',
      'New Room participants.' => 'Nouveaux participants de la salle.',
      'Participants (%d)' => 'Participants (%s)',
      'Type a room title...' => 'Saisissez un titre de salle...',
      '%s set the room topic to %s in %s.' => '%s a défini le sujet de la salle à %s dans %s.',
      '%s created this room.' => '%s a créé cette salle.',
      'EMAIL PREFERENCES FOR THIS ROOM' => 'PRÉFÉRENCES DE COURRIEL POUR CETTE SALLE',
      'Search Rooms' => 'Rechercher des pièces',
      'Show Older Messages' => 'Afficher les messages plus anciens',
      'Update an existing conpherence room.' => 'Mettre à jour une salle existante de Conpherence.',
      'Room topic.' => 'Sujet de la pièce.',
      'No recent messages' => 'Aucun message récent',
      '%s sent you a message.' => '%s vous a envoyé un message.',
      'Messages: %d' => 'Messages : %s',
      'You are the last member, so you will never be able to rejoin the room.' => 'Vous êtes le dernier membre, donc vous ne pourrez plus jamais rejoindre la salle.',
      'Participant PHID "%s" is not a valid user PHID.' => 'Le PHID « %s » du participant n’est pas un PHID d’utilisateur valide.',
      'Tap' => 'Tape',
      'Apply transactions to create a new room or edit an existing one.' => 'Appliquer les transactions pour créer une nouvelle salle ou en modifier une existante.',
      'Unknown action: %s' => 'Action inconnue : %s',
      '%s updated the room image for %s.' => '%s a mis à jour l’image de la salle pour %s.',
      'Log in to join this room and participate.' => 'Se connecter pour rejoindre cette salle et participer.',
      '%s added %d participant(s): %s.' => array(
        array(
          '%s a ajouté %s participant : %s.',
          '%s a ajouté %s participants : %s.',
        ),
      ),
      'See All Joined' => 'Voir tous ceux qui ont rejoint',
      'Create Room' => 'Créer la salle',
      'They will be able to rejoin the room later.' => 'Ils pourront rejoindre la salle plus tard.',
      'You must specify a room id or room PHID to query transactions from.' => 'Vous devez spécifier un identifiant ou un PHID de pièce depuis lequel interroger les transactions.',
      'New Room name.' => 'Nouveau nom de la salle.',
      'Topic' => 'Sujet',
      '%s removed %d participant(s): %s.' => array(
        array(
          '%s a retiré %s participant : %s.',
          '%s a retiré %s participants : %s.',
        ),
      ),
      'Search %s...' => 'Recherche de %s...',
      'Participants in this room can take this action.' => 'Les participants dans cette salle peuvent effectuer cette action.',
      'Create New Room' => 'Créer une nouvelle pièce',
      'Sending a message will also join the room.' => 'L’envoi d’un message fera aussi rejoindre la salle.',
      'Configure creation and editing forms in Conpherence.' => 'Configurer la création et la modification des formulaires dans Conpherence.',
      'You must specify a room ID or room PHID to query transactions from.' => 'Vous devez spécifier un identifiant ou un PHID de salle depuis lequel interroger les transactions.',
      'You have not joined any rooms yet.' => 'Vous n’avez encore rejoint aucune salle.',
      'Configure Conpherence Forms' => 'Configurer les formulaires de Conpherence',
      'Conpherence Rooms' => 'Salles de Conpherence',
      'Join a Room' => 'Rejoindre une pièce',
      'You have joined no rooms.' => 'Vous n’avez rejoint aucune salle.',
      'Join Room' => 'Rejoindre la pièce',
      '[Conpherence]' => '[Conpherence]',
      'Room' => 'Salle',
      'You must specify data that actually updates the Conpherence.' => 'Vous devez spécifier les données qui mettent réellement à jour la Conpherence.',
      'Joinable Rooms' => 'Salles joignables',
      'Send' => 'Envoyer',
      'Create a new conpherence thread.' => 'Créer un nouveau fil de Conpherence.',
      'Search by room titles.' => 'Rechercher par titre de salle.',
      'Peach' => 'Pêche',
      'No Rooms' => 'Aucune salle',
      'Private Room' => 'Salon privé',
      'Light' => 'Clair',
      'Theme' => 'Thème',
      'New Room' => 'Nouvelle salle',
      'Persistent Chat' => 'Discussion persistante',
      'Alert' => 'Alerte',
      'Only a user can remove themselves from a room.' => 'Seul un utilisateur peut se retirer lui-même d’une salle.',
      'CONPHERENCE DETAIL' => 'DÉTAILS DE LA CONPHERENCE',
      'Room Actions' => 'Actions de la salle',
      'This method is frozen and will eventually be deprecated. New code should use "conpherence.edit" instead.' => 'Cette méthode est gelée et sera éventuellement rendue obsolète. Le nouveau code devrait utiliser « conpherence.edit » à la place.',
      'No Sound' => 'Aucun son',
      'room participants' => 'participants de la salle',
      '%s joined the room.' => '%s a rejoint la salle.',
      'Browse Room' => 'Naviguer dans la salle',
      'Last updated %s' => 'Dernière mise à jour le %s',
      'Are you sure you want to leave this room?' => 'Êtes-vous sûr(e) de vouloir quitter cette salle ?',
      'Participants' => 'Participants',
      'Welcome to Conpherence' => 'Bienvenue sur Conpherence',
      'Notification settings are available after joining the room.' => 'Les paramètres de notification sont disponibles après avoir rejoint la salle.',
      '%s removed the room topic.' => '%s a supprimé le sujet de la salle.',
      'Minimize Window' => 'Minimiser la fenêtre',
      'Notification settings are available after logging in and joining the room.' => 'Les paramètres de notification sont disponibles après s’être connecté et avoir rejoint la salle.',
      'They will not be able to rejoin the room unless invited again.' => 'Ils ne pourront pas rejoindre la salle à moins d’y être invités à nouveau.',
      'Participants in a room can always view it.' => 'Les participants dans une salle peuvent toujours la voir.',
      'Query for transactions for the logged in user within a specific Conpherence room. You can specify the room by ID or PHID. Otherwise, specify limit and offset to query the most recent transactions within the Conpherence room for the logged in user.' => 'Rechercher des transactions pour l’utilisateur connecté dans une salle de Conpherence spécifique. Vous pouvez spécifier la salle par son identifiant ou son PHID. Sinon, spécifiez la limite et le décalage pour rechercher les transactions les plus récentes dans la salle de Conpherence pour l’utilisateur connecté.',
      '%s removed the room topic for %s.' => '%s a retiré le sujet de la salle pour %s.',
      'Edit Room Picture' => 'Modifier l’image de la salle',
      'Remove Participant' => 'Retirer un participant',
      'Hide Window' => 'Masquer la fenêtre',
      'You will be able to rejoin the room later.' => 'Vous pourrez rejoindre la salle plus tard.',
      'New Room topic.' => 'Nouveau sujet de la salle.',
      'View in Conpherence' => 'Afficher dans Conpherence',
      'You will not be able to rejoin the room on your own, but someone else can invite you later.' => 'Vous ne pourrez pas rejoindre la salle par vous-même, mais quelqu’un d’autre peut vous y inviter plus tard.',
      'Pock' => 'Poche',
      'The topic can be no longer than %s characters.' => array(
        'Le sujet ne peut pas dépasser %s caractère.',
        'Le sujet ne peut pas dépasser %s caractères.',
      ),
      '%s updated the room image.' => '%s a mis à jour l’image de la salle.',
      'Conpherence lets you create public or private rooms to communicate with others.' => 'Conpherence vous permet de créer des salles publiques ou des salons privés pour communiquer avec les autres.',
      'You must specify a title.' => 'Vous devez spécifier un titre.',
    );
  }

}
