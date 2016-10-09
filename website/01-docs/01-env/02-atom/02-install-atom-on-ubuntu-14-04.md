---
layout: page
title: Install Atom on Ubuntu 14.04
permalink: /env/atom/install-atom-on-ubuntu-14-04/
---

<br/><br/>

### Install Atom on Ubuntu 14.04


    $ sudo add-apt-repository -y ppa:webupd8team/atom
    $ sudo apt-get update -y
    $ sudo apt-get install -y atom

<br/>

More information you can find on:
http://www.webupd8.org/2014/05/install-atom-text-editor-in-ubuntu-via-ppa.html


<br/>

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

or


    $ apm install autosave
    $ apm install atom-beautify
    $ apm install jshint
    $ apm install inline-markdown-images

![inline-markdown-images](http://raw.githubusercontent.com/some-atom/inline-markdown-images/master/preview.gif)




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

### My List of Packages


    $ apm list
    Built-in Atom Packages (88)
    ├── about@1.5.3
    ├── archive-view@0.61.1
    ├── atom-dark-syntax@0.27.0
    ├── atom-dark-ui@0.52.0
    ├── atom-grammar-test@0.6.0
    ├── atom-light-syntax@0.28.0
    ├── atom-light-ui@0.44.0
    ├── autocomplete-atom-api@0.10.0
    ├── autocomplete-css@0.11.2
    ├── autocomplete-html@0.7.2
    ├── autocomplete-plus@2.31.1
    ├── autocomplete-snippets@1.11.0
    ├── autoflow@0.27.0
    ├── autosave@0.23.1
    ├── background-tips@0.26.1
    ├── base16-tomorrow-dark-theme@1.1.0
    ├── base16-tomorrow-light-theme@1.1.1
    ├── bookmarks@0.41.0
    ├── bracket-matcher@0.82.1
    ├── command-palette@0.38.0
    ├── deprecation-cop@0.54.1
    ├── dev-live-reload@0.47.0
    ├── encoding-selector@0.22.0
    ├── find-and-replace@0.201.0
    ├── fuzzy-finder@1.3.0
    ├── git-diff@1.1.0
    ├── go-to-line@0.31.0
    ├── grammar-selector@0.48.1
    ├── image-view@0.58.2
    ├── incompatible-packages@0.26.1
    ├── keybinding-resolver@0.35.0
    ├── language-c@0.52.1
    ├── language-clojure@0.21.0
    ├── language-coffee-script@0.47.2
    ├── language-csharp@0.12.1
    ├── language-css@0.37.1
    ├── language-gfm@0.88.0
    ├── language-git@0.15.0
    ├── language-go@0.42.1
    ├── language-html@0.45.1
    ├── language-hyperlink@0.16.0
    ├── language-java@0.23.0
    ├── language-javascript@0.119.0
    ├── language-json@0.18.2
    ├── language-less@0.29.5
    ├── language-make@0.22.2
    ├── language-mustache@0.13.0
    ├── language-objective-c@0.15.1
    ├── language-perl@0.35.0
    ├── language-php@0.37.2
    ├── language-property-list@0.8.0
    ├── language-python@0.45.0
    ├── language-ruby@0.69.0
    ├── language-ruby-on-rails@0.25.0
    ├── language-sass@0.56.0
    ├── language-shellscript@0.22.4
    ├── language-source@0.9.0
    ├── language-sql@0.23.0
    ├── language-text@0.7.1
    ├── language-todo@0.28.0
    ├── language-toml@0.18.0
    ├── language-xml@0.34.9
    ├── language-yaml@0.26.0
    ├── line-ending-selector@0.5.0
    ├── link@0.31.1
    ├── markdown-preview@0.158.0
    ├── notifications@0.65.0
    ├── one-dark-syntax@1.3.0
    ├── one-dark-ui@1.5.0
    ├── one-light-syntax@1.3.0
    ├── one-light-ui@1.5.0
    ├── open-on-github@1.2.0
    ├── package-generator@1.0.0
    ├── settings-view@0.242.2
    ├── snippets@1.0.2
    ├── solarized-dark-syntax@1.0.2
    ├── solarized-light-syntax@1.0.2
    ├── spell-check@0.67.1
    ├── status-bar@1.4.1
    ├── styleguide@0.47.0
    ├── symbols-view@0.113.0
    ├── tabs@0.100.2
    ├── timecop@0.33.2
    ├── tree-view@0.208.2
    ├── update-package-dependencies@0.10.0
    ├── welcome@0.34.0
    ├── whitespace@0.33.0
    └── wrap-guide@0.38.1

    Community Packages (6) /home/marley/.atom/packages
    ├── atom-beautify@0.29.7
    ├── atom-typescript@8.9.1
    ├── inline-markdown-images@1.0.0
    ├── jshint@1.8.5
    ├── linter@1.11.4
    └── react@0.15.0

    └── (empty)
