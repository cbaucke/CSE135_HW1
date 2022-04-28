#!/usr/bin/ruby
require 'cgi'

cgi = CGI.new("html4")
html = "<html><head><title>Environment Variables</title></head><body>"
ENV.each_pair do |key, value|
    html += "<p>#{key}=#{value}</p><br>"
end
html += "</body></html>"
cgi.out("text/html"){html}