Feature: View Profile
  In order to see all my member info
  As an Active Member
  I need to be able to see my profile

   @api
       Scenario: Active Member access own profile
        Given users:
        | name             | status | mail             | roles | field_address_line_1       | field_name_of_chairman | pass   |
        | gsayas@gmail.com |      1 | gsayas@gmail.com | 5     | simon bolinski st, # 26-50 | donald trump           | 123456 |
        And I am logged in as "gsayas@gmail.com"
        When I visit "users/gsayas-gmail-com"
        And I should see the text "simon bolinski st, # 26-50"
        And I should see the text "donald trump"


    @api
       Scenario: Active Member access other member's profile
        Given users:
        | name                    | status | mail                    | roles | field_address_line_1       | field_name_of_chairman | pass   |
        | chico.buarque@gmail.com |      1 | chico.buarque@gmail.com | 5     | santos dumont st, # 26-50  | henrique cardoso       | 123456 |
        | sofi.borus@gmail.com    |      1 | sofi.borus@gmail.com    | 5     | abe lincoln st, 34-70      | steve ballmer          | 123456 |
        And I am logged in as "chico.buarque@gmail.com"
        When I visit "users/sofi-borus-gmail-com"
        Then I should see the text "abe lincoln st, 34-70"
        And I should not see the text "steve ballmer"
