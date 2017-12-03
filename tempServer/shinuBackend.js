 var express = require('express'); //require the express dependency

var app = express(); //instantiate the express server
var port = 3000; //store port passed in by command

app.get('/feed', function(req, res){	//define route for get request
	res
		.status(200)
		.end();		//write hello world to url and end
});

app.listen(port);