#!/bin/sh
set -e

if [ "${CRON}" ]; then
    exec /command.sh go-cron -s "${CRON}" -- /bin/sh -c "$@"
else
    exec /command.sh "$@"
fi
