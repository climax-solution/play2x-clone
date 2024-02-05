<?php namespace App;

class Dice200Achievement extends Achievement {

    public function id(): int {
        return 34;
    }

    public function name(): string {
        return 'Dice';
    }

    public function description(): string {
        return 'Win 200 times at Dice';
    }

    public function category(): string {
        return 'dice';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 200;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}