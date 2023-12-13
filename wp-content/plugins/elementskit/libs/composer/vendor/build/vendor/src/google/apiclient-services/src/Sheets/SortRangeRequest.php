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
namespace ElementskitVendor\Google\Service\Sheets;

class SortRangeRequest extends \ElementskitVendor\Google\Collection
{
    protected $collection_key = 'sortSpecs';
    protected $rangeType = GridRange::class;
    protected $rangeDataType = '';
    protected $sortSpecsType = SortSpec::class;
    protected $sortSpecsDataType = 'array';
    /**
     * @param GridRange
     */
    public function setRange(GridRange $range)
    {
        $this->range = $range;
    }
    /**
     * @return GridRange
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * @param SortSpec[]
     */
    public function setSortSpecs($sortSpecs)
    {
        $this->sortSpecs = $sortSpecs;
    }
    /**
     * @return SortSpec[]
     */
    public function getSortSpecs()
    {
        return $this->sortSpecs;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SortRangeRequest::class, 'ElementskitVendor\\Google_Service_Sheets_SortRangeRequest');
