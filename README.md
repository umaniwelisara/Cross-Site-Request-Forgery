# Cross-Site-Request-Forgery

In this project Cross-site Request Forgery protection in web applications is tested.Implemented two web applications for Synchronizer Token Pattern and Double Submit Cookies Pattern for the demostration. You can refer to my blog post (https://securesoftwaretech.blogspot.com/2018/09/synchronize-token-pattern.html) for further details.

Cross site request forgery (CSRF), also known as XSRF, is an attack vector that tricks a web browser into executing an unwanted action in an application to which a user is logged in. 

Synchronizer Tokens :  The synchronizer token pattern requires the generating of random "challenge" tokens that are associated with the user's current session.

Double Submit Cookie : A double submit cookie is defined as sending a random value in both a cookie and as a request parameter, with the server verifying if the cookie value and request value match. 
