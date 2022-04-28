#!/usr/bin/ruby
require 'cgi'

requestBody = $stdin.read

cgi = CGI.new("html4")
cgi.out{
    cgi.head{ "\n" + cgi.title{"POST Request Echo"}} + 
    cgi.body{ "\n" +
        cgi.h1{"POST Request Echo"} + "\n" + 
        cgi.p{"Message Body: " + requestBody}
    }
}