<?php
session_start();

$host = '127.0.0.1';


$db_name = 'agenda';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'usbw';

try {
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
throw $th;
}



if(isset($_POST['form_agenda'])){
    $nome = $_POST['nome'];
    $data_servico = $_POST['data_servico'];
    
    $query = "INSERT INTO rodapresa_form ('nome', 'cpf', 'tel', 'placa', 'data') VALUES ('$nome', '$cpf', '$tel', '$placa', '$data_servico')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['status'] = "Agendamento concluido com sucesso";
        header("Location: agendamento.php");
    }
    else{
        $_SESSION['status'] = "Não foi possível agendar!";
        header("Location: agendamento.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Serviço</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php
                if(isset($_SESSION['status']))
                {
                    echo"<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>     

                <div class="card mt-5">
                    <div class="card-header">
                        <h5>Preencha o formulário para agendar uma revisão</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">CPF</label>
                                <input type="text" name="cpf" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Telefone</label>
                                <input type="text" name="tel" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Placa</label>
                                <input type="text" name="placa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Data</label>
                                <input type="datetime-local" name="data_servico" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary" name="form_agenda">Agendar</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
