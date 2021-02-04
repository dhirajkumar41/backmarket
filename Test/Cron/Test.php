<?php

namespace DCKAP\Test\Cron;

use \Psr\Log\LoggerInterface;

class Test {

  protected $logger;

  public function __construct(LoggerInterface $logger, \Magento\Framework\HTTP\Client\Curl $curl) {

    $this->logger = $logger;
    $this->curl = $curl;
  }

  /**

    * Write to system.log

    *

    * @return void

  */

  public function execute() {
  
        $this->logger->info("hiiiii");

  }

}