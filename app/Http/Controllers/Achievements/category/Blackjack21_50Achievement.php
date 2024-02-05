<?php namespace App;

class Blackjack21_50Achievement extends Achievement {

    public function id(): int {
        return 10;
    }

    public function name(): string {
        return 'Blackjack';
    }

    public function description(): string {
        return 'Collect 21 points in Blackjack 50 times';
    }

    public function category(): string {
        return 'blackjack';
    }

    public function badge(): string {
        return 'gold';
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