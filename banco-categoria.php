<?php

function listaCategorias($conexao) {
    $categorias = array();
    $resultado = mysqli_query($conexao,"SELECT * FROM categorias");

    while($categoria =  mysqli_fetch_assoc($resultado)) {
        $categorias[] = $categoria;
    }

    return $categorias;
}