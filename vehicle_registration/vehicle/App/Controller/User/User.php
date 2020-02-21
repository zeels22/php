<?php
namespace App\Controller\User;

use App\Models\Post;
use \Core\View;


class User extends \Core\Controller{
    public function login(){
        if(isset($_POST['submit'])){
            if(Post::userCheck($_POST['email'], $_POST['password'])){
                session_start();
                $_SESSION['userid'] = $_POST['email'];
                header('Location: http://localhost/vehicle/public/User/User/dashboard');
            }else {
                View::renderTemplate('user/index.html');
                echo "email OR pass not match";
            }
        }else{
            View::renderTemplate('user/index.html');
        }
    }

    public function dashboard(){
        session_start();
        if(!isset($_SESSION['userid'])){
            header('Location: http://localhost/vehicle/public/User/User/login');
        }else{
        $id = Post::select('*', 'service_registration');
        View::renderTemplate('user/dashboard.html', ['datas'=>$id]);
        }
         }
    public function logoutAction(){
        unset($_SESSION);
        header('Location: http://localhost/vehicle/public/user/user/Login');
     }
     public function RegisterAction(){
         if(isset($_POST)&&(!empty($_POST))){
            extract($_POST);
            $infofields = implode("`, `", array_keys($info));
            $infovalues = implode("\", \"", array_values($info));
            $addrfields = implode("`, `", array_keys($addr));
            $addrvalues = implode("\", \"", array_values($addr));
            Post::insert('user_info', "$infofields", $infovalues);
            Post::insert('user_address', "$addrfields", $addrvalues);
            header('Location: http://localhost/vehicle/public/user/user/Login');
         }else{
        View::renderTemplate('User/Register.html');
         }
     }
     public function serviceAction(){
         if(isset($_POST['submit'])){
             print_r($_POST);
             array_pop($_POST);
             $fieldname = array_keys($_POST);
             $values = array_values($_POST);
             $fieldnames = implode("`, `", $fieldname);
             $value = implode("\", \"", $values);
             if(Post::insert('service_registration', $fieldnames, $value)){
               echo "done";
                }
         }
         else{
         View::renderTemplate('User/service.html');
         }
     }
}
?>