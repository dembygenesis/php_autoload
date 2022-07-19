<?php
require_once 'app/init.php';

use Codechief\Filters\Filter as Filter;
use Codechief\Model\User as User;

/*$filter = new Filter();
echo $filter->GetDataFromUserClass(new User());*/

// Try here
// $grpcService = new \Codechief\GRPC\ChatServiceClient("localhost:9000", []);
$credentials = \Grpc\ChannelCredentials::createInsecure();

$grpcService = new \Codechief\GRPC\ChatServiceClient(
    "localhost:9000",
    ['credentials' => $credentials]
);


var_dump($grpcService);

