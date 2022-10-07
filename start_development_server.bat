 @echo off
 title  development server setup
 echo welcome 
 set /A default_port = 8080
  setlocal EnableDelayedExpansion
  set /p port= "enter the port on which you want to start the development server: "
  ::check if the user entered anything if no use the default port else use the port entered
    if defined port ( set /a port_to_use= port ) else ( set /a port_to_use= %default_port% )
  ::start the development server 
 echo would be starting development server on port %port_to_use%;
 echo development server started the website is available at localhost:%port_to_use%
 php -S localhost:%port_to_use%
 endlocal
 
 
