<h1>Editar usuario</h1>

<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $resultado = $conexao->query($sql);
    $row = $resultado->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?=$row->id?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?=$row->nome?>">
    </div>
    <div class="mb-3">
        <label for="emial">E-mail</label>
        <input type="email" name="email" class="form-control" value="<?=$row->email?>">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" name="data" id="" class="form-control" value="<?=$row->data_nasc?>">
    </div>
    <div class="mb-3">
        <button class="btn btn-outline-success" type="submit">Cadastrar</button>
    </div>

</form>