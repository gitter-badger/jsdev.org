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

	// Sometime it not Working. I do not why.

	  $.each(field.getData().rows, function(key, value) {
		 console.log(value.qText);
	  });


<br/>

      var field = app.field('Year');

	  $.each(field.getData().rows, function(key, value) {
		 // console.log(value.qText);
		 console.log(value.qNum);

	  });
