<?php include('menu.php');?>
<?php
	session_start();
	require_once '_conexao.php';
	$teste = $db -> query ("select el.nome from eleitor el where el.email = '$email'");
	foreach ($teste as $tt){
		echo $tt['Nome'];
 echo $tt['Sobrenome'];
 echo $tt['Endereco'];
 echo $tt['Estado'];
 echo $tt['Cidade'];
 echo $tt['Telefone'];
 echo $tt['Email'];
 echo $tt['AreaAtuacao'];
 echo $tt['Nivel'];
 echo $tt['Senha'];
 echo $tt['FaleUmPoucoSobreVoce'];
 echo "Teste conxcao";
	}
?>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                    Bem Vindo ao TeachHub !
                </h1>
                <small>
                    Portal de compartilhamento de conteudo on-line para aulas.
                </small>
            </div>
			<div class="text-center m-t-lg">
				<img alt="image" class="img-circle" src="img/teach_hub_logo cortada.png" />
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>