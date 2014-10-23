#!/bin/bash

dir="/home/moa/project/evipnet"
dst="/home/crisfoto/webapps/moacirmoda/tmp"

#send files
rsync -rv crisfoto:$dst/evipnet/wp-content/uploads/ $dir/htdocs/wp-content

# bd
ssh crisfoto "mysqldump -utmp -pmoa00moa evipnet > /tmp/evipnet.sql"
rsync -rv crisfoto:/tmp/evipnet.sql /tmp

cd $dir/htdocs
wp db export /tmp/evipnet-local.sql
wp db import /tmp/evipnet.sql
wp search-replace moacirmoda.com/tmp/evipnet evipnet.dev
wp search-replace $dst/evipnet $dir/htdocs
# wp db export /tmp/evipnet.sql
# wp db import /tmp/evipnet-local.sql
# rm /tmp/evipnet-local.sql
