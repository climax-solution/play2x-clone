<?php namespace App;

class Wheel50Achievement extends Achievement {

    public function id(): int {
        return 39;
    }

    public function name(): string {
        return 'Wheel';
    }

    public function description(): string {
        return 'Win at Wheel 50 times';
    }

    public function category(): string {
        return 'wheel';
    }

    public function badge(): string {
        return 'bronze';
    }

    public function progress(): int {
        return 50;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}