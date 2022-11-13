<?php
function getListHobby(){
    return db_fetch_array("select * from `hobby`");
}
function getHobbyById($id){
    return db_fetch_row("select * from `hobby` where `id` = $id");
}