# [javadev.org](http://javadev.org) source codes

[![Join the chat at https://gitter.im/javadev-org/Lobby](https://badges.gitter.im/javadev-org/Lobby.svg)](https://gitter.im/javadev-org/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/javadev-org/javadev.org.svg?branch=gh-pages)](https://travis-ci.org/javadev-org/javadev.org)


To run javadev.org on your local server, you can do next:

**Install Docker**

Then

    docker pull marley/centos6-for-dev
    docker run -i -t –rm -p 80:8080 –-name javadev-org marley/centos6-for-dev /bin/bash


    source ~/.bash_profile
    cd /projects
    git clone --depth=1 https://github.com/javadev-org/javadev.org
    cd javadev.org
    gem install jekyll
    jekyll serve --watch --host 0.0.0.0 --port 8080

and connect to localhost.
