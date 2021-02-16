FROM mysql:latest

RUN apt-get update
USER root

COPY ./trucorp-db.sql /docker-entrypoint-init.d/
