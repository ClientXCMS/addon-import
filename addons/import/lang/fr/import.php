<?php

/*
 * This file is part of the CLIENTXCMS project.
 * This file is the property of the CLIENTXCMS association. Any unauthorized use, reproduction, or download is prohibited.
 * For more information, please consult our support: clientxcms.com/client/support.
 * Year: 2024
 */
return [
    'title' => 'Importation',
    'description' => 'Importez une base de données depuis l\'ancienne version de ClientXCMS V1 ou depuis WHMCS vers cette instance de ClientXCMS NextGen en toute simplicité',
    'importwhmcs' => 'L\'importation via WHMCS sera bientôt disponible',
    'importclientxcms' => 'Importer depuis l\'ancienne version de ClientXCMS',
    'db' => [
        'host' => 'Hôte',
        'port' => 'Port',
        'database' => 'Base de données',
        'username' => 'Nom d\'utilisateur',
        'password' => 'Mot de passe',
    ],
    'v1' => [
        'importables' => [
            'products' => 'Produits',
            'groups' => 'Groupes',
            'servers' => 'Serveurs',
            'services' => 'Services',
            'invoices' => 'Factures',
            'clients' => 'Clients',
            'pterodactyl' => 'Configuration de Pterodactyl',
            'proxmox' => 'Configuration de Proxmox',
            'oses' => 'Systèmes d\'exploitation Proxmox',
            'templates' => 'Modèles Proxmox',
            'plesk' => 'Configuration de Plesk',
            'socialauth' => 'Lien socialAuth+',
            'support' => 'Tickets & Départements de support',
            'wisp' => 'Configuration de Wisp',
            'proxmox_ipam' => 'Configuration IPAM Proxmox',
        ],
        'fromv1' => 'Importer depuis l\'ancienne version de ClientXCMS',
        'title' => 'ClientXCMS v1',
        'description' => 'Importer depuis l\'ancienne version de ClientXCMS',
    ],
    'whmcs' => [
        'importables' => [
            'products' => 'Produits',
            'groups' => 'Groupes',
            'servers' => 'Serveurs',
            'services' => 'Services',
            'clients' => 'Clients',
            'pterodactyl' => 'Configuration de pterodactyl',
            'wisp' => 'Configuration de wisp',
            'invoices' => 'Factures',
        ],
        'fromwhmcs' => 'Importer depuis WHMCS',
        'title' => 'WHMCS',
        'key' => 'Clé d\'encodeur',
        'keyhelp' => 'La clé d\'encodeur est utilisée pour dechiffrer les données de WHMCS. Elle est disponible dans le fichier configuration.php de WHMCS',
        'description' => 'Importer depuis WHMCS',
    ],
    'downloadreport' => 'Télécharger le rapport',
    'import' => 'Importer',
    'delay' => 'Veuillez patienter, l\'importation peut prendre un certain temps au chargement de la page.',
    'truncate' => 'Vider les tables avant l\'importation (fortement recommandé)',
];
