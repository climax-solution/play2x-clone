<?php namespace App;

class Mines500Achievement extends Achievement {

    public function id(): int {
        return 6;
    }

    public function name(): string {
        return 'Mines';
    }

    public function description(): string {
        return 'Unlock 500 diamonds';
    }

    public function category(): string {
        return 'mines';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 500;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}