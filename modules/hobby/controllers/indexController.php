
<?php
function construct()
{
    load_model("hobby");
};
function getHobbyListAction(){
    echo json_encode(getListHobby());
}
function getHobbyAction(){
    $id=$_GET['id'];
    echo json_encode(getHobbyById($id));
}
