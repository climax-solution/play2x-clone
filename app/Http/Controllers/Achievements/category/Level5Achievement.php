<?php namespace App;

class Level5Achievement extends Achievement {

    public function id(): int {
        return 15;
    }

    public function name(): string {
        return 'Regular';
    }

    public function description(): string {
        return 'Reach level 5';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 1;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}