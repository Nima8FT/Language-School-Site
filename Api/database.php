<?php

class Database
{

    public $dbName = "language-school-site";
    public $serverName = "localhost";
    public $username = "root";
    public $password = "";
    public $con;

    function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=$this->serverName;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insert($Table, $Fields, $Values)
    {
        try {
            $i = 1;
            $fi = '';
            $qi = '';
            foreach ($Fields as $field) {

                if (count($Fields) == $i) {
                    $fi .= $field;
                    $qi .= '?';
                } else {
                    $fi .= $field . ',';
                    $qi .= '?,';
                }

                $i++;
            }

            $res = $this->con->prepare('INSERT INTO ' . $Table . ' (' . $fi . ') VALUES (' . $qi . ')');

            for ($i = 1; $i <= count($Values); $i++)
                $res->bindValue($i, $Values[$i - 1]);


            $res->execute();
        } catch (PDOException $e) {
            return  $e->getMessage();
        }
    }

    public function update($Table, $Fields, $Values, $id)
    {
        try {

            $i = 1;
            $fi = '';
            foreach ($Fields as $field) {

                if (count($Fields) == $i)
                    $fi .= $field . '=?';

                else
                    $fi .= $field . '=? ,';


                $i++;
            }
            $fi .= ' WHERE id=' . $id;

            $res = $this->con->prepare('UPDATE ' . $Table . ' SET ' . $fi);


            for ($i = 1; $i <= count($Values); $i++)
                $res->bindValue($i, $Values[$i - 1]);


            $res->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function delete($Table, $id)
    {
        try {
            $res = $this->con->prepare('DELETE FROM ' . $Table . ' WHERE id=?');
            $res->bindValue(1, $id);
            $res->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function search($Table, $Fields, $Values, $isFix, $isArr)
    {
        try {

            $i = 1;
            $fi = '';
            foreach ($Fields as $field) {

                if ($isFix == false)
                    if (count($Fields) == $i)
                        $fi .= $field . ' LIKE ?';
                    else
                        $fi .= $field . ' LIKE ? AND ';

                else if ($isFix == true)
                    if (count($Fields) == $i)
                        $fi .= $field . '=?';
                    else
                        $fi .= $field . '=? AND ';

                $i++;
            }

            $res = $this->con->prepare('SELECT * FROM ' . $Table . ' WHERE ' . $fi);


            for ($i = 0; $i < count($Values); $i++)
                if ($isFix == false)
                    $res->bindValue($i + 1, '%' . $Values[$i] . '%');
                else if ($isFix == true)
                    $res->bindValue($i + 1, $Values[$i]);

            $res->execute();

            if ($res->rowCount() > 1 || $isArr == true)
                $json = $res->fetchAll(PDO::FETCH_ASSOC);
            else
                $json = $res->fetch(PDO::FETCH_ASSOC);

            echo json_encode($json);
            return $json;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($qry)
    {
        $res = $this->con->prepare($qry);
        $res->execute();
        if ($res->rowCount() > 1)
            $json = $res->fetchAll(PDO::FETCH_ASSOC);
        else
            $json = $res->fetch(PDO::FETCH_ASSOC);

        echo json_encode($json);
    }
}
