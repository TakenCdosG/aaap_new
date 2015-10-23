Feature: Credit Card Registration
  In order to become a member
  As an anonymous user
  I need to be able to register to the system and pay by credit card

  Background:
    Given the test email system is enabled

  @api
  Scenario: User registers paying by check
    When I visit "user/register"
    And I fill in the following:
      | E-mail address                             | lois@lane.com    |
      | First Name                                 | Lois             |
      | Last Name                                  | Lane             |
      | Position/Title                             | test position    |
      | Department                                 | test department  |
      | Institution                                | test institution |
      | How will you pay?                          | credit_card      |
      | Enter "Pediatrics": (used to prevent spam) | Pediatrics       |
    And I press "Submit"
    Then I should see the text "Thank you for your application to initiate membership with "
    And the email to "lois@lane.com" should contain "Membership Application Received"
    And the email to "dawn@thinkcreativegroup.com" should contain "A membership application has been received. Click here to review the application"

  @api
  Scenario: Admin Approves User for payment
    Given I visit "user"
    And I fill in the following:
      | Username | dawn@thinkcreativegroup.com |
      | Password | %$B3JF37h!S06               |
    And press "Log in"
    Then I visit "users/lois-lane-com"
    And I click "Update Profile/Change Password"
    And I uncheck "Pending Approval"
    And I check "Approved | Pending Payment"
    And I press "Save"
    Then the email to "lois@lane.com" should contain "Membership Application Approved; Pending Payment"

  @api
  Scenario: User performs payment by credit card
    Given the user "lois@lane.com" access temp url
    And I press "Set up your new password"
    And I fill in the following:
      | edit-pass-pass1 | 123456 |
      | edit-pass-pass2 | 123456 |
    And I press "Save"
    Then I should see the text "1 Year AAAP Membership"
    #   TODO; Should this be a custom step that gets the desired pricing from the config?
    And I should see the text "Subtotal: \$300"
    Given I fill in the following:
      | First name                              | Lois             |
      | Last name                               | Lane             |
      | Street address                          | 123 fk street    |
      | Country                                 | 840              |
      | City                                    | Metropolis       |
      | State/Province                          | 4                |
      | Postal code                             | 000              |
      | Card number                             | 4177306021692900 |
      | edit-panes-payment-details-cc-exp-month | 2                |
      | edit-panes-payment-details-cc-exp-year  | 2016             |
      | edit-panes-payment-details-cc-cvv       | 000              |
    And I press "Review order"
    Then I should see the text "Your order is almost complete."
    And I press "Submit order"
    Then the email to "lois@lane.com" should contain "Congratulations! Your AAAP Membership has been activated."
    And the email to "lois@lane.com" should contain "AAAP Membership: Notification of Payment Received"
    And the email to "dawn@thinkcreativegroup.com" should contain "A new AAAP member has completed payment."


  @api @clean
  Scenario: CleanDB