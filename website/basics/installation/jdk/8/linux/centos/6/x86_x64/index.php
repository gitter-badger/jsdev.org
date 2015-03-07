<!DOCTYPE html>
<html>


<?php $title="JDK8, Maven, Gradle, Glassfish installation on Centos 6.X x86_x64"; ?>

<?php
ob_start();
include("../../../../../../../../_header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%",$title,$buffer);
echo $buffer;
?>



<body>

<br/><br/>


<?php include_once "../../../../../../../../_navBar.php"?>


<hr>
<br/><br/>

<div class="link">



<h2>JDK8, Maven, Gradle, Glassfish installation on Centos 6.X x86_x64</h2>




<h3>Let install some packages before</h3>


<pre>

# yum install -y \
vim \
wget \
unzip

</pre>


<br/><br/>
<h3>JDK8 Installation:</h3>


<br/>


<pre>
# cd /tmp

-- download jdk from oracle website
# wget --no-check-certificate --no-cookies - --header "Cookie: oraclelicense=accept-securebackup-cookie" http://download.oracle.com/otn-pub/java/jdk/8u20-b26/jdk-8u20-linux-x64.tar.gz


# ls jdk*
jdk-8u20-linux-x64.tar.gz


# tar -xvzpf jdk-8u20-linux-x64.tar.gz

# mkdir -p /opt/jdk/1.8.0.20


# mv jdk1.8.0_20//* /opt/jdk/1.8.0.20


# ln -s /opt/jdk/1.8.0.20 /opt/jdk/current



# useradd user1
# su - user1

$ vi ~/.bash_profile


#### JAVA 1.8.0 #######################

	export JAVA_HOME=/opt/jdk/current
	export PATH=$PATH:$JAVA_HOME/bin

#### JAVA 1.8.0 #######################


$ source ~/.bash_profile


Let check result:

$ java -version
java version "1.8.0_20"
Java(TM) SE Runtime Environment (build 1.8.0_20-b26)
Java HotSpot(TM) 64-Bit Server VM (build 25.20-b23, mixed mode)

</pre>



<br/><br/>
<h3>Maven Installation:</h3>


<strong>Distrib:</strong><br/>
http://maven.apache.org


<pre>

$ su - root

# cd /tmp
# wget http://www.sai.msu.su/apache/maven/binaries/apache-maven-3.1.0-bin.tar.gz

# tar -xvzpf apache-maven-3.1.0-bin.tar.gz

# mkdir -p /opt/maven/3.1.0

# mv apache-maven-3.1.0/* /opt/maven/3.1.0/


$ su - user1

$ vi ~/.bash_profile


#### MAVEN 3.1.0 #########################

	export MAVEN_HOME=/opt/maven/3.1.0
	export PATH=$PATH:$MAVEN_HOME/bin

#### MAVEN 3.1.0 #########################



$ source ~/.bash_profile


$ mvn -version

</pre>

<br/><br/>

<h3>Gradle Installation:</h3>


<strong>Distrib:</strong><br/>
http://www.gradle.org/downloads


<pre>

$ su - root

# cd /tmp
# wget http://services.gradle.org/distributions/gradle-1.12-bin.zip

# unzip gradle-1.12-bin.zip

# mkdir -p /opt/gradle/1.12

# mv gradle-1.12/* /opt/gradle/1.12

# su - user1

$ vi ~/.bash_profile


#### GRADLE 1.12 ###########################

	export GRADLE_HOME=/opt/gradle/1.12
	export PATH=$PATH:$GRADLE_HOME/bin

#### GRADLE 1.12 ###########################



$ source ~/.bash_profile

$ gradle -version

</pre>


<br/><br/>
<h3>Glassfish Installation:</h3>


<strong>Distrib:</strong><br/>
http://glassfish.org


<pre>

$ su - root

# cd /tmp
# wget http://download.java.net/glassfish/4.0/release/glassfish-4.0.zip

# mkdir -p /opt/glassfish/4.0

# unzip glassfish-4.0.zip


# mv glassfish4/* /opt/glassfish/4.0


# su - user1

$ vi ~/.bash_profile


#### GLASSFISH 4.0 ##############################

	export GLASSFISH_HOME=/opt/glassfish/4.0/glassfish
	export PATH=$PATH:$GLASSFISH_HOME/bin

#### GLASSFISH 4.0 ##############################



$ source ~/.bash_profile


$ asadmin  version
Version string could not be obtained from Server [localhost:4848].
(Turn debugging on e.g. by setting AS_DEBUG=true in your environment, to see the details.)
Using locally retrieved version string from version class.
Version = GlassFish Server Open Source Edition  4.0  (build 89)
Command version executed successfully.



Default password is: adminadmin


</pre>




</div>

<?php include_once "../../../../../../../../_footer.php"?>

</body>

</html>