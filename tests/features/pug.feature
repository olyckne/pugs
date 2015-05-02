Feature: I want pugs!

  Scenario: I want one pug
    Given I am on homepage
    Then I should see "Here's a pug!"
    And I should see an "img" element

  Scenario: I want six pugs
    Given I am on "/bomb?count=6"
    Then I should see "Let there be pugs!"
    And I should see 6 "img" elements