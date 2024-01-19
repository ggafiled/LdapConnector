<?php
require("./lib/Ldap/LdapConnector.php");
/**
 * LDAP server information to handle connection.
 */
$ldapServer = "localhost";
$ldapDomain = "localhost";

/**
 * User credentials for testing.
 */
$username = "<USERNAME>";
$userPassword = "<PASSWORD>";

// Create LDAP connector object for use.
$ldapService = new LdapConnector($ldapServer, $ldapDomain);

printf("User authentication result: UID: %s => %s", $username, $ldapService->DomainAuthenticate($username, $userPassword) == true? "Login successed." : "Login failed (username or password incorrect).");
getcwd();

?>