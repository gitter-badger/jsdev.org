---
layout: page
title: Qlik Sense 3.0
permalink: /commercial/qlik/3.0/working-with-field-programmatically/
---


### [Qlik Sense 3.0] Working with field programmatically


	var fieldName = "Year";
	var field = app.field(fieldName);

	field.selectAll();

<br/>

     console.log(field.getData());


	 var fieldData = field.getData();

	 console.log(fieldData);

	  $.each(field.getData(), function(key, value) {
		  console.log(key, value);
	  });


<br/>


	 // Without "app.getList" it not works

	  $.each(field.getData().rows, function(key, value) {
		 console.log(value.qText);
	  });



	  // therefore

	function getArrayWithMonth(promise, fieldName){

		 console.log("getArrayWithMonth");

		 var loc_selections = [];

		  app.getList("SelectionObject", function(reply){

			 console.log("APP.GETLIST");

			 loc_selections = [];

			 console.log("HERE1");
			  $.each(app.field(fieldName).getData().rows, function(key, value) {

				   // console.log(value.qText);
				   // console.log(value.qElemNumber);

				   loc_selections.push({'monthName':value.qText, 'monthValue':value.qElemNumber});
			  });

			   console.log("HERE2");

			   console.log("END");
			   promise.resolve(loc_selections);

			   console.log("resFUNCTION");
			   console.log(loc_selections);
			   return loc_selections;
		  });

	}


<br/>

      var field = app.field('Year');

	  $.each(field.getData().rows, function(key, value) {
		 // console.log(value.qText);
		 console.log(value.qNum);

	  });
