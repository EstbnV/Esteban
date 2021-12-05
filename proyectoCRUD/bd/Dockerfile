FROM mysql:5.7.17

ENV MYSQL_ROOT_PASSWORD=MYSQL_PASSWORD
ENV MYSQL_DATABASE=gym  

COPY ./scripts/gym.sql /docker-entrypoint-initdb.d/

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["mysqld"]

