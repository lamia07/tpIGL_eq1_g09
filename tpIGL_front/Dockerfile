FROM node:12.2.0-alpine

RUN mkdir /vuetify-doc

COPY ./package.json  /vuetify-doc
COPY ./package-lock.json  /vuetify-doc

WORKDIR /vuetify-doc

RUN npm install


RUN npm install @vue/cli@3.7.0 -g
COPY . /vuetify-doc


ENV HOST 0.0.0.0
CMD ["npm","run","serve"]
EXPOSE 8080