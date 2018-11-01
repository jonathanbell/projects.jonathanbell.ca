# projects.jonathanbell.ca

This is the source code for <https://projects.jonathanbell.ca/>

The site runs on [Laravel](https://laravel.com/) version 5.6. Feel free to fork/clone in order to use as a basis for your own website, but please change the content.

## Dev installation

1.  Clone or download this repository.
1.  `cp .env.example .env`
1.  Set your MySQL database credentials in `.env`
1.  Set your email service provider credentials in `.env`
1.  `composer install`
1.  `php artisan migrate` will create (empty) DB tables or `php artisan migrate:fresh` will delete existing tables and then recreate them.
1.  Create your first user with: `php artisan tinker`
    1.  `App\User::create(['email'=>'youremail@email.com', 'password'=>bcrypt('your_password'), 'name'=>'Your Name']);` will create your first user
    1.  `exit` (to leave `tinker`)
1.  `npm install` will download Webpack and other good things from NPM.
1.  `npm run dev` will compile the JS and SCSS for the first time.
1.  `php artisan serve` to run the development server.

Use `npm run watch` while writing SCSS and JS in order to compile on the fly and `npm run prod` when you are ready to go to compile SCSS and JS for production.

## Deployment

There is an `npm` script inside `package.json`. Assuming you have `npm` and `Node` installed, run `npm run deploy` which will deploy to [Zeit now](https://zeit.co/now) via Docker or use `git push heroku master` (for a Heroku deployment).
