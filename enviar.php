<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $Suamensagem = addslashes($_POST['Suamensagem']);
    
    $para = "dfmintelligence@gmail.com";
    $assunto = "coleta de dados - dfm":

    $corpo = "Nome: ".$nome. "\n"."E-mail ".$email."\n"."Celular: ".$celular."\n"."Sua mensagem: ".$Suamensagem."\n":

    $cabeca = "From danielge202@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!"):
    }
    else{
        echo("Houve um erro ao enviar o e-mail");
    }
?>