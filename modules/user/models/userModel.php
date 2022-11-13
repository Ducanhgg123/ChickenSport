<?php
function addUser($data){
    return db_insert('`user`',$data);   
}
function checkUserExist($username,$password){
    if (db_num_rows("select * from `user` where `username` = '$username' and `password` = $password")>0)
        return true;
    return false;
}
function getUser($username,$password){
    return db_fetch_row("select * from `user` where `username` = '$username' and `password` = $password");
}
function getNearByUser($location_id,$hobby_id){
    return db_fetch_array("select `username`,`fullname`,`email`,`hobby_id`,`phone`,`location_id`,`description`,`image` from `user` where `location_id` = $location_id and `hobby_id` = $hobby_id");
}
function getListUser(){
    return db_fetch_array("select * from `user`");
}