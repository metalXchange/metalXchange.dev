<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/BaseModel.php';

class Venues extends BaseModel
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        $stmt = self::$dbc->prepare('INSERT INTO venues (user_id, type, create_date, headline, capacity, lighting, pa_systems, beverages, item_description, price, trade, image_url) VALUES (:user_id, :type, :create_date, :headline, :capacity, :lighting, :pa_systems, :beverages, :item_description, :price, :trade, :image_url)');

        // TEMPORARY TEMPORARY TEMPORARY
        date_default_timezone_set('America/Chicago');
        $this->attributes['create_date'] = date('Y-m-d');



        $stmt->bindValue(':user_id',  $this->attributes['user_id'],  PDO::PARAM_STR);
        $stmt->bindValue(':type',  $this->attributes['type'],  PDO::PARAM_STR);
        $stmt->bindValue(':create_date',  $this->attributes['create_date'],  PDO::PARAM_STR);
        $stmt->bindValue(':headline',  $this->attributes['headline'],  PDO::PARAM_STR);
        $stmt->bindValue(':capacity',  $this->attributes['capacity'],  PDO::PARAM_STR);
        $stmt->bindValue(':lighting',  $this->attributes['lighting'],  PDO::PARAM_STR);
        $stmt->bindValue(':pa_systems',  $this->attributes['pa_systems'],  PDO::PARAM_STR);
        $stmt->bindValue(':beverages',  $this->attributes['beverages'],  PDO::PARAM_STR);
        $stmt->bindValue(':item_description',  $this->attributes['item_description'],  PDO::PARAM_STR);
        $stmt->bindValue(':price',  $this->attributes['price'],  PDO::PARAM_STR);
        $stmt->bindValue(':trade',  $this->attributes['trade'],  PDO::PARAM_STR);
        $stmt->bindValue(':trade_desc',  $this->attributes['trade_desc'],  PDO::PARAM_STR);
        $stmt->bindValue(':image_url',  $this->attributes['image_url'],  PDO::PARAM_STR);

        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
    }

    /** Update existing entry in the database */
    protected function update()
    {
        $stmt = self::$dbc->prepare('UPDATE venues SET
            type = :type, 
            capacity = :capacity, 
            lighting = :lighting, 
            pa_systems = :pa_systems, 
            beverages = :beverages, 
            item_description = :item_description, 
            price = :price, 
            trade = :trade, 
            trade_desc = :trade_desc,
            image_url = :image_url
            WHERE id = :id');

        $stmt->bindValue(':type',  $this->attributes['type'],  PDO::PARAM_STR);
        $stmt->bindValue(':headline',  $this->attributes['headline'],  PDO::PARAM_STR);
        $stmt->bindValue(':capacity',  $this->attributes['capacity'],  PDO::PARAM_STR);
        $stmt->bindValue(':lighting',  $this->attributes['lighting'],  PDO::PARAM_STR);
        $stmt->bindValue(':pa_systems',  $this->attributes['pa_systems'],  PDO::PARAM_STR);
        $stmt->bindValue(':beverages',  $this->attributes['beverages'],  PDO::PARAM_STR);
        $stmt->bindValue(':item_description',  $this->attributes['item_description'],  PDO::PARAM_STR);
        $stmt->bindValue(':price',  $this->attributes['price'],  PDO::PARAM_STR);
        $stmt->bindValue(':trade',  $this->attributes['trade'],  PDO::PARAM_STR);
        $stmt->bindValue(':trade_desc',  $this->attributes['trade_desc'],  PDO::PARAM_STR);
        $stmt->bindValue(':image_url',  $this->attributes['image_url'],  PDO::PARAM_STR);

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

        $stmt = self::$dbc->prepare("SELECT * FROM venues where id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // @TODO: Store the result in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }



    public static function findAdByUserID($userId)
    {
        self::dbConnect();
        $select = "SELECT * from venues where user_id = :user_id";
        $stmt = self::$dbc->prepare($select);
        $stmt->bindValue(":user_id", $userId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        // $instance = null;
        // if ($result) {
        //     $instance = new static($result);
        // }
        // return $instance;

        return $result;
    }



    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM venues");
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

    public static function subcat($subcategory)
    {
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM venues WHERE type = :value");
        $stmt->bindValue(':value', $subcategory,  PDO::PARAM_STR);
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


    public static function delete($id)
    {
        self::dbConnect();

        $stmt = self::$dbc->prepare("DELETE FROM venues WHERE id = :id");

        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }

}
