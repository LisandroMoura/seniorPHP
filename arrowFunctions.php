<?php
/**
 * Quando usar Arrow Functions em php?
 *
 * */
/* Use arrow functions para tarefas simples e concisas, como operações matemáticas,
*  manipulação de strings ou filtgcragem de dados.gc*/


require __DIR__ . "/vendor/autoload.php";

$stringDeTeste = "  Ola meus queridos amigos #@&%    ";

/*1. Remover Espaços em Branco extras:*/
/**
 * Função para retirar os espaços em branco de uma string
 * @param string $string A string usada para o tratamento
 * @return string que tratada
 */
$removerEspacosExtras  = fn($param) => trim($param);
/*dd($removerEspacosExtras($stringDeTeste));*/

/*2. Converter para Maiúsculas/Minúsculas:*/
$converteMaiuscula = fn(String $string) => strtoupper($string);
/*dd($converteMaiuscula($stringDeTeste));*/

$convertToLower = fn(String $string) => strtolower($string);
/*dd($convertToLower($stringDeTeste));*/

/*3. Verificar se Contém String:*/
$contemPalavra = fn ($texto,$palavra)  => strpos($texto,$palavra) !== false;
/*dd($contemPalavra($stringDeTeste, "noWord"));*/

/*4. Extrair Substring:*/
$extrairString = fn($texto, $inicio, $tamanho) => substr($texto,$inicio,$tamanho);
/*dd($extrairString($stringDeTeste,strlen($stringDeTeste)-1,1));*/

/*5. Remover Caracteres Especiais:*/
$removeCracteresEspeciais = fn(String $texto) => preg_replace('/[^a-zA-Z0-9 ]/','',$texto);
/*dd($removeCracteresEspeciais($stringDeTeste));*/

/*6. Formatar Moeda:*/
$formatarMoeda = fn($valor) => number_format($valor, 2, ',', '.');
dd("R$ " . $formatarMoeda(8700.66));
/**/

