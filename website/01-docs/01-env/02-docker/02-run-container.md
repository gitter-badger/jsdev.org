---
layout: page
title: Run Docker Container (with node.js)
permalink: /env/docker/run-container/
---

### Run Docker Container (with node.js)


<br/>
Docker scpript:  

https://github.com/nodejs/docker-node

<br/>

    $ cd /tmp/

<br/>


    $ vi Dockerfile

<br/>

    FROM buildpack-deps:jessie

    # gpg keys listed at https://github.com/nodejs/node
    RUN set -ex \
      && for key in \
        9554F04D7259F04124DE6B476D5A82AC7E37093B \
        94AE36675C464D64BAFA68DD7434390BDBE9B9C5 \
        0034A06D9D9B0064CE8ADF6BF1747F4AD2306D93 \
        FD3A5288F042B6850C66B31F09FE44734EB7990E \
        71DCFD284A79C3B38668286BC97EC7A07EDE3FC1 \
        DD8F2338BAE7501E3DD5AC78C273792F7D83545D \
        B9AE9905FFD7803F25714661B63B535A4C206CA9 \
        C4F0DFFF4E8C1A8236409D08E73BC641CC11F4C8 \
      ; do \
        gpg --keyserver ha.pool.sks-keyservers.net --recv-keys "$key"; \
      done

    ENV NPM_CONFIG_LOGLEVEL info
    ENV NODE_VERSION 4.5.0

    RUN curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/node-v$NODE_VERSION-linux-x64.tar.xz" \
      && curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/SHASUMS256.txt.asc" \
      && gpg --batch --decrypt --output SHASUMS256.txt SHASUMS256.txt.asc \
      && grep " node-v$NODE_VERSION-linux-x64.tar.xz\$" SHASUMS256.txt | sha256sum -c - \
      && tar -xJf "node-v$NODE_VERSION-linux-x64.tar.xz" -C /usr/local --strip-components=1 \
      && rm "node-v$NODE_VERSION-linux-x64.tar.xz" SHASUMS256.txt.asc SHASUMS256.txt

    CMD [ "node" ]


<br/>


    $ docker build -t image_jessie_node_4_5_0 .

<br/>

    $ project_name=my_project
    
<br/>

    $ mkdir -p /projects/dev/${project_name}

<br/>


    $ docker run -it \
    -p 80:8080 -p 1337:1337 -p 3000:3000 -p 4000:4000 -p 5000:5000 -p 6000:6000 -p 7000:7000 -p 8000:8000 -p 9000:9000 \
    --name ${project_name} \
    -v /projects/dev/${project_name}:/projects \
    image_jessie_node_4_5_0 \
    /bin/bash

<br/>

    # node -v
    v4.5.0

<br/>

    # npm -v
    2.15.9


<br/>

    # apt-get -qq update

    # apt-get install -y vim curl

    # adduser developer
