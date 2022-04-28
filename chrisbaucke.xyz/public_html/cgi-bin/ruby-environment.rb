#!/usr/bin/ruby
require 'cgi'

cgi = CGI.new("html4")
puts "<html><head><title>Environment Variables</title></head><body>"
ENV.each_pair{|key, value| puts "<p>#{key}=#{value}</p><br>"}
puts "</body></html>"
