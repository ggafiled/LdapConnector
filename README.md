# LdapConnector
Library for PHP version >= 7.3 to connect Active Directory (LDAP) in your organize to authentication

#### How to use

``` php
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

// The result will present as boolean.
$result = $ldapService->DomainAuthenticate($username, $userPassword);

```
