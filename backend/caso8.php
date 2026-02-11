<?php
$precoproduto = $_POST["preco"];
$precoapos = "";
$desconto = "";
if ($precoproduto >= 1000 ) {
   $desconto = 0.15 * $precoproduto;
   $precoapos = $precoproduto - $desconto; 
   echo "Após o desconto o preço foi $precoapos";
}
elseif ($precoproduto >= 500) {

$desconto = 0.10 * $precoproduto;
   $precoapos = $precoproduto - $desconto; 
   echo "Após o desconto o preço foi $precoapos";

}
else {
   $desconto = 0.05 * $precoproduto;
   $precoapos = $precoproduto - $desconto; 
   echo "Após o desconto o preço foi $precoapos";
}



?>
