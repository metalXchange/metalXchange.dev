<?php

require_once '../bootstrap.php';

abstract class BaseModel
{
    /** @var PDO|null Connection to the database */
    protected static $dbc = null;

    /** @var array Database values for a single record. Array keys should be column names in the DB */
    protected $attributes = array();

    /**
     * Constructor
     *
     * An instance of a class derived from Model represents a single record in the database.
     *
     * $param array $attributes Optional array of database values to initialize the model record with
     */
    public function __construct(array $attributes = array())
    {
        self::dbConnect();

        $this->attributes = $attributes;
    }

    /**
     * Connect to the DB
     *
     * This method should be called at the beginning of any function that needs to communicate with the database
     */
    protected static function dbConnect()
    {
        if (!self::$dbc) {
            
            self::$dbc = new PDO('mysql:host=' . $_ENV['DB_HOST'] .';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    /**
     * Get a value from attributes based on its name
     *
     * @param string $name key for attributes array
     *
     * @return mixed|null value from the attributes array or null if it is undefined
     */
    public function __get($name)
    {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        } else {
            return null;
        }
    }

    /**
     * Set a new value for a key in attributes
     *
     * @param string $name  key for attributes array
     * @param mixed  $value value to be saved in attributes array
     */
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /** Store the object in the database */
    public function save()
    {
        if (!empty($this->attributes['id'])) {
            $this->update();
        } else {
            $this->insert();
        }

    }

    public function delete()
    {
        $stmt = self::$dbc->prepare("DELETE FROM users WHERE id = :id");

        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_STR);

        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }


    public static function uploadFile()
    {
        $message = null;

        if(!empty($_FILES))
        {
            $valid = true;
            if ($_FILES['image_url']['name'])
            {
                if (!$_FILES['image_url']['error'])
                {
                    $tempFile = $_FILES['image_url']['tmp_name'];
                    $extension = pathinfo($_FILES['image_url']['name'], PATHINFO_EXTENSION);

                    // validate size and extension
                    if ($_FILES['image_url']['size'] > (1024000000))
                    {
                        $valid = false;
                        $message = "File size too large; please submit files under 1MB.";
                    }
                    if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
                    {
                        $valid = false;
                        $message = "Invalid file extension type.";
                    }
                    // If file makes to this point, send file to this directory:
                    if($valid)
                    {
                        $saveSuccessful = move_uploaded_file($tempFile, '../public/img/uploads/' . $_FILES['image_url']['name']);
                        
                        if($saveSuccessful) {
                            return '/img/uploads/' . $_FILES['image_url']['name'];
                        }
                    } else {
                        $message = 'Error on file upload.';
                    }
                }
            }
        }

        Log::error($message);
    }

    /**
     * Insert new entry into database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function insert();

    /**
     * Update existing entry in database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function update();
}
