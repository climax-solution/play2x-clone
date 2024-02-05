<?php namespace App;

class Referral100Achievement extends Achievement {

    public function id(): int {
        return 12;
    }

    public function name(): string {
        return 'Sole of company';
    }

    public function description(): string {
        return 'Invite 100 active referrals';
    }

    public function category(): string {
        return 'user';
    }

    public function badge(): string {
        return 'gold';
    }

    public function progress(): int {
        return 100;
    }

    public function reward() {
        return null;
    }

    public function whenAwarded() {
    }

}