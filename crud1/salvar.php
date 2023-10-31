<?php 
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST[md5('senha')];
            $data_nasc = $_POST['data']; 

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('cadastro realizado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                echo '<script>alert("erro");</script>';
            }
            break;
        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data'];
            
            $sql = "UPDATE usuarios SET nome='{$nome}', senha='{$email}',senha='{$senha}',data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"]; 

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('alteracao realizada');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                echo '<script>alert("erro");</script>';
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('alteracao realizada');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                echo '<script>alert("erro");</script>';
            }
            break; 

    }

?>