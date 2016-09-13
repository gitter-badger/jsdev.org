---
layout: page
title: Docker installation on CentOS 7
permalink: /env/docker/installation/centos/
---


## Docker installation on CentOS 7


    # yum update -y

<br/>

    # vi /etc/yum.repos.d/docker.repo

 <br/>

    [dockerrepo]
    name=Docker Repository
    baseurl=https://yum.dockerproject.org/repo/main/centos/$releasever/
    enabled=1
    gpgcheck=1
    gpgkey=https://yum.dockerproject.org/gpg


<br/>

    # yum install -y docker-engine

<br/>

    # chkconfig docker on

<br/>

    # service docker start

<br/>

    # groupadd docker

    # usermod -aG docker your_username

<br/>

    Log out and log back in.


<br/>

    $ docker run hello-world

<br/>


https://docs.docker.com/engine/installation/linux/centos/


<!--

<br/>
<br/>

### Вариант установки скриптом (рекомендуется)

    # wget https://get.docker.com/builds/Linux/x86_64/docker-latest -O /usr/bin/docker

    $ sudo chmod +x /usr/bin/docker



-->
