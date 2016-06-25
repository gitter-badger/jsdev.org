---
layout: page
title: Install Atom on Ubuntu 14.04
permalink: /atom/install-atom-on-ubuntu-14-04/
---

<br/><br/>

### Install Atom on Ubuntu 14.04


    $ sudo add-apt-repository -y ppa:webupd8team/atom
    $ sudo apt-get update -y
    $ sudo apt-get install -y atom

<br/>

More information you can find on:
http://www.webupd8.org/2014/05/install-atom-text-editor-in-ubuntu-via-ppa.html


br/>

### Additional setup:

    $ cd ~/.atom/
    $ cp styles.less styles.less.bkp

<br/>

All file styles.less I replace on:


    $ vi styles.less

<br/>

    editor, atom-text-editor::shadow {

        .bracket-matcher {
            border-bottom: 1px solid lime;
            position: absolute;
            border: 1px solid rgba(0, 255, 0, 0.7);
            background-color: rgba(0, 255, 0, 0.3);
            border-radius: 32px
        }
    }


<br/>


<br/>

### Additional Packages:


Edit --> Preferences --> Install

    autosave
    Atom Beautify
    jshint


<br/><br/>

**Top 5 Packages: Atom Code Editor**

<br/><br/>

<div align="center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/DmKNDxlNLoE" frameborder="0" allowfullscreen></iframe>
</div>

<br/><br/>


    # 5 - 8 votes
    The Designer
    i like atom too and my favorite package is emmet https://github.com/emmetio/emmet-atom

    # 4 - 13 votes
    Rodrigo Lima Batista
    https://atom.io/packages/terminal-plus - Terminal-Plus. Love it. Not perfect or too popular but it is awesome.

    # 3 - 16 votes
    Lucas
    I really like Atom. I installed Minimap so it looks like Sublime Text ^^

    # 2 - 18 votes
    Windowface
    Travis, have you ever used Brackets code editor? I've been using it for a while now and love it

    # 0 - honorable mention
    Romain Lepert
    This atom package just makes my life better
    https://atom.io/packages/doge

    # 1 - 21 votes
    Dennis Vlaanderen
    https://atom.io/packages/atom-bootstrap4


<br/>
