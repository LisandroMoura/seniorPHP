<?php

define("FIRSTCONST", "Hello, world!");

$myFuncWithDefine = fn() =>  FIRSTCONST;

echo $myFuncWithDefine();

const MYCONST = "HI";

$myFuncWithConst = fn() =>MYCONST;


echo $myFuncWithConst();
