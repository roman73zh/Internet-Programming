<?php

    session_start();
    $connect = mysqli_connect('localhost', "Projects_fuck", "28003208Fuck", "Projects_hist_data");

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
            exit();
        }
        
        if(!preg_match("/^[a-zA-Z0-9]+$/",$login))
        {
            $_SESSION['message'] = 'Недопустимые символы в логине!';
            header('Location: ../register.php');
            exit();
        }
    
        if(strlen($login) < 3 or strlen($login) > 30)
        {
            $_SESSION['message'] = 'Логин слишком короткий или длинный!';
            header('Location: ../register.php');
            exit();
        }
        
        $query = mysqli_query($connect, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($connect, $login)."'");
        if(mysqli_num_rows($query) > 0)
        {
            $_SESSION['message'] = 'Логин занят!';
            header('Location: ../register.php');
            exit();
        }
    
    
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../auth.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>