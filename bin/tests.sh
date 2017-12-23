#!/usr/bin/env bash

ROOT_PATH="$( cd "$(dirname "$0")" ; pwd -P )/.."

${ROOT_PATH}/vendor/phpunit/phpunit/phpunit -c ${ROOT_PATH}/tests/phpunit.xml
