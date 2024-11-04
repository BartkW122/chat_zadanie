<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie</title>
</head>
<body>
    <div class='logwanie'>
        <form action='index.php' method='post'>
            <label>Wybierz pokój:</label>
            <select class="wybor_chat" name="wybor_chat">
                <option value="it">IT</option>
            </select>
            <br>
            <label>Podaj nazwe:</label>
            <br>
            <input class='name_input' type='text' name='name'>
            <button class='btn1' type='submit'>dołącz</button>
        </form>
    </div>
</body>
</html>