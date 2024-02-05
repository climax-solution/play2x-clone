<?php namespace App;

class Keno1000Achievement extends Achievement {

    public function id(): int {
        return 41;
    }

    public function name(): string {
        return 'Keno';
    }

    public function description(): string {
        return 'Win 1000 times at Keno';
    }

    public function category(): string {
        return 'keno';
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