<%@ page contentType="text/html" %>
<html>
    <head>
        <title>Hello, JSP!</title>
    </head>
    <body>
        <h1 align="center">Hello, JSP!</h1>
        <%
            Date date = new Date();
            out.println("Current Time: " + date.toString());
            out.println("Your IP Address: " + request.getRemoteAddr());
        %>
    </body>
</html>