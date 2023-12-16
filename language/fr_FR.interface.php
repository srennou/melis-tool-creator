<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'tr_melistoolcreator' => 'Créateur d\'outils',
    'tr_melistoolcreator_description' => 'Le créateur d\'outils génère de nouveaux modules',

    // Interfaces
    'tr_melistoolcreator_header' => 'En-tête du créateur d\'outils',
    'tr_melistoolcreator_content' => 'Contenu du créateur d\'outils',
    'tr_melistoolcreator_steps' => 'Etapes du créateur d\'outils',

    // Buttons
    'tr_melistoolcreator_next' => 'Suivant',
    'tr_melistoolcreator_back' => 'Précédent',
    'tr_melistoolcreator_finish' => 'Terminer et créer l\'outil',

    // Tabs
    'tr_melistoolcreator_db_single_tool' => 'Table unique',
    'tr_melistoolcreator_db_language_tool' => 'Langage de l\'outil',

    // Warnings
    'tr_melistoolcreator_fp_title' => 'Droits d\'écriture des fichiers refusés',
    'tr_melistoolcreator_fp_msg' => 'Pour créer des outils via ce module, veuillez donner les droits d\'écriture sur les dossiers suivants ou contactez l\'administrateur si le problème persiste',
    'tr_melistoolcreator_fp_config' => '<b>/config/melis.module.load.php</b> - Ce fichier est requis pour activer un outil après sa création',
    'tr_melistoolcreator_fp_cache' => '<b>/cache</b> - Le répertoire où le fichier cache de la liste des tables est enregistré, celà accélère le processus d\'installation de l\'outil ',
    'tr_melistoolcreator_fp_module' => '<b>/module</b> - Le répertoire dans lequel les outils créés sont enregistrés',
    'tr_melistoolcreator_fp_db_cached_empty' => 'Le fichier de cache généré pour la liste des tables de la base de données est vide, veuillez vérifier que les droits d\'écriture du répertoire du cache sont bien corrects',

    // Steps
    'tr_melistoolcreator_module' => 'Outil',
    'tr_melistoolcreator_tcf-name tooltip' => 'Nom de l\'outil /module. Seul les caractères alphabétiques sont autorisés',

    'tr_melistoolcreator_tcf_tool_type' => 'Type d\'outil',
    'tr_melistoolcreator_tcf_tool_type tooltip' => 'Outil BDD permet de créer et éditer un outil basé sur une table de la base de données. iFrame permet de charger une URL dans un outil depuis Melis Platform. Blank permet de concevoir uniquement la structure d\'un module.',
    'tr_melistoolcreator_tcf_tool_type_db' => 'Outil BDD <span class="melis-radio-box-circle"></span>',
    'tr_melistoolcreator_tcf_tool_type_iframe' => 'Outil en iFrame <span class="melis-radio-box-circle"></span>',
    'tr_melistoolcreator_tcf_tool_type_blank' => 'Blank <span class="melis-radio-box-circle"></span>',
    'tr_melistoolcreator_tcf_tool_iframe_url' => 'URL à charger à l\'intérieur de l\'outil',
    'tr_melistoolcreator_tcf_tool_iframe_url tooltip' => 'L\'outil chargera cette URL dans une nouvelle tabulation quand vous cliquerez sur son nom dans le menu principal',

    'tr_melistoolcreator_tcf_tool_edit_type' => 'Type d\'édition',
    'tr_melistoolcreator_tcf_tool_edit_type tooltip' => 'Sélectionnez le type d\'édition que vous voulez pour votre outil. Modal ouvrira les éléments dans une popin centrée qui va bien avec peu de champs à éditer. Tabulation ouvrira une nouvelle tabulation principale dans Melis Platform et conviendra mieux aux longs formulaires qui nécessitent plus de place et de visibilité',
    'tr_melistoolcreator_module_title' => 'Propriétés de l\'outil',
    'tr_melistoolcreator_module_desc' => 'Entrez le nom de l\'outil /du module. <br>Puis choisissez le type d\'edition. Modal ouvrira les éléments dans une popin centrée qui va bien avec peu de champs à éditer. <br>Tabulation ouvrira une nouvelle tabulation principale dans Melis Platform et conviendra mieux aux longs formulaires qui nécessitent plus de place et de visibilité',
    'tr_melistoolcreator_texts' => 'Textes',
    'tr_melistoolcreator_texts_title' => 'Module de traductions de texte',
    'tr_melistoolcreator_texts_desc' => 'Saisissez les traductions de texte dans les différents langages, au moins un champ titre dans un langage doit être saisi',
    'tr_melistoolcreator_database' => 'Base de données',
    'tr_melistoolcreator_database_title' => 'Table du module',
    'tr_melistoolcreator_database_desc' => 'L\'outil liste les entrées d\'une table afin de pouvoir les éditer. <br>Merci de choisir une table. Si vous avez une table secondaire liée afin de gérer les traductions, cochez l\'option et choisissez la. <br>Note : Les tables n\'ayant pas d\'auto increment sur leur clef primaire ne sont pas supportées par l\'outil',
    'tr_melistoolcreator_database_reload_cached' => 'Rafraîchir la liste des tables',
    'tr_melistoolcreator_database_reload_cached_tooltip' => 'Rafraîchir la liste des tables peut prendre quelques minutes',
    'tr_melistoolcreator_table_cols' => 'Liste & colonnes',
    'tr_melistoolcreator_table_cols_title' => 'Liste de l\'outil & colonnes affichées',
    'tr_melistoolcreator_table_cols_desc' => 'Veuillez choisir la ou les colonnes à afficher dans la liste de l\'outil',
    'tr_melistoolcreator_add_update_form' => 'Champs à éditer',
    'tr_melistoolcreator_add_update_form_title' => 'Choix des champs à éditer',
    'tr_melistoolcreator_add_update_form_desc' => 'Merci de choisir les colonnes qui pourront être éditées et/ou sont obligatoires. Puis choisissez quel type de champs (input) permettra de l\'éditer', 
    'tr_melistoolcreator_cols_translations' => 'Traductions des colonnes',
    'tr_melistoolcreator_cols_translations_title' => 'Traductions des colonnes de la table',
    'tr_melistoolcreator_cols_translations_desc' => 'Ces colonnes sont utilisées soit dans la liste de l\'outil, soit dans le formulaire d\'édition. <br>Saisissez les traductions dans les différents langages. <br>Les colonnes doivent être traduites dans au moins une langue',
    'tr_melistoolcreator_custom_translations' => 'Personalisation',
    'tr_melistoolcreator_custom_translations_title' => 'Table de personalisation avancer',
    'tr_melistoolcreator_custom_translations_desc' => 'Cette etape est pour personaliser le module ',
    'tr_melistoolcreator_summary' => 'Récapitulatif',
    'tr_melistoolcreator_finalization' => 'Finalisation',
    'tr_melistoolcreator_finalization_desc' => 'Cochez la case ci-dessous pour activer l\'outil lors de sa création',
    'tr_melistoolcreator_finalization_activate_module' => 'Activer l\'outil après sa création',
    'tr_melistoolcreator_finalization_activation_note' => '<strong>Note :</strong> Activer l\'outil nécéssitera un rechargement de la plateforme',
    'tr_melistoolcreator_finalization_success_title' => 'l\'outil a été créé avec succès',
    'tr_melistoolcreator_finalization_success_desc_with_counter' => 'La plateforme va se recharger dans <strong><span id="tc-restart-cd">5</span></strong>',
    'tr_melistoolcreator_finalization_success_desc' => 'Vous pouvez activer/désactiver l\'outil en changeant son statut depuis la liste des modules dans Configuration système / Modules',
    'tr_melistoolcreator_execute_aadtnl_setup' => 'Exécution d\'une configuration supplémentaire',
    'tr_melistoolcreator_please_wait' => 'Veuillez patienter',
    'tr_melistoolcreator_yes' => 'Oui',
    'tr_melistoolcreator_no' => 'Non',

    // Texts
    'tr_melistoolcreator_db_tables' => 'Tables de la base de données',
    'tr_melistoolcreator_db_tables_cols' => 'Colonnes de la table',
    'tr_melistoolcreator_col_pk' => 'PK',
    'tr_melistoolcreator_col_fk' => 'FK',
    'tr_melistoolcreator_col_name' => 'Nom',
    'tr_melistoolcreator_col_type' => 'Type',
    'tr_melistoolcreator_col_null' => 'Null',
    'tr_melistoolcreator_col_default' => 'Défaut',
    'tr_melistoolcreator_col_extra' => 'Extra',
    'tr_melistoolcreator_col_display' => 'Affichage',
    'tr_melistoolcreator_col_editable' => 'Editable',
    'tr_melistoolcreator_col_mandatory' => 'Obligatoire',
    'tr_melistoolcreator_col_field_type' => 'Input type',
    'tr_melistoolcreator_col_validators' => 'Validators',
    'tr_melistoolcreator_col_filters' => 'Filters',
    'tr_melistoolcreator_columns' => 'Colonnes',
    'tr_melistoolcreator_columns_desciption' => 'Description des colonnes',
    'tr_melistoolcreator_refreshing' => 'Rafraîchissement...',
    'tr_melistoolcreator_pri_tbl' => 'Table principale',
    'tr_melistoolcreator_lang_tbl' => 'Table des langages',
    'tr_melistoolcreator_pri_db_tbl' => 'Table principale',
    'tr_melistoolcreator_lang_db_tbl' => 'Table langage',
    'tr_melistoolcreator_pri_tbl_cols' => 'Colonnes de la table primaire',
    'tr_melistoolcreator_lang_tbl_cols' => 'Colonne de la table des langages',
    'tr_melistoolcreator_pri_tbl_cols_select' => 'Sélectionnez la table primaire correspondant à votre outil',
    'tr_melistoolcreator_int_lang_tab' => 'Intégrer une table secondaire (pour gérer des contenus par langage)',
    'tr_melistoolcreator_lang_tbl_lst' => 'Table secondaire (contenus par langage)',
    'tr_melistoolcreator_select_lang_tbl_lst' => 'Sélectionnez la table langage correspondant à votre outil',
    'tr_melistoolcreator_pk_fk_pri_tbl_lbl' => 'FK1 - Clef étrangère vers la table principale',
    'tr_melistoolcreator_pk_fk_lang_tbl_lbl' => 'FK2 - Clef étrangère vers la table secondaire (contenus par langage)',
    'tr_melistoolcreator_lang_txt' => 'Languge',
    'tr_melistoolcreator_col_txt' => 'Colonnes',
    'tr_melistoolcreator_name_txt' => 'Nom',
    'tr_melistoolcreator_desc_txt' => 'Description',
    'tr_melistoolcreator_activate' => 'Actif',
    'tr_melistoolcreator_deactivate' => 'Inactif',
    'tr_melistoolcreator_refresh_db_tooltip' => 'Rafraîchir la liste des tables peut prendre quelques minutes',
    'tr_melistoolcreator_choose' => 'Choisissez',
    'tr_melistoolcreator_select_text' => 'Texte / Champs normal',
    'tr_melistoolcreator_select_textarea_tinymce' => 'Rich HTML (TinyMCE)',
    'tr_melistoolcreator_select_switch' => 'Switch ON/OFF vert/rouge',
    'tr_melistoolcreator_select_raw_view' => 'Valeur en base',
    'tr_melistoolcreator_select_char_len_50' => 'Valeur coupée à 50 char',
    'tr_melistoolcreator_select_dot_color' => 'Point vert/rouge',
    'tr_melistoolcreator_select_site_name' => 'Site',
    'tr_melistoolcreator_select_lang_name' => 'Langue',
    'tr_melistoolcreator_select_tpl_name' => 'Template',
    'tr_melistoolcreator_select_admin_name' => 'Utilisateur BO',
    'tr_melistoolcreator_select_date' => 'Date',
    'tr_melistoolcreator_select_date_time' => 'DateTime',
    'tr_melistoolcreator_table_list_only_with_pk' => 'Le créateur d\'outils ne peut afficher que des tables avec une clef primaire et en incrémentation automatique',

    // Forms
    'tr_melistoolcreator_tcf-name' => 'Nom de l\'outil',
    'tr_melistoolcreator_tcf-tool-iframe-url' => 'Iframe Url',
    'tr_melistoolcreator_tcf-module-toolstree' => 'Arbre des outils',
    'tr_melistoolcreator_tcf-module-toolstree tooltip' => 'Arbre des outils',
    'tr_melistoolcreator_tcf-title' => 'Titre de l\'outil',
    'tr_melistoolcreator_tcf-title tooltip' => 'Le titre de l\'outil apparait dans le menu de gauche et en haut dans l\'outil',
    'tr_melistoolcreator_tcf-desc' => 'Description de l\'outil',
    'tr_melistoolcreator_tcf-desc tooltip' => 'La description de l\'outil est affichée en dessous du titre dans l\'outil',
    'tr_melistoolcreator_inpt_name' => 'Nom',
    'tr_melistoolcreator_inpt_name tooltip' => 'Description tooltip',

    // Error messages
    'tr_melistoolcreator_err_message' => 'Impossible de passer à l\'étape suivante, veuillez réessayer',
    'tr_melistoolcreator_err_invalid_module' => 'Seul les caractères alphabétiques sont autorisés',
    'tr_melistoolcreator_invalid_url' => 'URL invalide',
    'tr_melistoolcreator_err_empty' => 'Champ requis, ne peut être vide',
    'tr_melistoolcreator_err_long_50' => 'Valeur trop longue, elle doit être de moins de 50 caractères',
    'tr_melistoolcreator_err_long_100' => 'Valeur trop longue, elle doit être de moins de 100 caractères',
    'tr_melistoolcreator_err_long_250' => 'Valeur trop longue, elle doit être de moins de 250 caractères',
    'tr_melistoolcreator_err_no_selected_db' => 'Veuillez choisir une table avant de procéder à l\'étape suivante',
    'tr_melistoolcreator_err_no_selected_col' => 'Veuillez choisir au moins une colonne pour procéder à l\'étape suivante',
    'tr_melistoolcreator_err_module_exist' => '"%s" existe déjà, veuillez en choisir un autre',
    'tr_melistoolcreator_err_select_pri_key_tbl' => 'Dans la table secondaire sélectionnez la clef étrangère vers la table principale',
    'tr_melistoolcreator_err_select_lang_key_tbl' => 'Dans la table secondaire sélectionnez la clef étrangère vers la table des langages',
    'tr_melistoolcreator_err_select_pri_tbl' => 'Veuillez choisir une table primaire',
    'tr_melistoolcreator_err_select_lang_tbl' => 'Veuillez choisir une table de langage',
    'tr_melistoolcreator_err_no_primary_key' => 'La table principale n\'a pas de clef primaire',
    'tr_melistoolcreator_err_primary_key_not_ai' => 'La clef primaire de la table principale doit être en auto increment',
    'tr_melistoolcreator_err_lang_no_primary_key' => 'La table secondaire n\'a pas de clef primaire',
    'tr_melistoolcreator_err_lang_primary_key_not_ai' => 'La clef primaire de la table secondaire doit être en auto increment',
    'tr_melistoolcreator_warning_tbl_has_blob' => 'Cette table possède une colonne avec un type blob. Si vous procédez avec cette table, les colonnes ayant un type blob ne seront pas inclues dans l\'outil généré',
    'tr_melistoolcreator_err_blob_type_found' => 'La table principale sélectionnée à une colonne de type blob réglée sur NOT NULL. Cet outil ne prend pas en charge ce type de colonne. Pour continuer, vous devez changer sa valeur à NULL en DB',
    'tr_melistoolcreator_err_blob_type_found_lang_tbl' => 'La table secondaire sélectionnée à une colonne de type blob réglée sur NOT NULL. Cet outil ne prend pas en charge ce type de colonne. Pour continuer, vous devez changer sa valeur à NULL en DB',

    // Target Module translation
    'tr_melistoolcreator_common_id' => 'ID',
    'tr_melistoolcreator_common_table_edit_button' => 'Editer',
    'tr_melistoolcreator_common_table_delete_button' => 'Supprimer',
    'tr_melistoolcreator_common_table_column_action' => 'Action',
    'tr_melistoolcreator_common_button_add' => 'Ajouter',
    'tr_melistoolcreator_common_add_item' => 'Ajouter élément',
    'tr_melistoolcreator_common_button_close' => 'Fermer',
    'tr_melistoolcreator_common_button_save' => 'Enregistrer',
    'tr_melistoolcreator_common_button_yes' => 'Oui',
    'tr_melistoolcreator_common_button_no' => 'Non',
    'tr_melistoolcreator_created_success' => 'Elément créé avec succès',
    'tr_melistoolcreator_unable_to_save' => 'Impossible d\'enregistrer',
    'tr_melistoolcreator_save_success' => 'Elément enregistré avec succès',
    'tr_melistoolcreator_value_must_not_is_empty' => 'Champ requis, ne peut être vide',
    'tr_melistoolcreator_delete_title' => 'Supprimer l\'élément',
    'tr_melistoolcreator_delete_confirm_msg' => 'Etes-vous sûr de vouloir supprimer cet élément ?',
    'tr_melistoolcreator_properties' => 'Propriétés',
    'tr_melistoolcreator_language' => 'Textes',
    'tr_melistoolcreator_choose_file' => 'Choisir un fichier',
    'tr_melistoolcreator_delete_item' => 'Supprimer l\'élément',
    'tr_melistoolcreator_delete_success' => 'Elément supprimé avec succès',
    'tr_melistoolcreator_must_numeric' => 'Champ requis doit être un nombre',

    // Addition step1
    'tr_melistoolcreator_tcf_microservices_title' => 'Créer un accès aux microservices',
    'tr_melistoolcreator_tcf_microservices_tooltip' => 'Créer un fichier de config pour ajouter le service généré dans la liste des services pour la plateforme',

    'tr_melistoolcreator_common_header' => 'En-tête',
    'tr_melistoolcreator_common_content' => 'Contenu',
    'tr_melistoolcreator_common_modal' => 'Modal',

    'tr_melistoolcreator_validator_none' => 'None',
    'tr_melistoolcreator_validator_digit' => 'Digit',
    'tr_melistoolcreator_validator_email' => 'Email',
    'tr_melistoolcreator_validator_date' => 'Date',
    'tr_melistoolcreator_tcf_table_type_data_table' => 'Simple',
    'tr_melistoolcreator_tcf_table_type_ordered_data_table' => 'Ordered values',
    'tr_melistoolcreator_tcf_table_type' => 'Type de table',
    'tr_melistoolcreator_tcf_table_type_show_hide_data_table' => 'Show/Hide',
    'tr_melistoolcreator_filter_none' => 'None',
    'tr_melistoolcreator_filter_select' => 'Select',
    'tr_melistoolcreator_filter_input' => 'Input',
    'tr_melistoolcreator_filter_date' => 'Date',
	'tr_melistoolcreator_common_button_all' => 'Tous',

];