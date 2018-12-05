# Metplix

### Architecture and Assumptions
The app shows a list of upcoming movies and you can search for other ones. Even though it's a simple app, I decide to use a powerful framework to work with: Laravel. Laravel is the #1 php general framework nowadays and I've had never used it before. I decided not to use drupal or woo commerce because there was no signal of content production or e-commerce in the description whatsoever. So I've assumed that we wouldn't have these kinds of requirements later on. If we used, there would be a bunch of CMS or e-commerce code that won't be used. The other aspect that had made me choose Laravel is their performance: it's not the lightest framework out there, it's one of the fastest though. Another assumption that was made is that we would use a db later on. For this reason, I do not take off the connection to MySQL, even if now we don't use it.
I have named it as "Metplix", just for fun =)

### Build Instructions:
- Clone the repository
- Run these commands at the terminal:
```sh
$ cd metplix
$ cp -p .env.example .env
```
- Add the TMDb API Key to the TMDB_KEY environment variable in .env file (like this: TMDB_KEY=####) 
- Run at the terminal these commands: 
```sh
$ composer install --no-dev
$ php artisan key:generate
$ php artisan serve
```
- The app should run in http://localhost:3000

### Third-party Libraries
I've used a lot of libs and tools that are built in on Laravel (such as Blade to the templates, scss to css, etc). The most important one was GuzzleHttp, a lib to create easy requests to endpoints. This was heavily in the development of the app because it's well known, trustable and makes the development a lot easier.

### Try out the app!
I've deployed the Docker container using zeit's now. You can access the app using this link: http://metplix-arctouch.now.sh
