import {defineFeature, loadFeature} from "jest-cucumber";

const feature = loadFeature('./src/specs/features/belly.feature')

defineFeature(feature, test => {
    test('a few cukes', ({ given, when, then }) => {
        given(/^I have (\d+) cukes in my belly$/, (arg0) => {
            fail("Step not implemented")
        });

        when(/^I wait (\d+) hour$/, (arg0) => {
            fail("Step not implemented")
        });

        then('my belly should growl', () => {
            fail("Step not implemented")
        });
    });
})