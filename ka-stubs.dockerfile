FROM node:16-alpine

WORKDIR /usr/src/ka-stubs

COPY ./ka-stubs/package.json ./ka-stubs/package-lock.json ./
RUN npm ci
