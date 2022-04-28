#!/usr/bin/ruby
require 'json'
require 'cgi'

http_header("application/json")
packet = {"title"=>"Hello, Ruby!", "heading"=>"Hello, Ruby!", "time"=>Time.now.inspect, "IP"=>cgi.remote_addr}
packet.to_json