<?php

namespace Bingo;

trait Session
{
    public function sessionStart()   
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    protected function insertNumber(int $number)
    {
        $_SESSION['sorted'][] = $number;
    }

    public function clear()
    {
        $_SESSION['sorted'] = [];
    }
}
