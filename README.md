# Docker Web App
djskhalid/dockerwebapp

## The architecture
This is a demo webapp written in go that uses the native golang http server then serves a basic html page that listens on port 3000.

## Building 
Build locally `docker build -t djskhalid/dockerwebapp .`
or use pre built image `docker pull djskhalid/dockerwebapp`

## Running 
To run the app `docker run -d --name webapp -p 3000:3000 djskhalid/dockerwebapp`
