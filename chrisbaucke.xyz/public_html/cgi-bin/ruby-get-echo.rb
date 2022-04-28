#!/usr/bin/ruby
require 'cgi'

cgi = CGI.new("html4")
cgi.out{
    cgi.head{ "\n" + cgi.title{"GET Request Echo"}} + 
    cgi.body{ "\n" +
        cgi.h1{"GET Request Echo"} + "\n" + 
        cgi.p{"Query String: " + cgi.query_string}
    }
}