<?php
require_once 'agenda.php';

if (isset($_POST["id"], $_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["tel"]) && isset($_POST["placa"]) && isset($_POST["data"]))
    updateUserAction($conn, $_POST["id"], $_POST["nome"], $_POST["cpf"], $_POST["tel"], $_POST["placa"], $_POST["data"]);

$user = findUserAction($conn, $_GET['id']);

?>  
<div class="container">
    <div class="row">
        <a href="index.php"><h1>ALTERAR AGENDA</h1></a>
        <a class="btn btn-success text-white" href="index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="alterarAgenda.php" method="POST">
                <input type="hidden" name="id" value="<?=$cliente['id']?>" required/>
                <label>Name</label>
                <input type="text" name="nome" value="<?=htmlspecialchars($cliente['nome'])?>" required/>
                <label>CPF</label>
                <input type="number" name="cpf" value="<?=htmlspecialchars($cliente['cpf'])?>" required/>
                <label>Telefone</label>
                <input type="number" name="tel" value="<?=htmlspecialchars($cliente['tel'])?>" required/>
                <label>Placa</label>
                <input type="text" name="placa" value="<?=htmlspecialchars($cliente['placa'])?>" required/>
                <label>Data</label>
                <input type="date" name="data" value="<?=htmlspecialchars($cliente['data_servico'])?>" required/>


                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
