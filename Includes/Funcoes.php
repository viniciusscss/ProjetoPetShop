<?php
function validarCampo($campo) {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    if (strlen($telefone) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
    }
    return $telefone;
}

function mostrarErro($campo) {
    if (!empty($_SESSION['erros'][$campo])) {
        echo '<span class="erro">' . $_SESSION['erros'][$campo] . '</span>';
    }
}
?>