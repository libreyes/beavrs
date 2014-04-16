#!/bin/sh

# Project specific settings
export PHPDEVVM_NAME=beavrs \
       PHPDEVVM_HOST_IP=172.16.0.20 \
       PHPDEVVM_EXPORT_DIR=../htdocs \
       PHPDEVVM_MYSQL=1 \
       PHPDEVVM_CPUS=1 \
       PHPDEVVM_MEMORY=512 \
       PHPDEVVM_HTTP_PORT=9020 \
       PHPDEVVM_MYSQL_PORT=9120

pushd deployment > /dev/null
# Takes all the arguments and passes them to vagrant
# e.g. ./devvm.sh up -> vagrant up
vagrant $@
RET=$?
popd > /dev/null
exit $?
