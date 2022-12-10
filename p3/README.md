# Project 3

- By: _Homoud Alsaqabi_
- URL: <http://e2p3.qa.bi>

## Graduate requirement

- [x] I have integrated testing into my application
- [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources

N/A

## Notes for instructor

N/A

## Codeception testing output

```
Codeception PHP Testing Framework v5.0.5

Tests.Acceptance Tests (3) -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=six-radio]","6"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 PASSED

P3Cest: Validate form
Signature: Tests\Acceptance\P3Cest:validateForm
Test: tests/Acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED

P3Cest: Shows history and round details
Signature: Tests\Acceptance\P3Cest:showsHistoryAndRoundDetails
Test: tests/Acceptance/P3Cest.php:showsHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,46
 I grab text from "[test=round-link]"
 I click "2022-12-10 13:37:17"
 I see "2022-12-10 13:37:17"
 PASSED

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:02.238, Memory: 10.00 MB

OK (3 tests, 5 assertions)
```
