#!/bin/bash
echo 'Recreating `tmp` directories...'
echo `mkdir -p ../app/tmp/{cache/{models,persistent,views},logs,sessions,tests}`

echo 'Making `tmp` directories writable...'
echo `chmod -R 0777 ../app/tmp`