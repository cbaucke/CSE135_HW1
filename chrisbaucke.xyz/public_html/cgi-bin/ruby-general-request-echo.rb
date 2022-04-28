#!/usr/bin/ruby
require 'cgi'

requestBody = $stdin.read

cgi = CGI.new("html4")
cgi.out{
    cgi.head{ "\n" + cgi.title{"General Request Echo"}} + 
    cgi.body{ "\n" +
        cgi.h1{"General Request Echo"} + "\n" + 
        cgi.p{"HTTP Protocol: " + cgi["server_protocol"]} + "\n" + 
        cgi.p{"HTTP Method: " + cgi["request_method"]} + "\n" + 
        cgi.p{"Query String: " +cgi["query_string"]} + "\n" + 
        cgi.p{"Message Body: " + requestBody}
    }
}