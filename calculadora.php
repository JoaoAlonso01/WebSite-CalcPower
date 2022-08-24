<html>
	<head>
    <title>Calculadora</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Calculadora de energia, Modo de calculo 1">
	<link rel="stylesheet" href="calculadora.css" media="screen">
	<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
</head>
</body>
<section class="u-clearfix u-grey-90 u-section-3" id="sec-10b3">
<form name="dados" method="post" action="">
	<center><h1 class="grande font">Calculadora de energia</h1><br><br>
 <br>
 <font class="font">Primeiro Método (Calculo com corrente)<br>

	<input type="number" name="txtnum" size=20 maxlength=5 placeholder="Entre com a corrente" class="inputs" ><br><br>
    Entre com a tensão<br>
	<input type="radio" name="radiobutton" value="110" class="cima" >
	<label class="u-label">110V</label>
                <br>
				<input type="radio" name="radiobutton" value="220" >
	<label class="u-label">220V</label>
                <br><br>
                entre com a quantidade de horas que o aparelho ficou ligado <br>
	<input type="time" name="txtnum2" size=20 maxlength=4 placeholder="Entre com as horas" class="inputs"><br><br>
    entre com a quantidade de dias que o aparelho ficou ligado<br>
	<select  name="select">
                  <option value="1">1 dia</option>
                  <option value="2">2 dias</option>
                  <option value="3">3 dias</option>
                  <option value="4">4 dias</option>
                  <option value="5">5 dias</option>
                  <option value="6">6 dias</option>
                  <option value="7">7 dias</option>
                  <option value="8">8 dias</option>
				  <option value="9">9 dias</option>
                  <option value="10">10 dias</option>
                  <option value="11">11 dias</option>
                  <option value="12">12 dias</option>
                  <option value="13">13 dias</option>
                  <option value="14">14 dias</option>
                  <option value="15">15 dias</option>
                  <option value="16">16 dias</option>
				  <option value="17">17 dias</option>
                  <option value="18">18 dias</option>
                  <option value="19">19 dias</option>
                  <option value="20">20 dias</option>
                  <option value="21">21 dias</option>
                  <option value="22">22 dias</option>
                  <option value="23">23 dias</option>
				  <option value="24">24 dias</option>
				  <option value="25">25 dias</option>
                  <option value="26">26 dias</option>
                  <option value="27">27 dias</option>
                  <option value="28">28 dias</option>
                  <option value="29">29 dias</option>
                  <option value="30">30 dias</option>
                  <option value="31">31 dias</option>
                </select><br><br>
                Entre com o preço por KWH da sua região<br>
	<input type="number" name="txtnum7" size=20 maxlength=4 placeholder="preço por KWH" class="inputs" step=0.01><br><br>
                

		<input type="submit" name="calcular" value="calcular" class="btn"><br><br><br>
		
		<?php
error_reporting(0);

   if(!empty($_REQUEST["txtnum"]) && !empty($_REQUEST["txtnum2"])  && !empty($_REQUEST["select"])&& !empty($_REQUEST["radiobutton"]) && !empty($_REQUEST["txtnum7"]))
   {
	   $corrente=$_REQUEST["txtnum"];
	   $tensao=$_REQUEST["radiobutton"];
	   $qhr=$_REQUEST["txtnum2"];
	   $dias=$_REQUEST["select"];
       $preco=$_REQUEST["txtnum7"];

$res = $corrente * $tensao;
	   $res2 = ((($res) * $qhr  * $dias)/1000);
	   $res3 = $res2 * $preco;
echo "Potencia: <input type='text' readonly class='inputs' value=$res><br>";
echo "Potencia KWH: <input type='text' readonly class='inputs' value=$res2><br>";
echo "Quantia gasta em R$: <input type='text' readonly class='inputs' value=$res3><br><br><br>";
}

  
?>
</section>
<section class="u-clearfix u-grey-15 u-section-2" id="carousel_7b66">
	<form name="dados" method="post" action="">
        <center>
 <br><br>
 Segundo Método (Calculo com potencia)<br>

	<input type="number" name="txtnum3" size=20 maxlength=5 placeholder="Entre com a potencia" class="inputs" ><br><br>
	entre com a quantidade de horas que o aparelho ficou ligado <br>
	<input type="time" name="txtnum4" size=20 maxlength=5 placeholder="Entre com as horas" class="inputs" ><br><br>
    entre com a quantidade de dias que o aparelho ficou ligado <br>
	<select  name="select2" >
                  <option value="1">1 dia</option>
                  <option value="2">2 dias</option>
                  <option value="3">3 dias</option>
                  <option value="4">4 dias</option>
                  <option value="5">5 dias</option>
                  <option value="6">6 dias</option>
                  <option value="7">7 dias</option>
                  <option value="8">8 dias</option>
				  <option value="9">9 dias</option>
                  <option value="10">10 dias</option>
                  <option value="11">11 dias</option>
                  <option value="12">12 dias</option>
                  <option value="13">13 dias</option>
                  <option value="14">14 dias</option>
                  <option value="15">15 dias</option>
                  <option value="16">16 dias</option>
				  <option value="17">17 dias</option>
                  <option value="18">18 dias</option>
                  <option value="19">19 dias</option>
                  <option value="20">20 dias</option>
                  <option value="21">21 dias</option>
                  <option value="22">22 dias</option>
                  <option value="23">23 dias</option>
				  <option value="24">24 dias</option>
				  <option value="25">25 dias</option>
                  <option value="26">26 dias</option>
                  <option value="27">27 dias</option>
                  <option value="28">28 dias</option>
                  <option value="29">29 dias</option>
                  <option value="30">30 dias</option>
                  <option value="31">31 dias</option>

                </select><br><br>
                Entre com o preço por KWH da sua região<br>
	<input type="number" name="txtnum8" size=20 maxlength=4 placeholder="preço por KWH" class="inputs" step=0.01><br><br>
				<input type="submit" name="calcular" value="calcular" class="btn">
				<input type="reset" name="limpar"value="Limpar" class="btn"><br><br>
                <a href="index.html" class="btn">Voltar</a>
                <br><br>
</form>

<?php
error_reporting(0);
   if(!empty($_REQUEST["txtnum3"])&& !empty($_REQUEST["txtnum4"])  && !empty($_REQUEST["select2"]) && !empty($_REQUEST["txtnum8"]))
   {
	   $potencia=$_REQUEST["txtnum3"];
	   $qhr2=$_REQUEST["txtnum4"];
	   $dias2=$_REQUEST["select2"];
       $preco2=$_REQUEST["txtnum8"];

$res = $potencia;
	   $res2 = (($res * $qhr2  * $dias2)/1000);
	   $res3 = $res2 * $preco2;
echo "Potencia: <input type='text' class='inputs' readonly value=$res><br>";
echo "Potencia KWH: <input type='text' readonly class='inputs' value=$res2><br>";
echo  "Quantia gasta em R$: <input type='text'readonly class='inputs' value=$res3>";

}
?>
</center>
</section>