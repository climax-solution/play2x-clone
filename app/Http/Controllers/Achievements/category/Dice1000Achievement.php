<?php namespace App;

class Dice1000Achievement extends Achievement {

    public function id(): int {
        return 35;
    }

    public function name(): string {
        return 'Dice';
    }

    public function description(): string {
        return 'Win 1000 times at Dice';
    }

    public function category(): string {
        return 'dice';
    }

    public function badge(): string {
        return 'gold';
    }

    public function progress(): int {
        return 1000;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}