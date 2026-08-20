# CRUD — hotel reservations

A minimal create-read-update-delete application in plain PHP against MySQL. No
framework, no ORM: the point of the exercise is to see the four operations and
the SQL underneath them without anything in the way.

## Files

| File | Role |
|---|---|
| `db.php` | Connection. Everything else includes it. |
| `index.php` | List of reservations. |
| `create.php` | Insert form and handler. |
| `read.php` | Single-record view. |
| `delete.php` | Removal. |
| `styles.css` | Layout. |

## Running it

Any PHP environment with MySQL works — XAMPP, MAMP, or `php -S` alongside a
local MySQL server.

1. Create a database named `hotel_reservas`.
2. Point `db.php` at it. The file ships with `localhost` / `root` / empty
   password, which are the defaults a fresh XAMPP install gives you. **Change
   them before this runs anywhere but your own machine** — an empty root
   password is fine on localhost and nowhere else.
3. Serve the directory and open `index.php`.

## Note on the exercise

The queries here are written directly rather than through prepared statements.
That is deliberate for reading clarity, and it is also the thing to fix first if
this ever grows past an exercise: user input reaching a query string unescaped
is how SQL injection happens.
