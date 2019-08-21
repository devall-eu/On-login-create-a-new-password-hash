<?php
/**
 * @param int $uid User ID, for updating the password
 * @param string $plain Password entered by the user
 * @param string $hash Password hash stored in the database
 *
 * @return bool Authentication successful?
 */
private function _verify_password($uid, $plain, $hash)
{
    if (password_verify($plain, $hash)) {
        if (password_needs_rehash($hash, PASSWORD_DEFAULT, ['cost' => 10])) {
            $newHash = password_hash($plain, PASSWORD_DEFAULT, ['cost' => 10]);
            $query = "UPDATE user SET password = '$newHash' WHERE id = '$uid' ";
        }
        return TRUE;
    }
    return FALSE;
}
