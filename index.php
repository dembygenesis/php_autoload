<?php
require_once 'app/init.php';

use Codechief\Filters\Filter as Filter;
use Codechief\Model\User as User;

/*$filter = new Filter();
echo $filter->GetDataFromUserClass(new User());*/

// Try here
// $grpcService = new \Codechief\GRPC\ChatServiceClient("localhost:9000", []);
try {
    $credentials = \Grpc\ChannelCredentials::createInsecure();

    $grpcService = new \Codechief\GRPC\ChatServiceClient(
        "localhost:9000",
        ['credentials' => $credentials]
    );

    /**
     * (\Codechief\GRPC\Message $argument,
    $metadata = [], $options = [])
     */

    $message = new \Codechief\GRPC\Message(['body' => "Hello, Go!"]);

    $response = $grpcService->SayHello($message)->wait();

    var_dump($response);
} catch (Exception $e) {
    var_dump($e);
    die("End exception");
}


