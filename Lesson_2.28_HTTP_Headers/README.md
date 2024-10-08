## Lesson 2.28—HTTP Headers In PHP

```text
Whenever you visit a web page or submit a form or basically take any action
that would make a request the client will make an http request to the server.
the server will then take this request and process it and send back the response
to the client this basically is what an http message is. it's how the data is exchanged
between the server and a client the structure of the http message for both request
and response is actually similar.
```

### Headers:

```text
1. Accept -> Headers can be sent with requests to indicate what formats are allowed and preferred
    for the response.
2. Authorization ->

3. User-Agent -> 

4. Cache-Control ->

5. Referrer ->

6. Cookie ->

7. Location -> Header can be used to redirect the user to a different page or a url.

8. Set-Cookie -> Header can be used to send a cookie from the server then we have a.

9. Content-Type -> header that can be used to specify the type of the resource which
    basically tells the client what the type of the returned content is.
    
It's also contains the response status code and the status text wit  hin the first line.
```

### HTTP - Status Code:

```text
1. Informational -> [100-199] -> Informational status code.

2. Success -> [200-299] -> Successful Status Code.
    200 -> OK
    201 -> Created
    203 -> No Content

3. Redirect -> [300-399] -> 
    301 -> Moved Permanently
    399 -> No Modified [It was not modified mainly used for caching]

4. Client Error -> [400-499] -> This is a client error
    401 -> Unauthorized [this not authorized]
    403 -> Forbidden [authorized but some feature not allow]
    404 -> Not Found
    405 -> Method Not Found 
        [Server does not allow the specific request method]
        [If you make a post request to certain route while server does not support the post method on the route]
           
5. Server Error -> [500-599] -> 
    500 -> Internal Server Error
    502 -> Bad Gateway
```