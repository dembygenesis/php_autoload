## How to run

protoc --proto_path=grpc_service --php_out=grpc_service --grpc_out=grpc_service --plugin=protoc-gen-grpc=./grpc_service/grpc_php_plugin ./grpc_service/grpc_service.proto