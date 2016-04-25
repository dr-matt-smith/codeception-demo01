<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('get to Login screen from the home page');
$I->amOnPage('/');
$I->amGoingTo('/login2.php');
$I->click('login');
$I->see('username');
$I->see('password');
$I->seeElement('input[type="submit"]');
