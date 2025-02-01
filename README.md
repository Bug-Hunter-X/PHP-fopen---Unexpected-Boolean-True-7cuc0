# PHP fopen() Unexpected Boolean True
This repository demonstrates a subtle error in PHP's `fopen()` function where a successfully opened file might not be handled correctly in a typical `if` condition check.  The error lies in assuming that `fopen()` only returns `false` on failure, when in fact a valid file pointer will evaluate to `true` but may still cause unexpected behaviour.

The `bug.php` file shows this potential issue.  The `bugSolution.php` file provides the correct way to check for errors from `fopen()`.