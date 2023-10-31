<H1>LISTAR USUARIO</H1>

<?php 
    $sql = "SELECT * FROM usuarios";

    $resultado = $conexao->query($sql);
    $qtd = $resultado->num_rows;

    if($qtd > 0){
        print "<table class = 'table table-hover table-striped table-bordered'>";
        print"<tr>";
            print "<th>Nome</th>";
            print "<th>email</th>";
            print "<th>data de nascimento</th>";
            print "<th>acoes</th>";
            print "</tr>";
        while($row = $resultado->fetch_object()){
            print"<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <button onclick=\"location.href = '?page=editar&id=".$row->id."';\" class = 'btn btn-success'>editar</button>

                    <button onclick=\"if(confirm('tem certeza que deseja exlcuir o usuario?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false};\"class = 'btn btn-danger'>excluir</button>
                    </td>";
                    
            print "</tr>";
        }
        print "</table>";
    }

    else{
        print "<p class='alert alert-danger'>sem resultados</p>";
    }
?>



