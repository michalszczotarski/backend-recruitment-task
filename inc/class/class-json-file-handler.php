<?php

class JsonFileHandler
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getAllRecords()
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/dataset/" . $this->filename;

        if (file_exists($path)) {
            $jsonData = file_get_contents($path);

            $data = json_decode($jsonData, true);

            return $data;
        }
    }

    public function deleteRecord($id)
    {
        $data = $this->getAllRecords();

        foreach ($data as $key => $record) {
            if ($record['id'] === $id) {
                unset($data[$key]);
                break;
            }
        }

        return $this->updateJsonFile($data);
    }

    public function addRecord($record)
    {
        $data = $this->getAllRecords();
        $record = array_merge(array('id' => count($data) + 1), $record);
        $data[] = $record;

        return $this->updateJsonFile($data);
    }

    private function updateJsonFile($data)
    {
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        $result = file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/dataset/" . $this->filename, $jsonData);

        if ($result)
            return 1;

        return 0;
    }
}
?>