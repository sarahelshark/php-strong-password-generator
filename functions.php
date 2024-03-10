<?php
/**
 * Generates a new strong password
 * @param Number Password chars length
 */
function passwordGenerator($number)
{
    $newPassword = '';
    for ($i = 0; $i < $number; $i++) {
        $randomAscii = rand(48, 122);
        $newPassword .= chr($randomAscii);
    }
    return $newPassword;
}
?>