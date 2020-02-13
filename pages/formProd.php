<?php
include_once('pages/mensagens.php');
if(!empty($_POST)){
    $produto = trim($_POST["nomeproduto"]);
    $descricao = trim($_POST["descproduto"]);
    $quantidade = trim($_POST["quantproduto"]);
    $valor = trim($_POST["valproduto"]);
    trim($_POST["ativo"]) ? $ativo = 1 : $ativo = 0;


    $sqlproduto = "insert into produto (nome, descricao, quantidade, valor, ativo) values ('$produto', '$descricao', '$quantidade', '$valor', '$ativo')";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=http://localhost/2019.4/bololand/admin.php?pag=prod'>";

    //conecta no banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf-8");
    
    
    //cadastra o produto - endereço
    $salvo = mysqli_query($conn, htmlspecialchars($sqlproduto)) or die (mysqli_error($conn));

    if ($salvo){
        //echo "<div class='alert alert-success'> Salvo </div>";
        aviso("Salvo");
    } else {
        //echo "<div class='alert alert-danger'> Erro ao salvar! </div>";
        erro("Erro ao Salvar");
    }

    mysqli_close($conn);
}

?>

    <section class="container bg-branco">
        
        <form method="post" action="admin.php?pag=prod">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nomeproduto" maxlength="100">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descproduto" maxlength="200">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantproduto">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="valproduto">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-chech" name="ativo" checked>
            <label>Ativo</label>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn bg-azul branco pr-3">Enviar</button>
            <button type="reset" class="btn btn-danger branco">Limpar</button>
        </div>
        </form>
        </section>