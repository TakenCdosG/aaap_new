<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;


//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends Drupal\DrupalExtension\Context\DrupalContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }


    /**
     * @Given /^the test email system is enabled$/
     */
    public function theTestEmailSystemIsEnabled() {
        // Store the original system to restore after the scenario.
        $this->originalMailSystem = variable_get('mail_system', array('default-system' => 'DefaultMailSystem'));
        // Set the test system.
        variable_set('mail_system', array('default-system' => 'TestingMailSystem'));
        // Flush the email buffer, allowing us to reuse this step definition to clear existing mail.
        variable_set('drupal_test_email_collector', array());
    }


    /**
     * @Then /^the email to "([^"]*)" should contain "([^"]*)"$/
     */
    public function theEmailToShouldContain($to, $contents) {
        // We can't use variable_get() because $conf is only fetched once per
        // scenario.
        $variables = array_map('unserialize', db_query("SELECT name, value FROM {variable} WHERE name = 'drupal_test_email_collector'")->fetchAllKeyed());
        $this->activeEmail = FALSE;
        foreach ($variables['drupal_test_email_collector'] as $message) {
            if (strpos($message['to'], $to) !== FALSE ){
                $this->activeEmail = $message;
                if (strpos($message['body'], $contents) !== FALSE ||
                    strpos($message['subject'], $contents) !== FALSE) {
                    return TRUE;
                }
                throw new \Exception('Did not find expected content in message body or subject.');
            }
        }
        throw new \Exception(sprintf('Did not find expected message to %s', $to));
    }


    /**
     * @Given /^the email should contain "([^"]*)"$/
     */
    public function theEmailShouldContain($contents) {
        if (!$this->activeEmail) {
            throw new \Exception('No active email');
        }
        $message = $this->activeEmail;
        if (strpos($message['body'], $contents) !== FALSE ||
            strpos($message['subject'], $contents) !== FALSE) {
            return TRUE;
        }
        throw new \Exception('Did not find expected content in message body or subject.');
    }


    /**
     * @Given /^the user "([^"]*)" access temp url$/
     */
    public function theUserAccessTempUrl($username){


        $user = user_load_by_name($username);
        if(isset($user->uid)){
            $url = aaap_user_pass_reset_url($user->uid);
//            $url = "user/reset/1154/1422547340/A1cCOsdu06VPv0AjPsNLdPcGBwX7u9l4F05adcTmZ-4";
            // Use Drupal Context 'I am at'.
            return $this->assertVisit($url);
        }
        throw new \Exception('Did not find user '.$username);

    }


    /**
     *
     * @AfterScenario @clean
     */
    public function afterFeature(){

        //remove users created, held in an array of usernames,
        //TODO: make it object level variable that could be updated within the 'fill in' SD (overriding it)
        $users = array('lois@lane.com');

        foreach ($users as $username) {
            $user = user_load_by_name($username);
            if(isset($user->uid)){
                $this->getDriver()->userDelete($user);
            }
        }
        $this->getDriver()->processBatch();

    }



//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
    

    // public function cleanDB($event)
     //{
         // clean database after scenarios,
         // tagged with @database           
         
//         $vals['db_user'] = 'root';
//         $vals['db_pass'] = '';
//         $vals['db_host'] = 'localhost';
//         $vals['db_name'] = 'tcgbetac_aaap';
//         $script_path = 'C:\wamp\www\aaaptcg\sites\all\tests\\';
//         
//                 
//           
//         $file_struct = $script_path . 'test_struct.sql';
//         $file_data = $script_path . 'test_data.sql';
//
//
//         $db = new PDO('mysql:host=localhost;dbname=tcgbetac_aaap', $vals['db_user'], $vals['db_pass']);
//         $sql_struct = file_get_contents($file_struct);
//         $sql_data = file_get_contents($file_data);
//         $db->exec($sql_struct);
//         $db->exec($sql_data);         
         
         
    // }
     
//}
}