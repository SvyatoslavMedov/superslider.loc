<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Tornant als bàsics'
    ],
    'directory' => [
        'create_fail' => 'No es pot crear el directori: :name'
    ],
    'file' => [
        'create_fail' => "No es pot crear l'arxiu: :name"
    ],
    'combiner' => [
        'not_found' => "L'arxiu de combinació ':name' no s'ha trobat."
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Misc',
            'logs' => 'Registres',
            'mail' => 'Correu',
            'shop' => 'Botiga',
            'team' => 'Equip',
            'users' => 'Usuaris',
            'system' => 'Sistema',
            'social' => 'Social',
            'backend' => 'Backend',
            'events' => 'Esdeveniments',
            'customers' => 'Clients',
            'my_settings' => 'Les meves opcions',
            'notifications' => 'Notificacions'
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Tema sense nom',
        'name' => [
            'label' => 'Nom del tema',
            'help' => 'Anomena el tema amb el seu codi únic. Per exemple, Winter.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Instal·lar temes',
        'search' => 'cerca temes per instal·lar...',
        'installed' => 'Temes instal·lats',
        'no_themes' => 'No hi ha temes instal·lats des del mercat.',
        'recommended' => 'Recomanats',
        'remove_confirm' => 'Estàs segur que vols eliminar aquest tema?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin sense nom',
        'name' => [
            'label' => 'Nom del plugin',
            'help' => 'Anomena el tema amb el seu codi únic. Per exemple, Winter.Blog'
        ],
        'by_author' => 'Per :name',
    ],
    'plugins' => [
        'manage' => 'Gestionar plugins',
        'install' => 'Instal·lar plugins',
        'install_products' => 'Instal·lar productes',
        'search' => 'cerca plugins per instal·lar...',
        'installed' => 'Plugins instal·lats',
        'no_plugins' => 'No hi ha plugins instal·lats des del mercat.',
        'recommended' => 'Recomanats',
        'plugin_label'  => 'Plugin',
        'unknown_plugin' => "El plugin ha estat eliminat del sistema d'arxius.",
        'select_label' => 'Seleccionar acció...',
        'check_yes' => 'Sí',
        'check_no' => 'No',
        'unfrozen' => 'Actualitzacions habilitades',
        'enabled' => 'Plugin habilitat',
        'freeze' => 'deshabilitar actualitzacions per',
        'unfreeze' => 'habilitar actualitzacions per',
        'enable' => 'habilitar',
        'disable' => 'deshabilitar',
        'refresh' => 'reiniciar',
        'remove' => 'eliminar',
        'freeze_label' => 'Deshabilitar actualitzacions',
        'unfreeze_label' => 'Habilitar actualitzacions',
        'enable_label' => 'Habilitar plugins',
        'disable_label' => 'Deshabilitar plugins',
        'refresh_label' => 'Reiniciar dades del plugin',
        'action_confirm' => 'Estàs segur de que vols :action aquests plugins?',
        'freeze_success' => 'Actualitzacions deshabilitades pels plugins seleccionats.',
        'unfreeze_success' => 'Actualitzacions habilitades pels plugins seleccionats.',
        'enable_success' => 'Plugins seleccionats habilitats.',
        'disable_success' => 'Plugins seleccionats deshabilitats.',
        'refresh_confirm' => "Estàs segur que vols reiniciar els plugins seleccionats? Això reiniciarà les dades de cada plugin, restaurant-les a l'estat inicial.",
        'refresh_success' => 'Plugins seleccionats reiniciats.',
        'remove_confirm' => "Estàs segur que vols eliminar els plugins seleccionats? Aixo també n'eliminarà totes les dades associades.",
        'remove_success' => 'Plugins seleccionats eliminats.',
    ],
    'project' => [
        'name' => 'Projecte',
        'owner_label' => 'Autor',
        'attach' => 'Vincular projecte',
        'detach' => 'desvincular projecte',
        'none' => 'Cap',
        'id' => [
            'label' => 'ID de projecte',
            'help' => 'Com trobar la teva ID de projecte',
            'missing' => 'Si us plau indica una ID de projecte.'
        ],
        'detach_confirm' => 'Estàs segur que vols desvincular aquest projecte?',
        'unbind_success' => 'El projecte ha estat desvinculat.'
    ],
    'settings' => [
        'menu_label' => 'Opcions',
        'not_found' => "No s'han pogut trobar les opcions especificades.",
        'missing_model' => "La pàgina d'opcions no té una definició de Model.",
        'update_success' => 'Opcions de :name actualitzades',
        'return' => 'Tornar a les opcions del sistema',
        'search' => 'Cercar'
    ],
    'mail' => [
        'log_file' => 'Arxiu de registre',
        'menu_label' => 'Configuració de correu',
        'menu_description' => 'Gestionar la Configuració de correu.',
        'general' => 'General',
        'method' => 'Mètode de correu',
        'sender_name' => 'Nom del remitent',
        'sender_email' => 'Email del remitent',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'Adreça SMTP',
        'smtp_authorization' => 'Autorització SMTP requerida',
        'smtp_authorization_comment' => 'Marca aquesta casella si el teu servidor SMTP server requereix autoritzaci.',
        'smtp_username' => "Nom d'usuari",
        'smtp_password' => 'Contrasenya',
        'smtp_port' => 'Port SMTP',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Ruta de sendmail',
        'sendmail_path_comment' => "Si us plau especifica una ruta per l'executable de sendmail.",
    ],
    'mail_templates' => [
        'menu_label' => 'Plantilles de correu',
        'menu_description' => "Modifica les plantilles de correu que s'envien als usuaris i administradors, gestiona disposicions de correu.",
        'new_template' => 'Nova plantilla',
        'new_layout' => 'Nova disposició',
        'new_partial' => 'Nou parcial',
        'template' => 'Plantilla',
        'templates' => 'Plantilles',
        'partial' => 'Parcial',
        'partials' => 'Parcials',
        'menu_layouts_label' => 'Disposicions de correu',
        'menu_partials_label' => 'Parcials de correu',
        'layout' => 'Disposició',
        'layouts' => 'Disposicions',
        'no_layout' => '-- Cap disposició --',
        'name' => 'Nom',
        'name_comment' => 'Nom únic utilitzat per referir-se a aquesta plantilla',
        'code' => 'Codi',
        'code_comment' => 'Codi únic utilitzat per referir-se a aquesta plantilla',
        'subject' => 'Assumpte',
        'subject_comment' => 'Assumpte del missatge',
        'description' => 'Descripció',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Text pla',
        'test_send' => 'Enviar missatge de prova',
        'test_success' => 'Missatge de prova enviat.',
        'test_confirm' => 'Enviar missatge de prova a :email. Continuar?',
        'creating' => 'Creant plantilla...',
        'creating_layout' => 'Creant disposició...',
        'saving' => 'Guardant plantilla...',
        'saving_layout' => 'Guardant disposició...',
        'delete_confirm' => 'Eliminar aquesta plantilla?',
        'delete_layout_confirm' => 'Eliminar aquesta disposició?',
        'deleting' => 'Eliminant plantilla...',
        'deleting_layout' => 'Eliminant disposició...',
        'sending' => 'Enviant missatge de prova...',
        'return' => 'Tornar a la llista de plantilles'
    ],
    'mail_brand' => [
        'menu_label' => 'Branding del correu',
        'menu_description' => "Modificar els colors i l'aparença de les plantilles de correu.",
        'page_title' => "Personalitzar l'aparença del correu",
        'sample_template' => [
            'heading' => 'Capçalera',
            'paragraph' => 'Això és un paràgraf amb Lorem Ipsum i un enllaç. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Element',
                'description' => 'Descripció',
                'price' => 'Preu',
                'centered' => 'Centrat',
                'right_aligned' => 'Alineat a la dreta'
            ],
            'buttons' => [
                'primary' => 'Botó primari',
                'positive' => 'Botó positiu',
                'negative' => 'Botó negatiu',
            ],
            'panel' => 'No és fantàstic aquest panell?',
            'more' => 'Una mica més de text',
            'promotion' => 'Codi de cupó: WINTER',
            'subcopy' => "Això és un subcopy de l'email",
            'thanks' => 'Gràcies'
        ],
        'fields' => [
            '_section_background' => 'Fons',
            'body_bg' => 'Fons del cos',
            'content_bg' => 'Fons del contingut',
            'content_inner_bg' => 'Fons del contingut intern',
            '_section_buttons' => 'Botons',
            'button_text_color' => 'Color del text del botó',
            'button_primary_bg' => 'Fons del botó primari',
            'button_positive_bg' => 'Fons del botó positiu',
            'button_negative_bg' => 'Fons del botó negatiu',
            '_section_type' => 'Tipografia',
            'header_color' => 'Color de la capçalera',
            'heading_color' => 'Color dels títols',
            'text_color' => 'Color del text',
            'link_color' => 'Color dels enllaços',
            'footer_color' => 'Color del peu',
            '_section_borders' => 'Vores',
            'body_border_color' => 'Color de la vora del cos',
            'subcopy_border_color' => 'Color de la vora del subcopy',
            'table_border_color' => 'Color de la vora de la taula',
            '_section_components' => 'Components',
            'panel_bg' => 'Fons del panell',
            'promotion_bg' => 'Fons de la promoció',
            'promotion_border_color' => 'Color de la vora de la promoció',
        ]
    ],
    'install' => [
        'project_label' => 'Vincular a projecte',
        'plugin_label' => 'Instal·lar plugin',
        'theme_label' => 'Instal·lar tema',
        'missing_plugin_name' => 'Si us plau indica un nom de plugin per a instal·lar.',
        'missing_theme_name' => 'Si us plau indica un nom de tema per a instal·lar.',
        'install_completing' => "Finalitzant el procès d'instal·lació",
        'install_success' => 'Plugin instal·lat correctament'
    ],
    'updates' => [
        'title' => 'Gestionar actualitzacions',
        'name' => 'Actualització de software',
        'menu_label' => 'Actualitzacions i plugins',
        'menu_description' => 'Actualitzar el sistema, gestionar i instal·lar plugins i temes.',
        'return_link' => 'Tornar a les actualitzacions de sistema',
        'check_label' => 'Comprovar actualitzacions',
        'retry_label' => 'Tornar-ho a intentar',
        'plugin_name' => 'Nom',
        'plugin_code' => 'Codi',
        'plugin_description' => 'Descripció',
        'plugin_version' => 'Versió',
        'plugin_author' => 'Autor',
        'plugin_not_found' => 'Plugin no trobat',
        'core_current_build' => 'Versió actual',
        'core_build' => 'Versió :build',
        'core_build_help' => 'La última versió està disponible.',
        'core_downloading' => "Descarregant arxius de l'aplicació",
        'core_extracting' => "Desempaquetant arxius de l'aplicació",
        'core_set_build' => 'Assignant número de versió',
        'plugins' => 'Plugins',
        'themes' => 'Temes',
        'disabled' => 'Deshabilitats',
        'plugin_downloading' => 'Descarregant plugin: :name',
        'plugin_extracting' => 'Desempaquetant plugin: :name',
        'plugin_version_none' => 'Nou plugin',
        'plugin_current_version' => 'Versió actual',
        'theme_new_install' => 'Instal·lació de nou tema.',
        'theme_downloading' => 'Descarregant tema: :name',
        'theme_extracting' => 'Desempaquetant tema: :name',
        'update_label' => 'Actualitzar software',
        'update_completing' => "Finalitzant el procès d'actualització",
        'update_loading' => 'Carregant actualitzacions disponibles...',
        'update_success' => "Procès d'actualització completat",
        'update_failed_label' => 'Actualització fallida',
        'force_label' => 'Forçar actualització',
        'found' => [
            'label' => "S'han trobat noves actualitzacions!",
            'help' => "Clica 'Actualitzar software' per començar el procès d'actualització."
        ],
        'none' => [
            'label' => 'No hi ha actualitzacions',
            'help' => "No s'han trobat noves actualitzacions."
        ],
        'important_action' => [
            'empty' => 'Seleccionar acció',
            'confirm' => 'Confirmar actualització',
            'skip' => 'Saltar aquesta actualització (només aquest cop)',
            'ignore' => 'Saltar aquesta actualització (sempre)'
        ],
        'important_action_required' => 'Acció requerida',
        'important_view_guide' => "Veure la guia d'actualització",
        'important_view_release_notes' => 'Veure les notes de la versió',
        'important_alert_text' => 'Algunes actualitzacions necessiten la teva atenció.',
        'details_title' => 'Detalls del plugin',
        'details_view_homepage' => 'Veure pàgina web',
        'details_readme' => 'Documentació',
        'details_readme_missing' => "No s'ha proveït documentació.",
        'details_changelog' => 'Registre de canvis',
        'details_changelog_missing' => "No s'ha proveït registre de canvis.",
        'details_upgrades' => "Guia d'actualització",
        'details_upgrades_missing' => "No s'ha proveït guia d'actualització.",
        'details_licence' => 'Llicència',
        'details_licence_missing' => "No s'ha proveït llicència.",
        'details_current_version' => 'Versió actual',
        'details_author' => 'Autor'
    ],
    'server' => [
        'connect_error' => 'Error connectant al servidor.',
        'response_not_found' => "El servidor d'actualitzacions no s'ha pogut trobat.",
        'response_invalid' => 'Resposta invàlida del servidor.',
        'response_empty' => 'Resposta buida del servidor.',
        'file_error' => 'El servidor no ha pogut proporcionar el paquet.',
        'file_corrupt' => "L'arxiu del servidor està corrupte."
    ],
    'behavior' => [
        'missing_property' => 'La classe :class ha de definir la propietat $:property utilitzada pel comportament :behavior.'
    ],
    'config' => [
        'not_found' => "No ha estat possible trobar l'arxiu de configuració :file definit per :location.",
        'required' => "La configuració utilitzada a :location ha de proporcionar un valor ':property'."
    ],
    'zip' => [
        'extract_failed' => "No ha estat possible extreure el fitxer de core ':file'."
    ],
    'event_log' => [
        'hint' => "Aquest registre mostra una llista d'errors potencials que ocorren a l'aplicació, com ara excepcions o informació de depuració.",
        'menu_label' => "Registre d'esdeveniments",
        'menu_description' => 'Veure els missatges de registre del sistema amb les hores i detalls guardats.',
        'empty_link' => "Buidar registre d'esdeveniments",
        'empty_loading' => "Buidant registre d'esdeveniments...",
        'empty_success' => "Registre d'esdeveniments buit",
        'return_link' => "Tornar al registre d'esdeveniments",
        'id' => 'ID',
        'id_label' => "ID d'esdeveniment",
        'created_at' => 'Data i hora',
        'message' => 'Missatge',
        'level' => 'Nivell',
        'preview_title' => 'Esdeveniment'
    ],
    'request_log' => [
        'hint' => "Aquest registre mostra una llista de peticions de navegador que podrien requerir atenció. Per exemple, si un visitant obre una pàgina de CMS que no es pot trobar, es crea un registre amb l'estat 404.",
        'menu_label' => 'Registre de peticions',
        'menu_description' => 'Veure peticions incorrectes o redirigides, com ara Pàgina no trobada (404).',
        'empty_link' => 'Buidar registre de peticions',
        'empty_loading' => 'Buidant registre de peticions...',
        'empty_success' => 'Registre de peticions buit',
        'return_link' => 'Tornar al registre de peticions',
        'id' => 'ID',
        'id_label' => 'ID de registre',
        'count' => 'Comptador',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Estat',
        'preview_title' => 'Petició'
    ],
    'permissions' => [
        'name' => 'Sistema',
        'manage_system_settings' => 'Gestionar opcions del sistema',
        'manage_software_updates' => 'Gestionar actualitzacions de software',
        'access_logs' => 'Veure registres del sistema',
        'manage_mail_templates' => 'Gestionar plantilles de correu',
        'manage_mail_settings' => 'Gestionar opcions de correu',
        'manage_other_administrators' => 'Gestionar altres administradors',
        'manage_preferences' => 'Gestionar preferències del panell',
        'manage_editor' => "Gestionar preferències de l'editor de codi",
        'view_the_dashboard' => "Veure l'escriptori",
        'manage_branding' => 'Personalitzar el panell'
    ],
    'log' => [
        'menu_label' => 'Opcions de registre',
        'menu_description' => "Especificar quines àrees s'han de registrar.",
        'default_tab' => 'Registre',
        'log_events' => 'Registrar esdeveniments del sistema',
        'log_events_comment' => 'Guardar esdeveniments del sistema a la base de dades a més de al fitxer de registre.',
        'log_requests' => 'Registrar peticions incorrectes',
        'log_requests_comment' => 'Peticions de navegador que poden requerir atenció, com ara errors 404.',
        'log_theme' => 'Registrar canvis del tema',
        'log_theme_comment' => 'Quan es fa un canvi al tema utilitzant el panell.',
    ],
    'media' => [
        'invalid_path' => "Ruta d'arxiu invàlida: ':path'.",
        'folder_size_items' => 'element(s)',
    ],
];
