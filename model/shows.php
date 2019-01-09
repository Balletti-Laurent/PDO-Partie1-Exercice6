<?php

class shows {

    public $title = '';
    public $performer = '';
    public $date = '00/00/0000';
    public $startTime = '00:00:00';
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'laurent', 'Yasmina');
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    
    /**
     * methode permettant de recuperer la liste des shows
     * @return array
     */
    public function getShowListByTitle() {
        $query = 'SELECT `title`,`performer`,DATE_FORMAT(`date`,\'%e/%m/%Y\') AS `date`,`startTime` FROM `shows` ORDER BY `title`';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

}
