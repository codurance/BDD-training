<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have :total cukes in my belly
     */
    public function iHaveCukesInMyBelly(int $total): void
    {
        throw new PendingException();
    }

    /**
     * @When I wait :hours hour
     */
    public function iWaitHour(int $hours): void
    {
        throw new PendingException();
    }

    /**
     * @Then my belly should growl
     */
    public function myBellyShouldGrowl(): void
    {
        throw new PendingException();
    }
}
