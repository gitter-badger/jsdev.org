---
layout: page
title: Qlik Sense 3.0 My startup template for extensions development
permalink: /commercial/qlik/3.0/my-statup-template-for-extensions-development/
---


<br/>

### [Qlik Sense 3.0] My startup template for extensions development


    define( [
      'qlik'
    ],

    function (qlik) {
    	'use strict';

    	return {

            prePaint: function(){
                myFunction1();
            },

    		paint: function ($element) {

    			myFunction2();

    			return qlik.Promise.resolve();
    		}
    	};


    function myFunction(){
      	var app = qlik.currApp();
      }

    } );
