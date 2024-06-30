<?php
/**
 * Regex exemples
 * */

require __DIR__ . "/vendor/autoload.php";



// Regex busca se a string tudo começa com "visite"
// OU se existe a palavra pandora, ambas no-case-sensitive
$string  = "Visite PandoraCode in GitHub";
$pattern = "[^visite|pandora]i"; // case-insensitive search
dd(preg_match($pattern, $string));


/*

## Regular Expression Patterns
Brackets are used to find a range of characters:

Expression	Description	Try it
[abc]	Find one or many of the characters inside the brackets
[^abc]	Find any character NOT between the brackets
[a-z]	Find any character alphabetically between two letters
[A-z]	Find any character alphabetically between a specified upper-case letter and a specified lower-case letter
[A-Z]	Find any character alphabetically between two upper-case letters.
[123]	Find one or many of the digits inside the brackets
[0-5]	Find any digits between the two numbers
[0-9]	Find any digits

 */
