<?php

namespace core;


class Auth
{
    public static function getUser(){
        if (isset($_SESSION['email'])){
            return $_SESSION['email'];
        }
        else  {
            return false;
        }
    }

    public static function checkLogin($pdo,$email,$password){

            try {
                $ready = $pdo->prepare("select * from user where email='" . $email . "' LIMIT 1");
                $ready->execute();
                $result = $ready->fetch();
                if ($result){
                   // if($result['password'] == $password){
                    if(password_verify($password,$result['password'])){
                        $_SESSION['email']=$email;
                    }
                    else {
                        //echo('password wrong')
                        $_SESSION['error'] = "password wrong";
                        return false;
                    }

                }
                else {
                    //echo('not  registered');
                    $_SESSION['error'] = "You are not  registered";
                    return false;
                }

            }
            catch (\Exception $err){
                echo($err->getMessage());

            }

    }

    public static function registerUser($pdo,$email,$password){
        try{
            $sql = "select count(*) from user where email = '".$email."'";
            $statement= $pdo->prepare($sql);
            $statement->execute();
            $result= $statement->fetch();

            //email already exists
            if($result[0] == '1') {
                $_SESSION['error']='user  already registered!!';
                return false;
            }

            $password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "insert into user values('','".$email."','".$password."')";

            $statement = $pdo->prepare($sql);
            return $statement->execute();

        }
        catch (\Exception $err){
            echo($err->getMessage());
            die();
        }




    }


}