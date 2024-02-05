<?php namespace App;

class Freebie100Achievement extends Achievement {

    public function id(): int {
        return 20;
    }

    public function name(): string {
        return 'Freebie';
    }

    public function description(): string {
        return 'Activate promo code 100 times';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'gold';
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