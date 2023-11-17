<?php
require_once 'cliente/agendamento.php';
$agenda = readUserAction($conn);

    
?>

<div class="container">
    <div class="row">
        <a href=""><h1>Agenda</h1></a>
        <a class="btn btn-success text-white" href="">New</a>
    </div>
    <div class="row flex-center">
        <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
    </div>

    <table class="table-cliente">
        <tr>
            <th>NAME</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>PLACA</th>
            <th>DATA</th>

        </tr>
        <?php foreach($cliente as $row): ?>
        <tr>
            <td class="user-name"><?=htmlspecialchars($row['nome'])?></td>
            <td class="user-email"><?=htmlspecialchars($row['cpf'])?></td>
            <td class="user-phone"><?=htmlspecialchars($row['tel'])?></td>
            <td class="user-phone"><?=htmlspecialchars($row['placa'])?></td>
            <td class="user-phone"><?=htmlspecialchars($row['data_servico'])?></td>
            <td>
                <a class="btn btn-primary text-white" href="">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger text-white" href="">Remover</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
