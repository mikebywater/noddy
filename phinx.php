<?php
return [
    "paths" => [
        "migrations" => "db/migrations"
    ],
    "environments" => [
        "default_migration_table" => "migrations",
        "default_database" => "dev",
        "dev" => [
            "adapter" => "mysql",
            "host" => $_ENV['DB_HOST'],
            "name" => $_ENV['DB_NAME'],
            "user" => $_ENV['DB_USER'],
            "pass" => $_ENV['DB_PASS'],
            "port" => $_ENV['DB_PORT']
        ]
    ]
];