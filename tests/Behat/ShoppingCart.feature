Feature: Test the shopping card

  Scenario: See a product in the card
    When I go to "/cart"
    Then I should see "2-year Backup Plan Complete"
    And I should see "Total: € 1,768.87"

Scenario: Cart not found
  When I go to "/cart"
  Then I should see "2-year Backup Plan Complete"
  And I should see "Total: € 1,768.87"
