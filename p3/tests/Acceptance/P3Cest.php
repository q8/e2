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

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=validation-output]');
    }

    public function showsHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');
        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);
        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }
}