<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=six-radio]', '6');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');
    }
}