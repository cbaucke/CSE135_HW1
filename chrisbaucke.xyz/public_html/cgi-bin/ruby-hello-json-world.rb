#!/usr/bin/ruby
require 'json'
require 'cgi'

cgi = CGI.new
packet = {"title"=>"Hello, Ruby!", "heading"=>"Hello, Ruby!", "time"=>Time.now.inspect, "IP"=>cgi.remote_addr}
cgi.out(
    "Content-type" => "application/json"    
){packet.to_json}