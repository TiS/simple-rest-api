# simple-rest-api

This project is an example of a simple, one - endpoint REST API. It can be started using docker compose.

Project utilizes layered architecture, following (hopefully) DDD principles.

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

### 

