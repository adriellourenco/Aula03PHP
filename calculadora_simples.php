<?php

	//Declaração de variáveis
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$operacao = (String) null;
	$resultado = (double) 0;

	if (isset($_POST[("btnCalcular")])) {

		if (validarCampos($_POST['txtValor1'], $_POST['txtValor2'])) {

			$valor1 = $_POST['txtValor1'];
			$valor2 = $_POST['txtValor2'];
			$operacao = $_POST['rdoOperacao'];

			switch ($operacao) {
				case 'somar':
					
					$resultado = $valor1+$valor2;
					break;
				
				case 'subtrair':
					
					$resultado = $valor1-$valor2;
					break;
	
				case 'multiplicar':
					
					$resultado = $valor1*$valor2;
					break;
				
				default:
					
					$resultado = $valor1/$valor2;
					break;
			}
		}
	}

	function validarCampos($valor1, $valor2){
		if ($valor1 == "" || $valor2 == "") {
			echo("Por favor, preencha todos os campos!");
			return false;
		}else if (!is_numeric($valor1) || !is_numeric($valor2)) {
			echo("Digite apenas números!");
			return false;
		} else{
			return true;
		}
	}

?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="POST" action="">
						Valor 1:<input type="text" name="txtValor1" value="<?php echo($valor1)?>" > <br>
						Valor 2:<input type="text" name="txtValor2" value="<?php echo($valor2)?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name=rdoOperacao
					 value="somar" checked>Somar <br>
							<input type="radio" name=rdoOperacao
					 value="subtrair" >Subtrair <br>
							<input type="radio" name=rdoOperacao
					 value="multiplicar" >Multiplicar <br>
							<input type="radio" name=rdoOperacao
					 value="dividir" >Dividir <br>
							
							<input type="submit" name="btnCalcular" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?php echo($resultado)?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

