<?php namespace App;

class Coinflip25Achievement extends Achievement {

    public function id(): int {
        return 36;
    }

    public function name(): string {
        return 'Coinflip';
    }

    public function description(): string {
        return 'Win 25 times on Coinflip';
    }

    public function category(): string {
        return 'coinflip';
    }

    public function badge(): string {
        return 'bronze';
    }

    public function progress(): int {
        return 25;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}