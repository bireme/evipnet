#!/bin/bash

dir="/home/moa/project/evipnet"
dst="/home/crisfoto/webapps/moacirmoda/tmp"

#send files
rsync -rv --delete $dir/git/plugins crisfoto:$dst/evipnet/wp-content/
rsync -rv --delete $dir/git/themes crisfoto:$dst/evipnet/wp-content/
rsync -rv --delete $dir/htdocs/wp-content/uploads crisfoto:$dst/evipnet/wp-content/

# bd
cd $dir/htdocs
wp db export /tmp/evipnet-local.sql
wp search-replace evipnet.dev moacirmoda.com/tmp/evipnet
wp search-replace $dir/htdocs $dst/evipnet
wp db export /tmp/evipnet.sql
wp db import /tmp/evipnet-local.sql
rm /tmp/evipnet-local.sql

rsync -rv /tmp/evipnet.sql crisfoto:/tmp
ssh crisfoto "mysql -utmp -pmoa00moa evipnet < /tmp/evipnet.sql"

ssh crisfoto "find $dst/evipnet -type f | xargs chmod 0664"
ssh crisfoto "find $dst/evipnet -type d | xargs chmod 0775"
