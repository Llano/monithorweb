var signalR = function() {
	var url = "http://localhost:8080/signalr";

	$.connection.hub.url = url;
	var serverHub = $.connection.myHub;
	$.connection.hub.logging = true;
	var serverConnected = false;
	var connectionHub = null;

	if (serverHub)
	{

	    connectionHub = $.connection.hub.start();


	    connectionHub.done(function() {
	        console.log("connected");
	    });


	    $.connection.hub.disconnected(function() {
	        console.log("disconnected");
	    });

	    $.connection.hub.reconnecting(function() {
	        console.log("reconnecting");
	    });

	    $.connection.hub.reconnected(function() {
	        console.log("reconnected");
	    });

	    $.connection.hub.error(function (error) {
	        console.log('SignalR error: ' + error)
	    });
	}
}