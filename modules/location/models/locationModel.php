<?php
function getListLocation(){
    return db_fetch_array("select * from `location`");
}
function getLocationById($id){
    return db_fetch_row("select * from `location` where `id` = $id");
}
function insertLocation($id,$name){
    db_insert("`location`",array(
        'id' => $id,
        'name' => $name
    ));
}