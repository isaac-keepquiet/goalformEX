<?php
    // var_dump()

    $user = $_POST['username'];
    $email = $_POST['eml'];
    $password = $_POST['pwd'];
    var_dump($user, $email, $password);

    class input{
        $a = ["abc", "123"];
        foreach($a as $name){
            if($user == $name){
                die("User name disabled");
            }
            // else{
            //     if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            //         $nameErr = "Only letters and white space allowed";
            //     }
            // }
        }

        function post($user){
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                return false;
            }
        }
        return ture;
    }
    $input = new input();
    var_dump($input->post());

    $uname = $input->post($user);
    if ($uname == false){
        die("Only letters and white space allowed")
    }



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