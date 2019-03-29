<?php

  class DB extends SQLite3
    {
        function __construct()
        {
            $this->open($_SERVER['DOCUMENT_ROOT'].'/projects.db');
        }
    }

    class SQLiteBLOB {

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * Initialize the object with a specified PDO object
     * @param \PDO $pdo
     */
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Insert blob data into the documents table
     * @param type $pathToFile
     * @return type
     */
    public function insertDoc($mimeType, $pathToFile, $table, $p) {
        if (!file_exists($pathToFile))
            throw new \Exception("File %s not found.");

        $sql = "INSERT INTO $table(mime_type,doc) "
                . "VALUES(:mime_type,:doc)";

        // read data from the file
        $fh = fopen($pathToFile, 'rb');

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':mime_type', $mimeType);
        $stmt->bindParam(':doc', $fh, \PDO::PARAM_LOB);
        $stmt->execute();

        fclose($fh);

        return $this->pdo->lastInsertId();
    }

    /**
     * Read document from the documents table
     * @param type $documentId
     * @return type
     */
    public function readDoc($documentId, $table, $p) {
        $sql = "SELECT br_pr_pic "
                . "FROM $table "
                . "WHERE $p = $documentId";

        // initialize the params
        $mimeType = null;
        $doc = null;
        //
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute()) { //[":document_id" => $documentId]

            // $stmt->bindColumn(1, $mimeType);
            // $stmt->bindColumn(1, $doc, \PDO::PARAM_LOB);

            return $stmt->fetch(\PDO::FETCH_BOUND) ?
                    ["$p" => $documentId,
                     "doc" => $doc] : null;
        } else {
            return null;
        }
    }
}

?>
