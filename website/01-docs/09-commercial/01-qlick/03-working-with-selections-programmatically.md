---
layout: page
title: Qlik Sense 3.0 Working Examples with selections
permalink: /commercial/qlik/3.0/working-with-selections-programmatically/
---


### [Qlik Sense 3.0] Working Examples with selections:


    app.field('Year').select([0], false, false);
    app.field('Year').selectMatch('1997', true);
    app.field('Year').select([0, 1, 2], true, true);

    app.field("Year").selectAll();
    app.field('Year').clear();

    app.field('Territory code').selectValues([{qText: 'CHN'},{qText: 'USA'}], true, true);
    app.field('Year').selectValues([1997, 1998, 1999, 2000], true, true);
