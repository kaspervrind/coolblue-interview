Feature: Test the shopping card

  Scenario: See a product in the card
    When I go to "/card"
    Then I should see "2-year Backup Plan Complete"

