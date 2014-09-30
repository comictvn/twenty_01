#!/bin/sh

export DB_HOST=localhost
export DB_NAME=twentywp
export DB_USER=twenty
export DB_PASS=twenty

#export PGDATABASE=$DATABASE
#export PGHOST=$DB_HOST
#export PGUSER=$DB_USER
#export PGPASSWORD=$DB_PASS

alias domysql='mysql -h $DB_HOST -u $DB_USER -p${DB_PASS} $DB_NAME'

