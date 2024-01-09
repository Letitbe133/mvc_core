<?php

class Utilisateur extends Db
{
    /**
     * insertion d'un utilisateur en BDD
     *
     * @param array $data
     *
     * @return integer
     */
    public static function create(array $data): int
    {
        $query = 'INSERT INTO user (email, password, username, role) VALUES(:email, :password, :username, :role);';

        $pdo = self::getDb();

        $stmt = $pdo->prepare($query);

        $stmt->execute($data);

        return $pdo->lastInsertId();
    }

    /**
     * récupère un user par son email
     *
     * @param string $email
     *
     * @return mixed un tableau associatif contenant les infos de l'utilisateur trouvé ou false
     */
    public static function findByEmail(string $email): mixed
    {
        $query = 'SELECT email FROM user WHERE email= :email;';

        $pdo = self::getDb();

        $stmt = $pdo->prepare($query);

        $stmt->execute(['email' => $email]);

        return $stmt->fetch();
    }
}
