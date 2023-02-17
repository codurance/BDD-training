using csharp.codurance;

namespace test;

[Binding]
public class AFewCukesStepDefinitions
{
    private Belly belly;

    public AFewCukesStepDefinitions()
    {
        belly = new Belly();
    }

    [Given(@"I have (.*) cukes in my belly")]
    public void GivenIHaveCukesInMyBelly(int cukes)
    {
        belly.cukes = cukes;
    }

    [When(@"I wait (.*) hour")]
    public void WhenIWaitHour(int hours)
    {
        ScenarioContext.StepIsPending();
    }

    [Then(@"my belly should growl")]
    public void ThenMyBellyShouldGrowl()
    {
        ScenarioContext.StepIsPending();
    }
}