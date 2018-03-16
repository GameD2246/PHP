<?php

function validar($escolha, $redirecionamento){
    if ($escolha == "sim"){
        echo "Parabéns você está apto!!!";
    } else {
        header("location:$redirecionamento?mensagem=nao");
    }
}
