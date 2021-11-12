<?php
    // var_dump()

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $user = test_input($_POST['username']);
    //     $email = test_input($_POST['email']);
    //     $password = test_input($_POST['password']);
    // }
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // function post($user){
    // }

    // 检查用户名中的字符
    function post($user, $email){
        if(!preg_match("/^[a-zA-Z-' ]*$/",$user)){
            // echo "Only letters and white space allowed";
            return false;
        }

        // 排除吧被占用的用户名
        $a = ["abc", "123"];

        foreach($a as $name){
            if($user == $name){
                return false;
                // echo "User name disabled";
            }
            // else{
            //     if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            //         $nameErr = "Only letters and white space allowed";
            //     }
            // }
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        return true;
    }

    // function post($email){
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         return false;
    //     }
    // }

    $uname = post($user, $email);
    // $uemsail = post($email);
    if($uname == false){
        die("User name disabled");
    }
    // if($uemail == false){
    //     die("Invalid email format");
    // }


    // var_dump($user, $email, $password);
    var_dump($_POST);


    //class order
    // class input{}
    // $input = new input();
    // var_dump($input->post());

    // $uname = $input->post($user);
    // if ($uname == false){
    //     die("Only letters and white space allowed");
    // }



    // 禁用的用户名
    
    // 用户名合规
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
        // if {
            // $name = test_input($_POST['username']);
            // if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            //     $emailErr = "Only letters and white space allowed";
            // }                   
        // }

        // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //     $emailErr = "Invalid email format";
        // }                   
    // }
    
?>