<?php namespace App;

class HiLo150Achievement extends Achievement {

    public function id(): int {
        return 43;
    }

    public function name(): string {
        return 'HiLo';
    }

    public function description(): string {
        return 'Win 150 times at HiLo';
    }

    public function category(): string {
        return 'hilo';
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