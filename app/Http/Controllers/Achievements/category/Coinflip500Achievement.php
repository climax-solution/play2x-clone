<?php namespace App;

class Coinflip500Achievement extends Achievement {

    public function id(): int {
        return 38;
    }

    public function name(): string {
        return 'Coinflip';
    }

    public function description(): string {
        return 'Win 500 times on Coinflip';
    }

    public function category(): string {
        return 'coinflip';
    }

    public function badge(): string {
        return 'gold';
    }

    public function progress(): int {
        return 500;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}