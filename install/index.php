<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instalação do Site</title>
        <link rel="stylesheet" href="./css/install.css">
    </head>
    <body style="background: url(./img/bg.png);">
        <main>
            <header><h1>Instalação</h1></header>
            <hr>
			<center>
            <form action="" method="POST">
                <div class="form_div">
                    <input type="text" class="form_input" placeholder="DB-HOST" name="localhost">
                </div>

                <div class="form_div">
                    <input type="text" class="form_input" placeholder="DB-USER" name="userSQL">
                </div>

                <div class="form_div">
                    <input type="password" class="form_input" placeholder="DB-PASSWORD." name="passSQL">
                </div>

                <div class="form_div">
                    <input type="text" class="form_input" placeholder="DB-NAME" name="nomeDB">
                </div>

                <button type="submit" class="form_button">Enviar</button>
				</center>
            </form>
        </main>
    </body>
</html>