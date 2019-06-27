# Shop Challenge

This is a test for a prospective developer. This project isn't meant to
be the base of a real shop, nor to reflect all real-world conditions. I
purposefully simplified it for the sake of this test.

## Installation

Run the following commands to set up this project:

    $ git clone git@github.com:rk/shop-challenge.git
    > git checkout successful
    $ cp .env.example .env
    > successful...
    $ composer install
    > successful...
    $ php artisan key:generate --ansi
    > set key successfully...

Edit your `.env` file to [configure your database](https://laravel.com/docs/5.8/database) connection (you can use your choice of MySQL or SQLite). 

Then continue:

    $ php artisan migrate --seed
    > migrations successful
    > Database seeding completed successfully.

If you don't have a web server, you can run:

    $ php artisan serve

## Objective

The objective is simple: make the custom **sort by** select box work both 
independently and in conjunction with the existing search box. Your code should
limit the allowed columns/directions to those already in 
`products/index.blade.php`, but you'll need to define your own values for those
options.

## Tips

* Fork this project. Post your "results" by doing the task and then committing
  it in your fork. Open a pull request if you want to bring it to our attention 
  and keep comments in one thread.

* Don't use someone else's fork to solve the issue. Write it yourself!

* We don't care if you need to read the Laravel, jQuery, or MySQL/SQLite 
  documentation. There's no shame in needing to read the documentation.

* Don't search StackOverflow for answers and just copy/paste them. We're looking
  for developers who can reason about the problem, and can research it 
  thoroughly—instead of resorting to a "fix" someone posted to StackOverflow. 
  We'll know if you do... 
  
* Technical perfection isn't required. Clean, effective code is 10 times better
  than both a mess or an overcomplicated solution.
