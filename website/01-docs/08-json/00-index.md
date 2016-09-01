---
layout: page
title: JSON
permalink: /json/
---



    var json2 = {"sensors":[]};

    app.getList("SelectionObject", function(reply){

                $.each(reply.qSelectionObject.qSelections, function(key, value) {
                    json2.sensors.push({"field":value.qField, "selected":value.qSelected});
                });
    });
