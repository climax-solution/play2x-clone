<?php namespace App;

class Freebie50Achievement extends Achievement {

    public function id(): int {
        return 19;
    }

    public function name(): string {
        return 'Freebie';
    }

    public function description(): string {
        return 'Activate promo code 50 times';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'silver';
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