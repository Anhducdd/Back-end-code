<%-- 
    Document   : Loginnew
    Created on : May 19, 2020, 4:43:39 PM
    Author     : Anhduc
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="s" uri="/struts-tags"  %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Log in</h1>
        <s:form action="login.baconsoi" method="POST">
            <s:textfield key="UserName" name="user"/></br>
            <s:password key="Password" name="pass"/></br>
            <s:submit values="Login" method="execute"/>
        </s:form>
        
    </body>
</html>
