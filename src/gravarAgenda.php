<?php

require_once 'agendamento.php';

function findUserAction($conn, $id) {
    return findUserDb($conn, $id);
}

function readUserAction($conn) {
    return readUserDb($conn);
}

function createUserAction($conn, $nome, $cpf, $tel, $placa, $data_servico) {
    $createUserDb = createUserDb($conn, $nome, $cpf, $tel, $placa, $data_servico);
    $message = $createUserDb == 1 ? 'success-create' : 'error-create';
    return header("Location: agenda.php?message=$message");
}

function updateUserAction($conn, $nome, $cpf, $tel, $placa, $data) {
    $updateUserDb = updateUserDb($conn, $id, $nome, $cpf, $tel, $placa, $data_servico);
    $message = $updateUserDb == 1 ? 'success-update' : 'error-update';
    return header("Location: ./agenda.php?message=$message");
}

function deleteUserAction($conn, $id) {
    $deleteUserDb = deleteUserDb($conn, $id);
    $message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
    return header("Location: ./agenda.php?message=$message");
}