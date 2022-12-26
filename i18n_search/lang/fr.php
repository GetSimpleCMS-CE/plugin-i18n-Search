<?php
$i18n = [
    'GO' => "Rechercher"
  , 'HEADER' => "Résultats de la recherche"
  , 'NOT_FOUND' => "Aucun résultat trouvé"
  , 'DATE_LOCALE' => "fr_FR.utf8,fr_FR,fr"
  , 'DATE_FORMAT' => "%A, %B %e, %Y - %l:%M %p"
  , 'FIRST_TEXT' => "<<"
  , 'FIRST_TITLE' => "Première page"
  , 'PREV_TEXT' => "<"
  , 'PREV_TITLE' => "Page précédente"
  , 'NEXT_TEXT' => ">"
  , 'NEXT_TITLE' => "Page suivante"
  , 'LAST_TEXT' => ">>"
  , 'LAST_TITLE' => "Dernière page"
  , 'CONFIGURE' => "Configurer I18N Search"
  , 'CONFIGURATION' => "I18N Search"
  , 'VIEW_USAGE' => "Utilisation"
  , 'VIEW_SETTINGS' => "Réglages"
  , 'INDEX_SETTINGS' => "Paramètres d'indexation"
  , 'INDEX_DESCRIPTION' => "Ces paramètres décvrient l'importance d'un mot trouvé, par exemple, une valeur de 1 au corps de texte et une valer de 5 au titre veut dire qu'un mot trouvé dans le titre est 4 fois plus important que trouver le même mot 4 fois dans le corps du texte."
  , 'CONTENT_WEIGHT' => "Poids relatif au corps du texte"
  , 'TITLE_WEIGHT' => "Poids relatif au titre"
  , 'TAG_WEIGHT' => "Poids relatifs aux mots clés (tag)"
  , 'SEARCHFORM_SETTINGS' => "Paramètre du formulaire de recherche"
  , 'SEARCHFORM_DESCRIPTION' => "Voulez-vous afficher un nuage de mot clés dans votre formulaire de recherche ? Si vous n'avez pas saisi de mots clés sur vos pages, ne l'activez pas."
  , 'SHOW_TAGS' => "Afficher un nuage de mots clés"
  , 'MIN_TAG_SIZE' => "Taille minimale du nuage en pourcent de la taille de la police"
  , 'MAX_TAG_SIZE' => "Taille maximale du nuage en pourcent de la taille de la police"
  , 'SEARCHRESULT_SETTINGS' => "Paramètres des résultats de la recherche"
  , 'SEARCHRESULT_DESCRIPTION' => "Ces paramètres décrivent la manière dont vous voulez afficher les résultats de la recherche."
  , 'MAX' => "Le nombre maximum de résultats à afficher sur une page"
  , 'NUM_WORDS' => "Nombre de mots extraits (0 = aucun, -1 = le contenu entier)"
  , 'SHOW_LANGUAGE' => "Afficher la langue de publication dans les résultats (utile uniquement sur les sites multilingues)"
  , 'SHOW_DATE' => "Afficher la date de publication dans les résultats"
  , 'SHOW_PAGING' => "Afficher un menu de navigation, s'il y a plus de résultats"
  , 'SAVE_CONFIGURATION' => "Enregistrer la configuration"
  , 'RESET_CONFIGURATION' => "Réinitialiser la configuration"
  , 'SAVE_FAILURE' => "Les modifications apportées à la configuration du formulaire de recherche n'ont pas pu être sauvegardées."
  , 'SAVE_SUCCESS' => "Les modifications apportées à la configuration du formulaire de recherche ont correctement été sauvegardé."
  , 'RESET_FAILURE' => "La configuration du formulaire de recherche n'a pas pu être réinitialisé."
  , 'RESET_SUCCESS' => "La configuration du formulaire de recherche a correctement été réinitialisé."
  , 'UNDO_FAILURE' => "La configuration du formulaire de recherche n'a pas pu être restauré."
  , 'UNDO_SUCCESS' => "La configuration du formulaire de recherche a correctement été restauré."
  , 'USAGE_IN_PAGE' => "Pour utiliser le plugin I18N Search, créer une page - disons avec l'URL recherche et le titre \"Recherche\" - et mettez les lignes suivantes à l'intérieur :"
  , 'USAGE_IN_TEMPLATE' => "Pour mettre un formulaire de recherche dans le sidebar ou dans le template (par exemple le header de la page), utilisez le code suivant ('recherche' est la page pour afficher les résultats) :"
  , 'CUSTOMIZE_1' => "Pour personnaliser la recherche, utilisez le"
  , 'CUSTOMIZE_2' => "page et/ou ajouter des paramètres à la recherche comme"
  , 'CUSTOMIZE_3' => "où vous pouvez utiliser les paramètres suivants :"
  , 'PARAMETER_NAME' => "Nom"
  , 'PARAMETER_DESCRIPTION' => "Description"
  , 'SLUG_DESCR' => "Identifiant/URL de la page qui affiche les résultats, par exemple, recherche"
  , 'GO_DESCR' => "Bouton de recherche"
  , 'TAGS_DESCR' => "Tags (mots-clés) pour rechercher - à la place des balises soumises"
  , 'WORDS_DESCR' => "Mots à rechercher - à la place des mots présentés"
  , 'ORDER_DESCR' => "Ordre des résultats: <i>url</ i> = par Identifiant/URL croissant, <i>reverseurl</ i> = par Identifiant/URL décroissant, <i>date</ i> = par date de parution décroissant, <i>created</ i> = par date de création décroissant (le cas échéant), par défaut par score décroissant"
  , 'HEADER_DESCR' => "Header des résultats de la recherche"
  , 'NOT_FOUND_DESCR' => "Message qui annonce qu'aucun résultat n'a été trouvé"
  , 'DATE_LOCALE_DESCR' => "Lieu pour afficher les dates ou plusieurs paramètres séparés par des virgules, par exemple, \"de_DE.utf8,de_DE,de\""
  , 'DATE_FORMAT_DESCR' => "Format de la date, tel que spécifié pour la fonction strftime de PHP, par exemple, \"%A, %d.%m.%Y - %H:%M\""
  , 'PAGING_DESCR' => "Pagination, par exemple, "
  , 'LANGUAGE_FILE_COMMENT' => "Tous les paramètres concernant les majuscules sont normalement gérés par les fichiers de langue du plugin. Il est recommandé de créer ou de modifier un fichier de langue dans (plugins/i18n_search/lang/) au lieu d'utiliser ces paramètres."
  , 'LANG_DESCR' => "Si donnés, seuls les résultats dans cette langues seront affichés, autrement les résultats dans toutes les langues de l'utilisateur et la langue par défaut sera affiché. Par exemple, \"de\""
  , 'ADDTAGS_DESCR' => "Mots clés supplémentaires à ajouter à la recherche"
  , 'ADDWORDS_DESCR' => "Mots supplémentaires à ajouter à la recherche"
  , 'COMPONENT_DESCR' => "Un composant qui est appelée pour chaque résultat de recherche"
  , 'TRANSLITERATION' => "Translittération"
  , 'TRANSLITERATION_DESCRIPTION' => "Ici vous pouvez entrer les translittérations des caractères à utiliser durant la recherche. Chaque ligne contient une translittération comme <em>source character(s) \"=\" target character(s)</em>, par exemple, <em>ö=o</em>."
  , 'TRANSLITERATION_SETTINGS' => "Réglages de la translittération"
  , 'AJAX_DESCR' => "Une valeur de 0 va désactiver la fonctionnalité AJAX du formulaire de recherche et du nuage de mots clés."
  , 'PLACEHOLDER_DESCR' => "Marque substitutive du champ de saisie de la recherche"
  , 'LIVE_DESCR' => "Une valeur de 1 va activer la fonction de recherche active, affichant les résultats lors de la sélection des mots clés ou mots. Vous devez définir à la fois pour le formulaire de recherche et le résultat de la recherche"
  , 'IDPREFIX_DESCR' => "Si vous définissez ce paramètre, chaque résultat de recherche obtiendra un id avec ce préfixe et un nombre croissant"
  , 'TAGCLASSPREFIX_DESCR' => "Si vous définissez ce paramètre, toutes les balises seront ajoutées avec des class CSS - précédé de valeur - pour les résultats de la recherche. Vous pouvez utiliser ce style pour les résultats basés sur les mots clés."
  , 'TAG_MODE' => "Quels mots clés devraient-être utilisés?"
  , 'TAGS_LANG_OR_DEFLANG' => "Utilisez les balises de la langue par défaut s'il n'y a aucune balise de langue"
  , 'TAGS_ALWAYS_DEFLANG' => "Toujours utiliser les balises de la langue par défaut"
  , 'TAGS_ALWAYS_LANG' => "Toujours utiliser des balises spécifiques à la langue"
  , 'MARK' => "Surligner les termes de la recherche sur les pages"
];