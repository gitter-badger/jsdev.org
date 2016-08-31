---
layout: page
title: Qlik 3.0
permalink: /commercial/qlik/3.0/
---


### Qlik 3.0


<div align="center">

<iframe width="853" height="480" src="https://www.youtube.com/embed/xT0KPWtrgMg" frameborder="0" allowfullscreen></iframe>

</div>


<br/>

### How to programmatically get something by Qlik API


**AppList**


    qlik.getAppList(function(list){
        var str = "";
        $.each(list, function(key, value) {
            str +=  value.qDocName + '('+ value.qDocId + ') ';
        });
        alert(str);
    });



**FieldList**


    app.getList("FieldList", function(reply){
    	var str = "";
    	$.each(reply.qFieldList.qItems, function(key, value) {
    		str +=  value.qName + ' \n';
    	});
    	console.log(str);
    });


**MeasureList**


	app.getList("MeasureList", function(reply){
		var str = "";
		$.each(reply.qMeasureList.qItems, function(key, value) {
		console.log(value.qData.title);
		});
	});


**DimensionList**


	app.getList("DimensionList", function(reply){
		var str = "";
		$.each(reply.qDimensionList.qItems, function(key, value) {
		console.log(value.qData.title);
		});
	});



**BookmarkList**

	app.getList("BookmarkList", function(reply){

	// console.log(reply);

		var str = "";
		$.each(reply.qBookmarkList.qItems, function(key, value) {
			str +=  value.qData.title + ' ';
		});
		// alert(str);
		console.log(str);
	});


**SelectionObject**


	app.getList("SelectionObject", function(reply){
				var str = "";
				$.each(reply.qSelectionObject.qSelections, function(key, value) {
					console.log(value);
				});

	});



<br/>
<br/>

https://help.qlik.com/en-US/sense-developer/3.0/Subsystems/APIs/Content/MashupAPI/Methods/getList-method.htm


<br/>
<br/>

<br/>

### My Starting script for development extensions


    define( [
      'qlik'
    ],

    function (qlik) {
    	'use strict';


      function myFunction(){
    	var app = qlik.currApp();
    }


    	return {

    		paint: function ($element) {

    			myFunction();

    			return qlik.Promise.resolve();
    		}
    	};

    } );



<br/>


### Some other examples



	var field = app.field('Year');

        console.log(field.getData());

	  $.each(field.getData(), function(key, value) {
		  console.log(key, value);
	  });


<br/>


	  $.each(field.getData().rows, function(key, value) {
		 console.log(value.qText);
	  });




<br/>

### How to Use Bookmark and Selection examples:

API:  
https://help.qlik.com/en-US/sense-developer/3.0/Subsystems/APIs/Content/AppIntegrationAPI/app-integration-api.htm


Bookmark:
http://localhost:4848/sense/app/C%3A%5CUsers%5CMarley%5CDocuments%5CQlik%5CSense%5CApps%5CAuto.qvf/sheet/fPJrXZ/sheet/fPJrXZ/state/analysis/bookmark/YGaJse

Selection:
http://localhost:4848/sense/app/C%3A%5CUsers%5CMarley%5CDocuments%5CQlik%5CSense%5CApps%5CAuto.qvf/sheet/fPJrXZ/state/analysis/select/Year/2000  
http://localhost:4848/sense/app/C%3A%5CUsers%5CMarley%5CDocuments%5CQlik%5CSense%5CApps%5CAuto.qvf/sheet/fPJrXZ/state/analysis/select/Car%20sales/100;120;200;300
