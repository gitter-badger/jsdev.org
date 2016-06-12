---
layout: page
title: SonarQube
permalink: /development-tools/code-quality/sonarqube/installation/
---


### SonarQube Installation


http://www.sonarqube.org/downloads/



Plan...


### 1) JDK8 Installation

+

### 2) MySQL Installation

+ http://sysadm.ru/linux/databases/mysql/installation/centos7/


    mysql -u root -p

<br/>

    CREATE DATABASE sonar CHARACTER SET utf8 COLLATE utf8_general_ci;
    CREATE USER 'sonar' IDENTIFIED BY 'sonar';
    GRANT ALL ON sonar.* TO 'sonar'@'%' IDENTIFIED BY 'sonar';
    GRANT ALL ON sonar.* TO 'sonar'@'localhost' IDENTIFIED BY 'sonar';
    FLUSH PRIVILEGES;


### 3) Web Server

DISABLE FIREWALL

    # systemctl disable firewalld
    # systemctl stop firewalld


<br/>

    # cd /tmp/
    # wget https://sonarsource.bintray.com/Distribution/sonarqube/sonarqube-5.6.zip

    # unzip sonarqube-5.6.zip
    # mkdir -p /opt/sonarqube/5.6
    # mv sonarqube-5.6/* /opt/sonarqube/5.6/


    # ln -s /opt/sonarqube/5.6 /opt/sonarqube/current


<br/>    


    $ su - <username>


<br/>

    $ vi ~/.bash_profile

<br/>

after

    # User specific environment and startup programs

<br/>

	#### SonarQube 5.6 #######################

		export SONAR_QUBE_HOME=/opt/sonarqube/current
		export PATH=${SONAR_QUBE_HOME}/bin:$PATH

	#### SonarQube 5.6 #######################

<br/>


    $ source ~/.bash_profile

<br/>

    # chown -R <username> /opt/sonarqube/

<br/>

    $ cp /opt/sonarqube/current/conf/sonar.properties /opt/sonarqube/current/conf/sonar.properties.orig

<br/>

    $ vi /opt/sonarqube/current/conf/sonar.properties

<br/>

    sonar.jdbc.username=sonar
    sonar.jdbc.password=sonar
    sonar.jdbc.url=jdbc:mysql://localhost:3306/sonar?useUnicode=true&characterEncoding=utf8&rewriteBatchedStatements=true&useConfigs=maxPerformance

<br/>

    sonar.web.host=192.168.1.11
    sonar.web.context=/
    sonar.web.port=8080

<br/>

    $ cd /opt/sonarqube/current/bin/linux-x86-64/

    $ ./sonar.sh start

<br/>    

    $ ./sonar.sh status
    SonarQube is running (11973).


<br/>  


    $ less /opt/sonarqube/current/logs/sonar.log

<br/>  

    $ cat /dev/null > /opt/sonarqube/current/logs/sonar.log

<br/>  

    $ ./sonar.sh start

<br/>  

    $ ps auxww | grep sonar

<br/>    

    $ curl -I http://192.168.1.11:8080
    HTTP/1.1 200 OK
    Server: Apache-Coyote/1.1
    X-Runtime: 555
    ETag: "44bc02970c5e6e02da2f75426ad88a35"
    Cache-Control: no-cache, no-store, must-revalidate
    X-Frame-Options: SAMEORIGIN
    X-XSS-Protection: 1; mode=block
    X-Content-Type-Options: nosniff
    X-Frame-Options: SAMEORIGIN
    X-XSS-Protection: 1; mode=block
    X-Content-Type-Options: nosniff
    Content-Type: text/html;charset=utf-8
    Content-Length: 10194
    Vary: Accept-Encoding
    Date: Sun, 05 Jun 2016 20:27:20 GMT


<br/>   
browser:  
http://192.168.1.11:8080/


<br/>

    login: admin
    password: admin


<br/>   


Administration --> SYSTEM --> Update Center --> Available

GitHub


<br/>   

### Example how it works

https://www.youtube.com/watch?v=JWI_3ibHNTo

<br/>   

    # yum install -y git
    # cd /tmp
    $ git clone https://github.com/mvel/mvel
    $ cd mvel/
    $ mvn clean install -DskipTests
    $ mvn sonar:sonar


    <br/>   
    <br/>  

See also:  
https://www.youtube.com/watch?v=xLO8Q_F3jIg  
http://dev.mamikon.net/installing-sonarqube-on-ubuntu/