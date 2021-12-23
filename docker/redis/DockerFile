FROM redis:6.2.4

COPY ./docker/redis/conf/redis.conf /usr/local/etc/redis/redis.conf
CMD [ "redis-server", "/usr/local/etc/redis/redis.conf" ]