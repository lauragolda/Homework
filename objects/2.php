<?php

class Points{
    public int $x;
    public int $y;
    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function swapPoints(object $a, object $b){
        $a->x ^= $b->x;
        $b->x ^= $a->x;
        $a->x ^= $b->x;

        $a->y ^= $b->y;
        $b->y ^= $a->y;
        $a->y ^= $b->y;
    }

}

$p1 = new Points(5, 2);
$p2 = new Points(-3, 6);
$p1->swapPoints($p1, $p2);
echo "(" . $p1->x . ", " . $p1->y . ")";
echo "(" . $p2->x . ", " . $p2->y . ")";

