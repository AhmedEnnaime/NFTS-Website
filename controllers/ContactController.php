<?php
require_once "../models/Contact.php";

class ContactController{

    public function addContact(){
        if(isset($_POST['add'])){
            $data = array(
                'firstname'=>$_POST['firstname'],
                'lastname'=>$_POST['lastname'],
                'email'=>$_POST['email'],
                'phone'=>$_POST['phone'],
                'message'=>$_POST['message'],
            );
            $result = Contact::add($data);
            if($result == 'ok'){
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }
    
}

?>