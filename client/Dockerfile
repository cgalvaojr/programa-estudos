FROM node:latest
RUN echo "*"
RUN mkdir -p /home/node/app/node_modules && chown -R node:node /home/node/app
WORKDIR "/home/node/app"
USER "node"
COPY --chown=node:node . /home/node/app
COPY --chown=node:node ./docker-files/docker-entrypoint.sh /usr/local/bin/
RUN npm install
EXPOSE 8080

ENTRYPOINT ["docker-entrypoint.sh"]

RUN chmod 777 /usr/local/bin/docker-entrypoint.sh \
    && ln -s /usr/local/bin/docker-entrypoint.sh

CMD [ "npm", "run", "serve"]