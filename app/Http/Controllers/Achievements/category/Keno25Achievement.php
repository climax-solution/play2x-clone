<?php namespace App;

class Keno25Achievement extends Achievement {

    public function id(): int {
        return 39;
    }

    public function name(): string {
        return 'Keno';
    }

    public function description(): string {
        return 'Win 25 times at Keno';
    }

    public function category(): string {
        return 'keno';
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