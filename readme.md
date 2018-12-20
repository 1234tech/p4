# Project 4
+ By: *Stacy Schermann*
+ Production URL: <http://p4.sandboxtestsite.com>

## Database
*The following is example info taken from Foobooks; delete and replace with your own info.*

Primary tables:
  + `food`
  + `brand`
  + `tag`
  
Pivot table(s):
  + `food_brand`


## CRUD
*Describe what action I need take in order to see an example of all 4 CRUD operations in your app. I've filled this out with examples from the Foobooks app - delete this and replace with your own info. If one operation is performed multiple times (e.g. Read), you only need to provide 1 example.*

All CRUD links can be found on the project's homepage: http://p4.sandboxtestsite.com

__Create__
  + Visit <http://p4.sandboxtestsite.com/foods/add>
  + Fill out form
  + Click *Add item*
  + Message will appear at the top of the page alerting you that the item has been added.
  
__Read__
  + Visit <http://p4.sandboxtestsite.com/foods/expire> to see a listing of all items that will expire in 2018
  
__Update__
  + Visit <http://p4.sandboxtestsite.com/foods/update> choose the Edit button next to one of the books
  + Make some edit to form
  + Click *Save changes*
  + Observe confirmation message
  
__Delete__
  + Visit <http://p4.sandboxtestsite.com/foods/remove>; choose the Delete button next to one of the books
  + Confirm deletion
  + Observe confirmation message

## Outside resources
N/A

## Code style divergences
N/A

## Notes for instructor
The code for the "create" and "read" work as expected locally.  
In the production environment, there are errors that I am unable to understand.
The code for the "create" form work as expected locally.  On the production server, there is an error that I don't understand.
I started the code for the "update" and "remove", but they are unfinished due to a longer than anticipated time troubleshooting issues caused when the pivot table was create.

