<?php
// Problem (1):
$str='the quick brown fox jumps over the lazy dog';
$rep=str_replace('the','That',$str);
echo $rep;

// Problem (2):Write a PHP program to add two numbers
$num1=2;
$num2=5;
$Sum=$num1+$num2;
echo $Sum ;

// Problem (3):Write a PHP program to Subtract two numbers two numbers
$Sub=$num1-$num2;
echo $Sub;

// Problem (4):Write a PHP program to Multiply two numbers two numbers 
$multipy=$num1*$num2;
echo $multipy;

// Problem (5):Write a PHP program to Divide two digits two numbers 
$divide=$num1/$num2;
echo $divide;

// Problem (6):Cast this number "50" to integer using casting
$value="50";
var_dump((int)$value);

// Problem (7):count number of char 
$str="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book";
$count=strlen($str);
var_dump($count);

// Problem (8):Write php script to reverse this text "Hello World!!"
$text="Hello World!!";
$reve=strrev($text);
echo $reve;

// Problem (9):write php script to replace "dog" instead of "cat" in this text "this is a cat"
$Sentence="this is a cat";
$replace=str_replace('cat','dog',$Sentence);
echo $replace;

// Problem (10):write this text inside single quotes  I'm a software engineer
echo 'I\'m a software engineer';
