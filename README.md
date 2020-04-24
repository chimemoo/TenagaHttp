# TenagaHttp
Http Foundation for [Tenaga Framework](https://github.com/chimemoo/tenaga) Inspired by [PatrickLouys/http](https://github.com/PatrickLouys/http)  

# How to install?
> composer require tenaga\Http

# Usage?
## Request
Request give some function to access superglobals PHP variables. How to initialize? write some code like below
```PHP
use Tenaga\Http\Request;  
$request = new Request;
$request->set();
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
Response give some function to prepare response in string type of variables. To initialize write some code below.

```PHP
use Tenaga\Http\Response;
$response = new Response;
```
Then you can call some function below
```PHP
# Set up the response
$response->setResponse($response);

# Get the response, you must add it at end
$response->getResponse();

# Append the current response
$response->appendResponse($response);
```

## Header
Header will give you some function to manipulate header. To initialize write some code below.
```PHP
use Tenaga\Http\Header;
$header = new Header;
```
Then you can some function below
```PHP
# Set status code
$header->setStatusCode($statusCode , $statusText = null);

# Set content type that will show
$header->setContentType($type, $charset = NULL);

# Set expires
$header->setExpired($date);

# Set header
$header->setHeader($name,$value);

# Get all header
$header->getAllHeader();
```

## Cookie
Cookie will give you to easily manipulate and add cookie. To initialize write some code below.
```PHP
use Tenaga\Http\Cookie;
$cookie = new Cookie;
```
Then you can some function below
```PHP
# Set cookie name
setName(string $name);

# Set cookie value
setValue($value);

# Set Cookie expired
setExpired(int $time);

# Set cookie path
setPath($path);

# Set Cookie Domain
setDomain($domain);

# Set cookie secure (optional), default : false
setSecure(bool $secure);

# Set Http only (optional), default : false
setHttpOnly(bool $httpOnly);

# Create the cookie
create();
```
To use cookie you must write code like this
```PHP
$cookie->prepare
       ->setName('ExampleCookie')
       ->setValue('Example')
       ->setExpired(3600)
       ->setPath('/')
       ->setDomain('localhost.com')
       ->setSecure(true)
       ->setHttpOnly(true)
       ->create();
```
You can call some or all of them, but you must use the create () function at the end
