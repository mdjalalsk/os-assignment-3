<?php
function generatePassword($length) {
    $characterSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $pattern = '/[' . $characterSet . ']/';
        $password .= preg_replace($pattern, '', $characterSet[rand(0, strlen($characterSet) - 1)]);
    }

    return $password;
}


$password = generatePassword(12);
echo "Generated Password: $password" . PHP_EOL;
