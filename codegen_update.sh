#!/bin/sh
# regenerate
swagger-codegen generate -i https://try-flagr.herokuapp.com/swagger.json -l php -c swagger.json -o ../