<?php Class Text_model extends CI_model{
    

    public function getNames(){
        $names = array(
        array("fname" => 'Pham', "lname" => 'Huong'),
        array("fname" => 'Ham', "lname" => 'Bonny'),
        array("fname" => 'Anna', "lname" => 'Smith')
    );
        return $names;
    }
}