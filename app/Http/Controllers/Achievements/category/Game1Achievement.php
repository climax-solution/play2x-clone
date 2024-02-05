<?php namespace App;

class Game1Achievement extends Achievement {

    public function id(): int {
        return 1;
    }

    public function name(): string {
        return 'The first game';
    }

    public function description(): string {
        return 'Play your first game';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'bronze';
    }

    public function progress(): int {
        return 1;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}