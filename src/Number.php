<?php

namespace Bingo;

class Number
{
    use Session;

    public function sort()
    {
        $num = 0;

        if (count($_SESSION['sorted'] ?? []) < 75) {
            do {
                $num = random_int(1, 75);
            } while (in_array($num, $_SESSION['sorted'] ?? []));

            $this->insertNumber($num);
        }

        return $num;
    }
}
