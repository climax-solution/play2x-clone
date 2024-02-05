<?php namespace App;

class Blackjack50Achievement extends Achievement {

    public function id(): int {
        return 8;
    }

    public function name(): string {
        return 'Blackjack';
    }

    public function description(): string {
        return 'Play Blackjack 50 times';
    }

    public function category(): string {
        return 'blackjack';
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