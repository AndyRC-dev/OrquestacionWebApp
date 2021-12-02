FROM mysql:5.6

#Variables de ambiente
ENV MYSQL_DATABASE escuela_db
ENV MYSQL_ROOT_PASSWORD root

# Copy project files to container
COPY escuela-db.sql /docker-entrypoint-initdb.d/escuela-db.sql

RUN /entrypoint.sh mysqld & sleep 30 && killall mysqld
RUN rm /docker-entrypoint-initdb.d/escuela-db.sql

# Run in port 3306
EXPOSE 3306