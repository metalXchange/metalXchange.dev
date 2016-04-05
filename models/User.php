<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/BaseModel.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
     
        $stmt = $dbc->prepare('INSERT INTO users (join_date, first_name, last_name, user_name, password, email, band_name, instrument, soul_possession, bio, image_url) VALUES (:join_date, :first_name, :last_name, :user_name, :password, :email, :band_name, :instrument, :soul_possession, :bio, :image_url)');

        $stmt->bindValue(':join_date',  $item['join_date'],  PDO::PARAM_STR);
        $stmt->bindValue(':first_name',  $item['first_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':last_name',  $item['last_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':user_name',  $item['user_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':password',  $item['password'],  PDO::PARAM_STR);
        $stmt->bindValue(':email',  $item['email'],  PDO::PARAM_STR);
        $stmt->bindValue(':band_name',  $item['band_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':instrument',  $item['instrument'],  PDO::PARAM_STR);
        $stmt->bindValue(':soul_possession',  $item['soul_possession'],  PDO::PARAM_STR);
        $stmt->bindValue(':bio',  $item['bio'],  PDO::PARAM_STR);
        $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
    }

    /** Update existing entry in the database */
    protected function update()
    {
        $stmt = self::$dbc->prepare('UPDATE users (id, join_date, first_name, last_name, user_name, password, email, band_name, instrument, soul_possession, bio, image_url) VALUES (:id, :join_date, :first_name, :last_name, :user_name, :password, :email, :band_name, :instrument, :soul_possession, :bio, :image_url)');

        $stmt->bindValue(':id',  $item['id'],  PDO::PARAM_STR);
        $stmt->bindValue(':join_date',  $item['join_date'],  PDO::PARAM_STR);
        $stmt->bindValue(':first_name',  $item['first_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':last_name',  $item['last_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':user_name',  $item['user_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':password',  $item['password'],  PDO::PARAM_STR);
        $stmt->bindValue(':email',  $item['email'],  PDO::PARAM_STR);
        $stmt->bindValue(':band_name',  $item['band_name'],  PDO::PARAM_STR);
        $stmt->bindValue(':instrument',  $item['instrument'],  PDO::PARAM_STR);
        $stmt->bindValue(':soul_possession',  $item['soul_possession'],  PDO::PARAM_STR);
        $stmt->bindValue(':bio',  $item['bio'],  PDO::PARAM_STR);
        $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM users where id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

        // @TODO: Store the result in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents
        // $instance = null;
        // if ($result) {
        //     $instance = new static($result);
        // }
        // return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM users");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        $array = [];
        if ($result) {
            foreach ($result as $key => $value) {
                $instance = new static($value);
                $array[] = $instance;
            }
        }
        return $array;
    }
}
