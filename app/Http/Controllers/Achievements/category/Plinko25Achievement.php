<?php namespace App;

class Plinko25Achievement extends Achievement {

    public function id(): int {
        return 36;
    }

    public function name(): string {
        return 'Plinko';
    }

    public function description(): string {
        return 'Win 25 times at Plinko';
    }

    public function category(): string {
        return 'Plinko';
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