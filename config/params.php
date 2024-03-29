<?php

/**
 * Fichier contenant la configuration de l'application.
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'e-commerce',
        'DB_USER' => 'letitbe133',
        'DB_PSWD' => 'Tinjiful',
    ],
    'app' => [
        'name' => 'Mon Projet',
        'projectBaseUrl' => 'http://localhost/MVC',
    ],
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC.
 */
const BASE_DIR = __DIR__.'/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'].'/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR.'public/';
const VIEWS = BASE_DIR.'views/';
const MODELS = BASE_DIR.'src/models/';
const CONTROLLERS = BASE_DIR.'src/controllers/';

/**
 * Liste des actions/méthodes possibles (les routes du routeur).
 */
$routes = [
    '' => ['AppController', 'index'],
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/inscription' => ['SecurityController', 'inscription'],
    '/connexion' => ['SecurityController', 'connexion'],
];
