---
layout: page
title: JSON
permalink: /json/
---



    var selections = [];

	app.getList("SelectionObject", function(reply){

		console.log("app.getList");

			$.each(reply.qSelectionObject.qSelections, function(key, value) {

			    console.log("$.each");
				selections.push({'field':value.qField, 'selected':value.qSelected});
			});
		});


<br/>

    for (var i = 0; i < selections.length; i++) {
    	  console.log(selections[i].field);
    	  console.log(selections[i].selected);
    	}
