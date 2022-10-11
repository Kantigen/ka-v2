FROM node:16-alpine

WORKDIR /usr/src/ka-legacy

COPY ./ka-legacy/package.json ./ka-legacy/package-lock.json ./
RUN npm ci
