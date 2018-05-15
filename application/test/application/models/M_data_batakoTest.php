<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_data_batakoTest
 *
 * @author hans julio
 */
class M_data_batakoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */

    public function setUp() {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
    }

}
