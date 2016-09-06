---
layout: page
title: Qlik Sense 3.0
permalink: /commercial/qlik/3.0/working-with-field-programmatically/
---


### [Qlik Sense 3.0] Working with field programmatically


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

      var field = app.field('Year');

	  $.each(field.getData().rows, function(key, value) {
		 // console.log(value.qText);
		 console.log(value.qNum);

	  });
