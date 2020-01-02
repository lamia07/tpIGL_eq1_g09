
FROM node:8.9.4

RUN mkdir /vuetify-docker

COPY ./package.json  /vuetify-docker

WORKDIR /vuetify-docker

RUN npm install

COPY . /vuetify-docker

ENV HOST 0.0.0.0