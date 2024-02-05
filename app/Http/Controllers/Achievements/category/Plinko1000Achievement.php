<?php namespace App;

class Plinko1000Achievement extends Achievement {

    public function id(): int {
        return 38;
    }

    public function name(): string {
        return 'Plinko';
    }

    public function description(): string {
        return 'Win 1000 times at Plinko';
    }

    public function category(): string {
        return 'Plinko';
    }

    public function badge(): string {
        return 'gold';
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