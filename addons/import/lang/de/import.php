<?php

/*
 * This file is part of the CLIENTXCMS project.
 * This file is the property of the CLIENTXCMS association. Any unauthorized use, reproduction, or download is prohibited.
 * For more information, please consult our support: clientxcms.com/client/support.
 * Year: 2024
 */
return [
    'title' => 'Importieren',
    'description' => 'Importieren Sie eine Datenbank mit der vorhandenen alten Version oder von anderen Anbietern in NextGen',
    'importwhmcs' => 'Import über WHMCS wird in Kürze verfügbar sein',
    'importclientxcms' => 'Importieren aus der alten Version von ClientXCMS',
    'db' => [
        'host' => 'Gastgeber',
        'port' => 'Hafen',
        'database' => 'Datenbank',
        'username' => 'Nutzername',
        'password' => 'Passwort',
    ],
    'v1' => [
        'importables' => [
            'products' => 'Produzieren',
            'groups' => 'Gruppen',
            'servers' => 'Diener',
            'services' => 'Dienste',
            'invoices' => 'Rechnungen',
            'clients' => 'Kundschaft',
            'pterodactyl' => 'Pterodactyl-Konfiguration',
            'proxmox' => 'Proxmox-Konfiguration',
            'oses' => 'Proxmox Betriebssysteme',
            'templates' => 'Vorlagen Proxmox',
            'plesk' => 'Konfiguration Plesk',
            'socialauth' => 'Sozialer LinkAuth',
            'support' => 'Tickets & Support-Abteilungen',
            'wisp' => 'Konfiguration Wisp',
            'proxmox_ipam' => 'Konfiguration IPAM Proxmox',
        ],
        'fromv1' => 'Importieren aus der alten Version von ClientXCMS',
        'title' => 'ClientXCMS v1',
        'description' => 'Importieren aus der alten Version von ClientXCMS',
    ],
    'whmcs' => [
        'importables' => [
            'products' => 'Produzieren',
            'groups' => 'Gruppen',
            'servers' => 'Diener',
            'services' => 'Dienste',
            'clients' => 'Kundschaft',
            'pterodactyl' => 'Pterodactyl-Konfiguration',
            'wisp' => 'Wisp-Konfiguration',
            'invoices' => 'Rechnungen',
        ],
        'fromwhmcs' => 'Importieren aus WHMCS',
        'title' => 'WHMCS',
        'key' => 'Encoder-Taste',
        'keyhelp' => 'Der Encoder-Schlüssel wird verwendet, um die Daten von WHMCS zu entschlüsseln. Es ist in der WHMCS-configuration.php Datei verfügbar',
        'description' => 'Importieren aus WHMCS',
    ],
    'downloadreport' => 'Laden Sie den Bericht herunter',
    'import' => 'Importieren',
    'delay' => 'Bitte warten Sie, es kann einige Zeit dauern, bis die Seite geladen ist.',
    'truncate' => 'Leere Tabellen vor dem Import (dringend empfohlen)',
];
