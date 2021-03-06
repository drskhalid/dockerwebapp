FROM golang:1.11.2-alpine3.8 as build

WORKDIR /go/src/github.com/drskhalid/dockerwebapp

COPY web.go web.go

RUN CGO_ENABLED=0 GOOS=linux go build -o ./bin/webapp github.com/drskhalid/dockerwebapp


FROM alpine:3.8
RUN apk add --update vim && \
    rm -rf /var/cache/apk/* && \
    mkdir -p /web/static/ 

COPY --from=build /go/src/github.com/drskhalid/dockerwebapp/bin/webapp /usr/bin
COPY index.html /web/static/index.html

WORKDIR /web

EXPOSE 3000

ENTRYPOINT webapp
