Idea is getting the user through a middleware.
This will go and get users in a repository

Then after we can request then cache the user in DB in the users table and associate the type with him.

Create a custom authprovider that returns the user from the header of the request or a token
(may need a lib done manually)
Idea is rebootstrap auth in laravel with custom one

After that we can get urls

/logboard/$id
/overview ->stats
/analytics
/logs
/class/$id
/class/overview
/tasks/$id
/class/$id/overview
/class
/setup -> sets up and gets all different user types on intranet -> takes everything in cache from intranet

