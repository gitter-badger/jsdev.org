---
layout: page
title: Docker installation on Ubuntu 14.04
permalink: /env/docker/installation/ubuntu/
---

<br/>

### Docker installation on Ubuntu 14.04


    # wget -qO- https://get.docker.com/gpg | apt-key add -
    # echo "deb http://get.docker.com/ubuntu docker main" >> /etc/apt/sources.list.d/docker.list

    # apt-get update
    # apt-get install -y lxc-docker

    # docker -v

<br/>

### Grant user permission to work with docker

    $ sudo gpasswd -a <username> docker


In the docker group should appear created user

    $ cat /etc/group
        docker:x:126:username

Logout and login again

    $ logout

Or better choice is to reboot computer.

    $ sudo reboot
