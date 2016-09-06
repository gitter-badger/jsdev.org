---
layout: page
title: Qlik Sense 3.0 How to programmatically get something by Qlik API
permalink: /commercial/qlik/3.0/get-data-by-api/
---


### [Qlik Sense 3.0] How to programmatically get something by Qlik API

    app = qlik.currApp();


**AppList**


    qlik.getAppList(function(list){
        var str = "";
        $.each(list, function(key, value) {
            str +=  value.qDocName + '('+ value.qDocId + ') ';
        });
        console.log(str);
    });



<br/><br/>


    var app = qlik.currApp();


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
