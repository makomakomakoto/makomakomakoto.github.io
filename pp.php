<?php

function NumberTF($num)
{
    if(preg_match('/[A-Z]{1}[1]{1}[0]{1}[A-Z]{1}[6]{1}[0-9]{4}/i', $num)&&strlen( $num )==9)
            return true;
        else 
        {
            return false;
        }
}
function PhoneTF($Pho)
{
    if(preg_match('/[0]{1}[9]{1}[0-9]{8}/i', $Pho)&&strlen( $Pho )==10)
            return true;
        else 
        {
            return false;
        }
}
function Password($Pho)
{
    if(preg_match('/[1]{1}[5]{1}[0-9]{4}[0]{1}[0]{1}[3]{1}/i', $Pho)&&strlen( $Pho )==9)
            return true;
        else 
        {
            return false;
        }
}
?>