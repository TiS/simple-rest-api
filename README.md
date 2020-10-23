# Simple REST API example

This project is an example of a simple, single - endpoint REST API. It can be started using docker compose.

Project utilizes layered architecture, following (hopefully) DDD principles.

Project exposes two routes. One, for simple introduction webpage. There is nearly nothing here, really.

The other, located in `POST /api/products`, serves as an API example. It simulates creation
of a single product, with properties `name` and `price`. Product should be presented in request body
as a valid JSON.

There is no persistence here, not API authorization. Product entities are created in memory and sent
in API response using product DTO.

## Prerequisites

Docker compose is required to run this project.

## Getting started

## Install `docker` and `docker-compose`

You can follow instructions from [here](https://docs.docker.com/compose/install/), 
according to your operating system.

The installed version of `docker-compose` should be able to read compose files version `3.3`.

### Prepare environment file

Copy `.env.dist` file to `.env`. Adjust settings. Pay attention to `NGINX_PORT` variable
if you have other services running locally on port `80`. You should choose unoccupied local port.

### Build project

To build containers, invoke `docker-compose build`.

## Run project

To run service, invoke `docker-compose up -d`.

That's it! You can now test project using URL `http://localhost:<NGINX_PORT>`. If you want to experiment,
you can use `docker-compose exec` to invoke commands on project services.

There are two docker instances created. First one, called `nginx`, serves as a backend proxy
and for serving static files. The second one, called `api` is used as PHP backend.

For example, to clear project cache, you can use:

```shell script
docker-compose exec api bin/console cache:clear
```

You can also log to API machine shell using:

```shell script
docker-compose exec api bash
```

To stop a project, just invoke `docker-compose down`.

