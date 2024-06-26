<?php namespace App;

class Blackjack200Achievement extends Achievement {

    public function id(): int {
        return 9;
    }

    public function name(): string {
        return 'Blackjack';
    }

    public function description(): string {
        return 'Beat the dealer at Blackjack 200 times';
    }

    public function category(): string {
        return 'blackjack';
    }

    public function badge(): string {
        return 'silver';
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