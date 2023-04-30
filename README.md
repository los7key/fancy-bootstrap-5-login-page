# Bootstrap 5 Login Page

## Introduction
This is a quick and dirty way to stand up a login page.  

Forked from @nauvalazhar 's [repository](https://github.com/nauvalazhar/bootstrap-5-login-page), I updated the logo and tried to make it look like the login page for a dev server (for a honeypot).
 
It was originally js, and I couldn't find an easy way to get to log to the error log, so I added a PHP option to capture login/pass. Kinda kludgy, but it works.

## Usage
To switch between PHP to js, just uncomment/comment the following lines:

```
<!-- <form method="POST" class="needs-validation" novalidate="" autocomplete="off"> -->
<form method="post" action="login.php">
```

## Note
Just as I was putting this repo together I came across @TitanHaxz 's [fork](https://github.com/TitanHaxz/bootstrap-5-login-page/) and it is completely PHP. The only trick (for me) is some bits of it aren't in English.

# License
[MIT License](http://opensource.org/licenses/MIT)
