<?php namespace App;

class Tower100Achievement extends Achievement {

    public function id(): int {
        return 21;
    }

    public function name(): string {
        return 'Tower';
    }

    public function description(): string {
        return 'Reach the end of the Tower 100 times';
    }

    public function category(): string {
        return 'tower';
    }

    public function badge(): string {
        return 'bronze';
    }

    public function progress(): int {
        return 100;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}