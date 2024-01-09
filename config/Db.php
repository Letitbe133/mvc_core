<?php

class Db
{
    /**
     * connexion à la BDD
     *
     * @return PDO
     */
    protected static function getDb(): PDO
    {
        try {
            return new PDO(
                'mysql:host='.CONFIG['db']['DB_HOST'].';dbname='.CONFIG['db']['DB_NAME'].';charset=utf8;port='.CONFIG['db']['DB_PORT'],
                CONFIG['db']['DB_USER'],
                CONFIG['db']['DB_PSWD'],
                [
                    'ATTR_ERRMODE' => PDO::ERRMODE_EXCEPTION,
                    'ATTR_DEFAULT_FETCH_MODE' => PDO::FETCH_ASSOC,
                ]
            );
        } catch (Exception $error) {
            exit($error->getMessage());
        }
    }
}
