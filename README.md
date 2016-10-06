# [jsdev.org](http://jsdev.org) source codes


[![Build Status](https://travis-ci.org/jsdev-org/jsdev.org.svg?branch=gh-pages)](https://travis-ci.org/jsdev-org/jsdev.org)


To run jsdev.org on your local server, you can do next:

**Install Docker**

Then

    docker pull marley/centos6-for-dev
    docker run -i -t –rm -p 80:8080 –-name jsdev-org marley/centos6-for-dev /bin/bash


    source ~/.bash_profile
    cd /projects
    git clone --depth=1 https://github.com/jsdev-org/jsdev.org
    cd jsdev.org
    gem install jekyll
    jekyll serve --watch --host 0.0.0.0 --port 8080


and connect to localhost.
