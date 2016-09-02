---
layout: page
title: JavaScript basics
permalink: /frontend/js/basics/
---



## JavaScript basics


Convert comma separated string to array


    var selections = [];
    selections.push({"field":"Year", "selected":"2000, 2002, 2004, 2006, 2008"});

    var field = selections["0"].field;
    var selected1 = selections["0"].selected;


    var temp1 = new Array();
    temp1 = selected1.split(",");

    // res ["2000", " 2002", " 2004", " 2006", " 2008"]

    var temp2 = new Array();
      temp2 = selected1.split(",").map(function(item) {
    	  return parseInt(item, 10);
    });

    // res [2000, 2002, 2004, 2006, 2008]


<br/>

### Example 2    


    var selections = [];
    selections.push({"field":"Territory code", "selected":"ABW, AFG, AGO, AIA, ALB"});


    var field1 = selections["0"].field;
    var selected1 = selections["0"].selected;

    var temp = new Array();
      temp = selected1.split(",");

      console.log("temp");
      console.log(temp);

      var res = [];

      for (var i = 0; i < temp.length; i++) {
        // console.log(temp[i]);
        res.push({qText:temp[i].trim()});
      }


      // res:


      [
          {
            "qText": "ABW"
          },
          {
            "qText": "AFG"
          },
          {
            "qText": "AGO"
          },
          {
            "qText": "AIA"
          },
          {
            "qText": "ALB"
          }
     ]
