<?php namespace App;

class Crash150Achievement extends Achievement {

    public function id(): int {
        return 46;
    }

    public function name(): string {
        return 'Crash';
    }

    public function description(): string {
        return 'Win Crash 150 times';
    }

    public function category(): string {
        return 'crash';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 150;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}