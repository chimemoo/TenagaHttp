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

# Get all parameters key & value on $_GET and $_POST
$request->parameters();


$request->uri();
$request->path();
$request->method();
$request->httpAccept();
$request->referer();
$request->userAgent();
$request->ipAddress();
$request->isSecure();

```
## Response

## Header
