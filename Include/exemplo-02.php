<?php

//include"exemplo-01.php"; 

require_once "exemplo-01.php";
require_once "exemplo-01.php";

$resultado = somar (10, 20);

echo $resultado;

/*Tanto o include quanto o require são capazes de pegar a informação que está em outra pagina php e trazer a informação ou neste caso a formula de se calcular coloquei o include como comentario se não da erro de execusão trazer os deois nesta pagina pegando a mesma informação.*/

/* O REQUIRE ele obriga que o arquivo exista, o arquivo que esta sendo incluido, deve estar funcionando corretamente. Caso não estiver funcionando corretamente, ele dá um erro fatal e para de executar o programa
*/

/*Já o include tenta funcionar, mesmo que o arquivo não exista ou esteja com algum tipo de problema alem do include  ter mais recursos */

/*Caso tenha o fato de se chamar duas vezes o require da mesma pagina vai dar erro que não se pode chamar dois calculos. mas se usar o require_once será apenas uma vez a chamada.*/


?>
