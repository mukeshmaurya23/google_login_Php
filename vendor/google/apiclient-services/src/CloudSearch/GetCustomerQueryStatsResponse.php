<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudSearch;

class GetCustomerQueryStatsResponse extends \Google\Collection
{
  protected $collection_key = 'stats';
  protected $statsType = CustomerQueryStats::class;
  protected $statsDataType = 'array';
  public $stats;
  /**
   * @var string
   */
  public $totalQueryCount;

  /**
   * @param CustomerQueryStats[]
   */
  public function setStats($stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return CustomerQueryStats[]
   */
  public function getStats()
  {
    return $this->stats;
  }
  /**
   * @param string
   */
  public function setTotalQueryCount($totalQueryCount)
  {
    $this->totalQueryCount = $totalQueryCount;
  }
  /**
   * @return string
   */
  public function getTotalQueryCount()
  {
    return $this->totalQueryCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GetCustomerQueryStatsResponse::class, 'Google_Service_CloudSearch_GetCustomerQueryStatsResponse');
