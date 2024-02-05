<?php namespace App;

class Stairs100Achievement extends Achievement {

    public function id(): int {
        return 30;
    }

    public function name(): string {
        return 'Stairs';
    }

    public function description(): string {
        return 'Reach the end of Stairs 100 times';
    }

    public function category(): string {
        return 'stairs';
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