<?php namespace App;

class Game1000Achievement extends Achievement {

    public function id(): int {
        return 2;
    }

    public function name(): string {
        return '1000 games';
    }

    public function description(): string {
        return 'Play 1000 games';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 1000;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}