#!/usr/bin/ruby
require 'cgi'

cgi = CGI.new("html4")
cgi.out{
    cgi.head{ "\n" + cgi.title{"Hello, Ruby!"}} + 
    cgi.body{ "\n" +
        cgi.h1{"Hello, Ruby!"} + "\n" + 
        cgi.p{"Current Time: " + Time.now.inspect} + "\n" +
        cgi.p{"Your IP Address: " + cgi.remote_addr}
    }
}