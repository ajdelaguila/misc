<?php
header('Content-Type: application/json');

$config = array(
    'realm' => 'nisarealm',
    'auth-server-url' => $_ENV["KEYCLOAK_URL"],
    'resource' => $_ENV["OAUTH_RESOURCE"]
);

echo json_encode($config, JSON_UNESCAPED_SLASHES);
?>


