<?php

namespace frm\middleware;

class Guest
{
    public function handle(): void
    {
        if (check_auth()) {
            redirect('/');
        }
    }
}