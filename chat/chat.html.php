<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>chat</title>
</head>
<body>
    <div class='chat'>
        <div class='title'>
            <?php
               
                session_name('log');
                session_start();
                foreach($_SESSION['users'] as $user){
                    echo 'Witaj '.$user['name'].', na rozmowie '.$user['wybor'];
                }
                
            ?>
        </div>
        <div class='chat_mesages'>

        </div>
        <div class='mesages'>
            <form>
                <label>wiadomość:</label>
                <input class='mess_input' type='text' name='mess'>
                <button class='btn2' type='submit'>Wyślij</button>
            </form>
            <form action='logout.php'>
                <button class='btn3' type='submit'>wyloguj</button>
            </form>
        </div>
        
    </div>
    <div class='users'>
        <?php
            
            echo 'Zalogowani';
            echo '<br>';
            foreach($_SESSION['users'] as $user){
                echo $user['name'];
                echo '<br>';
            }
            
        ?>
    </div>
</body>
</html>