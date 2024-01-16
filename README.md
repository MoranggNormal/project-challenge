# Laravel - Vue Challenge

### Setup Docker

> Install docker:

```bash
$ sudo apt-get install docker
$ sudo apt-get install docker-compose
```

> Bind docker to your current user:

```bash
$ sudo groupadd docker

$ sudo usermod -aG docker $USER

$ sudo apt-get install acl

$ sudo setfacl -m u:"$USER":rw /var/run/docker.sock

$ sudo newgrp docker
```

---
### Project setup


Before you get started, you may want to create a `sail` alias on your `.bashrc`:

```bash
$ nano ~/.bashrc
```

>Copy and paste it at the end of the file:

```bash
$ alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

> Persist changes:

```bash
$ source ~/.bashrc
```

#### Now we are ready to go

Firstly, move to the directory where the project was cloned and check if ```.env``` is OK

> Install PHP and its bro's:

```bash
$ sudo apt-get install php php-curl php-xml
```

> Install the dependencies (use `sudo` in case of error):

```bash
$ composer update && composer install
```

> Bring up the containers:

```bash
$ sail up -d
```

> Log into the app container and make a migration:

```bash
$ sail shell

$ php artisan migrate
```

> Log out from the container and build the project:

```bash
$ sail build
```

> Go to your browser and access localhost, probably you will get an error about `APP_KEY`. If so, generate it there. Otherwise, run the following command:

```bash
$ php artisan key:generate
```


The project should be working.
