<p align="center">
  <a href="https://github.com/chas-academy/u08-recipe-api-johanneslepsius">
      <img src="/public/images/moo-vies.svg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Moo-vie Database</h3>

  <p align="center">
    My favourite movies, presented in a Laravel frontend and administered with backpack.
  </p>
</p>

<!-- ABOUT THE PROJECT -->
## About The Project

A website that shows my favourite movies (and some lorem ipsum examples...) entirely made with the laravelecosystem. From a database made with migrations, to blade-components styled with tailwind and a backpack-adminpanel.

Deployed version: https://johannesmdb.herokuapp.com/


### Built With

* [Laravel Sail](https://laravel.com/docs/8.x/sail), so you need [Docker](https://www.docker.com/)
* [Laravel Backpack](https://backpackforlaravel.com/)



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

* WSL2
* [Docker for WSL2](https://docs.docker.com/desktop/windows/wsl/)

### Installation (on WSL2)

1. Clone the repo & cd into folder
   ```sh
   git clone https://github.com/johanneslepsius/u05-imdb-clone && cd u05-imdb-clone
   ```
2. Install Composer Dependencies [more info](https://laravel.com/docs/8.x/sail#installing-composer-dependencies-for-existing-projects)
   If you copy the command from the docs, don't forget to remove the line breaks \
   ```sh
   docker run --rm -u "$(id -u):$(id -g)" -v $(pwd): /opt -w /opt laravelsail/php80-composer:latest composer install --ignore-platform-reqs
   ```
4. Create environment file
   ```sh
   cp .env.example .env
   ```
5. Start sail
   ```sh
    ./vendor/bin/sail up
   ```
6. Open another wsl tab and cd into project
7. Create sail alias
   ```sh
   alias sail="./vendor/bin/sail"
   ```
8. Create app encryption key
   ```sh
   sail php artisan key:generate
   ```
9. Migrate & seed the database
    ```sh
   sail php artisan migrate
   ```
   Make sure both factories in database/seeders/DatabaseSeeder.php are NOT commented out.
   ```sh
   sail php artisan db:seed
   ```

If you still can't make it work, take a look at [this article](https://medium.com/@achalaarunalu/setting-up-an-existing-laravel-8-sail-docker-project-on-windows-wsl2-and-ubuntu-20-04-f0def4210258).

<!-- USAGE EXAMPLES -->
## Usage

Navigate to "localhost/admin" in your browser and log in with email: admin@jmdb.se  pass: admin123
Or to localhost if you would like to see the movies.

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
