<?php
function emailValidation ($email) {

    $result = trim($email);
    if(filter_var($result, FILTER_VALIDATE_EMAIL))
    {
        return "true";
    }
    else {
        return "false";
    }
}

echo emailValidation("tim@mail.com")."\n";
echo emailValidation("tim%mail.com")."\n";

?>


