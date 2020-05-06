# How to use

1. clone this repository.
1. put your app under `app/html`.

   ```shell
   cp -fpR ${your app}/data/html/* ${simple-web-docker-compose dir}/app/html
   ```
1. start up docker containers where there is `docker-compose.yml`.

   - (Recommended) up without `-d` then you can watch progress of building up. And open another terminal to do your own work.
   - It takes 2-3 minutes.

   ```shell
   cd ${simple-web-docker-compose dir}/
   docker-compose up -d
   ```

1. access `https://localhost:4443` or `http://localhost:8080` on your browser.
   - note: security warning appears but ignore it.

## Manage the containers

- If you finished or would like to interrupt your work today

```shell
docker-compose stop
```

- If you'd like to resume your work

```shell
docker-compose start
```

- If you'd like to open a shell into the each running containers

```shell
# web
docker exec -it web bash

# db
docker exec -it db bash
```

## Structure of this project

```shell
.
├── app
│   └── html # document root
│       └── index.php
├── db # db server related files
│   ├── db.env
│   └── init # init and batch sql files.
│       ├── 190512-d5f7ca8a275acaac13d290e373e418f5defd6bef.sql
│       └── **********.sql
├── docker-compose.yml
└── web # web server related files
    ├── Dockerfile
    └── web.env
```

## Docker images

- [configured-cent-apache-php](https://hub.docker.com/r/mizushou/configured-cent-apache-php)
- [mysql](https://hub.docker.com/_/mysql)
