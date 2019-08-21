# On-login-create-a-new-password-hash
Whenever a user logs in when verifying the correct password, we still check if password needs rehash. With the correct password entered, php checks for any rehash and also updates it in the database.

We will use the PASSWORD_DEFAULT algorithm with algorithmic cost 10. This will keep you up-to-date with the most powerful algorithms.

Visit on page: https://dev-all.eu/blog/on-login-create-a-new-password-hash
