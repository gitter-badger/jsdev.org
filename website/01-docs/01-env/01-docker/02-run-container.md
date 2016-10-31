---
layout: page
title: Run Docker Container (with node.js)
permalink: /env/docker/run-container/
---

### Run Docker Container (with node.js)

<br/>

### Step 1: Prepare Docker Image With Node.js

<br/>

Docker scpript:  

<a href="https://github.com/nodejs/docker-node/blob/master/6.9/Dockerfile">here</a>


<br/>

    $ cd /tmp/

<br/>

**var 2:**

    $ wget -O Dockerfile https://github.com/nodejs/docker-node/blob/master/6.9/Dockerfile?raw=true    

<br/>

**var 2:**

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
    ENV NODE_VERSION 6.8.1

    RUN curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/node-v$NODE_VERSION-linux-x64.tar.xz" \
      && curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/SHASUMS256.txt.asc" \
      && gpg --batch --decrypt --output SHASUMS256.txt SHASUMS256.txt.asc \
      && grep " node-v$NODE_VERSION-linux-x64.tar.xz\$" SHASUMS256.txt | sha256sum -c - \
      && tar -xJf "node-v$NODE_VERSION-linux-x64.tar.xz" -C /usr/local --strip-components=1 \
      && rm "node-v$NODE_VERSION-linux-x64.tar.xz" SHASUMS256.txt.asc SHASUMS256.txt \
      && ln -s /usr/local/bin/node /usr/local/bin/nodejs

    CMD [ "node" ]


After file has been created or copied:

    // next command will create image with instructions from Dockerfile
    $ docker build -t image_jessie_node_6_8_1 .


<br/>

### Step 2: Create and Run Docker Container


    $ project_name=my_project

<br/>

    $ echo ${project_name}

<br/>

    $ mkdir -p /projects/dev/${project_name}

<br/>


    $ docker run -it \
    -p 80:8080 -p 1337:1337 -p 3000:3000 -p 4000:4000 -p 5000:5000 -p 6000:6000 -p 7000:7000 -p 8000:8000 -p 9000:9000 \
    --name ${project_name} \
    -v /projects/dev/${project_name}:/project \
    image_jessie_node_6_8_1 \
    /bin/bash

<br/>

    # node -v
    v6.8.1

<br/>

    # npm -v
    3.10.8



<br/>

    # apt-get -qq update

    # apt-get install -y vim curl

    # adduser developer

or without additional questions:

    # adduser --disabled-password --gecos "" developer



<br/>

### Most Important Docker Commands After Container Has Been Created

    // show running containers
    $ docker ps

    // show all containers
    $ docker ps -a

    $ docker start <container_name>
    $ docker attach <container_name>

    // connect to docker container by additional terminal
    $ docker exec -it <container_name> bash

    // detach from container without stopping
    CTRL + P + Q
