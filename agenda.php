<?php
require_once 'cliente/agendamento.php';
require_once 'src/database';
$users = readUserAction($conn);
?>

<div class="container">
    <div class="row">
    </div>
    <div class="row flex-center">
        <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
    </div>

    <table class="table-cliente">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Placa</th>
            <th>Data</th>
        </tr>
        <?php foreach($users as $row): ?>
        <tr>
            <td class="cliente-name"></td>
            <td class="cliente-email"></td>
            <td class="cliente-phone"></td>
            <td class="cliente-phone"></td>
            <td class="cliente-phone"></td>
            <td>
                <a class="btn btn-primary text-white" href="">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger text-white" href="">Remover</a>
            </td>
        </tr>
    </table>
</div>
