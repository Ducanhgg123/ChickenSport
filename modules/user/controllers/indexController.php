
<?php
function construct()
{
    load_model("user");
};
function addUserAction(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $hobby_id=$_POST['hobby_id'];
    $phone=$_POST['phone'];
    $social_link=$_POST['social_link'];
    $location_id=$_POST['location_id'];
    $data=array(
        'username' => $username,
        'password' => $password,
        'fullname' => $fullname,
        'email' => $email,
        'hobby_id' => $hobby_id,
        'phone' => $phone,
        'social_link' => $social_link,
        'location_id' => $location_id
    );
    addUser($data);
    unset($data['password']);
    echo json_encode($data);
}
function checkUserAction(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (checkUserExist($username,$password)){
        $data=getUser($username,$password);
        $data['ok']=true;
    }else{
        $data['ok']=false;
    }
    echo json_encode($data);
}
function getNearByUserAction(){
    $location_id=$_GET['location_id'];
    $hobby_id=$_GET['hobby_id'];
    echo json_encode(getNearByUser($location_id,$hobby_id));
}
function getUserListAction(){
    echo json_encode(getListUser());
}

