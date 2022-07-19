<?php
require_once 'app/init.php';

use Codechief\Filters\Filter as Filter;
use Codechief\Model\User as User;

$filter = new Filter();
echo $filter->GetDataFromUserClass(new User());