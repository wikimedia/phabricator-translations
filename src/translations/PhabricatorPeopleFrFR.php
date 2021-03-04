<?php

final class PhabricatorPeopleFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Blurb' => 'Babillage',
      'Filter IP' => 'Filtrer l’adresse IP',
      'You are creating a new **standard** user account.' => 'Vous êtes en train de créer un compte utilisateur **standard**.',
      'Pass true to find only administrators, or false to omit administrators.' => 'Indiquer vrai pour avoir seulement les admins, ou faux pour omettre les administrateurs.',
      'Disable User?' => 'Désactiver l’utilisateur ?',
      'Multi-Factor: Remove Factor' => 'Multi-Facteur : Supprimer un facteur',
      'Manage User' => 'Gérer l’utilisateur',
      'Confirm' => 'Confirmer',
      'Validity of \'%s\'.' => 'Validité de \'%s\'.',
      'Make real names optional' => 'Rendre optionnel les noms réels.',
      'Hisec: Exit' => 'Hisec : Exit',
      'Delete User' => 'Supprimer un utilisateur',
      'Email: Add Address' => 'Courriel : ajouter une adresse',
      'You can not send welcome mail to this user because their account is disabled.' => 'Vous ne pouvez pas envoyer de courriel de bienvenue à cet utilisateur car leur compte est désactivé.',
      'Stores the real name of the user, like "Abraham Lincoln".' => 'Enregistrer le nom réel de l’utilisateur, comme "Abraham Lincoln".',
      'Pass true to find only mailing lists, or false to omit mailing lists.' => 'Mettre vrai pour avoir uniquement les listes de courriels, ou faut pour les omettre.',
      'You must be an administrator to create administrators.' => 'Vous devez être administrateur pour créer des administrateurs.',
      'Obsoleted by "%s".' => 'Rendu obsolète par « %s ».',
      'User Accounts and Profiles' => 'Comptes utilisateurs et profils',
      'Invite Users' => 'Inviter des utilisateurs',
      '[Phabricator] Email Verification' => '[Phabricator] Vérification de l’adresse courriel',
      'Send Invitations' => 'Envoyer des invitations',
      'Confirm Approval' => 'Confirmer l’autorisation',
      'User has not been created yet!' => 'L’utilisateur n’a pas encore été créé !',
      'The user\'s username.' => 'Le nom de l’utilisateur.',
      '%s empowered this user as an administrator.' => '%s a donné les droits administrateur à cet utilisateur.',
      'Musician' => 'Musicien',
      'Make real names required' => 'Rendre les noms réels obligatoires',
      'Already Approved' => 'Déja approuvé',
      'After you set up your account, you can log in to Phabricator in the future by going here:' => 'Après avoir configuré votre compte, vous pourrez vous connecter à l\'avenir à Phabricator en allant ici :',
      'After you have set a password, you can log in to Phabricator in the future by going here:' => 'Après avoir défini un mot de passe, vous pourrez vous connecter à l\'avenir à Phabricator en allant ici :',
      'Account Activity' => 'Activité du compte',
      'Relationships' => 'Relations',
      'Username and email must be unique.' => 'Le noms d\'utilisateur et l\'adresse courriel doivent être uniques.',
      '%s sent this user a test notification.' => '%s a envoyé à cet utilisateur une notification de test.',
      'The email will identify you as the sender. You may optionally replace the [[ %s | default custom mail body ]] with different text by providing a message below.' => 'Ce courriel vous identifiera en tant qu’expéditeur. Vous pouvez éventuellement remplacer le [[ %s | corps du courriel par défaut ]] avec le texte de votre choix en fournissant un message ci-dessous.',
      'User has already been created!' => 'L\'utilisateur a déjà été créé !',
      'Only administrators can disapprove users.' => 'Seuls les administrateurs peuvent désapprouver des utilisateurs.',
      'Not an Administrator' => 'Non-administrateur',
      'Show Only Bots' => 'Montrer seulement les robots',
      'If you already have an account, you can follow the link to quickly verify this email address.' => 'Si vous avez déjà un compte, vous pouvez suivre le lien pour vérifier rapidement votre adresse courriel.',
      '%s (%s) has changed your Phabricator username.' => '%s (%s) a changé votre nom d’utilisateur sur Phabricator.',
      '%s (%s) has created an account for you.' => '%s (%s) a créé un compte pour vous.',
      'Create Mailing List User' => 'Créer un utilisateur de la liste de diffusion',
      'Disable or enable the user.' => 'Désactiver ou activer l\'utilisateur.',
      'The user\'s real name.' => 'Le nom réel de l’utilisateur.',
      'Only admins can call this method.' => 'Seuls les administrateurs peuvent appeler cette méthode.',
      'Hide Mailing Lists' => 'Cacher les listes de diffusion',
      'User does not belong to any projects.' => 'L’utilisateur n’appartient à aucun projet.',
      'User Activity Logs' => 'Journaux d’activité de l’utilisateur',
      'True to disable the user.' => 'Vrai pour désactiver cet utilisateur.',
      'Query users.' => 'Rechercher des utilisateurs.',
      'No accounts found.' => 'Aucun compte trouvé.',
      'Bot' => 'Robot',
      'Create New Bot' => 'Créer un nouveau robot',
      'New username is required.' => 'Le nouveau nom d’utilisateur est requis.',
      'Search for activity affecting specific users.' => 'Chercher les activités qui affectent des utilisateurs spécifiques.',
      'Account Menu' => 'Menu du compte',
      'Approved' => 'Approuvé',
      'Email: Remove Address' => 'Courriel: supprimer une adresse',
      'You do not have permission to browse the user directory.' => 'Vous n\'avez pas l\'autorisation de voir le répertoire de l\'utilisateur.',
      'Not a Normal User' => 'N\'est pas un utilisateur normal',
      'Search for actions by remote address.' => 'Recherche d\'actions par adresse distante.',
      'Select results with any owner.' => 'Sélectionner les résultats quelqu\'en soit le propriétaire.',
      'Roles' => 'Rôles',
      'User Picture' => 'Avatar',
      'Choose User Icon' => 'Choisir un avatar',
      'Email Not Verified' => 'Courriel non vérifié',
      'Usernames' => 'Noms d’utilisateurs',
      'Create New User' => 'Créer un nouvel utilisateur',
      '%s empowered %s as an administrator.' => '%s a donné à %s le droit administrateur.',
      'Bots' => 'Robots',
      'You do not have permission to create users.' => 'Vous n’avez pas la permission de créer des utilisateurs.',
      'This user has already been approved.' => 'L’utilisateur a déjà été approuvé.',
      'User Profiles' => 'Profils utilisateur',
      'Awarded by %s' => 'Pris en charge par %s',
      'Mailing Lists' => 'Listes de diffusion',
      'Admin' => 'Admin',
      'Configure User Forms' => 'Configurer les formulaires des utilisateurs',
      '  %s' => '  %s',
      'Rename User' => 'Renommer l’utilisateur',
      'Hide Bots' => 'Masquer les robots',
      '%s approved this user.' => '%s a approuvé cet utilisateur.',
      'User Details' => 'Détails de l\'utilisateur',
      'users' => 'utilisateurs',
      'Phabricator Account "%s" Approved' => 'Compte Phabricator « %s » approuvé',
      'To send invites, you must enter at least one email address.' => 'Pour envoyer des invitations, vous devez saisir au moins une adresse courriel.',
      'Approve User' => 'Approuver l\'utilisateur',
      'Find users whose usernames contain a substring.' => 'Trouver les utilisateurs dont le nom d’utilisateur contient une sous-chaîne.',
      '%s disabled this user.' => '%s a désactivé cet utilisateur.',
      'Disable User' => 'Désactiver l’utilisateur',
      'Picture From %s' => 'Image par %s',
      'Availability' => 'Disponibilité',
      'emails' => 'courriels',
      'administrators' => 'administrateurs',
      'Enable User' => 'Activer l’utilisateur',
      'message' => 'message',
      '[Phabricator] Username Changed' => '[Phabricator] Nom d’utilisateur modifié',
      'Get availability information for users.' => 'Obtenir les informations de disponibilité d\'utilisateurs.',
      'Love,
    Phabricator' => 'Amour,
    Phabricator',
      'New Username: %s' => 'Nouvel utilisateur ou utilisatrice : %s',
      'Approve' => 'Approuvé',
      'To log in to your account for the first time, follow this link:' => 'Pour vous connecter la première fois à votre compte, suivez ce lien :',
      'To log in to Phabricator, follow this link and set a password:' => 'Pour vous connecter à Phabricator, suivez ce lien et fournissez un mot de passe :',
      'Action Name' => 'Nom de l’action',
      'Not Approved' => 'Non approuvé',
      'Edit User: %s' => 'Modifier l\'utilisateur : %s',
      '%s renamed this user from %s to %s.' => '%s a renommé cet utilisateur de %s en %s.',
      'Approve the user.' => 'Approuver l\'utilisateur.',
      'Edit Profile Picture' => 'Modifier l’avatar',
      'Save Profile' => 'Enregistrer le profil',
      'You do not have permission to disable or enable users.' => 'Vous n\'avez pas l\'autorisation de désactiver ou d\'activer des utilisateurs.',
      'Create a standard user account.' => 'Créer un compte utilisateur standard.',
      'Show Only Disabled Users' => 'Afficher seulement les utilisateurs désactivés',
      'Edit Profile: %s' => 'Modifier le profil : %s',
      'Search for activity by specific users.' => 'Rechercher des activités par utilisateur spécifique.',
      'You must be an administrator to rename users.' => 'Vous devez être administrateur pour renommer les utilisateurs.',
      'Type a username...' => 'Entrez un nom d’utilisateur...',
      'Send Welcome Email' => 'Envoyer un courriel de bienvenue',
      'Search for activity in particular sessions.' => 'Chercher des activités dans des sessions particulières.',
      'Old Username: %s' => 'Ancien nom d’utilisateur : %s',
      'Edit Settings' => 'Modifier les paramètres',
      'Create Standard User' => 'Créer un utilisateur standard',
      '[Phabricator] Welcome to Phabricator' => '[Phabricator] Bienvenue dans Phabricator',
      'Verified' => 'Vérifié',
      'Create User' => 'Créer un utilisateur',
      'Change Username' => 'Changer le nom d’utilisateur',
      'True to approve the user.' => 'Vrai pour approuver l\'utilisateur.',
      'Disable the user.' => 'Désactiver l\'utilisateur.',
      'Email is not verified!' => 'L’adresse de courriel n’est pas vérifiée !',
      'Approve or reject the user.' => 'Approuver ou rejeter l\'utilisateur.',
      'Old Username' => 'Ancien nom d\'utilisateur',
      'Username is invalid! %s' => 'Le nom d’utilisateur est incorrect : %s',
      'User Availability' => 'Disponibilité de l\'utilisateur',
      'Can Disable Users' => 'Peut désactiver des utilisateurs.',
      'Research' => 'Recherche',
      '%s rejected this user.' => '%s a rejeté cet utilisateur.',
      'You must be an administrator to approve users.' => 'Vous devez être administrateur pour approuver des utilisateurs.',
      'Spy' => 'Espion',
      'Mailing List' => 'Liste de diffusion',
      'Edit Profile' => 'Modifier le profil',
      'Show Only Mailing Lists' => 'Afficher seulement les listes de diffusion.',
      'User is Disabled' => 'L\'utilisateur est désactivé',
      'Hi %s' => 'Salut %s',
      'Search for particular types of activity.' => 'Recherche de types particuliers d\'activité.',
      'Configure creation and editing forms for users.' => 'Configurer les formulaires de création et de modification pour les utilisateurs.',
      '    Username: %s' => 'Nom utilisateur: %s',
      'Create New Mailing List' => 'Créer une nouvelle liste de diffusion',
      'You can not enable or disable your own account.' => 'Vous ne pouvez pas activer ou désactiver votre propre compte.',
      'Logout' => 'Déconnexion',
      'Approve Account' => 'Approuver le compte',
      'Enable User?' => 'Activer l’utilisateur ?',
      'IP' => 'IP',
      'Show Only Administrators' => 'Afficher seulement les administrateurs',
      'Unapproved' => 'Non-approuvé',
      'New Username' => 'Nouveau nom d’utilisateur',
      'User PHID' => 'PHID de l\'utilisateur',
      'Actor PHID' => 'PHID de l\'acteur',
      'User Since' => 'Utilisateur depuis',
      '%s enabled this user.' => '%s a activé cet utilisateur.',
      'Account Type' => 'Type de compte',
    );
  }

}
