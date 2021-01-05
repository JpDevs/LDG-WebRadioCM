<link rel='stylesheet' href='style.css' />
<?php  
    $writer="<?php".'
    '.'$host = '."'".$_POST['dbHost']."'".';
    '.'$bd = '."'".$_POST['nomeDB']."'".';
    '.'$usuario = '."'".$_POST['userSQL']."'".';
    '.'$senha = '."'".$_POST['passSQL']."'".';
    '.'$key = '."'".$_POST['key']."'".';
    '."?>";

    $write=fopen('../includes/auth.php' , 'w');

        if(isset($_POST['install']))
        {
            fwrite($write,$writer);
            fclose($write);
            echo "<script>alert('Redirecionando...');window.location
            .href='../painel';; </script>";
            

        }

       