<?php

namespace frm\middleware;

class Auth
{
    public function handle(): void
    {
        if (!check_auth()) {
            redirect('/register');
        }
    }
}