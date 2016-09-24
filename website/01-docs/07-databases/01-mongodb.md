---
layout: page
title: MongoDB
permalink: /databases/mongodb/
---

<br/>

# MongoDB

<br/><br/>

### Projects in MongoDB Learn MongoDB Building Ten Projects

Only 1 good course for study, how to programming on JavaScript For MongoDB

https://www.eduonix.com/courses/Web-Development/Projects-in-MongoDB-Learn-MongoDB-Building-Ten-Projects


<br/><br/>

Some Other Examples:

https://github.com/marley-nodejs/Build-a-Real-Time-web-app-in-node.js-Angular.js-mongoDB


<br/><br/>


### Some Examples

    # mongo
    > use knowledgebase
    > db.createCollection('articles');
    > db.createCollection('categories');

    > db.categories.insert({name:"Technology"});
    > db.categories.insert({name:"Education"});
    > db.categories.insert({name:"Healthcare"});
    > db.categories.find();

**Insert:**    

    > db.articles.insert({title:"Article One", category: "Technology", body: "This is the body", date: new Date()});
    > db.articles.insert({title:"Article Two", category: "Education", body: "This is the body", date: new Date()});
    > db.articles.insert({title:"Article Three", category: "Education", body: "This is the body", date: new Date()});

    > db.articles.find();


<br/>

**Update:**

    > use knowledgebase
    > db.categories.update({name:"Technology"}, {$set:{description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis eu sem pellentesque rutrum. Nulla nec porttitor velit, in venenatis ante. Donec eget fringilla dolor."}});


<br/>

**find().pretty():**

    > db.categories.find().pretty();
    { "_id" : ObjectId("57e67735c08c6bee3d047803"), "name" : "Education" }
    {
    "_id" : ObjectId("57e67705c08c6bee3d047802"),
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis eu sem pellentesque rutrum. Nulla nec porttitor velit, in venenatis ante. Donec eget fringilla dolor.",
    "name" : "Technology"
    }
    {
    "_id" : ObjectId("57e67792c08c6bee3d047804"),
    "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis eu sem pellentesque rutrum. Nulla nec porttitor velit, in venenatis ante. Donec eget fringilla dolor.",
    "name" : "Healthcare"
    }
