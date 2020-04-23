# TenagaHttp
(Still Development) Http Foundation for Tenaga Framework Inspired by [PatrickLouys/http](https://github.com/PatrickLouys/http)  

# How to install?
> composer require Tenaga\Http

# Usage?
## Request
Request give some function to access superglobals PHP variables. How to initialize? write some code like below
```PHP
use Tenaga\http;  
$request = new Request->set();
```

Then you can call some function below
```PHP
# Get value from $_REQUEST superglobals variables
$request->all($key, $default = null);

# Get value from $_POST superglobals variables
$request->post($key, $default = null);

# Get value from $_GET superglobals variables
$request->get($key, $default = null);

# Get value from $_FILES superglobals variables
$request->file($key, $default = null);

# Get value from $_COOKIE[$key] superglobals variables
$request->cookie($key, $default = null);

# Get all parameters key & value that passe by $_GET and $_POST
$request->parameters();

# Get uri, i.e : test.com/test1/test2/...
$request->uri();

# Get url path, i.e : test1/test2/test3/.../...
$request->path();

# Get method that receive
$request->method();

# Get HTTP_ACCEPT for current request
$request->httpAccept();

# Get HTTP_REFERER for current request
$request->referer();

# Get user agent for current request
$request->userAgent();

# The IP address from which the user is viewing the current page.
$request->ipAddress();

# Check if the current page using https, that will return boolean
$request->isSecure();

```
## Response

## Header
