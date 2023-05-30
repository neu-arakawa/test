<?php

chdir(dirname(__FILE__).'/../');
system('/usr/bin/git reset --hard HEAD');
system('/usr/bin/git pull 2>&1');
