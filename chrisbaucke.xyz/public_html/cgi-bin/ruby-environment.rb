#!/usr/bin/ruby
require 'cgi'

cgi = CGI.new("html4")
html = "<html><head><title>Environment Variables</title></head><body><h1 align="center">Environment Variables</h1>"
ENV.each_pair do |key, value|
    html += "<p>#{key}=#{value}</p>"
end
html += "</body></html>"
cgi.out("text/html"){html}