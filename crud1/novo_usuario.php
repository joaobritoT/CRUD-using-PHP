<h1>NOVO USUARIO</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="emial">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" name="data" id="" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-outline-success" type="submit">Cadastrar</button>
    </div>

</form>