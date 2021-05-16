<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: /index.php');
    }
    
    if(isset($_POST['submit']))
    {
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
            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
                $_SESSION['message'] = 'Ошибка при загрузке сообщения';
                header('Location: register.php');
                exit();
            }
            
            if(!preg_match("/^[a-zA-Z0-9]+$/",$login))
            {
                $_SESSION['message'] = 'Недопустимые символы в логине!';
                header('Location: register.php');
                exit();
            }
        
            if(strlen($login) < 3 or strlen($login) > 30)
            {
                $_SESSION['message'] = 'Логин слишком короткий или длинный!';
                header('Location: register.php');
                exit();
            }
            
            $query = mysqli_query($connect, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($connect, $login)."'");
            if(mysqli_num_rows($query) > 0)
            {
                $_SESSION['message'] = 'Логин занят!';
                header('Location: register.php');
                exit();
            }
        
        
            $password = md5($password);
    
            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
    
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: auth.php');
    
    
        } else {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: register.php');
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <!-- Форма регистрации -->
    <div class="p-x-1 p-y-3">
    <form action="register.php" method="post" enctype="multipart/form-data">
        <center>
        <legend class="m-b-1 text-xs-center">Регистрация</legend>
        </center>
        <label>ФИО</label>
        <input type="text" class="form-control" name="full_name" placeholder="Введите свое полное имя" required>
        <label>Логин</label>
        <input type="text" class="form-control" name="login" placeholder="Введите свой логин" required>
        <label>Почта</label>
        <input type="email" class="form-control" name="email" placeholder="Введите адрес своей почты" required>
        <label>Изображение профиля</label>
        <input type="file" class="form-control" name="avatar" required>
        <label>Пароль</label>
        <input type="password" class="form-control" name="password" placeholder="Введите пароль" required>
        <label>Подтверждение пароля</label>
        <input type="password" class="form-control" name="password_confirm" placeholder="Подтвердите пароль" required> <br>
        <input name="submit" type="submit" class="btn btn-primary" value="Зарегистрироваться">
        <center> <p>
            У вас уже есть аккаунт? - <a href="/auth.php">авторизируйтесь</a>!
        </p> </center>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>

</body>
</html>