#!/usr/bin/env sh

set -ex

if [[ -z $1 ]]; then
    echo "give the version to build"; exit 1;
fi
version=$1

docker build --squash=true -f Dockerfile-nginx -t blackikeeagle/swarm-pimcore-demo-nginx:$version .
docker build --squash=true -f Dockerfile-php -t blackikeeagle/swarm-pimcore-demo-php:$version .

docker push blackikeeagle/swarm-pimcore-demo-nginx:$version
docker push blackikeeagle/swarm-pimcore-demo-php:$version
