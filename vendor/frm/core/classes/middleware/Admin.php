<?php

namespace frm\middleware;

class Admin
{
    public function handle(): void
    {
        if ($_SESSION['name']['role'] != 'admin') {
            redirect('/');
        }
    }
}