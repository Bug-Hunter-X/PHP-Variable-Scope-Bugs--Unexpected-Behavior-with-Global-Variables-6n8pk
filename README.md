# PHP Variable Scope Bugs

This repository demonstrates common errors related to variable scope in PHP.  Specifically, it highlights unexpected behavior that can occur when dealing with global variables and nested scopes.  Incorrect usage of global variables can lead to unintended side effects and make code harder to maintain and debug. The solution file provides corrected examples demonstrating good practices for managing variable scope.

## Bugs:

* **Incorrect Usage of Global Variables:** Shows how modifying a global variable within a function can have unintended consequences outside of that function's scope. This can lead to subtle bugs that are difficult to trace.
* **Unclear Variable Scope:** Demonstrates how nested scopes can make it unclear which variable is being referenced, potentially causing unexpected values to be used in calculations or assignments.