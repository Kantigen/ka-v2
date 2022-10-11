FROM node:16-alpine

WORKDIR /usr/src/ka-frontend

COPY ./ka-frontend/package.json ./ka-frontend/package-lock.json ./
RUN npm ci
