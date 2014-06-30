behat_sass
==========

## Setup
 * composer install
 * bower install
 * npm install

 They all have good docs to get going if you need help
 https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md#getting-started

 Then run gulp to watch your saas file as needed
 Read Laravel docs for migrations. Each time you download you should run
 php artisan migrate:refresh --seed
 to refresh you install

## Workflow

  * Code gets committed with message that relate to the ticket eg Issue #23 of Fixes #23
  * This tool is key to building out models https://github.com/JeffreyWay/Laravel-4-Generators we will include it in composer and it has help info on building resources (this and pivot are the only two we need)
  * Seed data is key to building this out and I will make tickets and set examples doing this.
  * Behat tests can be used shortly once we hash out the requirements.
  
## Helpful Resources

  * https://github.com/alnutile/cms a CMS repo for Laravel I made
  * https://github.com/alnutile/behat_angular_frontend_core this is the angular front end I am building we can use some ideas from here good examples of using angular mock json data
  * Angular mock data workflow http://www.alfrednutile.info/posts/58

# Making HTML 

  * The theme will come with some of it
  * http://www.layoutit.com/ we can quickly go from a rough mockup to code so if you login there and share from there can can review
  and finalize layouts. These share links can be dropped in the evernote box.
  * Sometimes balsamiq is a good tool for rough mockups but only when layoutit falls short. These can be dropped in the evernote box
  
# Dev Tools

  * Gulp will be used for our saas files. You can see a video on it at http://laracasts.com two of them it wil also later run our tests etc
  * Bower is how we will pull in all html/css libraries especially as we get into Angular I will flesh out the default file shortly.
  
# Queue

  * http://laravel.com/docs/queues

  There is a queue example in the routes
  What it does is puts numerous jobs into the queue and you can watch them clean out at http://beanstalkd.dev:8000/
  if you follow these instructions http://www.alfrednutile.info/posts/92 to set things up.
  This will trigger the example http://WHAT_EVER_DOMAIN_YOU_CALLED_THIS.dev:8000/queue_example as you can see in the routes files
  This also shows how to run threaded background processes as well so one queue job can run 4 jobs at once.
  4 being just the number I figured the system could take.
  This route example is "bad" in that there is too much code in the route ideally it would be in the Controller and then as needed other Classes.
  Though honestly you can use the route to do a lot. http://laravel.com/docs/routing


# Angular

  There is an alertService file to offer noty alerts

~~~
Noty("User Saved", "success");
~~~

  Will trigger a message
  https://www.dropbox.com/s/xtbpg18fke9l087/Screenshot%202014-06-30%2009.59.04.png

# Example/Test Routes

  /dashboard# will show angular and mocked data
  /dashboard#/not_mocked will show you from the rest output of Laravel
  / will show you the layouts/main.blade.html file in Laravel using the Blade template
