<?php

declare(strict_types=1);

namespace PetrovaA\VerifyEmail;

class EmailVerifier
{
    public static function verifyEmail(string $email, $checkDNS = false): bool
    {
        $emailIsCorrect = (bool)filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$emailIsCorrect) return false;

        if ($checkDNS) {
            $find = strrpos($email, "@");
            $domain = substr($email, $find + 1);

            return checkdnsrr($domain, "MX");
        }

        return true;
    }
}