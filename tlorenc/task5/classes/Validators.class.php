<?php

class Validators
{
    static public function CheckEmail($email_address)
    {
        if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    static public function CheckPesel($pesel)
    {
        if (!preg_match('/^[0-9]{11}$/', $pesel)) {
            return false;
        }

        $weights = array(9, 7, 3, 1, 9, 7, 3, 1, 9, 7);
        $sum = 0;

        for ($i = 0; $i < 10; $i++) {
            $sum += $weights[$i] * $pesel[$i];
        }
        $ctrl = $sum % 10;

        if ($ctrl == $pesel[10]) {
            return true;
        } else {
            return false;
        }
    }

    static public function CheckString($str)
    {
        if (is_string(trim($str))) {
            return true;
        }
        return false;
    }

    static public function CheckInt($int)
    {
        if (is_int($int)) {
            return true;
        }
        return false;
    }

    static public function CheckPostCode($postCode)
    {
        if (preg_match("/([0-9]{2})-([0-9]{3})/", $postCode)) {
            return true;
        }
        return false;
    }

    static public function CheckPhoneNumber($phone)
    {
        if (is_numeric($phone)) {
            return true;
        }
        return false;
    }
}

