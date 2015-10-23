Feature: Mail in Check Registration
  In order to become a member
  As an anonymous user
  I need to be able to register to the system

  Background:
    Given the test email system is enabled

  @api
  Scenario: User registers paying by check
    When I visit "user/register"
    And I fill in the following:
      | E-mail address                             | bob@smith.com    |
      | First Name                                 | Bob              |
      | Last Name                                  | Smith            |
      | Position/Title                             | test position    |
      | Department                                 | test department  |
      | Institution                                | test institution |
      | How will you pay?                          | mail_check       |
      | Enter "Pediatrics": (used to prevent spam) | Pediatrics       |
    And I press "Submit"
    Then I should see the text "Thank you for your application to initiate membership with "
    And the email to "bob@smith.com" should contain "Membership Application Received"
    And the email to "dawn@thinkcreativegroup.com" should contain "A membership application has been received. Click here to review the application"

    @api
    Scenario: Admin Approves User for payment
      Given I visit "user"
      And I fill in the following:
        | Username | dawn@thinkcreativegroup.com |
        | Password | %$B3JF37h!S06               |
      And press "Log in"
      Then I visit "users/bob-smith-com"
      And I click "Update Profile/Change Password"
      And I uncheck "Pending Approval"
      And I check "Approved | Pending Payment"
      And I press "Save"
      Then the email to "bob@smith.com" should contain "Membership Application Approved; Pending Payment"

      @api
      Scenario: Admin Activates Member after payment by check occurred
        Given I visit "user"
        And I fill in the following:
          | Username | dawn@thinkcreativegroup.com |
          | Password | %$B3JF37h!S06               |
        And press "Log in"
        Then I visit "users/bob-smith-com"
        And I click "Update Profile/Change Password"
        And I uncheck "Approved | Pending Payment"
        And I check "Active Member"
        And I press "Save"
        Then the email to "bob@smith.com" should contain "Membership has been activated. The last step is to set your password using this link:"

      @api @clean
      Scenario: CleanDB