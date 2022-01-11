//PHP Document
<?php
class MongoData {
function __construct(){
    $this->db = (new MongoDB\Client ) -> Dame -> ranking;
}
public function insertInto($item=[]){
        if( empty($item)){
        return false;
        }
        $write) $this -> db -> insertOne(
        [
        'name' => $item['name'],
        'züge' => $item['züge']
        ]);

        return $write ->getInsertedId();
}
}
?>