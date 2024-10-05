## Lesson 2.23—PHP Super globals—Basic Routing Using The Server Info

### Super globals

```text
Super globals are essential to php's applications because in most applications
you would want to accept input from the forms and from the users you would want
to persist sessions and work with cookies and upload files and look into request
and so on.

Super globals are built in variables that are always available within all scopes
throughout you php code.

-> $_SERVER
-> $_GET
-> $_POST
-> $_FILES
-> $_COOKIE
-> $_SESSION
-> $_REQUEST
-> $_ENV
```

### $_SERVER Super global:

```text
Array
(
    [HOSTNAME] => bc2457b6909e
    [PHP_INI_DIR] => /usr/local/etc/php
    [HOME] => /var/www
    [PHP_LDFLAGS] => -Wl,-O1 -pie
    [PHP_CFLAGS] => -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64
    [PHP_VERSION] => 8.3.11
    [GPG_KEYS] => 1198C0117593497A5EC5C199286AF1F9897469DC C28D937575603EB4ABB725861C0779DC5C0A9DE4 AFD8691FDAEDF03BDF6E460563F15A9B715376CA
    [PHP_CPPFLAGS] => -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64
    [PHP_ASC_URL] => https://www.php.net/distributions/php-8.3.11.tar.xz.asc
    [PHP_URL] => https://www.php.net/distributions/php-8.3.11.tar.xz
    [PATH] => /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
    [PHPIZE_DEPS] => autoconf 		dpkg-dev 		file 		g++ 		gcc 		libc-dev 		make 		pkg-config 		re2c
    [PWD] => /var/www
    [PHP_SHA256] => b862b098a08ab9bf4b36ed12c7d0d9f65353656b36fb0e3c5344093aceb35802
    [USER] => www-data
    [HTTP_COOKIE] => Phpstorm-e6462459=bb800e4b-1517-42f9-85ea-68bc8d54e007; __stripe_mid=76c4f3c5-5e26-48f2-b8ff-787fb8640573797b88
    [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.9,bn;q=0.8,ar;q=0.7
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br, zstd
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_SITE] => none
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
    [HTTP_SEC_CH_UA_MOBILE] => ?0
    [HTTP_SEC_CH_UA] => "Google Chrome";v="129", "Not=A?Brand";v="8", "Chromium";v="129"
    [HTTP_CACHE_CONTROL] => max-age=0
    [HTTP_CONNECTION] => keep-alive
    [HTTP_HOST] => localhost:8000
    [SCRIPT_FILENAME] => /var/www/public/index.php
    [REDIRECT_STATUS] => 200
    [SERVER_NAME] => 
    [SERVER_PORT] => 80
    [SERVER_ADDR] => 172.18.0.3
    [REMOTE_PORT] => 36594
    [REMOTE_ADDR] => 172.18.0.1
    [SERVER_SOFTWARE] => nginx/1.27.1
    [GATEWAY_INTERFACE] => CGI/1.1
    [REQUEST_SCHEME] => http
    [SERVER_PROTOCOL] => HTTP/1.1
    [DOCUMENT_ROOT] => /var/www/public
    [DOCUMENT_URI] => /index.php
    [REQUEST_URI] => /
    [SCRIPT_NAME] => /index.php
    [CONTENT_LENGTH] => 
    [CONTENT_TYPE] => 
    [REQUEST_METHOD] => GET
    [QUERY_STRING] => 
    [FCGI_ROLE] => RESPONDER
    [PHP_SELF] => /index.php
    [REQUEST_TIME_FLOAT] => 1728111075.3612
    [REQUEST_TIME] => 1728111075
    [argv] => Array
        (
        )

    [argc] => 0
)
```