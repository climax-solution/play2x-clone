<?php namespace App;

class Tower200Achievement extends Achievement {

    public function id(): int {
        return 23;
    }

    public function name(): string {
        return 'На высоте';
    }

    public function description(): string {
        return 'Reach the end of the Tower 200 times';
    }

    public function category(): string {
        return 'tower';
    }

    public function badge(): string {
        return 'gold';
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