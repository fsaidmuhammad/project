<?php
class Db {
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect(
            'localhost',
            'root',
            '',
            'industrial_training'
        ) or die (mysqli_connect_error());

    }

    protected function insert($table, Array $data)
    {
        $values = array_values($data);
        $columns = array_keys($data);

        $escapedValues = [];
        $stringColunms = implode(', ', $columns);

        foreach ($values as $value) {
            $escapedValues[] = $this->escape($value);
        }

        $stringValue = implode(', ', $escapedValues);

        $sql = "insert into {$table}({$stringColunms}) values ({$stringValue})"; 

        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));

        if ($result) {
            return true;
        }

        return false;
    }

    protected function select($sql, $single=false)
    {
        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        $data = [];

        if ($single) {
            $result = mysqli_fetch_assoc($result);

            if (!$result) {
                return $data;
            }

            return $result;
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }
	
    protected function escape($data)
    {
        if (!is_numeric($data)) {
            return "'$data'";
        }

        return $data;
    }
}
