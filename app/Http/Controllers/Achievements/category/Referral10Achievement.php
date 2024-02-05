<?php namespace App;

class Referral10Achievement extends Achievement {

    public function id(): int {
        return 11;
    }

    public function name(): string {
        return 'Sole of company';
    }

    public function description(): string {
        return 'Invite 10 active referrals';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'silver';
    }

    public function progress(): int {
        return 10;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}