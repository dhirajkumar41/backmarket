<?php

namespace DCKAP\Test\Cron;

use \Psr\Log\LoggerInterface;

class Test {

  protected $logger;
  protected $curl;

  public function __construct(LoggerInterface $logger, \Magento\Framework\HTTP\Client\Curl $curl) {
    $this->curl = $curl;
    $this->logger = $logger;
  }

  /**

    * Write to system.log

    *

    * @return void

  */

  public function execute() {
        $url='https://www.backmarket.com/ws/orders';        
        $params = '{
                    Content-type: application/json",
                    Accept: application/json
                    Authorization: Basic YWNjb3VudHNAY29ldGVjaGluYy5jb206SmFpbWF0YWRpNzkw
                   }';
        $this->_curl->get($url, $params);
        $response = $this->_curl->getBody();
        $response=json_decode($response,true);
        $this->logger->info($response);

  }

}